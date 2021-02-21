<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My profile</title>

    <link rel="stylesheet" href={{asset('css/style.css')}}>
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=a05de21a-865e-4d76-9606-47e1264fe781" type="text/javascript"></script>

</head>
<body>




<div id="polyscape-1" class="polyscape-background">
<div class = "menu1" ><a href="/about_me"><img src="/img/aboutme.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)" data-aos="fade-right" data-aos-duration="1600"></a></div>
<div class = "menu1" id="menu_skills"><a href="/skills"><img src="/img/skills.jpg" onmouseover="bigImg(this)" onmouseout="normalImg(this)" data-aos="fade-left" data-aos-duration="1700"></a></div>
<div class = "menu1" id="menu_blog"><a href="/blog"><img src="/img/blog.jpg" onmouseover="bigImg(this)" onmouseout="normalImg(this)" data-aos="fade-right" data-aos-duration="1600"></a></div>
<div class = "menu1" id="menu_contact" ><a href="/contacts"><img src="img/contact_me.jpg" onmouseover="bigImg(this)" onmouseout="normalImg(this)" data-aos="fade-left" data-aos-duration="1600"></a></div>
<p class="hello">Hello,my name is AIZHAN !</p>

    <div class="circle" onmouseover="bigCircle(this)" onmouseout="normalCircle(this)" data-aos="flip-left" data-aos-duration="2000"></div>
</div>



<div id="polyscape-2" class="polyscape-background">

    <div class="about_me" data-aos="zoom-out-up" data-aos-duration="2000"><i>
        <b>HELLO, AND WELCOME TO MY PAGE!</b><br>

        My name is Aizhan, and  I am a student who is studying at Suleiman Demirel University in Kaskelen. I live in the city of Satpayev with my family. The school I attended until I was 11 is also in the city. I studied at the Abay school number 4.<br>

<b>Things I'm good at:</b><br>

Almost everyone is good in at least one sport. The only competition I'm good at is basketball. At my school, almost everyone was obsessed with the sport, and so was I.every game period, my teacher made us play basketball together with other games. Over the years, my way of playing basketball has improved, and as I've studied the game, I've discovered other lessons. One of the lessons I learned is how to play as a team. When you play in a group, you depend on each other to win.<br>

I was always energetic and lively. While many people feel awkward and strange making friends with me, I have no problem making new friends. I can quickly talk to everyone and get to know them.
    </i></div>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/img2.jpg" class="img2" >
</div>

<div class="mySlides fade">
  <img src="img/img3.jpg" class="img2" >
</div>

<div class="mySlides fade">
  <img src="img/img4.jpg" class="img2" >
</div>

</div>
</div>



<div id="polyscape-3" class="polyscape-background">

<div class="skillscon" data-aos="flip-left"
     data-aos-duration="1500">
     <h1>My Skills</h1>

        <p>HTML</p>
        <div class="container">
          <div class="skills html">90%</div>
        </div>

        <p>CSS</p>
        <div class="container">
          <div class="skills css">80%</div>
        </div>
        <p>JS</p>
        <div class="container">
          <div class="skills js">70%</div>
        </div>

        <p>JavaScript</p>
        <div class="container">
          <div class="skills java">65%</div>
        </div>

        <p>PHP</p>
        <div class="container">
          <div class="skills php">60%</div>
        </div>
</div>
</div>



<div id="polyscape-4" class="polyscape-background" >
  <h1 class="keep">&bull; Keep in Touch &bull;</h1>

  <div id="container3" data-aos="zoom-in-right" data-aos-duration="1500">
  <div class="underline">
  </div>
  <div class="icon_wrapper">
    <img class="icon">
  </div>
  <form action="#" method="post" id="contact_form">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="My name is" name="name" id="name_input" required>
    </div>
    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="My e-mail is" name="email" id="email_input" required>
    </div>
    <div class="telephone">
      <label for="name"></label>
      <input type="text" placeholder="My number is" name="telephone" id="telephone_input" required>
    </div>
>
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="5" required></textarea>
    </div>

    <div class="submit">
      <input type="submit" value="Send Message" id="form_button" />
    </div>
  </form>
  </div>
</div>




<br>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<script src={{asset('js/script.js')}}></script>



</body>
</html>
