<!-- meta -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="author" content="Tobias Sigel">
<meta name="keywords" content="Tobias, Sigel, Curriculum, Vitae">
<meta name="description" content="Curriculum vitae Tobias Sigel">

<title>Tobias Sigel</title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/loader.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>

<script>
  $(window).load(function() {
    $(".se-pre-con").fadeOut("slow");;
  });

</script>

</head>


<body>
<div class="se-pre-con"></div>
<!-- used for loader -->
<!-- <div id="loader"></div> -->

<header class="header" id="headerID">
 <div class="burger">   

    <div class="burger__patty"></div>
    <div class="burger__patty"></div>
    <div class="burger__patty"></div>
    <div class="burger__bg"></div>
</div>

<!-- menu -->
  <nav class="menu">
    <div class="menu__brand">
      <a href="#"><div class="logo" id="logo-link"></div></a>
      
      <div class=info>  

        Tobias Sigel
        </br> <div class="menu__link"><a href="mailto:tobias.sigel@students.fhnw.ch"><i class="fa fa-envelope" aria-hidden="true"></i> mail me!</a></div>
      </div>
      
    </div>
    <ul class="menu__list">
      <li class="menu__item" id="welcome-link" > <a href="#" class="menu__link"><i class="fa fa-facebook-square">  </i> Welcome</a></li>
      <li class="menu__item" id="cv-link">       <a href="#" class="menu__link"><i class="fa fa-info-circle">      </i> Curriculum Vitae</a></li>
      <li class="menu__item" id="projects-link"> <a href="#" class="menu__link"><i class="fa fa-product-hunt">     </i> Projects</a></li>   
      <li class="menu__item" id="contact-link">  <a href="#" class="menu__link"><i class="fa fa-product-hunt">     </i> About / Contact</a></li>
     
    </ul>
  </nav>  

</header>

<!-- ***************************** MAIN-CONTENT********************************** -->

<main>

<!-- landingpage -->

<div class="container" id="landingpage-container">
<div class="titel">
  <h1>Welcome </h1>  
  today's <?php echo date('l, F jS, Y'); ?>
  <p> <i class="fa fa-clock-o" aria-hidden="true"></i> <a id="time"></a></p>
  <div class="emptydiv"></div>



 You are visitor number: <?php include("visitor-counter.php"); echo IncrementCounter(); ?>

  <p> This website is currently hosted on a RaspberryPi 3B, Apache2-Server and online since <div class="php_output"><?php

          $str   = file_get_contents('/proc/uptime');
          $num   = floatval($str);
          $secs  = fmod($num, 60); $num = (int)($num / 60);
          $mins  = $num % 60;      $num = (int)($num / 60);
          $hours = $num % 24;      $num = (int)($num / 24);
          $days  = $num;

          echo  $days . " days, " . $hours . " hours, " . $mins . " minutes and " . intval($secs) . " seconds!";?></div> 
  </p>
 
</div class="titel"> 


<div w3-include-html="footer.html"></div>
    
</div class="container">

<!-- CV -->

<div class ="container" id="cv-container">
    
    <div class="titel">
    <h2>Curriculum vitae</h2>
    <p></p>
    <div class="menu__link"><a href="mailto:tobias.sigel@students.fhnw.ch"><i class="fa fa-envelope" aria-hidden="true"></i> mail me!</a></div>  |   <div class="menu__link"><a href="documents\CV_TobiasSigel_de.pdf" download><i class="fa fa-download" aria-hidden="true"></i> download CV</a></div>

    </div>
   
   <div class="content-list">      
    
      <ul>
        <li>
             <span class="date">since 2017</span>  
             <span class="duration">until now</span>   
             <span class="text">Database evaluation & optimization at DynaEngineering AG. Windisch, AG</span>   
        </li>
        <li>
             <span class="date">since 2015</span>  
             <span class="duration">until now</span>   
             <span class="text">Bachelor of Science in IT, Course iCompetence. FHNW Windisch, AG</span>   
        </li>
        <li>
             <span class="date">2015 - 2015</span>  
             <span class="duration">4 months</span>     
             <span class="text">Alternative service (in lieu of military service) in KSB, Gardening & facility management. Baden, AG</span>    
        </li>
         <li>
             <span class="date">2014 - 2015</span>
             <span class="duration">8 months</span>
             <span class="text">Civil engineer at Ingenieurbüro Senn AG, support of civil engineering projects. Nussbaumen, AG</span>          
        </li>
        <li>
             <span class="date">2013 - 2014 </span>
             <span class="duration">8 months</span> 
             <span class="text">Alternative service (in lieu of military service) at Stage-on-air, supervising employees and coordinating workloads. Aarau, AG</span>
             <span class="sources"><div class="menu__link"><a href="Zeugnisse\Arbeitszeugnis stage-on-air.jpg" download><i class="fa fa-download" aria-hidden="true"></i> download employer's reference</a></div></span>        
        </li>
        <li>
             <span class="date">2010 - 2013 </span>
             <span class="duration">3 years</span> 
             <span class="text">Technical vocational baccalaurate diploma, Berufsschule Lenzburg. Lenzburg, AG</span>      
             <span class="sources"><div class="menu__link"><a href="Zeugnisse\BMS_Zeugnis.jpg" download><i class="fa fa-download" aria-hidden="true"></i> download certificate</a></div>  </br>
             <div class="menu__link"><a href="Zeugnisse\First Certificate.jpg" download><i class="fa fa-download" aria-hidden="true"></i> download first-certificate</a></div></span>
        </li>
        <li>
             <span class="date">2009 - 2013 </span>
             <span class="duration">4 years</span>
             <span class="text">Apprenticeship civil engineering, Porta AG. Brugg, AG / Interlaken, BE</span>       
             <span class="sources"><div class="menu__link"><a href="Zeugnisse\AZ_porta_merged.pdf" download><i class="fa fa-download" aria-hidden="true"></i> download employer's reference</a></div>
              <div class="menu__link"><a href="Zeugnisse\Fähigkeitsausweis.jpg" download><i class="fa fa-download" aria-hidden="true"></i> download certificate</a></div></span>   
        </li>
        <li>
             <span class="date">2006 - 2009</span>
             <span class="duration">3 years</span>
             <span class="text">Bezirksschule Klingnau. Klingnau, AG</span>        
        </li>
        <li>
             <span class="date">2000 - 2006</span> 
             <span class="duration">6 years</span> 
             <span class="text">Elementary school. Zürich, ZH</span>      
        </li>
      </ul>
   </div>

<div w3-include-html="footer.html"></div>
</div class ="container">
   
<!-- projects -->

<div class ="container" id ="projects-container">

 <div class="titel">
    <h2>Projects</h2>
    <p></p>
     <div class="menu__link"><a href="mailto:tobias.sigel@students.fhnw.ch"><i class="fa fa-envelope" aria-hidden="true"></i> mail me!</a></div> |
     <div class="menu__link"><a target="_blank" href="https://github.com/TobiasIsNotRegistered"><i class="fa fa-github" aria-hidden="true"></i> My GitHub</a></div>   
    </div>

 <div class="projects-list">      

      <ul>
        <li>
             <span class="title_1">This website</span>  
             <span class="title_2">CV hosted on a Raspberry Pi</span>   
             <span class="text">I always wanted to make my own website since I started studying IT. The raspberry was the perfect solution to host it on my own space and to learn everything related to it. The case was 3D-printed at FHNW-Windisch, the blueprints are from thingyverse.com. After setting up the Pi and getting some inspiration from codepen.io, I was eager to present my family & friends what I've worked for the past few days. That's why I decided to use the noIP - service to redirect some arbitrary, free adress (tobiassigel.redirectme.net) to our LAN. The raspberry actually informs noIP every 10 minutes about our WAN-adress, so I don't have to do this manually. Luckily I was also able to set my Raspberry's local IP through the router, which ensures that Port-Forwarding works. One challenge of this project was to constantly remind myself that I was using SASS (Syntactically Awesome Style Sheets) and had to activate it in order to see changes. A goal of mine was to keep everything super responsive; for mobiles, tablets as well as desktop's, but the different browsers supporting different technologies made this a bigger challenge than I've imagined it to be.</span>
             <span class="keywords">Keywords: Raspbian / Linux, PortForwarding / staticIP's, Html5, CSS3, JS, PHP, Sass, (Responsive-) Web-Design</span> 
             <span class="sources">
              <div class="menu__link"><a target="_blank" href="https://github.com/TobiasIsNotRegistered/tobiasisnotregistered.github.io/tree/loaderScreenAndMore"><i class="fa fa-github" aria-hidden="true"></i> GitHub-Link</a></div>
             </span> 
             <div class="images">     
             <a target="_blank" href="https://imgur.com/nFBbZch"><img src="https://i.imgur.com/nFBbZch.jpg" title="source: imgur.com" width="100%" /></a>
             <a target="_blank" href="https://imgur.com/Zfc4Tm0"><img src="https://i.imgur.com/Zfc4Tm0.jpg" title="source: imgur.com" width="100%" /></a> 
           </div>
        </li>

        <li>
            <span class="title_1">GroupHub</span>  
             <span class="title_2">IP5, FHNW Windisch</span>   
             <span class="text">The scope of the project was to design and implement a showcase for OpenDolphin, a framework which utilizes best practices from MVC, MVVM and other, well-known design-patterns. OpenDolphin is being developed by Canoo Engineering AG. After learning how to work with the framework during the initial phase, we decided to alter the project's specifications and implement multiple clients during the course of that semester. The final output included a server application, an android application as well as barebones JS and JavaFX clients. OpenDolphin makes heavy use of PresentationModels, a glass-pane layer put over the actual dataset in order to be able to present it easily. Every client has a ClientModelStore which stores the currently used Models, while the Server keeps them up-to-date by altering its own, corresponding PresentationModels. The only possibility to communicate with the server outside of PresentationModels was to issue commands, which means that the only way to send data from a client to server was via PresentationModels. The resulting effect is, that every entity; be it an object or a relation, had to be implemented as PresentationModels.  </span>
             <span class="keywords">Keywords:  OpenDolphin, JavaScript, Java, JavaFX, Android </span> 
             <span class="sources"><a target="_blank" href="http://www.canoo.com" class = "menu__link"><i class="fa fa-external-link" aria-hidden="true"></i> Canoo Engineering</a>
              <a href="https://github.com/TobiasIsNotRegistered/GroupHubPublic" target="_blank" class = "menu__link"><i class="fa fa-github" aria-hidden="true"></i> GitHub-Link</a></span> 
              
              <div class="images"> 
             <a target="_blank" href="https://imgur.com/mCU0Htj"><img src="https://i.imgur.com/mCU0Htj.jpg" title="source: imgur.com" width="100%"/></a>
             <a target="_blank" href="https://imgur.com/CfU2vHY"><img src="https://i.imgur.com/CfU2vHY.jpg" title="source: imgur.com" width="100%" /></a>
           </div>
        </li>

        <li>
            <span class="title_1">SVIN</span>  
             <span class="title_2">IP3, FHNW Windisch</span>   
             <span class="text">A website made for SVIN ("Schweizerische Vereinigung der Ingenieurinnen"). SVIN's goal was to promote MINT-professions for female students. The proposed solution on which we settled was to deliver a website which involved the following core-features: 
              <div class="projects-inside-list" id="projects-inside-list-svin">
              <ul>
                <li>1. Info- & landing page to inform about SVIN and its 25th anniversary</li>
                <li>2. Svinfographics: statistical overviews</li>
                <li>3. Timelime about past- & future events</li>
                <li>4. Biographies: a space to upload and maintain biographies of famous female engineers</li>
                <li>5. Member-Area: enables networking by offering a feature which matches members based on their profile-attributes (tag based)</li>
                <li>6. Multilingual: french/german translations</li>
              </ul>
            </div class="projects-inside-list">
            After evaluating the requirements our team decided to use WordPress, as it was well documented and widely used. In the first semester of this project, my role was the one of the requirement-engineer. I had to make sure that all requirements were well documented and that there were no misconceptions between the development team (us) and the customer, as they usually generate a lot of useless information and can cost a lot of time. The second semester was more flexible in terms of roles; altough I was assigned the role of information-manager, we often switched tasks or reassigned them as it made sense. </span>
             <span class="keywords">Keywords: WordPress, BuddyPress, Requirements-Engineering, Selenium - Testing, D3 (JS-library), PHP, Responsive Webdesign</span> 
             <span class="sources">
            <a target="_blank" href="http://www.svin.ch/cms/nc/de/home.html" class = "menu__link"><i class="fa fa-external-link" aria-hidden="true"></i> SVIN (official - not by us)</a>
              </br>
             <a target="_blank" href="https://svin25.ch/" class = "menu__link"><i class="fa fa-external-link" aria-hidden="true"></i> SVIN (our page)</a>
           </span>         
        </li> 

         <li>
            <span class="title_1">Mini - MiningRig</span>  
             <span class="title_2">the hype of blockchain</span>   
             <span class="text">After investing some time into Cryptocurrencies and getting hooked, I decided that I wanted to try this out myself. After getting registered on an exchange and buying my first fractions of a Bitcoin, I was lucky to see the market skyrocket to the 2017's all-time high. Seeking for a less volatile, more stable source of income, mining seemed to be the perfect solution. I invested some of my winnings in an over-the-top GPU which I added to my current setup. In order to be able to mine 24/7, but also to use my new graphical processing power for fun, e.g. gaming, I decided to make the whole setup mobile and built it into a service-tray. A current problem I have at the moment is that the setup powers down after some mining sessions, stating ErrorCode 42, KernelPower. I suspect the GTX970 GPU to be the source of the problem, altough I can't explain it right now. Currently I'm using nicehash to let itself decide whichever algorithm is the most efficient, but I plan to alter that in the near future. Also, a future project could be to set-up a monitoring website for the rig, altough there are already a lot of valuable solutions existing.</span> 
             <span class="keywords">Keywords: Mining, Blockchain, Cryptocurrencies, Hardware-monitoring</span> 
             <span class="sources"></span>
               <div class="images">  
                    <a target="_blank" href="https://imgur.com/l8o4eXx"><img src="https://i.imgur.com/l8o4eXx.jpg" title="source: imgur.com" width="100%" /></a>
                    <a target="_blank" href="https://imgur.com/Ux2OxOq"><img src="https://i.imgur.com/Ux2OxOq.jpg" title="source: imgur.com" width="100%" /></a>             
             </div>
        </li>          

         <li>
            <span class="title_1">Audio-Visualisation with Processing</span>  
             <span class="title_2">Module "Media Computing"</span>   
             <span class="text">A fun, voluntary project I made while learning for the module "Media Computing". We extracted the magnitude and frequency of the incoming signal (microphone or an existing song) using fft (fast-fourier transformation). I splitted the frequencies into three bands: low, mid & high. Frequencies are usually distributed in a logarithmic manner, which is why I only considered the lowest 5% of the frequencies to be low frequencies. After playing around with simply drawing the magnitude of the signal at the right frequency, I started experimenting with some methods the processing library offered, such as pushMatrix- & popMatrix. This enabled me to rotate the drawing according to the amplitude of the corresponding frequency (louder music results in faster rotation). Each drawn line, sometimes perceived as dots or smirks (because the song is very fast, for example), actually represents one certain frequency. Because I wanted to represent this fact even more, I implemented a text-feature which only displays the frequency of a signal if it goes over a hardcoded treshold. A really simple beat-detection algorithm, if you will. With this in mind, I tried to find the right values for the tresholds to correctly display the names of the kickdrum, hihats and snares as they were playing. This didn't work out well enough, as in today's music-production, every song is heavily compressed and signals can get obscurred by others, which is why I resorted in displaying the plain old frequency in hz.</span>
             <span class="keywords">Keywords: Processing, Java, Visualisation</span> 
             <span class="sources">
              <a target="_blank" href="https://processing.org/" class = "menu__link"><i class="fa fa-external-link" aria-hidden="true"></i> Download Processing</a>              
              <a target="_blank" href="http://code.compartmental.net/tools/minim/" class = "menu__link"><i class="fa fa-external-link" aria-hidden="true"></i> Minim (Processing Sound Library, needed)</a>
              <div class="menu__link"><a href="documents\analyze_sound.txt" download><i class="fa fa-download" aria-hidden="true"></i> Download source code</a></div>
              </br></span>
               <div class="images">  
           <a target="_blank" href="https://imgur.com/JNcG387"><img src="https://i.imgur.com/JNcG387.png" title="source: imgur.com" width="100%"/></a>
           <a target="_blank" href="https://imgur.com/CSK7zkc"><img src="https://i.imgur.com/CSK7zkc.png" title="source: imgur.com" width="100%"/></a>             
             </div>
        </li>  

        <li>
            <span class="title_1">A game with Processing</span>  
             <span class="title_2">First workshop!</span>   
             <span class="text">My first real coding-project. Processing is a small IDE which offers a really simple-to-use Java-Setup in order to enable fun learning projects. This little game was created in 2016 during my first coding-workshop at the FHNW. After reaching some level of functionality I decided to make use of the simple idea and add some minimalistic styling, such as the background and various sounds.</span> 
             <span class="keywords">Keywords: Processing, Java, Game-Design</span> 
             <span class="sources">
              <a target="_blank" href="https://processing.org/" class = "menu__link"><i class="fa fa-external-link" aria-hidden="true"></i> Download Processing</a>    
              <div class="menu__link"><a href="documents\SNAKE_v13_Final_Game.zip" download><i class="fa fa-download" aria-hidden="true"></i> Download Project</a></div>
              </br></span>
               <div class="images">  
           <a target="_blank" href="https://imgur.com/VRc1cu2"><img src="https://i.imgur.com/VRc1cu2.jpg" title="source: imgur.com" width="100%" /></a>
           <a target="_blank" href="https://imgur.com/kxH37lg"><img src="https://i.imgur.com/kxH37lg.jpg" title="source: imgur.com" width="100%" /></a>             
             </div>
        </li>      

       
      </ul>
   </div>

<div w3-include-html="footer.html"></div>

</div class="container">

<!-- contacts -->

<div class ="container" id ="contact-container">

 <div class="titel">
    <h2>Contact </h2> 
    <div class="menu__link"><a href="mailto:tobias.sigel@students.fhnw.ch"><i class="fa fa-envelope" aria-hidden="true"></i> mail me!</a></div>  
</div>

<div class="content-list">
  <ul>
    <li>
            <span class="date">About</span>  
            <span class="duration">this guy</span>   
            <span class="text">
            <img src="images/about.jpg" title="Tobias sigel" width="100%" />
          I'm an IT-student @FHNW-Windisch, studying the course "iCompetence". My skillset and personal interests revolves around management, design and usability. In my freetime you'll find me producing music, exercising, hanging out with friends, gaming, or working on a project like this.</span> 
    </li>
     <li>
     <span class="date">Music</span>  
            <span class="duration">leave a like!</span>   
            <span class="text"><iframe width="100%" height="auto" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/398975976&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe></span> 
          </li>
      <li>
      <span class="date">Contact & social networks</span>  
            <span class="duration"></span>   
            <span class="text">
              <ul>
                <li>
                  <a class = "menu__link target="_blank" href="https://www.facebook.com/TobiasSigel" width="auto"><i class="fa fa-facebook"></i>acebook</a></li>
                  <li>
                  <a class = "menu__link target="_blank" href="https://soundcloud.com/stream"><i class="fa fa-soundcloud"></i> Soundcloud</a></li>
                  <li>
                  <a class = "menu__link target="_blank" href="https://www.xing.com/profile/Tobias_Sigel2/cv"><i class="fa fa-xing"></i> Xing</a></li>
                  <li>
                  <a class="menu__link" href="mailto:tobias.sigel@students.fhnw.ch"><i class="fa fa-envelope" aria-hidden="true"></i> Mail me!</a> </li>
                  <li>
                    <a class="menu__link"><div id="contentToCopy" onclick="copyToClipboard('#contentToCopy')"><i class="fa fa-phone"></i> 076 437 85 15 <i class="fa fa-copy" title="click to copy"></i></div></a>
                  </li> 
              </ul>
             </span> 
        </li>  
  </ul>

</div>

<div w3-include-html="footer.html"></div>
 
</div class="container">


</main>
</body>


<!-- *************************** JS: Include Footer************************** -->

<!-- *************************** JS: MENU************************************ -->
<script type="text/javascript">
(function() {
  
  var Menu = (function() {
    var logo = document.querySelector('#logo-link')
    var burger = document.querySelector('.burger');
    var menu = document.querySelector('.menu');
    var menuList = document.querySelector('.menu__list');
    var brand = document.querySelector('.menu__brand');
    var menuItems = document.querySelectorAll('.menu__item');
    
    var active = false;
    
    var toggleMenu = function() {
      if (!active) {
        menu.classList.add('menu--active');
        menuList.classList.add('menu__list--active');
        brand.classList.add('menu__brand--active');
        burger.classList.add('burger--close');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.add('menu__item--active');
        }
        
        active = true;
      } else {
        menu.classList.remove('menu--active');
        menuList.classList.remove('menu__list--active');
        brand.classList.remove('menu__brand--active');
        burger.classList.remove('burger--close');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.remove('menu__item--active');
        }
        
        active = false;
      }
    };
    
    var bindActions = function() {
      burger.addEventListener('click', toggleMenu, false);
 
      for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].addEventListener('click', toggleMenu, false); 
        }  
      logo.addEventListener('click', toggleMenu, false);  
    };
    
    var init = function() {
      bindActions();
     
    };
    
    return {
      init: init
    };
    
  }());
  
  Menu.init();

  
}());
</script>

<!-- *************************** JS: CURRENT TIME************************************ -->

<script>
(function () {

    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
        document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime()
        }, 1000);
    }
    startTime();
})();
</script>

<!-- *************************** JS: HIDE DIVS************************************ -->
<script type="text/javascript">

  window.onload = function() { 
    //only display the landingpage-container when entering the site

    triggerLoader(); 
    document.getElementById('headerID').style.display = 'none';   
    

    //adding event-listeners to the menu-buttons
    document.getElementById('welcome-link').addEventListener('click', function (){  
      hideAllDivs(); 
      document.title = "Welcome!";
      document.getElementById('landingpage-container').style.display = 'block';      
      
    }, false);

    document.getElementById('cv-link').addEventListener('click', function (){  
      hideAllDivs(); 
      document.title = "Curriculum vitae";
      document.getElementById('cv-container').style.display = 'block';      
      
    }, false);

     document.getElementById('projects-link').addEventListener('click', function (){  
      hideAllDivs(); 
      document.title = "Projects";
      document.getElementById('projects-container').style.display = 'block';      
     
    }, false);

     document.getElementById('contact-link').addEventListener('click', function (){  
      hideAllDivs();  
      document.title = "Contact";
      document.getElementById('contact-container').style.display = 'block';      
     
    }, false);


    function triggerLoader() {
    hideAllDivs();
    showPage();
    var myVar = setTimeout(showPage,0);
    }

    function showPage() {
    //document.getElementById("loader").style.display = "none";
    document.getElementById("landingpage-container").style.display = "block";
    document.getElementById('headerID').style.display = 'block';
    w3.includeHTML();
    }

    function hideAllDivs(){
    document.getElementById('landingpage-container').style.display = 'none';  
    document.getElementById('cv-container').style.display = 'none';
    document.getElementById('projects-container').style.display = 'none';
    document.getElementById('contact-container').style.display = 'none';
    }
    

};
</script>

<!--- * *********************** JS: Copy content to clipboard ************** -->
<script type="text/javascript">
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
  replaceContentInContainer("copied to clipboard");
}
</script>

<script type="text/javascript"><!--
function replaceContentInContainer(content) {
var container = document.getElementById('contentToCopy');
container.innerHTML = content;
}
</script>






