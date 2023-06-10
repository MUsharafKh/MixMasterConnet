<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
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
        $this->_controllerSettings(false,false,'','',false,[],'Dashboard','');
        return view('admin-backend.index');
    }
}
