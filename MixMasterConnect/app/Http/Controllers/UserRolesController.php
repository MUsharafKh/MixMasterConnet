<?php

namespace App\Http\Controllers;

use App\Models\UserRoles;
use App\Http\Requests\StoreUserRolesRequest;
use App\Http\Requests\UpdateUserRolesRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRolePermissions;
use Illuminate\Support\Facades\DB;
use Log;
use Illuminate\Validation\Rule;
use Validator;
use Carbon\Carbon;

class UserRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function _controllerSettings($show_toolbar,$show_new_button,$button_id,$new_btn_text,$show_breadcrumb,$bread_crumb,$window_title,$modal_target_id){
        $settings=[];
        $settings['show_toolbar']=($show_toolbar)?$show_toolbar:false;
        $settings['show_new_button']=($show_new_button)?$show_new_button:false;
        $settings['new_btn_id']=$button_id;
        $settings['new_btn_text']=$new_btn_text;
        $settings['show_breadcrumb']=($show_breadcrumb)?$show_breadcrumb:false;
        $settings['bread_crumb']=$bread_crumb;
        $settings['window_title']=$window_title;
        $settings['new_btn_traget_model_id']=$modal_target_id;     
        view()->share('settings',$settings);
    }
    public function index(){
        $this->_controllerSettings(true,true,'btn_new_user_role','New User Role',false,['Master Files','User Role'],'User Roles','kt_modal_user_role');
        return view('modules.master-files.user-roles.index');
    }
    public function showAll(Request $request){
        $columns = [
            0 =>'id',
            1 =>'code',
            2 =>'role_name',
            3 =>'is_active',
        ];
        $permission = null;
        $module = null;
        $user =null;
        $module = $request->input('_module');
        $user = $request->input('_user_id');
        $permission = oneModulePermission($module,$user); 
        $totalData = UserRoles::whereNull('deleted_at')->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if( empty($request->input('search.value')) ) {
            $items = UserRoles::whereNull('deleted_at')
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();
        } else {
            $search = $request->input('search.value');
            $items = UserRoles::whereNull('deleted_at')
                    ->where('id','like',"%{$search}%")
                    ->orWhere('code', 'like',"%{$search}%")
                    ->orWhere('role_name', 'like',"%{$search}%")
                    ->orWhere('is_active', 'like',"%{$search}%")
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();

            $totalFiltered = UserRoles::whereNull('deleted_at')
                    ->where('id','like',"%{$search}%")
                    ->orWhere('code', 'like',"%{$search}%")
                    ->orWhere('role_name', 'like',"%{$search}%")
                    ->orWhere('is_active', 'like',"%{$search}%")
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->count();
        }

        $data = array();
        if( !empty($items) ) {
            $countData = 0;
            foreach ($items as $item){
                if($item->deleted_at == null && $item->deleted_at == ''){
                    $countData = $countData +1;
                    $values['id'] = $item->id;
                    $values['code'] = $item->code;
                    $values['role_name'] = $item->role_name;
                    $values['is_active'] = ($item->is_active == 1)? '<div class="badge badge-light-success">Active</div>' : '<div class="badge badge-light-danger">Inactive</div>';
                    $values['action'] = '';
                    if(isset($permission)){
                        if($permission->can_view == 1){
                        $values['action'] = '<button title="View" class="view btn btn-icon btn-warning btn-sm mr-2" data-id='.$item->id.' style="margin-right:3px"><i class="bi bi-eye-fill"></i></button>';
                        }
                        if($permission->can_update == 1){
                        $values['action'] = $values['action'].'<button class="edit btn btn-icon btn-success btn-sm mr-2" data-id='.$item->id.' style="margin-right:3px"><i class="bi bi-pencil-fill"></i></button>';
                        }
                    }
                    $data[] = $values;
                }
            }
            $totalFiltered = $countData;
        }
        $json_data = array(
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data
            );

        echo json_encode($json_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        try {
            DB::beginTransaction();
             	//Validate data
                 $data = $request->only('role_name','code', 'is_active');
                 $validator = Validator::make($data, [
                     'role_name' => 'required|string|unique:user_roles',
                     'is_active' => 'required',
                     'code' => 'required|unique:user_roles',
                 ],[
                    'role_name.required'=>'Role Name is required',
                    'is_active.required' => 'Status is required.',
                    'code.required' => 'Role Code is required.',
                ]);
                     //Send failed response if request is not valid
                 if ($validator->fails()) {
                    return response()->json([
                        'errors' => $validator->messages(),
                        'message' => 'Validation errors',
                        'success' => false
                            ], 200);
                 }
            $user_role = new UserRoles();
            $user_role->role_name = $request->role_name;
            $user_role->code = $request->code;
            $user_role->is_active = ($request->is_active==1)?1:0;
            $user_role->remarks = $request->remarks;
            $user_role->save();
            $data =array();
            DB::table('user_role_permissions')->where('role_id',$user_role->id)->delete();
            foreach ($request->element as $key=>$value){
                $module_code=0;
                $md_group=0;
                $is_enable=0;
                $can_create=0;
                $can_update=0;
                $can_delete=0;
                $can_approve=0;
                $can_view=0;
                    if(!empty($value['module_code'])){
                        $module_code=$value['module_code'];
                    }
                    if(!empty($value['modul_group'])){
                        $md_group=$value['modul_group'];
                    }
                    if(!empty($value['is_enable'])){
                        $is_enable=$value['is_enable'];
                    }
                    if(!empty($value['can_create'])){
                        $can_create=$value['can_create'];
                    }
                    if(!empty($value['can_update'])){
                        $can_update=$value['can_update'];
                    }
                    if(!empty($value['can_delete'])){
                        $can_delete=$value['can_delete'];
                    }
                    if(!empty($value['can_approve'])){
                        $can_approve=$value['can_approve'];
                    }
                    if(!empty($value['can_view'])){
                        $can_view=$value['can_view'];
                    }
                    $data[]  = [
                    'role_id' =>$user_role->id,
                    'module_id' =>oneModuleData($module_code),
                    'module_code' =>$module_code,
                    'md_group' =>$md_group,
                    'is_enable' =>$is_enable,
                    'can_create' => $can_create,
                    'can_update' =>$can_update,
                    'can_view' => $can_view,
                    'can_delete' => $can_delete,
                    'can_approve' =>$can_approve,
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ];
            }
            $user_role_permission = UserRolePermissions::insert($data);
            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'User role created Successfully!',
                'data' => $user_role
            ], 200);

        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);
            return response()->json([
                'success' => false,
                'message' => 'Sorry,Something went wrong!'
            ], 500);
        }
    }
    public function getModulePerission($module_code,$role_id){
        $permission = oneModulePermissionByRoleId($module_code,$role_id);
        return response()->json($permission);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(){
        $roles = UserRoles::select('id','role_name as name','code','is_active','remarks','created_at','updated_at','deleted_at')
                ->where('is_active',1)
                ->whereNull('deleted_at')
                ->get();
        return response()->json($roles);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $roles = UserRoles::find($id);
        if (!$roles) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, Role not found.'
            ], 400);
        }
        return response()->json($roles);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id){
        try {

            DB::beginTransaction();
             	//Validate data
                 $data = $request->only('role_name','code', 'is_active');
                 $validator = Validator::make($data, [
                     'role_name' => ['required','string',Rule::unique('user_roles')->ignore($id)],
                     'is_active' => 'required',
                     'code' => ['required',Rule::unique('user_roles')->ignore($id)],
                 ],[
                    'role_name.required'=>'Role Name is required',
                    'is_active.required' => 'Status is required.',
                    'code.required' => 'Role Code is required.',
                ]);
                     //Send failed response if request is not valid
                 if ($validator->fails()) {
                    return response()->json([
                        'errors' => $validator->messages(),
                        'message' => 'Validation errors',
                        'success' => false
                            ], 200);
                 }
            $user_role = UserRoles::find($id);
            $user_role->role_name = $request->role_name;
            $user_role->code = $request->code;
            $user_role->is_active = ($request->is_active==1)?1:0;
            $user_role->remarks = $request->remarks;
            $user_role->save();

            $data =array();
            DB::table('user_role_permissions')->where('role_id',$user_role->id)->delete();
            foreach ($request->element as $key=>$value){
                $module_code=0;
                $md_group=0;
                $is_enable=0;
                $can_create=0;
                $can_update=0;
                $can_delete=0;
                $can_approve=0;
                $can_view=0;
                    if(!empty($value['module_code'])){
                        $module_code=$value['module_code'];
                    }
                    if(!empty($value['modul_group'])){
                        $md_group=$value['modul_group'];
                    }
                    if(!empty($value['is_enable'])){
                        $is_enable=$value['is_enable'];
                    }
                    if(!empty($value['can_create'])){
                        $can_create=$value['can_create'];
                    }
                    if(!empty($value['can_update'])){
                        $can_update=$value['can_update'];
                    }
                    if(!empty($value['can_delete'])){
                        $can_delete=$value['can_delete'];
                    }
                    if(!empty($value['can_approve'])){
                        $can_approve=$value['can_approve'];
                    }
                    if(!empty($value['can_view'])){
                        $can_view=$value['can_view'];
                    }
                    $data[]  = [
                        'role_id' =>$user_role->id,
                        'module_id' =>oneModuleData($module_code),
                        'module_code' =>$module_code,
                        'md_group' =>$md_group,
                        'is_enable' =>$is_enable,
                        'can_create' => $can_create,
                        'can_update' =>$can_update,
                        'can_view' => $can_view,
                        'can_delete' => $can_delete,
                        'can_approve' =>$can_approve,
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ];
            }
            $user_role_permission = UserRolePermissions::insert($data);
            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'User role updated Successfully!',
                'data' => $user_role
            ], 200);

        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);
            return response()->json([
                'success' => false,
                'message' => 'Sorry,Something went wrong!'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserRoles $userRoles)
    {
        //
    }
}
