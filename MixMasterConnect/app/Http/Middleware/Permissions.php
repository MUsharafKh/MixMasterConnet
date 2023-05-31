<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRolePermissions;
use App\Models\UserRoles;
use App\Models\Modules;

class Permissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()) {
            $module_code = $request->segment(2);
            $Permissions = UserRolePermissions::join('modules','user_role_permissions.module_id','=','modules.id')
            ->select('user_role_permissions.*')
            ->where('user_role_permissions.role_id',Auth::user()->user_role_id)
            ->where('user_role_permissions.module_code',$module_code)
            ->where('modules.is_active',1)
            ->whereNull('user_role_permissions.deleted_at')
            ->first();
            if(isset($Permissions)){
             if($Permissions->is_enable==1){
                 return $next($request);
               }
            }else{
             abort(403);
            }
         }
         abort(403);
    }
}
