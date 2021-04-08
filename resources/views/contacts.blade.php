<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href={{asset('css/style.css')}}>
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=a05de21a-865e-4d76-9606-47e1264fe781" type="text/javascript"></script>
       <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
           <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
 <div class="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @php $locale = session()->get('locale'); @endphp
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @switch($locale)
                                    @case('kz')
                                    <img src="{{asset('img/kz.png')}}" width="30px" height="20x"> Kazakh
                                    @break
                                    @case('ru')
                                    <img src="{{asset('img/ru.png')}}" width="30px" height="20x"> Russian
                                    @break

                                    @default
                                    <img src="{{asset('img/us.png')}}" width="30px" height="20x"> English
                                @endswitch
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="lang/en"><img src="{{asset('img/us.png')}}" width="30px" height="20x"> English</a>
                                <a class="dropdown-item" href="lang/kz"><img src="{{asset('img/kz.png')}}" width="30px" height="20x"> Kazakh</a>
                                <a class="dropdown-item" href="lang/ru"><img src="{{asset('img/ru.png')}}" width="30px" height="20x"> Russian</a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
<div class="nav_menu" style="position:absolute;z-index: 100; top: 20px; left:30px; background-color: rgba(0,0,0,0.5);">
      <div style="padding:8px;"><a style="color:white; font-size:120%;" href="/">{{ __("Home")}}</a></div>
      <div style="padding:8px;"><a style="color:white; font-size:120%;" href="/about_me">{{ __("About me")}}</a></div>
      <div style="padding:8px;"><a style="color:white; font-size:120%;"  href="/blog">{{ __("Blog")}}</a></div>
      <div style="padding:8px;"><a style="color:white; font-size:120%;" href="/skills">{{ __("Skills")}}</a></div>
      <div style="padding:8px;"><a style="color:white; font-size:120%;"  href="/contacts">{{ __("Contact")}}</a></div>
</div>


 <div class="containerr" style="margin-left:300px;">
            <div class="row" style="background-color: rgba(0,0,0,0.4);">
                <div class="col-md-6 col-md-offset-3" style="background-color: rgba(255,255,255,0.5);" data-aos="flip-left" data-aos-duration="1500">
                    <h2>Contact me</h2>
                    <p>{{ __("Send me your message and we will get back to you as soon as possible")}} </p>
                    <form role="form" method="post" id="reused_form" >
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> {{ __("First Name:")}}</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> {{ __("Last Name:")}}</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email"> {{ __("Email:")}}</label>
                                <input type="text" class="form-control" id="email" name="email" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> {{ __("Phone:")}}</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="name"> {{ __("Message:")}}</label>
                                <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">{{ __("Post It!")}} </button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>



<script src={{asset('js/script.js')}}></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
