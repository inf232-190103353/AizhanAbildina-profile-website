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
<body>
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


<div id="polyscape-3" class="polyscape-background">

<div class="skillscon" data-aos="flip-right" data-aos-duration="1300">
     <h1 >{{ __("Professional Skills")}}</h1>

        <p>HTML</p>
        <div class="container" id="container2">
          <div class="skills html" ">90%</div>
        </div>

        <p>CSS</p>
        <div class="container" id="container2">
          <div class="skills css">80%</div>
        </div>
        <p>JS</p>
        <div class="container" id="container2">
          <div class="skills js">70%</div>
        </div>

        <p>JavaScript</p>
        <div class="container" id="container2">
          <div class="skills java">65%</div>
        </div>

        <p>PHP</p>
        <div class="container" id="container2">
          <div class="skills php">60%</div>
        </div>
</div>
</div>

  <div style="margin-left: 50px ;margin-right: 50px ; margin-top: 20px ; font-style: italic; color: black;">{{ __("When I started as a developer, I thought that technical competences were all in our job. So, I continue training myself, trying to become every day a better developer. What I missed at the beginning it that our professional background doesn’t need only to be technical. It’s clear that if you want to play machine learning, you have to master python, Keras, TensorFlow, and all the other cool stuff we have nowadays. These are your tools. This is your playground. These are your hard skills. What you miss probably, is to focus also on soft ones. Soft skill helps to work better with others, get results easier, give more value on what you do. And if you think that soft skill doesn’t produce working software, read this article. I thought the same, but I boost my career only when I started to look at the whole professional, not just to the technical part. In this article, you will find ten skills that are important to become a better IT professional and some suggestions that will be useful for improving them.")}}</div>

  <div class="container3" style = "background-image: url('img/back3.jpg') ; width:90%; margin-top: 20px;">
    <h1 style="color: black">{{ __("SOFT SKILLS")}}</h1>
    <div class="bar front expert" data-skill={{ __("Decision maker")}}></div>
    <div class="bar back intermediate" data-skill={{ __("Adaptability")}}></div>
    <div class="bar front advanced" data-skill={{ __("Team-oriented")}}></div>
    <div class="bar front expert" data-skill={{ __("Strong work ethic")}}></div>
    <div class="bar learning" data-skill={{ __("Communication")}}></div>
    <div class="bar back intermediate" data-skill={{ __("Organized")}}></div>
    <div class="bar front advanced" data-skill={{ __("Creative")}}></div>
    <div class="bar back basic" data-skill={{ __("Leadership")}}></div>

  </div>


<script src={{asset('js/script.js')}}></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


</body>
</html>
