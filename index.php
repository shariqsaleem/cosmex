<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmex</title>
    <?php require_once "linkcss.php" ?>
</head>
<body>
    
<?php require_once "header.php" ?>

<!--- slider start -->
<div class="container-fluid">
<div class="slider-container">
        <div class="slider">
            <img src="images/hero1_img.png" class="slide active">
            <img src="images/slider1.jpeg" class="slide">
            <img src="images/slider2.jpeg" class="slide">
            <img src="images/slider3.jpeg" class="slide">
            <img src="images/slider4.jpeg" class="slide">
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>

    </div>

    <!--- slider end -->

     <!--- about start -->
         <section id="#about">
            <div class="about-area">
                <div class="container-xxl">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="abt-heading"><b><h3>About us</h3></b></div>
                            <div class="abt-heading2"><b><h1>Cosmex Distribution (U) LTD</h1></b></div>
                            <div class="abt-text"><p>At Cosmex, we are dedicated distributors of high-quality cosmetics and toiletries, bringing top beauty and personal care products to businesses across Uganda. With strategic locations at Lumumba Road inside the Pepsi Depot (behind Hindu Temple) and 5th Street Industrial Area, Kampala, we ensure efficient supply and accessibility for our clients. Our mission is to provide premium products that enhance beauty, hygiene, and well-being, backed by excellent customer service and reliability.</p></div>
                           

                        </div>
                    </div>
                </div>
            </div>
         </section>
      <!--- about end -->

<!---- products start -->
<section id="products">
  <div class="container-xxl">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        
        <div class="prod-heading2"><b><h1>Discover Our Products</h1></b></div>
        <div class="prod-heading"><b><h3>Product Categories</h3></b></div>
    </div>

   <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-6">
        <a href="cosmetics.php" class="prod-link">
           <div class="img-box1"><img src="images/prod-img.jpg" alt=""></div>
           <h3 class="prod-title">Cosmetics <i class="fa-solid fa-arrow-right fa-beat icon-set"></i></h3>
        </a>  
      </div>

     <div class="col-lg-6 col-md-6 col-sm-6">
        <a href="toiletries.php" class="prod-link">
        <div class="img-box2"><img src="images/prod-img2.png" alt=""></div>
        <h3 class="prod-title2">Toiletries <i class="fa-solid fa-arrow-right fa-beat icon-set2"></i></h3>
        </a>  
     </div>
   </div>

  </div>
</section>

<!---- products end -->



    <!---- contact start -->
    <section id="contact">
        <div class="container-xxl">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            
            <div class="contact-heading-area">
                <div class="line-set"></div>
                    <h1 class="contact-main-heading">Contact Us</h1>
                    <div class="line-set"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="contact-card">
                    <div class="div"></div>
                    <div class="card-img-area"><img src="images/main-logo.png" alt=""></div>
                    <h3 class="contact-heading">Contact Info</h3>
                    <p class="contact-num"><i class="fa-solid fa-phone contact-icon"></i>+256760464743</p>
                    <p class="address"><i class="fa-solid fa-location-dot contact-icon"></i>Lumumba Road inside pepsi depot, behind Hindu Temple</p>
                </div>

                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="contact-card">
                    <div class="div"></div>
                    <div class="card-img-area"><img src="images/main-logo.png" alt=""></div>
                    <h3 class="contact-heading">Contact Info</h3>
                    <p class="contact-num"><i class="fa-solid fa-phone contact-icon"></i>+256760464743</p>
                    <p class="address"><i class="fa-solid fa-location-dot contact-icon"></i>5th Street Industrial Area, Kampala Uganda</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!---- contact end -->



<?php require_once "footer.php" ?>

<?php require_once "linkjs.php" ?>
</body>
</html>