<?php

use App\Http\Controllers\Admin\CityController;
use Illuminate\Support\Facades\Route;





/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/



// example for the

Route::get('/example', function(){

    $fullname = 'user';

    $cust_email = 'user@gmail.com';

    $cust_phone= '12121212121';

    $last_updated = '20-20-2022';

    $subscription_plan  ='subscription_plan';

    $next_billing='next_billing';

    $card_number_last4 ='2020';

    $card_expyear= 'year';

    $card_expmonth ='202020';

   return view('example.act2',compact('fullname','cust_email','card_expmonth','card_expyear',

                'cust_phone','last_updated','subscription_plan','next_billing','card_number_last4'));

})->name('example');



// ------------------frontend routes--------------------------




use App\Http\Controllers\web\RegisterController;
use App\Http\Controllers\web\LoginController;
use App\Http\Controllers\web\HomeController;

// ------------------admin---------------------
use App\Http\Controllers\Admin\CmsPagesController;
use App\Http\Controllers\Admin\CommentController;
Use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\UsercategoryController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\AuditionController;
use App\Http\Controllers\BoutiquesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JudgeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\ProductcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\FocusController;
use App\Http\Controllers\JudgesController;
use App\productcategory;

// Route::get('/', function () {
//     return '';
// });
Route::get('/',[CommentController::class,'index'])->name('index');

Route::resource('subscriber', 'SubscriberController');

// Route::get('/auditions', function(){
//     return view('web.pages.auditions');
// });

Route::get('/auditions',[AuditionController::class,'web_audition'])->name('auditions');


Route::get('/auditions/a/success', function(){
    return view('web.pages.success_a');
});

Route::get('/auditions/b/success', function(){
    return view('web.pages.success_b');
});

Route::get('/national-judges', [HomeController::class,'nationalJudge']);
Route::get('/state-judges', [HomeController::class,'stateJudge']);

 Route::get('/state-groups', [HomeController::class,'focusGroup']);



Route::get('/join-community', function () {
    return view('web.pages.join-community');
});

Route::get('/product-{slug}',[ProductController::class,'decription'])->name('product-detaill');




Route::get('performmance-more/{slug}',[PerformanceController::class,'more'])->name('performmance-more');

Route::get('/join-community-form', function () { return view('web.pages.join-community-form');});




// feedback function


Route::get('/feedback',[FeedbackController::class,'create'])->name('feedback.create');

Route::post('/feedback',[FeedbackController::class,'store'])->name('feedback.store');

Route::post('/feedback/submission',[FeedbackController::class,'store'])->name('feedbackSubmission');


// report function


//Route::get('/report',[ReportController::class,'index'])->name('reports');

Route::get('/report-query',[ReportController::class,'create'])->name('report.create');

Route::post('/report-store',[ReportController::class,'store'])->name('report.store');



// contact function

//
Route::get('/contacts',[ContactController::class,'index'])->name('contacts');

Route::get('/contact-query',[ContactController::class,'create'])->name('contact.create');

Route::post('/contact-store',[ContactController::class,'store'])->name('contact.store');





Route::get('/email/{slug}', function ($slug) {

    return view('emails.'.$slug);

});


Route::get('/about-press', function () {

    return view('web.pages.about-press');

});

Route::get('/bwt-store', function () {

    return view('web.pages.bwt-store');

});
Route::get('/speciality-store', function () {

    return view('web.pages.speciality-store');

});
Route::get('/store-brand', function () {

    return view('web.pages.store-brand');

});
Route::get('/product', [ProductController::class,'products']);


Route::get('/classified', function () {

    return view('web.pages.classified');

});

Route::get('/calender', function () {

    return view('web.pages.calender');

});
Route::get('/performance-video', function () {

    return view('web.pages.performance-video');

});

Route::get('/internship/signup',[InternshipController::class,'signup'])->name('internshipSignup');

Route::get('/internship/join',[InternshipController::class,'join_internship'])->name('joinInternship');

Route::post('/internship/signup', [InternshipController::class,'registration'])->name('internshipRegistration');


Route::get('/employee/signup',[EmployeeController::class,'signup']);
Route::get('/employee/apply',[EmployeeController::class,'join_employee']);

Route::post('/employee/signup', [EmployeeController::class,'registration'])->name('jobRegistration');



Route::get('/focus/signup',[FocusController::class,'signup']);
Route::get('/focus/apply',[FocusController::class,'join_employee']);

Route::post('/focus/signup', [FocusController::class,'registration'])->name('focusRegistration');

Route::get('/partner/signup',[PartnerController::class,'signup']);
Route::get('/partner/apply',[PartnerController::class,'join_partner']);

Route::post('/partner/signup', [PartnerController::class,'registration'])->name('partnerRegistration');


Route::get('/judges/signup',[JudgesController::class,'signup']);
Route::get('/judges/apply',[JudgesController::class,'join_employee']);

Route::post('/judges/signup', [JudgesController::class,'registration'])->name('judgesRegistration');



Route::middleware('auth:web_user')->group(function () {

    Route::get('/upload-performance', function () {
        return view('web.pages.upload-performance');
    });
    Route::post('upload-video', [HomeController::class,'uploadVideo'])->name('upload-video');
    Route::post('add-address', [HomeController::class,'addAddress'])->name('add-address');
    Route::get('mi-channel', function(){ return view('web.pages.mi-channel');});

    Route::get('my-gallery', function(){return view('web.pages.my_gallery');});

    Route::post('add-image-gallery',[HomeController::class,'add_image_gallery'])->name('add-image-gallery');
    Route::post('add-new-channel',[HomeController::class,'add_new_channel'])->name('add-new-channel');

    Route::get('profile',[HomeController::class,'index'])->name('profile');
    Route::get('our_community_delete/{id}',[HomeController::class,'our_community_delete'])->name('our_community_delete');
    Route::get('our-community',[HomeController::class,'our_community'])->name('our-community');
    Route::post('add-member',[HomeController::class,'add_member'])->name('add-member');
    Route::post('edit-member',[HomeController::class,'edit_member'])->name('edit-member');

    Route::post('store-profile',[HomeController::class,'profileUpdate'])->name('profile-update');
    Route::post('password-change', [HomeController::class,'passwordchange'])->name('password-change');
    Route::post('channel-subscribe', [HomeController::class,'channel_subscribe'])->name('channel-subscribe');
    Route::post('video-like', [PerformanceController::class,'videoLike'])->name('video-like');
    Route::post('video-view', [PerformanceController::class,'videoView'])->name('video-view');
    Route::post('video-comment', [PerformanceController::class,'videoComment'])->name('video-comment');
    Route::post('video-delete', [PerformanceController::class,'videoDelete'])->name('video-delete');

    Route::post('register-event', [HomeController::class,'register_event'])->name('register-event');


    //----------------------------------------product----------------------------------------//

    Route::get('/my-product', [ProductController::class,'index'])->name('product.index');

    Route::get('/product/create', [ProductController::class,'create'])->name('product.create');

    Route::post('/product/store', [ProductController::class,'store'])->name('product.store');

    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->middleware('signed')->name('product.edit');

    Route::post('/product/update/{id}',[ProductController::class,'update'])->middleware('signed')->name('product.update');

    Route::post('/product/changeStatus',[ProductController::class,'changeStatus'])->name('product.changestatus');

    Route::get('/product/delete/{id}',[ProductController::class,'destroy'])->middleware('signed')->name('product.delete');
  
    //------------------boutique----------------------------------------//

   Route::get('/boutique/new',[BoutiquesController::class,'index'])->name('boutique.index');

   Route::get('/boutique/create',[BoutiquesController::class,'create'])->name('boutique.create');

   Route::post('/boutique/store',[BoutiquesController::class,'store'])->name('boutique.store');

   Route::get('/boutique/edit/{id}',[BoutiquesController::class,'edit'])->name('boutique.edit');

   Route::post('/boutique/update/{id}',[BoutiquesController::class,'update'])->name('boutique.update');

   Route::get('/boutique/delete/{id}',[BoutiquesController::class,'destroy'])->name('boutique.delete');



//-----------------------internship query------------------------------------//


    Route::get('/internship',[InternshipController::class,'create'])->name('internship.create');

    Route::post('/internship/store',[InternshipController::class,'store'])->name('internship.store');

    Route::get('/internship/edit{id}',[InternshipController::class,'edit'])->name('internship.edit');

    Route::post('/internship/update{id}',[InternshipController::class,'update'])->name('internship.update');

    // Route::get('/internship/delete/{id}',[InternshipController::class,'destroy'])->name('internship.delete');




     //-----------------------Cart/Wishlist------------------------------------//
        Route::get('checkout',[CartController::class,'index'])->name('checkout');
        Route::post('checkout',[CartController::class,'checkout']);
        Route::get('order-success',[CartController::class,'orderSuccess'])->name('order-success');
        Route::post('add-cart',[CartController::class,'add'])->name('add-cart');
        Route::post('remove-cart',[CartController::class,'remove'])->name('remove-cart');

        Route::get('wishlist',[CartController::class,'index']);
        Route::get('add-wishlist/{product}',[CartController::class,'addWishlist'])->name('add-wishlist');
        Route::get('remove-wishlist/{product}',[CartController::class,'removeWishlist'])->name('remove-wishlist');

     //-----------------------student query------------------------------------//


    Route::get('/student/new',[StudentController::class,'new'])->name('student.new');


    Route::get('/student',[StudentController::class,'create'])->name('student.create');

    Route::post('/student/store',[StudentController::class,'store'])->name('student.store');

    Route::get('/student/edit{id}',[StudentController::class,'edit'])->name('student.edit');

    Route::post('/student/update{id}',[StudentController::class,'update'])->name('student.update');

    Route::get('/student/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');

    Route::get('/myorder',[CartController::class,'myorder'])->name('myorders');
    Route::get('/myorder/{order}',[CartController::class,'myorderShow'])->middleware('signed')->name('myorder.show');
    Route::post('/myorder/{order}',[CartController::class,'myorderCancel'])->middleware('signed')->name('myorder.cancel');
    Route::post('/myorder/{order}/return',[CartController::class,'myorderReturn'])->middleware('signed')->name('myorder.return');
    Route::get('/boutique-order/{order}',[CartController::class,'boutiqueOrderShow'])->middleware('signed')->name('boutique-order.show');
    Route::post('/boutique-order/{order}',[CartController::class,'boutiqueOrderUpdate'])->middleware('signed')->name('boutique-order.update');
    Route::view('/stores', 'web.pages.stores');
});

//All
Route::get('/sponsors-advertisers', function () { return view('web.pages.sponsors-advertisers');});

//sponsors
Route::get('/sponsors',[SponsorController::class,'new']);

Route::get('/sponsor/signup', [SponsorController::class,'signup'])->name('sponsorSignUp');

Route::get('/sponsor/join', [SponsorController::class,'join_sponsorship'])->name('joinSponsership');

Route::post('/sponsor/signup', [SponsorController::class,'registration'])->name('sponsorRegistration');

Route::get('/email/confirmation/{id}', [SponsorController::class,'email_verification']);






//sponsor-show

Route::get('/sponsor-show',[SponsorController::class,'sponsornew'])->name('sponsors');

//Advertisers

Route::get('/advertisers',[AdvertiserController::class,'new']);

//Advertisers-show

Route::get('/advertiser-show',[AdvertiserController::class,'advertisernew'])->name('advertisers');

//Partners
Route::get('/partners', function () { return view('web.pages.partners');});

//partner-show
 Route::get('/partner-show',[PartnerController::class,'partnernew'])->name('partners');


Route::get('/infomercials-more/{slug}', [PerformanceController::class,'infomercialMore'])->name('infomercial-more');

/*Route::get('/upcoming-event', function(){

return view('web.pages.upcoming-event');

});*/

Route::get('/upcoming-event',[HomeController::class,'upcoming_event'])->name('upcoming-event');
Route::post('/add-upcoming-event',[HomeController::class,'add_upcoming_event'])->name('add-upcoming-event');
Route::post('/add-my-event',[HomeController::class,'add_my_event'])->name('add-my-event');
Route::get('/past-event',[HomeController::class,'past_event'])->name('past-event');
Route::post('/add-my-request',[HomeController::class,'add_my_request'])->name('add-my-request');

Route::get('/event',[HomeController::class,'events'])->name('event');
Route::get('/my-event',[HomeController::class,'my_events'])->name('my-event');
Route::get('/my-event/{slug}',[HomeController::class,'my_event_show'])->name('my-event-show');

Route::get('/special-event',[HomeController::class,'special_event'])->name('/special-event');
Route::post('/add-special-event',[HomeController::class,'add_special_event'])->name('add-special-event');

Route::get('/private-event',[HomeController::class,'private_event'])->name('/private-event');

Route::get('judges', [JudgeController::class,'index'])->name('judge');

Route::get('/full-video', function(){
    return view('web.pages.full-video');
});


Route::get('studios',[HomeController::class,'channels'])->name('studios');
Route::get('channels/{slug}',[HomeController::class,'channelDetail'])->name('channel-detail');
Route::get('channels/{slug}/performances',[HomeController::class,'channelPerformance'])->name('channel-performance');

Route::get('/my-channel2',[HomeController::class,'channel2'])->name('channel2');

Route::post('/preview-channel',[HomeController::class,'preview_channel'])->name('preview-channel');

Route::get('/library',[UsercategoryController::class,'library']);
Route::get('/library/{slug}',[UsercategoryController::class,'showlibrary'])->name('show-detaill');
Route::get('/library/{slug}/video', [UsercategoryController::class,'showlibraryVideo'])->name('library-content');


Route::get('/comment-post', function(){
    return view('web.pages.comment-post');
});


Route::get('/community-circle-message', function(){
    return view('web.pages.community-circle-message');
});






Route::get('/setting', function(){

    return view('web.pages.setting');

});



Route::get('/help', function(){

    return view('web.pages.help');

});



Route::get('/performance', [PerformanceController::class,'index']);



Route::get('/events', function(){

    return view('web.pages.events');

});



//   Route::get('/community-circle', function(){

//     return view('web.pages.community-circle');
//    });

  Route::get('/community-circle',[InternshipController::class,'new']);


  Route::get('/gallery', [AdminGalleryController::class,'admingallerynew']);

  Route::get('/trailers', [PerformanceController::class,'trailer']);

  Route::get('/trailers-more/{slug}', [PerformanceController::class,'trailerMore'])->name('trailer-more');



  Route::get('/busking-board', [PerformanceController::class,'buskingBoard']);

  Route::get('/boutique-list', function(){

    return view('web.pages.boutique_list');

  });



  //login controller web---------------------------------------------


  Route::get('/sign-in', [LoginController::class,'index'])->name('sign-in');
  Route::get('/channel-name', [LoginController::class,'channel_name'])->name('channel-name');

  Route::get('/sign-in-auditions', [LoginController::class,'sign_auditions'])->name('sign-in-auditions');
  Route::get('/personalInfo', [HomeController::class,'personalInfo'])->name('personalInfo');
  Route::get('/studio/signup', [HomeController::class,'bwtstudioSignup'])->name('bwtstudioSignup');
  Route::get('/personalInfo/final', [HomeController::class,'finalSubmission']);

  Route::get('/logout', [LoginController::class,'logout'])->name('logout');

  Route::post('/weblogin',[LoginController::class,'login'])->name('weblogin');






  //------register controller web----------------------------------

   Route::get('/sign-up',[RegisterController::class,'index'])->name('register');


   Route::post('/store',[RegisterController::class,'storeUser'])->name('storeUser');

   Route::post('/join-auditions',[RegisterController::class,'joinauditions'])->name('joinauditions');


   Route::get('/shopping', [PerformanceController::class,'infomercial']);

   //-------------------end front end routes---------------------



    // backend routes--------------------------



    Route::get('/admin', function () {

    // return view('welcome');

    return view('auth.login');

    });



   Auth::routes();



   Route::get('/home', function(){

    //return 'asdasdasd';

    return redirect()->route('admin.dashboard');

    });


    //user show



   //Backend URLS

    Route::group(['as' => 'admin.', 'middleware' => ['auth', 'admin', 'verified'], 'prefix' => 'admin'], function () {

    Route::get('/dashboard', 'Admin\AdminController@index')->name('dashboard');

    Route::get('/profile', 'Admin\AdminController@profile')->name('profile');

    Route::post('/profile', 'Admin\AdminController@saveProfile')->name('saveProfile');

    Route::post('/change-password', 'Admin\AdminController@changePassword')->name('change-password');

    // USER URL

    Route::get('/user', 'Admin\AdminController@getUserList')->name('getUserList');

    // CUSTOMER
    Route::get('/customer', 'Admin\AdminController@getcustomerList')->name('getcustomerList');

    // Setting ROUTE

    Route::get('/settings', 'Admin\AdminController@settings')->name('settings');

    Route::post('/settings/save', 'Admin\SettingController@settingsSave')->name('settings.save');




    // Location URL


    Route::get('/state/delete/{id}',   'Admin\StateController@delete')->name('state.delete');

    Route::get('/city/delete/{id}',    'Admin\CityController@delete')->name('city.delete');

    Route::get('/course/delete/{id}',  'Admin\AdmissionClassController@delete')->name('course.delete');



    Route::get('/usercategory/delete{id}','Admin\UsercategoryController@delete')->name('usercategory.delete');

    Route::post('/usercategory/changestatus','Admin\UsercategoryController@changeStatus')->name('usercategory.changestatus');




    Route::get('/category/delete/{id}','Admin\CategoryController@delete')->name('category.delete');

    Route::post('/category/changestatus','Admin\CategoryController@changeStatus')->name('category.changestatus');



    Route::get('/language/delete/{id}','Admin\LanguageController@delete')->name('language.delete');

    Route::post('/language/changestatus', 'Admin\LanguageController@changeStatus')->name('language.changestatus');



    Route::get('/teacher/delete/{id}', 'Admin\TeacherController@delete')->name('teacher.delete');

    Route::post('/teacher/changestatus', 'Admin\TeacherController@changeStatus')->name('teacher.changestatus');



    Route::get('/banner/delete/{id}', 'Admin\HomeBannerController@delete')->name('banner.delete');

    Route::post('/banner/changestatus/', 'Admin\HomeBannerController@changeStatus')->name('banner.changestatus');



    //cmspages route

    Route::get('/cms_pages',[CmsPagesController::class,'index'] )->name('cmspages');

    Route::get('/cms_pages/create',[CmsPagesController::class,'create'] )->name('cms_pages.create');

    Route::post('/cms_pages/store',[CmsPagesController::class,'store'])->name('cms_pages.store');

    Route::post('/cms_pages/changeStatus',[CmsPagesController::class,'changeStatus'])->name('cms_pages.changestatus');

    Route::get('/cms_pages/edit/{id}',[CmsPagesController::class,'edit'])->name('cms_pages.edit');

    Route::put('/cms_pages/update/{id}',[CmsPagesController::class,'update'])->name('cms_pages.update');

    Route::get('/cms_pages/delete/{id}',[CmsPagesController::class,'delete'])->name('cms_pages.delete');

    //-------user show

    Route::get('/user/{id}',[RegisterController::class,'show'])->name('user.show');

    //-------audition show

    Route::get('/audition/{id}',[AuditionController::class,'show'])->name('audition.show');

    //------videos upload ---------------------------------------------------------

    Route::get('/videos',[VideosController::class,'index'])->name('videos');

    Route::get('/videos/create',[VideosController::class,'create'])->name('videos.create');

    Route::post('/videos/store',[VideosController::class,'store'])->name('videos.store');

    Route::get('/videos/edit/{id}',[VideosController::class,'edit'])->name('videos.edit');

    Route::post('/videos/update/{id}',[VideosController::class,'update'])->name('videos.update');

    Route::get('/videos/delete/{id}',[VideosController::class,'destroy'])->name('videos.delete');

    Route::post('/videos/chageStatus',[VideosController::class,'changeStatus'])->name('videos.changestatus');

//--------------------------------------- add member------------------------------//

    Route::get('/member',[MemberController::class,'index'])->name('member.index');

    Route::get('/member/create',[MemberController::class,'create'])->name('member.create');

    Route::post('/member/store',[MemberController::class,'store'])->name('member.store');

    Route::get('/member/edit/{id}',[MemberController::class,'edit'])->name('member.edit');

    Route::post('/member/update/{id}',[MemberController::class,'update'])->name('member.update');

    Route::post('/member/changeStatus',[MemberController::class,'changeStatus'])->name('member.changestatus');

    Route::get('/member/delete/{id}',[MemberController::class,'destroy'])->name('member.delete');



    //-----------events---------------------------------------------------------------------//

    Route::get('/events',[EventsController::class,'index'])->name('events');
    Route::get('/events/create',[EventsController::class,'create'])->name('events.create');
    Route::post('/events/store',[EventsController::class,'store'])->name('events.store');
    Route::get('/events/edit/{id}',[EventsController::class,'edit'])->name('events.edit');
    Route::post('/events/update/{id}',[EventsController::class,'update'])->name('events.update');
    Route::get('/events/delete/{id}',[EventsController::class,'delete'])->name('events.delete');
    Route::post('/events/changeStatus',[EventsController::class,'changeStatus'])->name('events.changestatus');

    Route::get('/events/request/{event}/approved',[EventsController::class,'requestApprove'])->name('event.request-approve');
    Route::get('/events/request/{event}/reject',[EventsController::class,'requestReject'])->name('event.request-reject');


    Route::get('/events/request',[EventsController::class,'userRequest'])->name('userRequest');
    Route::get('/events/participated/{id}',[EventsController::class,'participated'])->name('events.participated');



      //------------------------------product category-----------------------------------//


    Route::get('product-category',[ProductcategoryController::class,'index'])->name('product-category');

    Route::get('product-category/create',[ProductcategoryController::class,'create'])->name('product-category.create');

    Route::post('product-category/store',[ProductcategoryController::class,'store'])->name('product-category.store');

    Route::get('product-category/edit/{id}',[ProductcategoryController::class,'edit'])->name('product-category.edit');

    Route::post('product-category/update/{id}',[ProductcategoryController::class,'update'])->name('product-category.update');

    Route::get('product-category/delete/{id}',[ProductcategoryController::class,'destroy'])->name('product-category.delete');

    Route::post('product-category/changestatus',[ProductcategoryController::class,'changeStatus'])->name('product-category.changestatus');

    Route::get('/products/list', [ProductController::class,'productListInAdmin']);
    Route::get('/product/activation/{pid}/{st}',[ProductController::class,'p_activation']);



     //------------------------------ Add-Advertiser-------------------------------//


    Route::get('/advertiser/new', [AdvertiserController::class,'index'])->name('advertiser.index');

    Route::get('/advertiser/create',[AdvertiserController::class,'create'])->name('advertiser.create');

    Route::post('/advertiser/store',[AdvertiserController::class,'store'])->name('advertiser.store');

    Route::get('/advertiser/edit/{id}',[AdvertiserController::class,'edit'])->name('advertiser.edit');

    Route::post('/advertiser/update/{id}',[AdvertiserController::class,'update'])->name('advertiser.update');

    Route::get('/advertiser/delete/{id}',[AdvertiserController::class,'destroy'])->name('advertiser.delete');

    Route::post('/advertiser/chageStatus',[AdvertiserController::class,'changeStatus'])->name('advertiser.changestatus');


    //-------------------------------Add-Gallery----------------------------------------//

    Route::get('gallery',[AdminGalleryController::class,'index'])->name('gallery.index');

    Route::get('gallery/create',[AdminGalleryController::class,'create'])->name('gallery.create');

    Route::post('gallery/store',[AdminGalleryController::class,'store'])->name('gallery.store');

    Route::get('gallery/edit/{id}',[AdminGalleryController::class,'edit'])->name('gallery.edit');

    Route::post('gallery/update/{id}',[AdminGalleryController::class,'update'])->name('gallery.update');

    Route::get('gallery/delete/{id}',[AdminGalleryController::class,'destroy'])->name('gallery.delete');

    Route::post('gallery/chageStatus',[AdminGalleryController::class,'changeStatus'])->name('gallery.changestatus');

   //--------------------------Add-Sponsors----------------------------------------------//



   Route::get('/sponsor/new', [SponsorController::class,'index'])->name('sponsor.index');

   Route::get('/sponsor/create',[SponsorController::class,'create'])->name('sponsor.create');

   Route::post('/sponsor/store',[SponsorController::class,'store'])->name('sponsor.store');

   Route::get('/sponsor/edit/{id}',[SponsorController::class,'edit'])->name('sponsor.edit');

   Route::post('/sponsor/update/{id}',[SponsorController::class,'update'])->name('sponsor.update');

   Route::get('/sponsor/delete/{id}',[SponsorController::class,'destroy'])->name('sponsor.delete');

   Route::get('/sponsor/reviewing/{id}', [SponsorController::class,'review']);

   Route::get('/sponsor/activation', [SponsorController::class,'approval']);






    //-----------------------------------Add-Partner-------------------------------------//


    // Route::get('/partner/new', [PartnerController::class,'index'])->name('partner.index');

    // Route::get('/partner/create',[PartnerController::class,'create'])->name('partner.create');

    // Route::post('/partner/store',[PartnerController::class,'store'])->name('partner.store');

    // Route::get('/partner/edit/{id}',[PartnerController::class,'edit'])->name('partner.edit');

    // Route::post('/partner/update/{id}',[PartnerController::class,'update'])->name('partner.update');

    // Route::get('/partner/delete/{id}',[PartnerController::class,'destroy'])->name('partner.delete');


    Route::get('/subscriber/list', [SubscriberController::class,'list'])->name('subscriber.list');


   Route::get('/contact',[ContactController::class,'index'])->name('contact.index');


    //------------------------------------feedback form---------------------------------//

    Route::get('/feedback',[FeedbackController::class,'index'])->name('feedback.index');

    //-----------------------students information------------------------//


    Route::get('/student',[StudentController::class,'index'])->name('student.index');

    //------------------------internship information---------------------------------//

    Route::get('/internship',[InternshipController::class,'index'])->name('internship.index');

    Route::get('/internship/reviewing/{id}', [InternshipController::class,'review']);

    Route::get('/internship/activation', [InternshipController::class,'approval']);

    Route::get('/internship/delete/{id}',[InternshipController::class,'destroy'])->name('internship.delete');



    Route::get('/employee',[EmployeeController::class,'index'])->name('employee.index');

    Route::get('/employee/reviewing/{id}', [EmployeeController::class,'review']);

    Route::get('/employee/activation', [EmployeeController::class,'approval']);

   Route::get('/employee/delete/{id}',[EmployeeController::class,'destroy'])->name('employee.delete');


   Route::get('/focus',[FocusController::class,'index'])->name('focus.index');

   Route::get('/focus/reviewing/{id}', [FocusController::class,'review']);

   Route::get('/focus/activation', [FocusController::class,'approval']);

  Route::get('/focus/delete/{id}',[FocusController::class,'destroy'])->name('focus.delete');


  Route::get('/partner',[PartnerController::class,'index'])->name('partner.index');

  Route::get('/partner/reviewing/{id}', [PartnerController::class,'review']);

  Route::get('/partner/activation', [PartnerController::class,'approval']);

 Route::get('/partner/delete/{id}',[PartnerController::class,'destroy'])->name('partner.delete');




  Route::get('/judges',[JudgesController::class,'index'])->name('judges.index');

  Route::get('/judges/reviewing/{id}', [JudgesController::class,'review']);

  Route::get('/judges/activation', [JudgesController::class,'approval']);

 Route::get('/judges/delete/{id}',[JudgesController::class,'destroy'])->name('judges.delete');


    // Resource URL



    Route::Resource('/state',   'Admin\StateController');

    Route::Resource('/city',    'Admin\CityController');

    Route::Resource('/course',  'Admin\AdmissionClassController');

    Route::Resource('/courses', 'Admin\CourseController');

    Route::Resource('/category','Admin\CategoryController');

    Route::Resource('/usercategory','Admin\UsercategoryController');

    Route::Resource('/teacher', 'Admin\TeacherController');

    Route::Resource('/language','Admin\LanguageController');

    Route::Resource('/banner',  'Admin\HomeBannerController');

    Route::get('/audition',  [AuditionController::class,'index'])->name('audition.index');

    Route::get('/studio',  [AuditionController::class,'studio'])->name('audition.studio');

   Route::get('/audition/delete/{id}',[AuditionController::class,'destroy'])->name('audition.delete');

   Route::get('/audition/eradicate/{id}',[AuditionController::class,'deleteStudio'])->name('audition.eradicate');


    Route::put('/audition/{audition}',  [AuditionController::class,'update'])->name('audition.update');

});
