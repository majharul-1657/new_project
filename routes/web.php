<?php
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\CategoryControllerbloge;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\blogController;
use App\Http\Controllers\Admin\BlosController;
use App\Http\Controllers\Admin\Controllerbloge;
use App\Http\Controllers\Admin\TermsAndConditionController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\controllers\Admin\EmailConfigurationController;
use App\Http\controllers\Admin\SettingController;
use App\Http\controllers\Admin\PropertyController;


use App\Http\Controllers\HomeController;

Auth::routes();

// Route::get('/', [HomeController::class, 'index'])->name('home');
 Route::get('/', [HomeController::class, 'index']);

Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::get('/login',[UserController::class,'login'])->name('login');
        Route::get('/register',[UserController::class,'register'])->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');

    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::get('/home',[UserController::class,'index'])->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          Route::get('/add-new',[UserController::class,'add'])->name('add');


    });

});

Route::prefix('admin')->name('admin.')->group(function(){

  Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::get('/dashboard',[AdminController::class,'login'])->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');

    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
         Route::get('/home',[AdminController::class,'dashboard'])->name('home');

         ///Category
         Route::get('/index',[CategoryController::class,'index'])->name('index');
         Route::get('/create-cat',[CategoryController::class,'create_cat'])->name('create_cat');
         Route::post('/store',[CategoryController::class,'store'])->name('store');
         Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
         Route::post('/subcat/update/{id}',[CategoryController::class,'update'])->name('update');
         Route::get('/status{categore}',[CategoryController::class,'cat_status'])->name('status');
         Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('delete');

        ///blogs_Category//

        //Route::resource('blog-category', BlogCategoryController::class);

        Route::get('/category/index-',[CategoryControllerbloge::class,'index_category'])->name('index_category');
        Route::get('/create',[CategoryControllerbloge::class,'create'])->name('create_category');
        Route::post('/category/store',[CategoryControllerbloge::class,'store_category'])->name('store_category');
        Route::get('/category/edit{id}',[CategoryControllerbloge::class,'edit_category'])->name('edit_category');
        Route::post('/category/update{id}',[CategoryControllerbloge::class,'update_category'])->name('update_category');
        Route::get('/category/delete/{id}',[CategoryControllerbloge::class,'delete_category'])->name('delete_category');

        ///blogs//

        Route::get('/blog-index',[CategoryControllerbloge::class,'blog_index'])->name('blog_index');
        Route::get('/blog/create',[CategoryControllerbloge::class,'blog_create'])->name('blog_create');
        Route::post('/blog/store',[CategoryControllerbloge::class,'blog_store'])->name('blog_store');
        Route::get('/blog/edit{id}',[CategoryControllerbloge::class,'edit_blog'])->name('edit_blog');
        Route::post('/blog/update/{id}',[CategoryControllerbloge::class,'update_blog'])->name('update_blog');
        Route::get('/blog/delete/{id}',[CategoryControllerbloge::class,'delete_blog'])->name('delete_blog');

        /////TermsAndCondition////

        Route::get('/terms-condition',[TermsAndConditionController::class,'index_terms_condition'])->name('terms_condition');
        Route::post('/terms/update/{id}',[TermsAndConditionController::class,'update_terms_condition'])->name('update_terms_condition');

        ///privacyPolicy///

        Route::get('/privacy-policy',[PrivacyController::class,'index_Privacy_Policy'])->name('Privacy_Policy');
        Route::post('/Privacy/update/{id}',[PrivacyController::class,'update_Privacy_Policy'])->name('update_Privacy_Policy');

        /////Faq////

        Route::get('/faq-index',[FaqController::class, 'faq_index'])->name('faq_index');
        Route::get('/faq-add',[FaqController::class, 'faq_add'])->name('faq_add');
        Route::get('/faq-store',[FaqController::class, 'faq_store'])->name('faq_store');
        Route::get('/faq/edit{id}',[FaqController::class,'faq_edit'])->name('faq_edit');
        Route::post('/faq/update/{id}',[FaqController::class,'faq_update'])->name('faq_update');
        Route::get('/faq/status{faq}',[FaqController::class,'faq_status'])->name('faq_status');
        Route::get('/faq/delete/{id}',[FaqController::class,'faq_delete'])->name('faq_delete');

       ///testimonial///

        Route::get('/testimonial/index',[TestimonialController::class,'testimonial'])->name('testimonial');
        Route::get('/testimonial-create',[TestimonialController::class,'testimonial_create'])->name('testimonial_create');
        Route::post('/testimonial/store',[TestimonialController::class,'testimonial_store'])->name('testimonial_store');
        Route::get('/testimonial/edit/{id}',[TestimonialController::class,'testimonial_edit'])->name('testimonial_edit');
        Route::post('/testimonial/update/{id}',[TestimonialController::class,'testimonial_update'])->name('testimonial_update');
        Route::get('/testimonial/status{testimonial}',[TestimonialController::class,'testimonial_status'])->name('testimonial_status');
        Route::get('/testimonial/delete/{id}',[TestimonialController::class,'testimonial_delete'])->name('testimonial_delete');

       /// Email Template///
       Route::get('/Email/index',[EmailController::class,'Email_index'])->name('Email_index');
       Route::get('/email/edit/{id}',[EmailController::class,'editemail_template'])->name('editemail_template');
       Route::post('/template/update/{id}',[EmailController::class,'email_template_upd'])->name('email_template_upd');

        /// Email configuration///

        Route::get('/configuration/index',[EmailConfigurationController::class,'configuration_index'])->name('configuration_index');
        Route::put('configuraion/update/email',[EmailConfigurationController::class,'Configuration_update'])->name('Configuration_update');

        ///setting///

        Route::get('/Setting/index',[SettingController::class,'Setting_index'])->name('Setting_index');
        Route::put('/generals/update',[SettingController::class,'generals_update'])->name('generals_update');
        Route::put('/logo/update',[SettingController::class,'logo_update'])->name('logo_update');
        Route::put('/comment/type/update',[SettingController::class,'comment_type'])->name('comment_type');
        Route::put('/tawk/update',[SettingController::class,'Tawk_update'])->name('Tawk_update');
        Route::put('/google/analytic/update',[SettingController::class,'google_analytic_update'])->name('google_analytic_update');
        Route::put('/google/Recaptcha/update',[SettingController::class,'google_Recaptcha_update'])->name('google_Recaptcha_update');
        Route::put('/facebookpixel/update',[SettingController::class,'allow_facebook_pixel_update'])->name('allow_facebook_pixel_update');
        Route::put('/theme/update',[SettingController::class,'theme_coler_update'])->name('theme_coler_update');
        Route::put('/Cookie/Consent/update',[SettingController::class,'cookie_consent_update'])->name('cookie_consent_update');
        Route::put('/social/login/update',[SettingController::class,'social_login_update'])->name('social_login_update');

        ///Property_loc///

        Route::get('/location/index',[PropertyController::class,'location_index'])->name('location_index');
        Route::get('/location/create',[PropertyController::class,'location_create'])->name('location_create');
        Route:: post('/location/store',[PropertyController::class,'store_location'])->name('store_location');
        Route::get('/location/edit{id}',[PropertyController::class,'edit_location'])->name('edit_location');
        Route::post('/location/update{id}',[PropertyController::class,'update_locations'])->name('update_locations');
        Route::get('/location/delete/{id}',[PropertyController::class,'location_delete'])->name('location_delete');

         ///Property///

        Route::get('/Property/index',[PropertyController::class,'Property_index'])->name('Property_index');
        Route::get('/Property/create',[PropertyController::class,'Property_create'])->name('Property_create');
        Route:: post('/property/store',[PropertyController::class,'property_store'])->name('property_store');
        Route::get('/property/delete{id}',[PropertyController::class,'property_delete'])->name('property_delete');
        Route::get('/property/edit{id}',[PropertyController::class,'edit_property'])->name('edit_property');
        Route::post('/property/update{id}',[PropertyController::class,'update_property'])->name('update_property');


    });




});
