<?php

namespace App\Http\Controllers\Admin;
use App\Models\FacebookPixel;
use App\Models\GoogleAnalytic;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use App\Models\General;
use App\Models\BlogComment;
use App\Models\LogoFavicon;
use App\Models\TawkChat;
use App\Models\GoogleRecaptcha;
use App\Models\ThemeColor;
use App\Models\CookieConsent;
use Illuminate\Http\Request;
use App\Models\SocialLogin;
use File;
use Image;
class SettingController extends Controller
{
    public function Setting_index(){

       $General = General::first();
       $BlogComment = BlogComment::first();
       $logoFavicon = LogoFavicon::first();
       $TawkChat = TawkChat::first();
       $GoogleAnalytic = GoogleAnalytic::first();
       $GoogleRecaptcha = GoogleRecaptcha::first();
       $FacebookPixel = FacebookPixel::first();
       $ThemeColor=ThemeColor::first();
       $cookieConsent=CookieConsent::first();
       $SocialLogin=SocialLogin::first();


       $selected_theme = $General->selected_theme;

        return view('dashboard.admin.Setting_index',compact('General','logoFavicon','BlogComment','TawkChat','GoogleAnalytic','GoogleRecaptcha','FacebookPixel','ThemeColor','cookieConsent','selected_theme','SocialLogin'));
    }


    public function generals_update(Request $request){

        $general = General::first();
        $general->selected_theme = $request->selected_theme;
        $general->commission_type = $request->commission_type;
        $general->live_chat = $request->live_chat;
        $general->show_provider_contact_info = $request->show_provider_contact_info;
        $general->layout = $request->layout;
        $general->lg_header = $request->lg_header;
        $general->sm_header = $request->sm_header;
        $general->currency_name = $request->currency_name;
        $general->currency_icon = $request->currency_icon;
        $general->currency_position = $request->currency_position;
        $general->timezone = $request->timezone;
        //dd(  $general);
        $general->save();
        return redirect()->back();
    }


    public function theme_coler_update(Request $request){

        $ThemeColor = ThemeColor::first();

        $ThemeColor->theme_one_color = $request->theme_one_color;
        $ThemeColor->theme_two_color = $request->theme_two_color;
        $ThemeColor->theme_three_color = $request->theme_three_color;
        $ThemeColor->save();
         return redirect()->back();
    }



    public function logo_update(Request $request){

        $logoFavicon = LogoFavicon::first();


        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');

            if ($logoFavicon->logo) {
                Storage::delete($logoFavicon->logo);
            }

            $logoName = time() . '-' . uniqid() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploaded/logo'), $logoName);
             $logoFavicon->logo = '/uploaded/logo/' . $logoName;
            $logoFavicon->save();
        }


        if ($request->hasFile('footer_logo')) {
            $footer_logo = $request->file('footer_logo');

            if ($logoFavicon->footer_logo) {
                Storage::delete($logoFavicon->footer_logo);
            }

            $footer_logo_Name = time() . '-' . uniqid() . '.' . $footer_logo->getClientOriginalExtension();
            $footer_logo->move(public_path('uploaded/footer_logo'), $footer_logo_Name);
            $logoFavicon->footer_logo = '/uploaded/footer_logo/' . $footer_logo_Name;
            $logoFavicon->save();
        }


        if ($request->hasFile('favicon')) {
            $favicon = $request->file('favicon');

            if ($logoFavicon->favicon) {
                Storage::delete($logoFavicon->favicon);
            }

            $favicon_Name = time() . '-' . uniqid() . '.' . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('uploaded/favicon'), $favicon_Name);
            $logoFavicon->favicon = '/uploaded/favicon/' . $favicon_Name;
            $logoFavicon->save();
        }


        $logoFavicon->save();

        return redirect()->back()->with('success', 'LogoFavicon updated successfully.');
    }

    public function comment_type(Request $request){

        $BlogComment = BlogComment::first();

        $BlogComment->comment_type = $request->comment_type;
        $BlogComment->app_id = $request->app_id;
        $BlogComment->save();
         return redirect()->back();
    }

    public function Tawk_update(Request $request){

        $BlogComment = TawkChat::first();

        $BlogComment->allow = $request->allow;
        $BlogComment->chat_link = $request->chat_link;
        $BlogComment->save();
         return redirect()->back();
    }

    public function google_analytic_update(Request $request){

        $GoogleAnalytic = GoogleAnalytic::first();

        $GoogleAnalytic->allow = $request->allow;
        $GoogleAnalytic->analytic_id = $request->analytic_id;
        $GoogleAnalytic->save();
         return redirect()->back();
    }



    public function google_Recaptcha_update(Request $request){

        $GoogleRecaptcha = GoogleRecaptcha::first();

        $GoogleRecaptcha->allow = $request->allow;
        $GoogleRecaptcha->site_key = $request->site_key;
        $GoogleRecaptcha->secret_key = $request->secret_key;

        $GoogleRecaptcha->save();
         return redirect()->back();
    }

    public function allow_facebook_pixel_update(Request $request){

        $FacebookPixel = FacebookPixel::first();

        $FacebookPixel->allow_facebook_pixel = $request->allow_facebook_pixel ? 1 : 0;
        $FacebookPixel->app_id = $request->app_id;
        // dd( $FacebookPixel);
        $FacebookPixel->save();
         return redirect()->back();
    }


    public function cookie_consent_update(Request $request){

        $cookieConsent = CookieConsent::first();
        $cookieConsent->allow = $request->allow;
        $cookieConsent->border = $request->border;
        $cookieConsent->corners = $request->corners;
        $cookieConsent->background_color = $request->background_color;
        $cookieConsent->text_color = $request->text_color;
        $cookieConsent->border_color = $request->border_color;
        $cookieConsent->button_color = $request->button_color;
        $cookieConsent->btn_text_color = $request->btn_text_color;
        $cookieConsent->link_text = $request->link_text;
        $cookieConsent->btn_text = $request->btn_text;
        $cookieConsent->message = $request->message;
        $cookieConsent->save();
         return redirect()->back();
    }
    public function social_login_update(Request $request){

        $SocialLogin = SocialLogin::first();
        $SocialLogin->allow_facebook_login = $request->allow_facebook_login;
        $SocialLogin->facebook_app_id = $request->facebook_app_id;
        $SocialLogin->facebook_app_secret = $request->facebook_app_secret;
        $SocialLogin->facebook_redirect_url = $request->facebook_redirect_url;
        $SocialLogin->allow_gmail_login = $request->allow_gmail_login;
        $SocialLogin->gmail_client_id = $request->gmail_client_id;
        $SocialLogin->gmail_secret_id = $request->gmail_secret_id;
        $SocialLogin->gmail_redirect_url = $request->gmail_redirect_url;
          $SocialLogin->save();
         return redirect()->back();
    }


}

