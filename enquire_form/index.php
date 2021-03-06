<!DOCTYPE html>
<html lang="en">
<head>
<title>Travel Lanka Visit</title>
<meta charset="utf-8">

<link rel="icon" href="images/logo.gif">
<link rel="shortcut icon" href="images/logo.gif">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.ui.totop.js"></script>


<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'random',
        pagination: false, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    });
    $("#tabs").tabs();
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.html"><img src="images/logo.gif" alt=""></a></h1>
      <div class="clear"></div>
    </div>
    <div class="menu_block">
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="index.html">Home</a></li>
          <li class="with_ul"><a href="#">About Us</a>
            <ul>
              <li><a href="agency.html">Agency</a></li>
               <li><a href="about_me.html">About me</a></li>
              <!--li><a href="#">Team</a></li-->
            </ul>
          </li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="tours.html">Tours</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contacts.html">Contacts</a></li>
          <li><a href="formpage.html">Enquire Now</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</header>
<div class="main">
  <div class="container_12">
    <div class="grid_12">
      <div class="slider-relative">
        <div class="slider-block">
          <div class="slider"> <a href="#" class="prev"></a><a href="#" class="next"></a>
            <ul class="items">
              <li><img src="images/slide.jpg" alt="">
                <div class="banner">
                  <div>THERE ARE PLENTY OF PLACES</div>
                  <br>
                  <span> that are worth seeing</span> </div>
              </li>
              <li><img src="images/sigiriya.jpg" alt=""></li>
              <li><img src="images/sigiriya2.jpg" alt=""></li>
              <li><img src="images/kandy.jpg" alt=""></li>
              <li><img src="images/kandy2.jpg" alt=""></li>
              <li><img src="images/polonnaruwa.jpg" alt=""></li>
              <li><img src="images/ella98.jpg" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h3>Top Destinations</h3>
      </div>
      <div class="boxes">
        <div class="grid_4">
          <figure>
            <div><img src="images/page1_sigiriya.bmp" width="360" height="337" alt=""></div>
            <figcaption>
              <h3>Sigiriya</h3>
              Sigiriya will offer the visitors to witness a gallery of 5th-century paintings coupled with unrivalled landscaped gardens that are unmatched by any modern-day citadel in the world. <a href="#" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="grid_4">
          <figure>
            <div><img src="images/page1_kandy.jpg" width="360" height="337" alt=""></div>
            <figcaption>
              <h3>Kandy</h3>
              Kandy is known as the cultural capital of Sri Lanka as well as it symbolizes the rich cultural heritage of the country. Kandy houses the tooth relic of the Lord Buddha, in the famous ‘Dalada Maligawa’ or the ‘Temple of the Tooth’. <a href="#" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="grid_4">
          <figure>
            <div><img src="images/page1_ella.jpg" width="360" height="337" alt=""></div>
            <figcaption>
              <h3>Nuwara Eliya/Ella</h3>
              Nuwara Eliya is a charming town in Sri Lanka affectionately known as the “Little England” that is located in the highland of the island. When you walk through the gorgeous tea plantations of world famous Ceylon Tea. <a href="#" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="clear"></div>
      </div>
      <div class="grid_8">
        <div id="tabs">
          <ul>
            <li><a href="#tabs-1">Our vehical fleet</a></li>
            <li><a href="#tabs-2">Top Hotels</a></li>
            <li><a href="#tabs-3">Top Destinations</a></li>
          </ul>
          <div class="clear"></div>
          <div class="tab_cont" id="tabs-1"> <img src="images/Kia Sportage.jpg" width="246" height="130" alt="">
            <div class="extra_wrapper">
              <div class="text1">Kia Sportage </div>
              <p class="style1"><a href="http://www.autoasia.lk" class="col2">Click here</a> for more info about these vehicals from Autoasia.lk </p>
              Make :korea<br> 
              Model:Kia Sportage<br>
              Year :2012<br>
              Location :Colombo<br>
              Options :Air Condition, Power Steering, Power Mirror<br>
              Rent Price :Rs.135,000.00 (condition Apply)<br>
              Additional Info :Air condition,power steering,Power/Shutter,automatic,Price negotiation depends on rental period,Good running condition.

               <a href="http://www.autoasia.lk/ourfleet.php" class="btn">Details</a>
              <div class="clear "></div>
            </div>



            <div class="clear cl1"></div>
            <img src="images/Toyota Prius 3rd Gen.jpg" width="246" height="130" alt="">
            <div class="extra_wrapper">
              <div class="text1 tx1">Toyota Prius 3rd Gen</div>
               Make :Japan<br>
               Model :96<br>
               Year :2011<br>
               Location :Colombo<br>
               Options :Air Condition, Power Steering, Power Mirror<br>
               Rent Price :Rs.88,000.00 (condition Apply)<br>
               Additional Info :Air condition,power steering,Power/Shutter,automatic,Price negotiation depends on rental period,Good running condition.<br>
              
              <div class="clear"></div>
              <a href="http://www.autoasia.lk/ourfleet.php" class="btn bt1">Details</a>
              <div class="clear "></div>  
            </div>
          </div>

          
          <div class="tab_cont" id="tabs-2"> <img src="images/hotel-hilton.jpg" width="246" height="130" alt="">
            <div class="extra_wrapper">
              <div class="text1">Hotel Hilton </div>
              <!--p class="style1"-->
                Hilton is one of the largest and fastest growing hospitality companies in the world, with more than 5,100 properties with nearly 838,000 rooms in 103 countries and territories.<br>
               Hilton is one of the largest and fastest growing hospitality companies in the world, with more than 5,100 properties with more than 838,000 rooms in 103 countries and territories. <br>
               In the nearly 100 years since our founding, we have defined the hospitality industry and established a portfolio of 14 world-class brands, including our flagship Hilton Hotels & Resorts brand, which is the most recognized hotel brand in the world.<br> 
               Our premier brand portfolio also includes Waldorf Astoria Hotels & Resorts, Conrad Hotels & Resorts, Canopy by Hilton, Curio Collection by Hilton, Tapestry Collection by Hilton, DoubleTree by Hilton, Embassy Suites by Hilton,<br>
                Hilton Garden Inn, Hampton by Hilton, Tru by Hilton, Homewood Suites by Hilton, Home2 Suites by Hilton and Hilton Grand Vacations. We have more than 69 million members in our award–winning customer loyalty program, Hilton Honors..</p>


               <a href="http://www3.hilton.com/en/index.html" class="btn">Details</a>
              <div class="clear "></div>
            </div>
            <div class="clear cl1"></div>
            <img src="images/cinnamon-grand.jpg" width="246" height="130" alt="">
            <div class="extra_wrapper">
              <div class="text1 tx1">Cinomon Grand Hotel </div>
                
              we are very much our own city within Colombo, bringing the best of tropical city life into the many spaces of our grand hotel. We are the largest five-star hotel on the island, housing 501 rooms, 14 restaurants, 10 meeting and event spaces,
               and multiple outdoor venues designed for the best city moments to happen right at our doorstep.<br>
              We’ve taken a no-holds-barred approach when it comes to creating the right moments for you when you stay with us, play with us, dine and dance with us.<br>
               The hotel brings together a curated city experience from fine dining to seafood markets, old English pubs to a Sri Lankan village the epitome of exquisite living; creating an eclectic mix for diverse tastes. Our rooms are many, and varied to suit the needs, moods and tastes of every visitor.
              <div class="clear"></div>
              <a href="http://www.cinnamonhotels.com" class="btn bt1">Details</a>
              <div class="clear "></div>
            </div>
          </div>
          <div class="tab_cont" id="tabs-3"> <img src="images/sigiriya2.jpg"  width="246" height="130" alt="">
            <div class="extra_wrapper">
              <div class="text1">Sigiriya </div>
              Sigiriya will offer the visitors to witness a gallery of 5th-century paintings coupled with unrivalled landscaped gardens that are unmatched by any modern-day citadel in the world.
               <a href="https://en.wikipedia.org/wiki/Sigiriya" class="btn">Details</a>
              <div class="clear "></div>
            </div>
            <div class="clear cl1"></div>
            <img src="images/page1_kandy.jpg" width="246" height="130" alt="">
            <div class="extra_wrapper">
              <div class="text1 tx1">Kandy</div>
              Kandy is known as the cultural capital of Sri Lanka as well as it symbolizes the rich cultural heritage of the country. Kandy houses the tooth relic of the Lord Buddha,
               in the famous ‘Dalada Maligawa’ or the ‘Temple of the Tooth’.
              <div class="clear"></div>
              <a href="https://en.wikipedia.org/wiki/Kandy" class="btn bt1">Details</a>
              <div class="clear "></div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="newsletter_title">NewsLetter </div>
        <div class="n_container">
          <form id="newsletter" action="#">
            <div class="success">Your subscribe request has been sent!</div>
            <div class="text1">Sign up to receive our newsletters </div>
            <label class="email">
              <input type="email" value="email address" >
              <span class="error">*This is not a valid email address.</span> </label>
            <div class="clear"></div>
            <a href="#" class="" data-type="submit"></a>
          </form>
          <ul class="list">
            <li><a href="#">You can get information about attractive places</a></li>
            <li><a href="#">Enjoy our quality hotels</a></li>
            <!--li><a href="#">Rame sum dr sit ame </a></li>
            <li><a href="#">Bem psum dr sit ameteko </a></li>
            <li><a href="#">Nem dsum dr sit amewas </a></li>
            <li><a href="#">Vcem psum dr sit </a></li>
            <li><a href="#">Zdfem psum dr sittr amewe </a></li-->
          </ul>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="bottom_block">
    <div class="container_12">
      <div class="grid_2 prefix_2">
        <ul>
          <li><a style="font-size:25px;" href="faqs.html"><b>FAQ</b></a></li>
          <!--li><a href="#">People Say</a></li-->
        </ul>
      </div>
      <div class="grid_2">
        <ul>
          <li><a style="font-size:25px;" href="about.html"><b>About Us</b></a></li>
          <!--li><a href="#">Partners</a></li-->
        </ul>
      </div>
      <div class="grid_2">
        <ul>
          <li><a style="font-size:25px;" href="#"><b>Travel Lanaka Visit</b></a></li>
          <!--li><a href="#">Family Travel</a></li-->
        </ul>
      </div>
      <div class="grid_2">
        <h4>&nbsp;&nbsp;&nbsp;<b>Contact Us:</b><br/>
        <b> <img src="images/whatsapp.png" width=15% alt=""> TEL: +94 71 720 0881 </b>  <br></h4>
        
        <a href="#">&nbsp;&nbsp;&nbsp;<b>ayeshtravel96window@yahoo.com</b></a> </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <div class="copy"> Travel Lanka Visit &copy; 2018 | <a href="#">Privacy Policy</a> | Design by: <a href="#">FIK</a> </div>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>