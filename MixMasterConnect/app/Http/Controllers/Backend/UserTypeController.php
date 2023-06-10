<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use App\Http\Requests\StoreUserTypeRequest;
use App\Http\Requests\UpdateUserTypeRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRolePermissions;
use Illuminate\Support\Facades\DB;
use Log;
use Illuminate\Validation\Rule;
use Validator;
use Carbon\Carbon;

class UserTypeController extends Controller
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
        $this->_controllerSettings(true,true,'btn_new_user_type','New User Type',false,['Master Files','User Type'],'User Roles','kt_modal_user_type');
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
            $data = $request->only('module_name', 'module_code','icon','module_group','url_slug','is_active');
            $validator = Validator::make($data, [
                'module_name' => 'required|string|unique:modules',
                'module_code' => 'required|string|unique:modules',
                'icon'=> 'required',
                'module_group'=> 'required',
                'url_slug'=> 'required',
                'is_active'=> 'required'
            ]);
                //Send failed response if request is not valid
            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->messages(),
                    'message' => 'Validation errors',
                    'success' => false
                        ], 200);
            }
            $module =new Module();
            $module->module_name = $request->module_name;
            $module->icon = $request->icon;
            $module->module_code = $request->module_code;
            $module->module_group = $request->module_group;
            $module->url_slug = $request->url_slug ;
            $module->is_active = $request->is_active ;
            $module->is_enable = $request->is_enable ;
            $module->can_create = $request->can_create ;
            $module->can_update = $request->can_update;
            $module->can_view = $request->can_view;
            $module->can_delete = $request->can_delete;
            $module->can_approve = $request->can_approve;
            $module->display_order = $request->display_order;       
            $module->save();
            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Module created Successfully',
                'data' => $module
            ], 200);

        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);
            return response()->json([
                'success' => false,
                'message' => 'Sorry,Something went wrong!',
                'error'=>$th
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(){
        $modules = Module::where('is_active',1)->whereNull('deleted_at')->orderBy('display_order','ASC')->get();
        return response()->json($modules);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $modules = Module::find($id);
        if (!$modules) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, Module not found.'
            ], 400);
        }
        return response()->json($modules);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        try {
            DB::beginTransaction();
            $data = $request->only('module_name', 'module_code','icon','module_group','url_slug','is_active');
            $validator = Validator::make($data, [
                'module_name' => ['required','string',Rule::unique('modules')->ignore($id)],
                'module_code' => ['required','string',Rule::unique('modules')->ignore($id)],
                'icon'=> 'required',
                'module_group'=> 'required',
                'url_slug'=> 'required',
                'is_active'=> 'required'
            ]);
                //Send failed response if request is not valid
            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->messages(),
                    'message' => 'Validation errors',
                    'success' => false
                        ], 200);
            }
            $module = Module::find($id);
            $module->module_name = $request->module_name;
            $module->icon = $request->icon;
            $module->module_code = $request->module_code;
            $module->module_group = $request->module_group;
            $module->url_slug = $request->url_slug ;
            $module->is_active = $request->is_active ;
            $module->is_enable = $request->is_enable ;
            $module->can_create = $request->can_create ;
            $module->can_update = $request->can_update;
            $module->can_view = $request->can_view;
            $module->can_delete = $request->can_delete;
            $module->can_approve = $request->can_approve;
            $module->display_order = $request->display_order;        
            $module->save();
            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Module updated Successfully',
                'data' => $module
            ], 200);

        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);
            return response()->json([
                'success' => false,
                'message' => 'Sorry,Something went wrong!',
                'error'=>$th
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserType $userType)
    {
        //
    }
}
