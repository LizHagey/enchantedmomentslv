<!DOCTYPE html>
<!--
Enchanted Moments 
Princess Parties in Las Vegas
Party Packages
-->
<html>
    <head>
        <title>Enchanted Moments | Packages</title>
        <meta name="description" content="Party Packages for Enchanted Moments Las Vegas Princess Parties">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#activityList").hide();
    $("#activityChoices").click(function(){
        $("#activityList").toggle();
    });
});
$(document).ready(function(){
    $("#activityList2").hide();
    $("#activityChoices2").click(function(){
        $("#activityList2").toggle();
    });
});
</script>
   <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>     
    </head>
    
    <body>
        <?php include_once("analyticstracking.php") ?>
        
        <div class="bodyBackground">
            
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?> 
        </header>
            
        <nav>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>   
        </nav>
            
<!--            Package 1 - Pop in princess party-->
            <div class="packageBoxTwoTop">
                <h1 class="partyInfo">Pop In Princess Party</h1>
                <img class="packagePictTwoTop" src="/images/packageOneNew.jpg" alt="Ice Queen and Ice Princess">
           
              <div class="packagesTwoTop">
                
                  <h4>20 Minutes: $50</h4>
                  <h4>Package Includes:</h4>
 
                <ul class="packageList">
                    <li>Greeting</li>
                    <li>Available for pictures and singing Happy Birthday</li>
                </ul>
                <p>* Add a princess for $30</p>
                <p>* travel fee may apply</p>
                <a href="/contact/contact.php" class="bookButtonTwo">Book Party</a>
              </div>
            </div>

<!--            Package Two - Enchanting Princess Party-->
            <div class="packageBoxTwo">
                <h1 class="partyInfo">Enchanting Princess Party</h1>
                <img class="packagePictTwo" src="/images/packageTwo.jpg" alt="Ice Queen and Ice Princess">
            
              <div class="packagesTwo">
                 
                   <h4>60 Minutes: $150</h4>
                   <h4>Package includes:</h4>
                   
                <ul class="packageList">
                    <li>Greeting</li>
                    <li id="activityChoices">Choice of 1 Activity - Click here to view choices &darr;</li>
                    <ul id="activityList"><br>
                        <p><strong>Activity Choices</strong></p>
                        <li>Face Painting</li>
                        <li>Nail Painting</li>
                        <li>Make Up</li>
                        <li>Glitter Tattoos</li>
                        <li>Coronation Ceremony for everyone (additional $2 per child)</li>
                        <li>Crown decorating (additional $5 per child)</li><br>
                    </ul>
                    <li>Games</li>
                    <li>Birthday Princess Coronation Ceremony</li>
                    <li>Available for pictures and singing Happy Birthday</li>
                </ul>
                <p>* Add a princess for $75</p>
                <p>* travel fee may apply</p>
                <a href="/contact/contact.php" class="bookButtonTwo">Book Party</a>
               </div>
            </div>
                
<!--           Package 3 - Royal Princess Party-->
            <div class="packageBoxTwo">
                <h1 class="partyInfo">Royal Princess Party</h1>
                <img class="packagePictTwo" src="/images/packageThree.jpg" alt="Ice Queen and Ice Princess">
            
              <div class="packagesTwo">
                
                   <h4>90 Minutes: $200</h4>
                   <h4>Package includes:</h4>
                   
                <ul class="packageList">
                    <li>Greeting</li>
<!--                    <li>Sing-a-long</li>-->
                    <li id="activityChoices2">Choice of 2 Activities - Click here to view choices &darr;</li>
                    <ul id="activityList2"><br>
                        <p><strong>Activity Choices</strong></p>
                        <li>Face Painting</li>
                        <li>Nail Painting</li>
                        <li>Make Up</li>
                        <li>Glitter Tattoos</li>
                        <li>Coronation Ceremony for everyone (additional $2 per child)</li>
                        <li>Crown decorating (additional $5 per child)</li><br>
                    </ul>
                    <li>Games</li>
                    <li>Birthday Princess Coronation Ceremony</li>
                    <li>Available for pictures and singing Happy Birthday</li>
                </ul>
                <p>* Add a princess for $120</p>
                <p>* travel fee may apply</p>
                <a href="/contact/contact.php" class="bookButtonTwo">Book Party</a>
               </div>
            </div>   
            
             
<!--            Package 4 - Princess Make Over Party-->
            <div class="packageBoxTwo">
                <h1 class="partyInfo">Princess Makeover Party</h1>
                <img class="packagePictTwo" src="/images/packageFour.jpg" alt="Ice Queen and Ice Princess">
            
              <div class="packagesTwo">
                
                   <h4>120 Minutes: $300<br>Package includes:</h4>
                   
                <ul class="packageList">
                    <li>Greeting</li>
                    <li>Makeup</li>
                    <li>Nails</li>
                    <li>Glitter Tattoos</li>
                    <li>Princess Lessons</li>
<!--                    <li>Sing-a-long</li>-->
                    <li>Coronation Ceremony for all children</li>
                    <li>Games</li>
                    <li>Available for pictures and singing Happy Birthday</li>
                </ul>
                <p>* 15 children max - $10 for each additional child in attendance</p>
                <p>* Add a princess for $165</p>  
                <p>* travel fee may apply</p>
                <a href="/contact/contact.php" class="bookButtonTwo">Book Party</a>
              </div>
            </div>

            <footer>
             <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>    
            </footer>
        </div>
        
    </body>
</html>


