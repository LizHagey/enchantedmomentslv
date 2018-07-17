<!DOCTYPE html>
<!--
Enchanted Moments 
Princess Parties in Las Vegas
-->
<html>
    <head>
        <title>Enchanted Moments | Princess Parties Home Page</title>
        <meta name="description" content="Princess Parties in Las Vegas NV. Enchanted
              Moments provides an authentic princess experience that will create 
              many lasting memories!">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--        <script type="text/javascript" src="/javaScript/sliderScript.js">
    </script>-->
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>
    
    <body>
        <?php include_once("analyticstracking.php") ?>
        
        <div class="bodyBackground">
      <header id="pageOne">
       <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?> 
      </header>
            
        <nav id="pageOneNav" class='mainNav'>
          <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>   
        </nav>
            
            <div id="topMain">
                <div id="info">
                    <img id="logo" src="images/newLogo.png" alt="Pink Party"><br>
                    <h1 id="mainHead">Las Vegas Princess Parties</h1>
                    <p id="mainInfo">Enchanted Moments will bring the princesses and 
                    the party to you. All you have to do is decide who you want, 
                    call, and wait for the big day to arrive! Our princesses 
                    will do everything in our power to make your princess feel 
                    like a queen on her special day.</p>
                </div>
                
<!--                <div id="carousel">
                    <layer id="placeholderlayer"></layer><div id="placeholderdiv"></div>
 <              </div>-->

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
      <li data-target="#myCarousel" data-slide-to="9"></li>
      <li data-target="#myCarousel" data-slide-to="10"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <img src="/images/sittingPrincesses.jpg" alt="Cinderella with little princess" >
      </div>

      <div class="item">
          <img src="/images/cinderellaParty1.jpg" alt="Five princesses sitting on grass">
      </div>
        
      <div class="item">
          <img src="/images/cinderellaHuggingChild.jpg" alt="Cinderella hugging a child" >
      </div>
    
      <div class="item">
        <img src="/images/mermaidWGirl.JPG" alt="The Little Mermaid" >
      </div>
        
      <div class="item">
          <img src="/images/cinderellaParty2.jpg" alt="Cinderella with small girl">
      </div>

      <div class="item">
        <img src="/images/tinkSitting.jpg" alt="Tinker Bell" >
      </div>
        
      <div class="item">
        <img src="/images/IceQueenPrincessTalkingtoGirl.jpg" alt="Ice Queen & Princess" >
      </div>
        
      <div class="item">
          <img src="/images/belleCarousel.jpg" alt="Beauty" >
      </div>
        
      <div class="item">
          <img src="/images/fivePrincesses.jpg" alt="Five Princesses having fun" >
      </div>
           
      <div class="item">
          <img src="/images/cinderellaDancing.jpg" alt="Cinderella" >
      </div>
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

            </div>
            <div id="middle">
               
                <h1 id="middleHead">Party Packages</h1>
            </div>
                
               <div class='behindPackages'>
                <figure>
                    <h3 class='figureHead'><a href="/packages.php">Pop In Princess Party</a></h3>
                    <a href="/packages.php"><img src="/images/popInPict.jpg" alt="Ice Queen with Young Girl"></a>
                     <figcaption class="mainPageFigcaption">20 Minutes | $50</figcaption> 
                </figure>
               </div>
                
               <div class='behindPackages'>
                <figure>
                    <h3 class='figureHead'><a href="/packages.php">Enchanting Princess Party</a></h3>
                    <a href="/packages.php"><img src="/images/queenandprincess.jpg" alt="Ice Queen & Princess"></a>
                     <figcaption class="mainPageFigcaption">60 Minutes | $150</figcaption> 
                </figure>
               </div>
                
               <div class='behindPackages'>
                <figure>
                    <h3 class='figureHead'><a href="/packages.php">Royal Princess Party</a></h3>
                    <a href="/packages.php"><img src="/images/icePrincess3.jpg" alt="Ice Princess"></a>
                     <figcaption class="mainPageFigcaption">90 Minutes | $200</figcaption> 
                </figure>
               </div>
                
               <div class='behindPackages'>
                <figure>
                    <h3 class='figureHead'><a href="/packages.php">Princess Makeover Party</a></h3>
                    <a href="/packages.php"><img src="/images/birthdayGirl.jpg" alt="Birthday Girl"></a>
                     <figcaption class="mainPageFigcaption">120 Minutes | $300</figcaption> 
                </figure>
               </div>
                
            
            
            <footer>
             <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>    
            </footer>
        </div>
        
    </body>
</html>



