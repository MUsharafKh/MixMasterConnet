<?php
use Carbon\Carbon;
use App\Models\User;
use App\Models\UserRolePermissions;
use App\Models\Module;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


//get one module permission
function oneModulePermission($module_code,$user_id){
    try{
        $permission =null;
        $user = User::find($user_id);
        if(isset( $user)){
        $permission = UserRolePermissions::join('modules','user_role_permissions.module_id','=','modules.id')
                     ->select('user_role_permissions.*')
                     ->where('user_role_permissions.module_code',$module_code)
                     ->where('user_role_permissions.role_id',$user->user_role_id)
                     ->where('modules.is_active',1)
                     ->whereNull('user_role_permissions.deleted_at')
                     ->first();
        return $permission;
        }
        else{
        return $permission;
        }
    }
    catch(\Throwable $th){
        Log::error($th);
    }
}
function oneModulePermissionByRoleId($module_code,$role_id){
    try{
        $permission = UserRolePermissions::join('modules','user_role_permissions.module_id','=','modules.id')
                     ->select('user_role_permissions.*')
                     ->where('user_role_permissions.module_code',$module_code)
                     ->where('user_role_permissions.role_id',$role_id)
                     ->where('modules.is_active',1)
                     ->whereNull('user_role_permissions.deleted_at')
                     ->first();
        return $permission;
    }
    catch(\Throwable $th){
        Log::error($th);
    }
}

//get all permission list
function allPermissionList($user_id)
{
    try
    {
        $user = User::find($user_id);
        if(isset( $user))
        {
        $permission = UserRolePermissions::join('modules','user_role_permissions.module_code','=','modules.module_code')
                    ->select('user_role_permissions.*')
                    ->where('user_role_permissions.role_id',$user->user_role_id)
                    ->where('user_role_permissions.is_enable',1)
                    ->where('modules.is_active',1)
                    ->whereNull('user_role_permissions.deleted_at')
                    ->get();
        return $permission;
        }
    }
    catch(\Throwable $th)
    {
        Log::error($th);
    }
}
//get one module details
function getModuleDetails($module_code)
{
    try
    {
        $module = Module::where('module_code',$module_code)
                    ->whereNull('deleted_at')
                    ->first();
        return $module;
    }
    catch(\Throwable $th)
    {
        Log::error($th);
    }

}
//get mdgroup module permission
function getMdGroupModuleDetails($module_code,$md_group)
{
    try
    {
        $module = Module::where('module_code',$module_code)
                    ->where('module_group',$md_group)
                    ->whereNull('deleted_at')
                    ->first();
        return $module;
    }
    catch(\Throwable $th)
    {
        Log::error($th);
    }

}
//get all module List
function allModuleList(){
    try {
        $module = Module::whereNull('deleted_at')
                    ->get();
        return $module;
    }
    catch(\Throwable $th)
    {
        Log::error($th);
    }
}

// master file permission count
function mdGroupPermission($user_id,$md_group)
{
    try
    {
        $user = User::find($user_id);
        if(isset( $user)){
        $permission = UserRolePermissions::join('modules','user_role_permissions.module_code','=','modules.module_code')
                    ->select('modules.*')
                    ->where('user_role_permissions.role_id',$user->user_role_id)
                    ->where('user_role_permissions.is_enable',1)
                    ->where('modules.module_group',$md_group)
                    ->where('modules.is_active',1)
                    ->whereNull('user_role_permissions.deleted_at')
                    ->orderBy('modules.display_order','ASC')
                    ->get();
        return $permission;
        }
    }
    catch(\Throwable $th)
    {
        Log::error($th);
    }
}
//one module sub menu list
function mdSubMenulist($user_id,$md_group,$start,$end){
    try{
        $user = User::find($user_id);
        if(isset( $user)){
        $permission = UserRolePermissions::join('modules','user_role_permissions.module_id','=','modules.id')
                    ->select('modules.*')
                    ->where('user_role_permissions.role_id',$user->user_role_id)
                    ->where('modules.module_group',$md_group)
                    ->where('user_role_permissions.is_enable',1)
                    ->where('modules.is_active',1)
                    ->whereBetween('modules.display_order',[$start,$end])
                    ->whereNull('user_role_permissions.deleted_at')
                    ->orderBy('modules.display_order','ASC')
                    ->get();
        return $permission;
        }
    }
    catch(\Throwable $th)
    {
        Log::error($th);
    }
}
function getMenuOrder($user_id){
    try{
        $user = User::find($user_id);
        if(isset( $user)){
        $permission = UserRolePermissions::join('modules','user_role_permissions.module_id','=','modules.id')
                    ->selectRaw('COUNT(user_role_permissions.id) as count,modules.module_group as md_group')
                    ->where('user_role_permissions.role_id',$user->user_role_id)
                    ->where('user_role_permissions.is_enable',1)
                    ->where('modules.is_active',1)
                    ->whereNull('user_role_permissions.deleted_at')
                    ->groupBy('modules.module_group')
                    ->orderBy('modules.module_group','ASC')
                    ->get();
        return $permission;
        }else{
            return [];
        }
    }
    catch(\Throwable $th){
        Log::error($th);
    }
}
function oneModuleData($md_code){
    try {
        $module = Module::where('module_code',$md_code)->first();
        if(isset($module)){
            return $module->id;
        }else{
            return $module;
        }
    }
    catch(\Throwable $th){
        Log::error($th);
    }
}









