<?php

namespace App\Http\Controllers;

use App\Models\SettingModel;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SettingController extends Controller
{
        function info_setting(){
            $setting = SettingModel::all()->first();
            return view('backend.info_setting.info_setting', [
                'setting'=>$setting,
            ]);
        }

        function info_setting_update(Request $request){
            $logo = $request->logo;
            $manager = new ImageManager(new Driver());

            if($logo == ''){
                SettingModel::all()->first()->update([
                    'address'=>$request->address,
                    'phone'=>$request->phone,
                    'email'=>$request->email,
                    'fb_page'=>$request->fb_page,
                ]);
            }
            else{
                $setting = SettingModel::all()->first();
                $current_img = public_path('uploads/logo/'. $setting->logo);
                unlink($current_img);
    
                $extension = $logo->extension();
                $logo_name = 'logo'.'.'. $extension;
                $image = $manager->read($logo);
                $image->save(public_path('uploads/logo/'.$logo_name));
    
                SettingModel::all()->first()->update([
                    'logo'=>$logo_name,
                    'address'=>$request->address,
                    'phone'=>$request->phone,
                    'email'=>$request->email,
                    'fb_page'=>$request->fb_page,
                ]);
            }
           
            return back()->with('update', 'Info Update Successfully');
        }


}
