<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="website.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="Website Grand Bazar/Grand Bazar Favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Website Grand Bazar/Grand Bazar Favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Website Grand Bazar/Grand Bazar Favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
    <title>GR∧ND B∧Z∧R</title>
  </head>
  
  <body>
    <?php

        include 'dbconn.php';
?>
    <header>
      <div class="logo"><img src="R (1).png" alt="" srcset=""> </div> 
        
      <div class="menu">
        <a href="#">
          <ion-icon name="close" class="close"></ion-icon>
        </a>
  
      </div>
      <div class="search">
  
        <a href=""><input type="text" placeholder="Search" id="input"><ion-icon class="s" name="search"></ion-icon>
        </a>
      </div>
      <div class="heading">
        <ul>
          <li><a href="website.php" class="under">HOME</a></li>
          <li><a href="#shop" class="under">SHOP</a></li>
          <li><a href="#shop" class="under">PRODUCTS</a></li>
          <li><a href="#footer" class="under">CONTACT</a></li>
          <li><a href="#footer" class="under">ABOUT</a></li>
          <li><a href="Website Grand Bazar/bazarlogin.php" class="under"><span class="material-symbols-outlined">
            account_circle
            </span> LOGIN</a></li>
           <li><a href="Website Grand Bazar/Cart.php" class="under"><span class="material-symbols-outlined">
            shopping_cart
            </span> CART</a></li>
        </ul>
      </div>
      <div class="heading1">
        <ion-icon name="menu" class="ham"></ion-icon>
      </div>
    </header>
    
    <section>
      <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="https://images.pexels.com/photos/3962294/pexels-photo-3962294.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">
          <!-- <div class="text">Caption Text</div> -->
        </div>
        
        <div class="mySlides fade">
          <img src="https://images.pexels.com/photos/6347888/pexels-photo-6347888.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">
          <!-- <div class="text">Caption Two</div> -->
        </div>
        
        <div class="mySlides fade">
          <img src="https://images.pexels.com/photos/2292953/pexels-photo-2292953.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" style="width:100%">
          <!-- <div class="text ">Caption Three</div> -->
        </div>
        
        <div class="mySlides fade">
          <img src="https://images.pexels.com/photos/1229861/pexels-photo-1229861.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">
          <!-- <div class="text ">Caption Three</div> -->
        </div>
        
        <div class="mySlides fade">
          <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">
          <!-- <div class="text ">Caption Three</div> -->
        </div>
        
        </div>
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span> 
        </div>
        <br/>
        <br> 
        <div class="cat">
          <div class="cat-wrapper">
        <div>
          <h2> <span> Top Offers </span></h2>
          <br><br>
          <img class="image" src="Website Grand Bazar/Images/Website/5375636.jpg" alt="" srcset="" onclick="myfun()">
        </div>
        
          <br><br>
              <div>
              <h2> <span id="shop"> Categories </span></h2>
            </div>
              <div class="pics">
                  <div class="first">
                        <a href="Website Grand Bazar/men.php"><img src="Website Grand Bazar/Images/Website/2018-summer-collar-short-sleeve-T-shirt-men-Spring-Summer-new-Top-men-brand-clothing-slim.webp" alt="">
                          <span>Men</span>
                        </a>
                  </div>
                  <div class="second">
                    <a href="Website Grand Bazar/women.php"><img src="Website Grand Bazar/Images/Website/79d3ceed-21be-4d3c-a35b-9a36a7c76d4b.jfif" alt="">
                      <span>Women</span>
                    </a>
              </div>
              <div class="third">
                <a href="Website Grand Bazar/home.php"><img src="Website Grand Bazar/Images/Website/R.jfif" alt="">
                  <span>Home</span>
                </a>
          </div>
          <div class="fourth">
            <a href="Website Grand Bazar/beauty.php"><img src="Website Grand Bazar/Images/Website/natural-beauty-brands-41.jpg" alt="">
              <span>Beauty</span>
            </a>
      </div>
      <br>
      <br>
      <div class="fifth">
        <a href="Website Grand Bazar/Electronics.php"><img src="Website Grand Bazar/Images/Website/Sony-1024x595.jpg" alt="">
          <span>Electronics</span>
        </a>
  </div>

  <div class="sixth">
    <a href="Website Grand Bazar/Appliances.php"><img src="Website Grand Bazar/Images/Website/fbefd96f0547a2351bab2ba380f4077f.png" alt="">
      <span>Appliances</span>
    </a>
</div>

<div class="seventh">
  <a href="Website Grand Bazar/mobiles.php"><img src="Website Grand Bazar/Images/Website/R (2).jfif" alt="">
    <span>Mobiles</span>
  </a>
</div>

<div class="eighth">
  <a href="Website Grand Bazar/KIDS.php"><img src="Website Grand Bazar/Images/Website/CPSIAfortoysandproductsforchildren.jpg" alt="">
    <span>Toys & Baby</span>
  </a>
</div>
              </div>
          </div>
       
  </div>
    </section>
    <br><br><br><br><br><br>
</div>
<br><br><br><br><br><br>  
        <div class="footerup"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <img src="Website Grand Bazar/Images/Website/2022-05-03.png" alt="">
          <img src="Website Grand Bazar/Images/Website/2022-05-031.png" alt="">
          <img src="Website Grand Bazar/Images/Website/2022-05-032.png" alt="">
          <img src="Website Grand Bazar/Images/Website/2022-05-034.png" alt="">
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      
    <footer>
      <br><br>
      <div class="footer0">
        <h1 id="footer">GR∧ND B∧Z∧R</h1>
      </div>
      <div class="footer1 ">
        Connect with us at<div class="social-media">
          <a href="#">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
          <a href="#">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
          <a href="#">
            <ion-icon name="logo-youtube"></ion-icon>
          </a>
          <a href="#">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
          <a href="#">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </div>
      </div>
      <div class="footer2">
        <div class="product">
          <div class="heading">Products</div>
          <div class="div">Sell your Products</div>
          <div class="div">Advertise</div>
          <div class="div">Pricing</div>
          <div class="div">Product Buisness</div>
          <div class="div"><a href="Website Grand Bazar/sort.php" style="text-decoration: none; color:white"> Sort Products</a></div>
          <div class="div"><a href="Website Grand Bazar/search.php" style="text-decoration: none; color:white"> Filter Products</a></div>
  
        </div>
        <div class="services">
          <div class="heading">Services</div>
          <div class="div">Return</div>
          <div class="div">Cash Back</div>
          <div class="div">Affiliate Marketing</div>
          <div class="div">Others</div>
        </div>
        <div class="Company">
          <div class="heading">Company</div>
          <div class="div">Complaint</div>
          <div class="div">Careers</div>
          <div class="div">Affiliate Marketing</div>
          <div class="div">Support</div>
        </div>
        <div class="GetHelp">
          <div class="heading">Get Help</div>
          <div class="div">Help Center</div>
          <div class="div">Privacy Policy</div>
          <div class="div">Terms</div>
          <div class="div" ><a href="Website Grand Bazar/login.php" style="text-decoration: none; color:white">Users Details</a> </div>
        </div>
      </div>
      <div class="footer3">Copyright © <h4>GR∧ND B∧Z∧R</h4> 2022-2028</div>
    </footer>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="website.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    
  </body>
</html>