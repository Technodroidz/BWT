<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ChangePasswordRule;
use App\Order;
use App\Product;
use App\Videos;
use App\WebUser;

class AdminController extends Controller
{
    public function index()
    {
        $total_user = WebUser::count();
        $total_video = Videos::count();
        $total_product = Product::count();
        $recent_buyers = Order::select(\DB::raw('id,name,created_at,user_id,count(*)'))->groupby('user_id')->latest()->limit(5)->get();
        $top_users = WebUser::withCount('likes')->orderByRaw('likes_count desc')->limit(3)->get();
        $trending_videos = Videos::withCount('likes')->orderByRaw('likes_count desc')->limit(10)->get();
    	return view('admin.index',compact('total_user','total_video','total_product','recent_buyers',
        'top_users','trending_videos'));
    }
    public function profile()
    {
    	$userDate = Auth::user();
    	return view('admin.profile', compact($userDate));
    }


    public function changePassword(ChangePasswordRule $request)
    {
    	// die('adadad');
        $input  = $request->all();
        $result = array();
        $user = User::find(Auth::user()->id);
        if ((Hash::check(request('current_password'), $user->password)) == false) {
            return back()->with('errormsg','OPPS! Your current password is invalid!');
        }else if ((Hash::check(request('new_password'), $user->password)) == true) {

            return back()->with('errormsg','Please enter a password which is not similar then current password!');
        }else {
            $user->update(['password' => Hash::make($input['new_password'])]);
            // $result['status']  = 'success';
            // $result['message'] = 'Password updated successfully';
            return back()->with('success','Password updated successfully!');
        }
    }
    public function saveProfile(Request $request){
        if (empty($request->user_id)) {
            $user = Auth::user();
        }else{
            $user = User::find($id);
        }
        $input = $request->all();

        if (!empty($user)) {
            if (!empty($input['name']) && in_array($input['name'], $input)) {
                $user->name = $input['name'];
            }if (!empty($input['address']) && in_array($input['address'], $input)) {
                $user->address = $input['address'];
            }if (!empty($input['email']) && in_array($input['email'], $input)) {
                $user->email = $input['email'];
            }if (!empty($input['dob']) && in_array($input['dob'], $input)) {
                $user->dob = $input['dob'];
            }if (!empty($input['mobile']) && in_array($input['mobile'], $input)) {
                $user->dob = $input['mobile'];
            }
            if ($request->hasFile('thumbnail')) {
                $thumbnail      =$request->thumbnail;
                $image          =$request->file('thumbnail');
                $newimg         =rand().'_'. time().'_'.$image->getClientOriginalname();
                $storeImage     =$request->file('thumbnail')->storeAs('public/avatar', $newimg);
                $user->thumbnail=$newimg;
            }

            $user->update();
            return back()->with('success','Details updated successfully!');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    public function getUserList()
    {
        $listData = User::where('role_id',1)->paginate(10);
        return view('admin.user.user_list', compact('listData'));
    }

    public function getcustomerList()
    {
        $listData = WebUser::paginate(10);
        return view('admin.customer.list', compact('listData'));
    }
    public function settings($value='')
    {
        return view('admin.setting.index');
    }


}
