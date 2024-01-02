@extends('dashboard.admin.home');

@section('content')


<div class="main-content" style="margin-left: 290px">
    <section class="section">
      <div class="section-header">
        <h1>Settings</h1>
      </div>

    <div class="section-body" >
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">


                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link active" id="general-setting-tab" data-toggle="tab" href="#generalSettingTab" role="tab" aria-controls="generalSettingTab" aria-selected="true">General Setting</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="logo-tab" data-toggle="tab" href="#logoTab" role="tab" aria-controls="logoTab" aria-selected="true">Logo and Favicon</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="themeColor-tab" data-toggle="tab" href="#themeColorTab" role="tab" aria-controls="themeColorTab" aria-selected="true">Theme color</a>
                                    </li>


                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="cookie-tab" data-toggle="tab" href="#cookieTab" role="tab" aria-controls="cookieTab" aria-selected="true">Cookie Consent</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="recaptcha-tab" data-toggle="tab" href="#recaptchaTab" role="tab" aria-controls="recaptchaTab" aria-selected="true">Google Recaptcha</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1 d-none">
                                        <a class="nav-link" id="pusher-tab" data-toggle="tab" href="#pusherTab" role="tab" aria-controls="pusherTab" aria-selected="true">{{__('admin.Pusher Credential')}}</a>
                                    </li>


                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="blog-comment-tab" data-toggle="tab" href="#blogCommentTab" role="tab" aria-controls="blogCommentTab" aria-selected="true">Blog Comment</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="tawk-chat-tab" data-toggle="tab" href="#tawkChatTab" role="tab" aria-controls="tawkChatTab" aria-selected="true">Tawk Chat</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="google-analytic-tab" data-toggle="tab" href="#googleAnalyticTab" role="tab" aria-controls="googleAnalyticTab" aria-selected="true">Google Analytic

                                        </a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="social-login-tab" data-toggle="tab" href="#socialLoginTab" role="tab" aria-controls="socialLoginTab" aria-selected="true">Social Login</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="facebook-pixel-tab" data-toggle="tab" href="#facebookPixelTab" role="tab" aria-controls="facebookPixelTab" aria-selected="true">Facebook Pixel</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="database-generate-tab" data-toggle="tab" href="#databaseGenerateTab" role="tab" aria-controls="databaseGenerateTab" aria-selected="true">Database Generate</a>
                                    </li>



                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9">
                                <div class="border rounded">
                                    <div class="tab-content no-padding" id="settingsContent">

                                        <div class="tab-pane fade show active" id="generalSettingTab" role="tabpanel" aria-labelledby="general-setting-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                  <form action="{{route('admin.generals_update')}}" method="POST" enctype="multipart/form-data">
                                                      @csrf
                                                      @method('PUT')                                                      <div class="form-group">
                                                          <label for="">Select Theme</label>
                                                           <select name="selected_theme" id="" class="form-control">


                                                          <option value="{{ $General->selected_theme }}">All Theme</option>
                                                              <option {{ $General->selected_theme == 0 ? 'selected' : '' }} value="1">Theme One</option>
                                                              <option {{ $General->selected_theme == 1 ? 'selected' : '' }} value="2">Theme Two</option>
                                                              <option {{ $General->selected_theme == 2 ? 'selected' : '' }} value="3">Theme Three</option>
                                                          </select>
                                                      </div>

                                                      <div class="form-group">
                                                            <label for="">Commission Type</label>
                                                            <select name="commission_type" id="" class="form-control">
                                                                <option {{ $General->commission_type  == 0 ? 'selected' : '' }} value="1">Commission</option>
                                                                <option {{ $General->commission_type  == 1 ? 'selected' : '' }} value="2">Subscription</option>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Live Chat</label>
                                                            <select name="live_chat" id="" class="form-control">
                                                                <option {{ $General->live_chat == 1 ? 'selected' : '' }} value="1">Enable</option>
                                                                <option {{ $General->live_chat == 0 ? 'selected' : '' }} value="1">Enable</option>

                                                            </select>
                                                        </div>

                                                      <div class="form-group">
                                                        <label for="">Show provide contact info</label>
                                                        <select name="show_provider_contact_info" id="" class="form-control">
                                                            <option {{ $General->show_provider_contact_info  == '1' ? 'selected' : '' }} value="1">Enable</option>
                                                            <option {{ $General->show_provider_contact_info  == '0' ? 'selected' : '' }} value="0">Disable</option>

                                                        </select>
                                                    </div>



                                                      <div class="form-group">
                                                          <label for="">Layout</label>
                                                          <select name="layout" id="" class="form-control">
                                                              <option {{ $General->layout == 'rtl' ? 'selected' : '' }} value="rtl">RTL right to left</option>
                                                              <option {{ $General->layout == 'ltr' ? 'selected' : '' }} value="ltr">LTR left to right</option>

                                                            </select>
                                                      </div>

                                                      <div class="form-group">
                                                          <label for="">Sidebar Large Header</label>
                                                          <input type="text" name="lg_header" class="form-control" value="{{ $General->lg_header }}">
                                                      </div>

                                                      <div class="form-group">
                                                          <label for="">Sidebar Small Header</label>
                                                          <input type="text" name="sm_header" class="form-control" value="{{ $General->sm_header }}">
                                                      </div>

                                                       <div class="form-group">
                                                          <label for="">Default Currency Name</label>
                                                          <select name="currency_name" id="" class="form-control select2">
                                                              <option value="">{{__('admin.Select Default Currency')}}
                                                            </option>
                                                             <option {{ $General->currency_name == 1 ? 'selected' : ''}} value="{{ $General->currency_name }}">Currency </option>
                                                            <option {{ $General->currency_name == 1 ? 'selected' : '' }} value="2">Currency</option>

                                                           </select>
                                                      </div>


                                                      <div class="form-group">
                                                          <label for="">Currency Icon</label>
                                                          <input type="text" name="currency_icon" class="form-control" value="{{ $General->currency_icon }}">
                                                      </div>


                                                      <div class="form-group">
                                                        <label for="">Currency Position</label>
                                                        <select name="currency_position" id="" class="form-control">
                                                            <option {{ $General->currency_position == 'before_price' ? 'selected' : '' }} value="before_price">Before Price</option>
                                                            <option {{ $General->currency_position == 'after_price' ? 'selected' : '' }} value="after_price">After Price</option>
                                                        </select>
                                                    </div>


                                                        <div class="form-group">
                                                            <label for="">Timezone</label>
                                                            <select name="timezone" id="" class="form-control select2">
                                                                <option {{ $General->timezone == 1 ? 'selected' : '' }} value="1" >Africa/Abidjan</option>
                                                                <option {{ $General->timezone == 2 ? 'selected' : '' }} value="0" >Africa/Accra</option>
                                                            </select>
                                                            </div>

                                                      <button class="btn btn-primary" type="submit">Update</button>

                                                  </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="logoTab" role="tabpanel" aria-labelledby="logo-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="{{ route('admin.logo_update') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="form-group">
                                                            <label for="">Existing Logo</label>
                                                            <div>
                                                                <img src="{{ asset($logoFavicon->logo) }}" alt="" width="100px">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">New Logo</label>
                                                            <input type="file" name="logo" class="form-control-file">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Footer Logo</label>
                                                            <div>
                                                                <img src="{{ asset($logoFavicon->footer_logo) }}" alt="" width="100px">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">New Logo</label>
                                                            <input type="file" name="footer_logo" class="form-control-file">
                                                        </div>



                                                        <div class="form-group">
                                                            <label for="">Existing Favicon</label>
                                                            <div>
                                                                <img src="{{ asset($logoFavicon->favicon) }}" alt="" width="100px">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New Favicon</label>
                                                            <input type="file" name="favicon" class="form-control-file">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="themeColorTab" role="tabpanel" aria-labelledby="themeColor-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="{{route('admin.theme_coler_update')}}" method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                         <div class="form-group">
                                                            <label for="">Theme One Color</label>
                                                            <input type="color" class="form-control" name="theme_one_color" value="{{ $ThemeColor->theme_one_color }}">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="">Theme Two Color</label>
                                                            <input type="color" class="form-control" name="theme_two_color" value="{{ $ThemeColor->theme_two_color }}">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="">Theme Three Color</label>
                                                            <input type="color" class="form-control" name="theme_three_color" value="{{ $ThemeColor->theme_three_color }}">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="tab-pane fade" id="cookieTab" role="tabpanel" aria-labelledby="cookie-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="{{route('admin.cookie_consent_update')}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">{{__('Allow Cookie Consent')}}</label>
                                                                    <select name="allow" id="" class="form-control">
                                                                        <option {{ $cookieConsent->allow==1 ? 'selected':'' }} value="1">Enable</option>
                                                                        <option {{ $cookieConsent->allow==0 ? 'selected':'' }} value="0">Disable</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">{{__('Border')}}</label>
                                                                    <select name="border" id="" class="form-control">
                                                                        <option {{ $cookieConsent->border=='none' ? 'selected':'' }} value="none">None</option>
                                                                        <option {{ $cookieConsent->border=='thin' ? 'selected':'' }} value="thin">Thin</option>
                                                                        <option {{ $cookieConsent->border=='normal' ? 'selected':'' }} value="normal">Norma</option>
                                                                        <option {{ $cookieConsent->border=='thick' ? 'selected':'' }} value="thick">Thick</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">{{__('Corner')}}</label>
                                                                    <select name="corners" id="" class="form-control">
                                                                        <option {{ $cookieConsent->corners=='none' ? 'selected':'' }} value="none">none</option>
                                                                        <option {{ $cookieConsent->corners=='small' ? 'selected':'' }} value="small">Small</option>
                                                                        <option {{ $cookieConsent->corners=='normal' ? 'selected':'' }} value="normal">Normall</option>
                                                                        <option {{ $cookieConsent->corners=='large' ? 'selected':'' }} value="large">Large</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="bg_color">Background Color</label>
                                                                    <input class="form-control" type="color" name="background_color" id="bg_color" value="{{ $cookieConsent->background_color }}">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="text_color">Text Color</label>
                                                                    <input class="form-control" type="color" name="text_color" id="text_color" value="{{ $cookieConsent->text_color }}">
                                                                </div>
                                                            </div>
                                                             <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="border_color">Border Color</label>
                                                                    <input class="form-control" type="color" name="border_color" id="border_color" value="{{ $cookieConsent->border_color }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="btn_bg_color">Button Color</label>
                                                                    <input class="form-control" type="color" name="button_color" id="btn_bg_color" value="{{ $cookieConsent->button_color }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="btn_text_color">Button Text Color</label>
                                                                    <input class="form-control" type="color" name="btn_text_color" id="btn_text_color" value="{{ $cookieConsent->btn_text_color }}">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Link Text</label>
                                                                    <input type="text" name="link_text" value="{{ $cookieConsent->link_text }}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Button Text</label>
                                                                    <input type="text" name="btn_text" value="{{ $cookieConsent->btn_text }}" class="form-control">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cookie_text">Message</label>
                                                            <textarea class="form-control text-area-5" name="message" id="cookie_text" cols="30" rows="5">{{ $cookieConsent->message }}</textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="recaptchaTab" role="tabpanel" aria-labelledby="recaptcha-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="{{route('admin.google_Recaptcha_update')}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="">Allow Recaptcha</label>
                                                            <select name="allow" id="allow" class="form-control">
                                                                <option {{ $GoogleRecaptcha->allow == 1 ? 'selected' : '' }} value="1">Enable</option>
                                                                <option {{ $GoogleRecaptcha->allow == 0 ? 'selected' : '' }} value="0">Disable</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Captcha Site Key</label>
                                                            <input type="text" class="form-control" name="site_key" value="{{ $GoogleRecaptcha->site_key }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Captcha Secret Key</label>
                                                            <input type="text" class="form-control" name="secret_key" value="{{ $GoogleRecaptcha->secret_key }}">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="tab-pane fade" id="blogCommentTab" role="tabpanel" aria-labelledby="blog-comment-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="{{route('admin.comment_type')}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="">Blog Comment Type</label>
                                                            <select name="comment_type" id="comment_type" class="form-control">
                                                                <option {{ $BlogComment->comment_type == 1 ? 'selected' : '' }} value="1">Manual Comment</option>
                                                                <option {{ $BlogComment->comment_type == 0 ? 'selected' : '' }} value="0">Facebook Comment</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Facebook App Id</label>
                                                            <input type="text" class="form-control" name="app_id" value="{{ $BlogComment->app_id }}">
                                                        </div>

                                                        <button class="btn btn-primary">{{__('admin.Update')}}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tawkChatTab" role="tabpanel" aria-labelledby="tawk-chat-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="{{route('admin.Tawk_update')}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="">Allow Live Chat</label>
                                                            <select name="allow" id="tawk_allow" class="form-control">
                                                                <option {{ $TawkChat->allow == 1 ? 'selected' : '' }} value="1">Enable</option>
                                                                <option {{ $TawkChat->allow == 0 ? 'selected' : '' }} value="0">Disable</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Tawk Chat Link</label>
                                                            <input type="text" class="form-control" name="chat_link" value="{{ $TawkChat->chat_link }}">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="googleAnalyticTab" role="tabpanel" aria-labelledby="google-analytic-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="{{route('admin.google_analytic_update')}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="">Allow Google Analytic</label>
                                                            <select name="allow" id="tawk_allow" class="form-control">
                                                                <option {{ $GoogleAnalytic->allow == 1 ? 'selected' : '' }} value="1">Enable</option>
                                                                <option {{ $GoogleAnalytic->allow == 0 ? 'selected' : '' }} value="0">Disable</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Analytic Tracking Id</label>
                                                            <input type="text" class="form-control" name="analytic_id" value="{{ $GoogleAnalytic->analytic_id }}">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="socialLoginTab" role="tabpanel" aria-labelledby="social-login-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="{{route('admin.social_login_update')}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="">Allow Login with Facebook</label>
                                                            <div>
                                                                <select class="form-control" name="allow_facebook_login">

                                                                      <option {{ $SocialLogin->allow_facebook_login == 0 ? 'selected' : '' }} value="1">Enable</option>
                                                                    <option {{ $SocialLogin->allow_facebook_login == 1 ? 'selected' : '' }} value="1">Disable</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Facebook App Id</label>
                                                            <input type="text" value="{{ $SocialLogin->facebook_app_id }}" class="form-control" name="facebook_app_id">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Facebook App Secret</label>
                                                            <input type="text" value="{{ $SocialLogin->facebook_app_secret }}" class="form-control" name="facebook_app_secret">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Facebook Redirect Url</label>
                                                            <input type="text" value="{{ $SocialLogin->facebook_redirect_url}}" class="form-control" name="facebook_redirect_url">
                                                        </div>



                                                        <div class="form-group">
                                                            <label for="">Allow Login with Gmail</label>
                                                            <div>



                                                                <select id="tawk_allow" class="form-control" name="allow_gmail_login">

                                                                          <option {{ $SocialLogin->allow_gmail_login == 0 ? 'selected' : '' }} value="1">Enable</option>
                                                                        <option {{ $SocialLogin->allow_gmail_login == 1 ? 'selected' : '' }} value="1">Disable</option>

                                                                    </select>

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Gmail Client Id</label>
                                                            <input type="text" value="{{ $SocialLogin->gmail_client_id }}" class="form-control" name="gmail_client_id">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Gmail Secret Id</label>
                                                            <input type="text" value="{{ $SocialLogin->gmail_secret_id }}" class="form-control" name="gmail_secret_id">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Gmail Redirect Url</label>
                                                            <input type="text" value="{{ $SocialLogin->gmail_redirect_url }}" class="form-control" name="gmail_redirect_url">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="facebookPixelTab" role="tabpanel" aria-labelledby="facebook-pixel-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="{{route('admin.allow_facebook_pixel_update')}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="">Allow Facebook Pixel</label>
                                                            <div>
                                                                 @if ($FacebookPixel->allow_facebook_pixel == 1)
                                                                <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="{{__('admin.Enable')}}" data-off="{{__('admin.Disable')}}" data-onstyle="success" data-offstyle="danger" name="allow_facebook_pixel">
                                                                @else
                                                                <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="{{__('admin.Enable')}}" data-off="{{__('admin.Disable')}}" data-onstyle="success" data-offstyle="danger" name="allow_facebook_pixel">
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Facebook App Id</label>
                                                         <input type="text" value="{{ $FacebookPixel->app_id }}" class="form-control" name="app_id">
                                                        </div>
                                                        <button class="btn btn-primary">Update</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="databaseGenerateTab" role="tabpanel" aria-labelledby="database-generate-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="" method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="alert alert-warning" role="alert">
                                                          <p>{{__('This feature not a regular feature, this will be use for version update. You can not trigger the button as your mind. When need to trigger the button we will mention on our version documentation')}}</p>
                                                        </div>
                                                        <button class="btn btn-primary">Update Database</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </section>
  </div>

@endsection
