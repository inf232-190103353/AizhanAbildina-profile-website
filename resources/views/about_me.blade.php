
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
      <div style="padding:8px;"><a style="color:white; font-size:120%;" href="/about">{{ __("About me")}}</a></div>
      <div style="padding:8px;"><a style="color:white; font-size:120%;"  href="/blog">{{ __("Blog")}}</a></div>
      <div style="padding:8px;"><a style="color:white; font-size:120%;" href="/skills">{{ __("Skills")}}</a></div>
      <div style="padding:8px;"><a style="color:white; font-size:120%;"  href="/contacts">{{ __("Contact")}}</a></div>
</div>

<div id="polyscape-22" class="polyscape-background">
	    <div class="about_me" data-aos="zoom-out-up" data-aos-duration="2000"><i>
                <b>{{ __("HELLO, AND WELCOME TO MY PAGE!")}}</b><br>

                {{ __("My name is Aizhan, and  I am a student who is studying at Suleiman Demirel University in Kaskelen. I live in the city of Satpayev with  my family. The school I attended until I was 11 is also in the city. I studied at the Abay school number 4.")}}<br>

        <b>{{ __("Things I'm good at:")}}</b><br>

        {{ __("Almost everyone is good in at least one sport. The only competition I'm good at is basketball. At my school, almost everyone was obsessed with the sport, and so was I.every game period, my teacher made us play basketball together with other games. Over the years, my way of playing basketball has improved, and as I've studied the game, I've discovered other lessons. One of the lessons I learned is how to play as a team. When you play in a group, you depend on each other to win.")}}<br>

        {{ __("I was always energetic and lively. While many people feel awkward and strange making friends with me, I have no problem making new friends. I can quickly talk to everyone and get to know them.")}}
            </i></div>



	<div class="slideshow-container" >

		<div class="mySlides fade">
		  <img src="/img/img2.jpg" class="img2" >
		</div>

		<div class="mySlides fade">
		  <img src="/img/img3.jpg" class="img2" >
		</div>

		<div class="mySlides fade">
		  <img src="/img/img4.jpg" class="img2" >
		</div>

	</div>
</div>
<div style="background-color: rgba(0,0,0,0.8); width: 100%">
<div style="font-size: 240% ; padding: 20px; margin-left: 280px; color: white; font-style: italic;"  >{{ __("I am a second year student at Suleyman Demirel University.")}}</div>
<div style="color: white ; padding: 10px 80px;" data-aos="fade-up-right" data-aos-duration="2000">{{ __("Suleyman Demirel University (Kazakh: Сүлейман Демирел атындағы Университет, romanized: Súleıman Demırel atyndaǵy Ýnıversıtet, Russian: Университет имени Сулеймана Демиреля,Turkish: Süleyman Demirel Üniversitesi, abbreviated as SDU) is a private university in Kaskelen, Almaty, Kazakhstan. It is named after Süleyman Demirel, the former prime minister and president of Turkey.

The university was established in 1996, by the initiatives of the president of Kazakhstan, Nursultan Nazarbayev, and the former president of Turkey, Suleyman Demirel.")}}</div>
<div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"><img src="/img/univer.jpg" width="80%" style="margin-left: 150px;" ></div>
</div>



<script src={{asset('js/script.js')}}></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


</body>
</html>
