<!DOCTYPE html>
<html lang="en">
            <!-- head included here -->
        <?php 
            include './includes/head.html';
        ?> 
        
    <body>
                <!-- Header -->
            <?php
                include './includes/header.html';
            ?>
                
        <div class="container">

                <!-- ul Link -->
            <?php
               include './includes/ul.html';
            ?>

                <!-- Pages htlm -->
            <?php
                if(isset($_GET['about-me'])){
                   include 'pages/about-me.html';

                }elseif(isset($_GET['my-dreams'])){
                   include 'pages/my-dreams.html';

                }elseif(isset($_GET['my-passions'])){
                    include 'pages/my-passions.html';

                }else{
                    include 'pages/home.html';
                }
            ?>
            
                <!-- Footer -->
            <?php
                include './includes/footer.html';
            ?>
        </div>


               
            
    </body>

</html>
