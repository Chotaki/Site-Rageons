<?php require("config/config.php")?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen">
        <!-- My css -->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!-- Animate -->
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

        <meta charset="UTF-8">
        <meta name="description" content="project presentation">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Orbitron:wght@700&display=swap" rel="stylesheet">

        <!-- Browser tab -->
        <link rel="icon" href="img/splash.png">
        <title>Rageon</title>
    </head>

    <body>
        
      <!-- NavBar -->
      <nav id="navbar">
        <div class="nav-wrapper bblue">
          <ul id="nav-mobile" class="center-align hide-on-med-and-down">
            <li><a href="#project">Our Project</a></li>
            <li><a href="#pitch">Pitch</a></li>
            <li><a href="#gameplay">Gameplay</a></li>
            <li><a href="#newsletter">Newsletter</a></li>
          </ul>
        </div>
      </nav>

      <!-- NavBar for Mobiles -->
      <ul class="sidenav" id="mobile-demo">
        <li><a href="#project">Our Project</a></li>
        <li><a href="#pitch">Pitch</a></li>
        <li><a href="#gameplay">Gameplay</a></li>
        <li><a href="#newsletter">Newsletter</a></li>
      </ul>

      <!-- Fixed Button to Download the Game -->
      <div class="fixed-action-btn toolbar">
        <a class="btn-floating btn-large borange">
          <i class="large material-icons">get_app</i>
        </a>
        <ul>
          <li class="borange"><a class="btn-floating orbitron">Dowload the Game</a></li>
        </ul>
      </div>

      <!-- Page Title -->
      <div class="rageons">
        <h1 class="center-align white-text animate__animated animate__zoomIn"><img class="size" src="img/logo.png" alt=""></h1>
      </div>

      <!-- All the content will have a margin of 20% on each side of the screen -->
      <div class="container">

        <!-- Our Project -->
          <h2 id="project" class="center-align">Our Project</h2>
          <div class="row valign-wrapper">
            <div class="col l6">
              <div class="card blue-neon">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/chara.png">
                </div>
              </div>
            </div>
            <div class="col l6">
              <div class="card-panel white blue-neon">
                <span class="torange">
                  We are 9 students from Gaming Campus. To finish our first and for some our second year in school, we were given a project: Create a Vertical Shooter in python based on the theme, futuristic, flying and birds. Three weeks and three types of student, tech, buisness and art but only one goal: create the best game possible.
                </span>
              </div>
            </div>
          </div>

          <!-- Pitch -->
          <h2 id="pitch" class="center-align">Pitch</h2>
          <div class="row valign-wrapper">
            <div class="col l6">
              <div class="card-panel white blue-neon">
                <span class="torange">
                  In year 2030, you are John and today is going to be a good day ! You put on your best outfit, take your overboard and leave the house to go to school. However something happens and your hunt start ! A pigeon just shit on your face and you want revenge. You will soon find out that this pigeon is the last one of his kind and it's the head of the city's pet. In order to finally catch and kill that stupid pigeon you will have to overcome an army of drones that were sent on you to stop you, but you don't care, you are going to succeed no matter what !
                </span>
              </div>
            </div>
            <div class="col l6">
              <div class="card blue-neon">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="img/ennemi.png">
                </div>
              </div>
            </div>
          </div>

          <!-- Gameplay -->
          <h2 id="gameplay" class="center-align">Gameplay</h2>
          <ul class="collapsible blue-neon">
            <li>
              <div class="collapsible-header torange"><i class="material-icons">healing</i>Attacks</div>
              <div class="collapsible-body white-text"><span>If you encounter with an ennemy, you have to make a choice : flee or fight ?
                You can just dodge their attacks and the game will continue or you can enter a fight. If you choose to fight, you have two types of attacks that you can use, either swing your overboard in their face, either use the power of your glove to attack them in a distance.
              </span></div>
            </li>
            <li>
              <div class="collapsible-header torange"><i class="material-icons">whatshot</i>Ennemis</div>
              <div class="collapsible-body white-text"><span>The drones of the city's head won't give you any mercy. The army is composed of four types of ennemies each with their own capacities.</span></div>
            </li>
            <li>
              <div class="collapsible-header torange"><i class="material-icons">widgets</i>Platforms</div>
              <div class="collapsible-body white-text"><span>Beware of the platforms, they are everywhere ! If you bump into one of them, your speed decreases and you might loose because the game won't wait for you...</span></div>
            </li>
            <li>
              <div class="collapsible-header torange"><i class="material-icons">power</i>Speed</div>
              <div class="collapsible-body white-text"><span>The main aspect of Rageon and what makes it so hard is that : the faster you go, the faster the game goes !</span></div>
            </li>
          </ul>

          <!-- Newsletter -->
          <h2 id="newsletter" class="center-align">Newsletter</h2>
          <div class="card-panel white center-align blue-neon">
            <span class="torange">
            Stay up to date with the release and updates of our game !
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix torange">contact_mail</i>
                <input type="email" name="email" class="validate">
                <label for="email" class="torange">Email</label>
                <span class="helper-text" data-error="Invalid Adress" data-success=""></span>
                <button class="btn waves-effect waves-light borange lighten-1" type="submit" action="queries/mail.php">Subscribe<i class="material-icons right">send</i></button>
            </div>
            </span>
          </div>

        </div>

        <!-- Footer -->
        <footer class="page-footer bblue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h3 class="white-text orbitron">RAGEON</h5>
                <p class="grey-text text-lighten-4">A platformer where you cannot finish a level without rage against a pigeon !</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h3 class="white-text">Contact us</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Discord</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Youtube</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container center-align">
            © 2023 Rageon
            </div>
          </div>
        </footer>

        <!--JavaScript at end of body for optimized loading-->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="js/script.js"></script>
    </body>
</html>