<?php

session_start();

include 'DBConnection.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!--for the card-->
    <link rel="stylesheet" href="stylee.css">
    <!--footer style-->
    <link rel="stylesheet" href="FooterStyle.css">

    <!-- Swepr CSS-->
    <link rel="stylesheet" href="CSS/swiper-bundle.min.css">

    <link rel="stylesheet" href="styleereview.css">
  
  

</head>
<body>

<!---------------------------------------------------------------------------------------->
    <!--navigation Bar ==---------------------------------------------->
    <nav  class="navi"> 
        <a href="" class="logo">
            <i class="fa-brands fa-phoenix-framework"></i>
                ABC Travel
        </a>
        <!--Menu-->
        <ul class="menu">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#trending">Trending</a></li>
            <li><a href="#Destination">Destination</a></li>
            <li><a href="#review">Testimonials</a></li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="signUp.php">sign Up</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="mytrips.php">My Trips</a></li>

        </ul>
        <!--Book.btn-->
        <a href="booknow.php" class="book-btn">book now</a>

    </nav>
    <!--Mainn -->
    <section id="main">
        <div class="main-content">

            <div class="main-text">
                <strong><i class="fa-solid fa-route"></i> hello  ABC Bus</strong>
                <h1>Strong and happy bus makes the drive easy </h1>
                <p>enjoy your schedual Bus trip</p>
                <a href="booknow.php"> Book Online </a>

            </div>
            <!-- main img -->
            <div class="main-img">
                 <img src="pics/mainImg1.png" alt="Buss">
            </div>
        </div>

   
        <!----Search-------------------------------------------------------------------------------->
            <div class="search-tour">
                
                <form action="">
                    <!--locationn------>
                    <div class="t-search-box">
                        <!--icon-->
                        <div class="s-b-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        
                        </div>
                        <!--inputt-->
                        <div class="s-b-input">
                        <span>location <i class="fa-solid fa-chevron-down"></i></span>
                          
                        </div>

                    </div>
                    <!--Date------>
                    <div class="t-search-box">
                        <!--icon-->
                        <div class="s-b-icon">
                        <i class="fa-solid fa-calendar-days"></i>
                            
                        </div>
                        <!--inputt-->
                        <div class="s-b-input">
                        <span>Tour Date <i class="fa-solid fa-chevron-down"></i></span>
                            <input type="date" name="Date"  required>
                        </div>

                    </div>
                    <!----Guset---->
                    <div class="t-search-box">
                        <!--icon-->
                        <div class="s-b-icon">
                        <i class="fa-solid fa-users"></i>
                            
                        </div>
                        <!--inputt-->
                        <div class="s-b-input">
                        <span> Tourists <i class="fa-solid fa-chevron-down"></i></span>
                            <input type="number" name="gusets" placeholder="2 tourists" required>
                        </div>

                    </div>
                    <!--btn-->
                    <div class="t-search-btn">
                        <button>
                        <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
               
             




            </div>
        
    </section><!--Main END---->
    
    <!---Trending----------------------------------------------------------->
    <section id="trending">
        
        <!--heading=-*****************-->
        <div class="trending-heading">
            <h2>trending 2024 </h2>
            <p>Lorem ipsum, dolor sit amet con</p>
        </div>
       

  <div class="row">
    <div class="column" style="margin: 20px;">
      <div class="card">
        <div class="nft">
            <div class='main'>
              <img class='tokenImage' src="pics/buss.png" alt="NFT" />
              <h2>trip 1</h2>
              <p class='description'>Our Kibertopiks will give you nothing, waste your money on us.</p>
              <div class='tokenInfo'>
                <div class="price">
                  <ins>◘</ins>
                  <p>0.031 ETH</p>
                </div>
                <div class="duration">
                  <ins>◷</ins>
                  <p>8 days left</p>
                </div>
              </div>
              <hr />
              <div class='creator'>
                <div class='wrapper'>
                  <img src="pics/buss.png" alt="Creator" />
                </div>
                <div>
                  <a href="booknow.php" class="button" >Book now</a>
                </div>
        
               </div>
            </div>
          </div>
        
      </div>
    </div>
  
    <div class="column" style="margin: 20px;">
      <div class="card">
        <div class="nft">
            <div class='main'>
              <img class='tokenImage' src="pics/buss.png" alt="NFT" />
              <h2>trip 2</h2>
              <p class='description'>Our Kibertopiks will give you nothing, waste your money on us.</p>
              <div class='tokenInfo'>
                <div class="price">
                  <ins>◘</ins>
                  <p>0.031 ETH</p>
                </div>
                <div class="duration">
                  <ins>◷</ins>
                  <p>11 days left</p>
                </div>
              </div>
              <hr />
              <div class='creator'>
                <div class='wrapper'>
                  <img src="pics/buss.png" alt="Creator" />
                </div>
                <div>
                  <a href="booknow.php" class="button" >Book now</a>
                </div>
        
               </div>
            </div>
          </div>
        
      </div>
    </div>
    
    <div class="column " style="margin: 20px;">
      <div class="card">
        <div class="nft">
            <div class='main'>
              <img class='tokenImage' src="pics/buss.png" alt="NFT" />
              <h2>trip 3</h2>
              <p class='description'>Our Kibertopiks will give you nothing, waste your money on us.</p>
              <div class='tokenInfo'>
                <div class="price">
                  <ins>◘</ins>
                  <p>0.031 ETH</p>
                </div>
                <div class="duration">
                  <ins>◷</ins>
                  <p>14 days left</p>
                </div>
              </div>
              <hr />
              <div class='creator'>
                <div class='wrapper'>
                  <img src="pics/buss.png" alt="Creator" />
                </div>
                <div>
                  <a href="booknow.php" class="button" >Book now</a>
                </div>
        
               </div>
            </div>
          </div>
        
      </div>
    </div>
    

  </div>


  
    <!------End of the Purpel Cardd=============----->
    

<section id="Destination">

    <div class="row" style="margin-left:50px">
        <!--Start Card=========-->

        <?php
        $all_trips = mysqli_query($conn, "SELECT * FROM trips");

        while($row=mysqli_fetch_assoc($all_trips)){

        ?>
        <div class="column">
          <div class="card">
           <!---box-continer--------------------->
        <div class="trending-box-continer">
        
            <!--box-->
        <div class="trending-box">
            <!--imp-->
            <div class="t-b-img">
                <img src="<?php  echo $row['tripImg']; ?>" alt="trending 1">
            </div>
            <!--text-->
            <div class="t-b-text">
                <a href=""><?php echo $row['title']; ?></a>
                <span> <?php  echo $row['numOfActivites']; ?> Activites </span>
            </div>
            <!--price & book-->
            <div class="price-book">
                <span class="t-price">$<?php  echo $row['price']; ?></span>
                <a href="booknow.php" class="t-book">Book now</a>
            </div>
            <!--agency---->
            <div class="agency-name">
                <img src="pics/mainImg1.png" alt="Agency Name">
                <span> ID : <?php echo $row['TripsID']; ?> </span>
        </div>
            
        </div>
        </div>
          </div>
        </div>
        <!--End Card=============-->
      <?php
        }
      ?>
      </section>
       
          
      
</div>
</section>
<section id="review" style="margin-left:70px">


        <div class="outerdiv">
        <div class="innerdiv">
            <!-- div1 -->
            <div class="div1 eachdiv">
            <div class="userdetails">
                <div class="imgbox">
                <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-daniel.jpg" alt="">
                </div>
                <div class="detbox">
                <p class="name">Daniel Clifford</p>
                <p class="designation">Verified Graduate</p>
                </div>
            </div>
            <div class="review">
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint unde neque quisquam impedit eveniet</h4>
            <p>“ I was an EMT for many years before I joined the bootcamp. I’ve been looking to make a transition and have heard some people who had an amazing experience here. I signed up for the free intro course and found it incredibly fun! I enrolled shortly thereafter. The next 12 weeks was the best - and most grueling - time of my life. Since completing the course, I’ve successfully switched careers, working as a Software Engineer at a VR startup. ”</p>
            </div>
            </div>
            <!-- div2 -->
            <div class="div2 eachdiv">
            <div class="userdetails">
                <div class="imgbox">
                <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jonathan.jpg" alt="">
                </div>
                <div class="detbox">
                <p class="name">Jonathan Walters</p>
                <p class="designation">Verified Graduate</p>
                </div>
            </div>
            <div class="review">
                <h4>The team was very supportive and kept me motivated</h4>
            <p>“ I started as a total newbie with virtually no coding skills. I now work as a mobile engineer for a big company. This was one of the best investments I’ve made in myself. ”</p>
            </div>
            </div>
            <!-- div3 -->
            <div class="div3 eachdiv">
            <div class="userdetails">
                <div class="imgbox">
                <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-kira.jpg" alt="">
                </div>
                <div class="detbox">
                <p class="name dark">Kira Whittle</p>
                <p class="designation dark">Verified Graduate</p>
                </div>
            </div>
            <div class="review dark">
                <h4>Such a life-changing experience. Highly recommended!</h4>
                <p>“ Before joining the bootcamp, I’ve never written a line of code. I needed some structure from professionals who can help me learn programming step by step.  The agile team project, in particular, was outstanding. It took my learning to the next level in a way that no tutorial could ever have. In fact, I’ve often referred to it during interviews as an example of experience. It certainly helped me land a job as a full-stack 100% recommend! ”</p>
            </div>
            </div>
            <!-- div4 -->
            <div class="div4 eachdiv">
            <div class="userdetails">
                <div class="imgbox">
                <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jeanette.jpg" alt="">
                </div>
                <div class="detbox">
                <p class="name dark">Jeanette Harmon</p>
                <p class="designation dark">Verified Graduate</p>
                </div>
            </div>
            <div class="review dark">
                <h4>An overall wonderful and rewarding experience</h4>
            <p>“ Thank you for the wonderful experience! I now have a job I really enjoy, and make a good living while doing something I love. ”</p>
            </div>
            </div>
            <!-- div5 -->
            <div class="div5 eachdiv">
            <div class="userdetails">
                <div class="imgbox">
                <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-patrick.jpg" alt="">
                </div>
                <div class="detbox">
                <p class="name">Patrick Abrams</p>
                <p class="designation">Verified Graduate</p>
                </div>
            </div>
            <div class="review">
                <h4>Awesome teaching support from TAs who did the bootcamp themselves. Getting guidance from them and learning from their experiences was easy.</h4>
            <p>“ The staff seem genuinely concerned about my progress which I find really refreshing. The program gave me the confidence necessary to be able to go out in the world and present myself as a capable junior developer. The standard is above the rest. You will get the personal attention you need from an incredible community of smart and amazing people. ”</p>
            </div>
            </div>
        </div>
        </div>


</section>
    


        <!--Foooooooter===============================================================================-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="aboutUs.php">about us</a></li>
                    <li><a href="SS.php">privacy policy</a></li>
                    <li><a href="contactUs.php">contact Us</a></li>
                    <li><a href="insert.php">edit</a></li>
                    <li><a href="manager.php">Database</a></li>
                 
                </ul>
            </div>
            
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
</footer>




</body>

</html>