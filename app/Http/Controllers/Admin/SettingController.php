<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Repositories\SettingRepository;

class SettingController extends Controller
{
    private $settingRepository;
    /**
     * 
     */ 
    public function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }
     
    public function settingsSave(Request $request)
    {
        // print_r($request->all());die;
       	// $r = Setting::where('type','setting')->first();
        // $setData['company_name']=$request->company_name;
        // if (!empty($r)) {
        // 	# code...
        // }
        // $setData['type']='setting';
        if($request->file()) {
            $logoImg  = $request->file('file');
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $fileExt  = $logoImg->getClientOriginalExtension(); //Get file extension
            $logoImg->storeAs('logos/', "logo.png"); 
            // $filePath = $request->file('file')->storeAs('logo', $request->file('file'), 'public');   
        } 
        unset($request['_token']);
        $dataSet['details']=json_encode($request->all()); 
        $type = $request['type'] ?? 'logo';
        $this->settingRepository->saveSetting($type,$dataSet);
        return back()->with('success','Record save successfully');
    }
}
