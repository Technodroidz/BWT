<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\BaseController as BaseController; 
use Illuminate\Http\Request;
use App\HomeBanner; 
use App\Category; 
class HomeController extends BaseController
{
    public function getAllBanner(Request $request)
    {    
        try {
            $listData = HomeBanner::where(['active'=>1])->select(['id','title','thumbnail'])->get();
            if (!empty(count($listData))) {
                return self::sendResponse($listData, 'Data retrive successfully!');
            }else{
                return self::sendResponse([], 'No record found!');
            }
        } catch (Exception $e) {
            return self::sendError(400,[], $e,'');  
        } 
    }
    public function getHome(Request $request)
    {    
        try {
        	$listData['banner']    = HomeBanner::where(['active'=>1])->select(['id','title','thumbnail'])->get();
        	$listData['category']  = Category::select('id','name','slug','parent_id','thumbnail','position')
        							->where(['parent_id'=>1,'active'=>1])
        							->get();
            $listData['cat_subcat']= Category::select('id','name','slug','parent_id','thumbnail','position')
            				->where(['parent_id'=>1,'active'=>1]) 
                            ->with('categories:id,name,slug,parent_id,thumbnail,position')
                            ->get();
            if (!empty(count($listData))) {
                return self::sendResponse($listData, 'Data retrive successfully!');
            }else{
                return self::sendResponse([], 'No record found!');
            }
        } catch (Exception $e) {
            return self::sendError(400,[], $e,'');  
        } 
    }
    public function getHomeData(Request $request)
    {    
        try {
            $banner=HomeBanner::where(['active'=>1])->select(['id','title','thumbnail'])->get();
            $mainCat=Category::select('id','name','slug','parent_id','thumbnail','position')
                                    ->where(['parent_id'=>1,'active'=>1])
                                    ->get();
            $listData['banner']   =$banner;
            $listData['category'] =$mainCat; 
            if (!empty($mainCat)) {
                foreach ($mainCat as $key => $item) {
                    $listData[$item->name]=Category::select('id','name','slug','parent_id','thumbnail','position')
                                ->where(['parent_id'=>$item->id,'active'=>1]) 
                                // ->with('categories:id,name,slug,parent_id,thumbnail,position')
                                ->get();
                }
            }
            if (!empty(count($listData))) { 
                return self::sendResponse($listData, 'Data retrive successfully!');
            }else{
                return self::sendResponse([], 'No record found!');
            }
        } catch (Exception $e) {
            return self::sendError(400,[], $e,'');  
        } 
    }

    public function get_chiled_cat(Request $request, $id='')
    {    
        $data =[];
        $data['isNext'] = false;
        try { 
            $listData=Category::select('id','name','slug','parent_id','thumbnail','position')
                            ->where(['parent_id'=> $id,'active'=>1])
                            ->get(); 
            if (!empty(count($listData))) {
                $ids = $listData->pluck('id')->toArray();
                $data['child_category'] = $listData; 
                $data['ids'] = $ids; 

                $nextChild=Category::select('id','name','slug','parent_id')
                                    ->whereIn('parent_id',$ids)
                                    ->where('active',1)
                                    ->get(); 
                 if (!empty(count($nextChild))) {
                    $data['isNext'] = true;
                 }
                
                return self::sendResponse($data, 'Data retrive successfully!');
            }else{
                return self::sendResponse([], 'No record found!');
            }
        } catch (Exception $e) {
            return self::sendError(400,[], $e,'');  
        } 
    }
}
