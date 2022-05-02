<?php
namespace App\Repositories;
use App\Models\Setting;

class SettingRepository
{ 

	public function saveSetting(string $type, array $dataSet)
	{ 
		switch ($type) {
			case 'amazon':
				try {
					$setting = Setting::where('type',$type)->first();
					if (!empty($setting)) {
						$setting->update($dataSet); 
					}else {
						$dataSet['type']=$type;
						Setting::create($dataSet);
					} 
				} catch (Exception $e) {
					die($e);
				} 
				break;
			case 'ebay':
				try {
					$setting = Setting::where('type',$type)->first();
					if (!empty($setting)) {
						$setting->update($dataSet); 
					}else {
						$dataSet['type']=$type;
						Setting::create($dataSet);
					}  
				} catch (Exception $e) { 
					die($e);
				} 
				break;
			case 'flipkart':
				try {
					$setting = Setting::where('type',$type)->first();
					if (!empty($setting)) {
						$setting->update($dataSet); 
					}else {
						$dataSet['type']=$type;
						Setting::create($dataSet);
					}
				} catch (Exception $e) {
					die($e);
				} 
				break;
			case 'logo':
				try {
					$setting = Setting::where('type',$type)->first();
					if (!empty($setting)) {
						$setting->update($dataSet); 
					}else {
						$dataSet['type']=$type;
						Setting::create($dataSet);
					}
				} catch (Exception $e) {
					die($e);
				} 
				break;
			
			default:
				die('sad');
				break;
		}
	}

}