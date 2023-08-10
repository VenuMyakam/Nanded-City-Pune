
<?php ob_start();
//ini_set('session.cookie_lifetime', 60 * 60 * 24 * 1);
session_start();


$_SESSION['cid']=$_POST['citizencode'];
/*$_SESSION['cid']='1233456';*/

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Kalasree - Bagyasree</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sportify template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="bqGMDpWm1-UzTZh75SjQ63JLnXiIn5IDVe7tZ7UARHk" />
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="styles/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="styles/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/viewbox.css">
<link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<!-- <link rel="stylesheet" type="text/css" href="styles/jquery-ui.css"> -->
<link rel="stylesheet" type="text/css" href="styles/min.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-96x96.png">
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145921340-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

 

  gtag('config', 'UA-145921340-1');

</script>

 
</head>
<body id="myPage" data-spy="scroll" data-target=".main_nav" data-offset="70">

<div class="super_container">
<header class="header">
<div class="header_wrap d-flex flex-row align-items-center justify-content-center">
<div class="logo"><a href="https://nandedcitypune.com/" target="_blank"><img src="images/logo_1.png" alt=""></a></div>
<nav class="main_nav">
<ul class="d-flex flex-row align-items-center justify-content-center">
<li><a href="#home"><i class="fa fa-home" aria-hidden="true"></i></a></li>
<li><a href="#about">projects</a></li>
<li><a href="#amenities">project Amenities</a></li>
<li><a href="#floorplans">Floor Plans</a></li>
<li><a href="#layout">Master Layout</a></li>
<!-- <li><a href="#site">site highlights</a></li> -->
<li><a href="#ab-nan">about nandedcity</a></li>
<li><a href="#contact">contact us</a></li>
</ul>
</nav>


<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
</div>
</header>
<header class="fixed_header">
<div class="header_wrap d-flex flex-row align-items-center justify-content-center">
<div class="logo"><a href="https://nandedcitypune.info"><img src="images/logo_1.png" alt=""></a></div>
<nav class="main_nav fix-nav">
<ul class="d-flex flex-row align-items-center justify-content-center">
<li><a href="#home"><i class="fa fa-home" aria-hidden="true"></i></a></li>
<li><a href="#about">projects</a></li>
<li><a href="#amenities">project Amenities</a></li>
<li><a href="#floorplans">Floor Plans</a></li>
<li><a href="#layout">Master Layout</a></li>
<li><a href="#ab-nan">about nandedcity</a></li>
<li><a href="#contact">contact us</a></li>
</ul>
</nav>

<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
</div>
</header>
<div class="menu">
<div class="menu_door door_left"></div>
<div class="menu_door door_right"></div>
<div class="menu_content d-flex flex-column align-items-center justify-content-center">
<div class="menu_close">close</div>
<div class="menu_nav_container">
<nav class="menu_nav text-center">
<ul>
<li><a href="#home"><i class="fa fa-home" aria-hidden="true"></i></a></li>
<li><a href="#about">projects</a></li>
<li><a href="#amenities">project Amenities</a></li>
<li><a href="#floorplans">Floor Plans</a></li>
<li><a href="#layout">Master Layout</a></li>
<!-- <li><a href="#site">site highlights</a></li>-->
<li><a href="#ab-nan">about nandedcity</a></li>
<li><a href="#contact">contact us</a></li>

</ul>
</nav>
</div>

</div>
</div>
<!-- START MOD -->
 <div class="slick-carousel" id="home">
   <div>
    <img src="images/clap-your-self.jpg" class="img-responsive" alt="Clap for yourself">
    <div class="bn-avail">
<button data-modal-trigger="trigger-1" class="trigger">
<a href="#" class="btn">
<img src="images/avail-bn-img.png" /></a>
</button>
</div>
    <!--  <h1>2 New Neighbourhoods.<br>Infinite Possibilities.</h1> -->
   </div>

   <div>
   	<img src="images/hurry-up.jpg"  class="img-responsive" alt="Clap for yourfamily">
    <div class="hu-avail">
<button data-modal-trigger="trigger-1" class="trigger">
<a href="#" class="btn">
<img src="images/avail-bn-img.png" /></a>
</button>
</div>
<!--  <-- <h1>Homes designed for you.<br> A lifestyle common to none.</h1> -->
 </div>

  <!--  <div>
   	<img src="images/clap-your-friend.jpg"  class="img-responsive" alt="Clap for yourfriend">
    <h1>Title Title title</h1> 
   </div> -->

   <div>
    <img src="images/ks-bs-launching.jpg"  class="img-responsive" alt="Bageshree-Kalashree launching two new Neighbourhoods">
    <div class="lu-avail">
<button data-modal-trigger="trigger-1" class="trigger">
<a href="#" class="btn">
<img src="images/avail-bn-img.png" /></a>
</button>
</div>
    <!-- <h1>Title Title title</h1> -->
   </div>

</div>
      <!-- END MOD -->
 
<section class="enq-bg d-none d-lg-block d-sm-none">
  <div class="frm-over d-none d-lg-block"></div>
  <div class="container">
    <div class="row">
      <form id="enquirysub" name="enquirysub" class="form-inline offset-lg-1 md-tab-ml">
        <h2>ENQUIRE NOW</h2>
        <div class="form-group">
          <div class="col-md-12 pr">
            <input type="text" name="name" placeholder="Name" class="form-control enq-frm">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12 pr">
            <input type="text" name="email" placeholder="Email" class="form-control enq-frm">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12 pr">
            <input type="text" name="mobile" placeholder="Mobile Number" class="form-control enq-frm">
            <input type="hidden" name="citizencode"  value="<?php echo $_SESSION['cid'];?>">
            <input type="hidden" name="message"  value="N/A">
            <input type="hidden" name="enqtype"  value="N/A">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
          <input type="submit" name="submit" value="submit" class="enquiry-btn">
<!--           <span class="enquire_text">Or Call: <a href="tel:+91 20 67275300">+91 20 67275300</a></span>
 -->      
 <div id="subresults"></div>
   </div>
      </div>
      </form>
    </div>
  </div>
</section>

    </div>



  </div>
  
 <!-- /container --></div>


<!-- <div class="socail-icons">
  <ul class="list-inline">
   <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
  </ul>
</div> -->

<div class="avail">
<button data-modal-trigger="trigger-1" class="trigger">
  <a href="#" class="btn">
  avail offers</a>
</button>
</div>


<div class="intro" id="about">
  <div class="container">
    <div class="row revealIn">
  <div class="text-center col-12 revealIn">
  <h2>our PROJECTS</h2>
</div>

<!-- <div  class="col-lg-5 col-md-12 col-12 col-sm-12 d-sm-block d-lg-none none">
    <div class="project">
      <img src="images/bs-img.jpg" />
    </div>
  </div> -->
  
  <div class="col-lg-6 col-12  col-sm-6  none">
     <div class="pro-con2">
      <div class="pro-logo"><img src="images/bs-pro-logo.png" /></div>
    <div class="intro_box_title in-con p-pad2"><h3 class="ka-tl">COZY.COMFORTABLE. CONVENIENT.</h3>
      <p>Bageshree shares its name with Hindustani Classical raga from the Kafi thaat, first sung by Tansen, one of the 'navratnas' of Akbar's court. With housing developments popping up everywhere, we decided that optimized housing is the need of the hour - Homes that cater to the changing demands of modern city life.<br>With all conveniences right around the corner, Bageshree offers 2 BHK apartments with cozy and comfortable vibes. Spread across 5 buildings, the neighbourhood is planned and designed to provide optimum living spaces with more open area. Inspired by the evening raga, the name Bageshree does enough justice to this neighbourhood as it provides sunlight and ventilation. For a comfortable and cozy stay, book your apartment - only at Bageshree.
</p>
    </div>
  </div>
  </div>

  <!-- <div  class="col-lg-5 col-sm-6 col-12 offset-lg-1 none">
    <div class="project">
      <img src="images/kalasree-building.jpg" />
    </div>
  </div> -->
  <div class="col-lg-6 col-12 col-sm-6 sc-none none">
    <div class="pro-con">
      <div class="pro-logo">
        <img src="images/ks-pro-logo.png" />
      </div>
    <div class="intro_box_title in-con p-pad1"><h3 class="ka-tl">Homes that suit your lifestyle</h3>
      <p> 
     Kalashree is inspired by the raga composed by Pt. Bhimsen Joshi which is a combination of Kalawati and Bageshree. A new-age
world calls for new-age requirements. Kalashree - the new neighbourhood spreading across 5 buildings caters to the significant needs of the modern working professionals who want more. Offering 2.5 BHK apartments, the topologies of these apartments are dictated by the lifestyle patterns and family structures of new age professionals. The neighbourhood is intrinsically designed to offer a cohesive living environment to professionals, children and elderly alike.
      </p>
    </div>
  </div>
</div>

<div class="col-12 mr"></div>



  <!-- <div  class="col-lg-5 col-xs-12 col-sm-5 col-xs-12 d-none d-lg-block">
    <div class="project">
      <img src="images/bs-img.jpg" />
    </div>
  </div> -->

  <div  class="col-lg-5 col-sm-6 col-12 offset-lg-1 d-lg-none sm-none">
    <!-- <div class="project">
      <img src="images/bs-img.jpg" />
    </div> -->
    <div class="pro-con">
    <div class="pro-logo"><img src="images/bs-pro-logo.png" /></div>
    <div class="intro_box_title in-con p-pad1"><h3 class="ka-tl">COZY.COMFORTABLE. CONVENIENT.</h3>
<p>Bageshree shares its name with Hindustani Classical raga from the Kafi thaat, first sung by Tansen, one of the 'navratnas' of
Akbar's court. With housing developments popping up everywhere, we decided that optimized housing is the need of
the hour - Homes that cater to the changing demands of modern city life.<br>With all conveniences right around the corner, Bageshree offers 2 BHK apartments with cozy and comfortable vibes. Spread across 5 buildings, the neighbourhood is planned and designed to provide optimum living spaces with more open area. Inspired by the evening raga, the name Bageshree does enough justice to this neighbourhood as it provides sunlight and ventilation. For a comfortable and cozy stay, book your apartment - only at Bageshree.</p>
    </div>
  </div>
  </div>

  <div  class="col-lg-5 col-sm-6 col-12 offset-lg-1 d-lg-none sm-none">
    <!-- <div class="project">
      <img src="images/common-img.jpg" />
    </div> -->
    <div class="pro-con">
       <div class="pro-logo">
        <img src="images/ks-pro-logo.png" />
      </div>
    <div class="intro_box_title in-con p-pad1"><h3 class="ka-tl">Homes that suit your lifestyle</h3>
<p> Kalashree is inspired by the raga composed by Pt. Bhimsen Joshi which is a combination of Kalawati and Bageshree. A new-age world calls for new-age requirements. Kalashree - the new neighbourhood spreading across 5 buildings caters to the
significant needs of the modern working professionals who want more. Offering 2.5 BHK
apartments, the topologies of these apartments are dictated by the lifestyle patterns and family structures of new age
professionals. The neighbourhood is intrinsically designed to offer a cohesive living environment to professionals, children
and elderly alike.</p>
    </div>
  </div>
  </div>

<div class="th_btn">
<a href="#" id="salpek" data-original-title="" data-id="1" data-toggle="modal" data-target="#popupboost">
<i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download Brochure</a>
</div>

</div>
</div>
</div>

<div class="classes ame-bg" id="amenities">
<div class="container-fluid">
<div class="row">
<div class="col">
<div class="section_title_container text-center">
<div class="section_title revealIn"><h2>Project Amenities</h2></div>
</div>

<div class="container no-pad">
<div class="row revealIn" id="team">
<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center" class="member">
  <div class="am-tl">
<img src="images/am1.png" alt="">
  <p>Gardens & Parks</p>
</div>
<!-- <div class="member-info">
  <div class="member-info-content">
  Clubhouse with <br>lawn area</div>
</div> -->
</div>
</div>

<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
  <div class="am-tl">
<img src="images/am2.png" alt="">
<p>Playground<br>(Other than school playgrounds)</p>
</div>
<!-- <div class="member-info">
<div class="member-info-content">Periphery paved roads with street lights</div>
</div> -->

</div>
</div>
</div>

<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
  <div class="am-tl">
<img src="images/am3.png" alt="">
<p>Primary School <br>& High School</p>
</div>
<!--  <div class="member-info">
<div class="member-info-content">Podiums with open<br> play courts</div>
</div> -->

</div>
</div>
</div>

<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
   <div class="am-tl">
	<img src="images/am4.png" alt="">
   <p>Sewage Treatment <br>and Distribution System</p>
 </div>
<!-- <img src="images/dg-backup.jpg" alt="">
 --><!-- <div class="member-info">
<div class="member-info-content">DG backup for lifts <br>and common area</div>
</div> -->
</div>
</div>
</div>

<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
  <div class="am-tl">
	<img src="images/am5.png" alt="">
    <p>Public Assembly<br> Facilities</p>
  </div>
<!-- <img src="images/meter.jpg" alt="">
 --><!-- <div class="member-info">
<div class="member-info-content">Prepaid meters for<br> water and electricity</div>
</div> -->
</div>
</div>
</div>

<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
      <div class="am-tl">
	<img src="images/am6.png" alt="">
      <p>Roads, Footpaths & Streetlights,<br>Jogging Tracks / Cycling Tracks <br>as defined as per<br> Proposed Land Use Plan</p>
    </div>
<!-- <img src="images/plan-gate.jpg" alt="">
 --><!-- <div class="member-info">
<div class="member-info-content">Point of access to<br> project through <br>secured gate</div>
</div> -->
</div>
</div>
</div>

<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
  <div class="am-tl">
  <img src="images/am7.png" alt="">
 <p>Eco-friendly<br>Sustainable Garbage<br> Disposal System</p>
</div>
<!-- <img src="images/hall.jpg" alt="">
 --><!-- <div class="member-info">
<div class="member-info-content">Fixed seating at <br>specific locations<br> on podium and near clubhouse</div>
</div> -->
</div>
</div>
</div>

<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
  <div class="am-tl">
	<img src="images/am8.png" alt="">
 <p>Community Health<br> Care Facilities</p>
</div>
<!-- <img src="images/play-area.jpg" alt="">
 --><!-- <div class="member-info">
<div class="member-info-content">Play areas with<br> standard play </div>
</div> -->
</div>
</div>
</div>

<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
  <div class="am-tl">
 <img src="images/am9.png" alt="">
 <p>Community Market</p>
</div>
</div>
</div>
</div>

<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
  <div class="am-tl">
 <img src="images/am10.png" alt="">
 <p>MSEB Sub-stations</p>
</div>
</div>
</div>
</div>

<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
  <div class="am-tl">
 <img src="images/am11.png" alt="">
 <p>24x7 Centralized <br>Security System</p>
</div>
</div>
</div>
</div>

<div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
  <div class="am-tl">
 <img src="images/am12.png" alt="">
 <p>Broadband enabled <br>with multiple <br>Service Providers</p>
</div>
</div>
</div>
</div>

<div class="offset-lg-5 col-md-3 col-lg-3 col-6 col-sm-4 no-pad offset-md-4 offset-sm-4">
<div align="center">
<div class="member">
  <div class="am-tl">
 <img src="images/am13.png" alt="">
 <p>Water Treatment <br>and Distribution System</p>
</div>
</div>
</div>
</div>

<!-- <div class="col-md-3 col-lg-3 col-6 col-sm-4 no-pad">
<div align="center">
<div class="member">
  <div class="am-tl">
 <img src="images/am14.png" alt="">
 <p>Jogging Tracks / Cycling <br>Tracks ( As defined as per <br>Proposed Land Use Plan )</p>
</div>
</div>
</div>
</div> -->


</div>
</div>

<!--pro-ame-end-->

<!---Restricted-ame--->

<div class="container">
<div class="row">
<div class="col">
<div class="section_title_container text-center">
<div class="section_title res-tl revealIn"><h2>RESTRICTED AMENITIES</h2></div>
</div>

<div class="container no-pad">
<div class="row revealIn" id="team">
<div class="col-md-4 col-6 col-sm-4 no-pad">
<div class="re-ame">
  <div class="re-ame-con">
<img src="images/rest1.png" alt="">
  <p>Swimming Pool</p></div>
<!-- <div class="member-info">
  <div class="member-info-content">
  Clubhouse with <br>lawn area</div>
</div> -->
</div>
</div>

<div class="col-md-4 col-6 col-sm-4 no-pad">
<div class="re-ame">
   <div class="re-ame-con">
  <img src="images/rest2.png" alt="">
 <p>Skating Rink</p>
</div>
<!-- <img src="images/street-light.jpg" alt="">
 --><!-- <div class="member-info">
<div class="member-info-content">Periphery paved roads with street lights</div>
</div> -->
</div>
</div>

<div class="col-md-4 col-6 col-sm-4 no-pad">
<div class="re-ame">
     <div class="re-ame-con">
  <img src="images/rest3.png" alt="">
   <p>Tennis Courts</p>
 </div>
<!-- <img src="images/play-court.jpg" alt="">
 --><!-- <div class="member-info">
<div class="member-info-content">Podiums with open<br> play courts</div>
</div> -->
</div>
</div>

<div class="col-md-4 col-6 col-sm-4 no-pad">
<div class="re-ame">
<div class="re-ame-con">
  <img src="images/rest4.png" alt="">
  <p>Gymnasium</p>
</div>
<!-- <img src="images/dg-backup.jpg" alt="">
 --><!-- <div class="member-info">
<div class="member-info-content">DG backup for lifts <br>and common area</div>
</div> -->
</div>
</div>

<div class="col-md-4 col-6 col-sm-4 no-pad">
<div class="re-ame">
     <div class="re-ame-con">
  <img src="images/rest5.png" alt="">
 <p>Badminton Court</p>
</div>
<!-- <img src="images/meter.jpg" alt="">
 --><!-- <div class="member-info">
<div class="member-info-content">Prepaid meters for<br> water and electricity</div>
</div> -->
</div>
</div>

<div class="col-md-4 col-6 col-sm-4 no-pad">
<div class="re-ame">
<div class="re-ame-con">
  <img src="images/rest6.png" alt="">
  <p>Open Amphitheatre</p>
</div>
<!-- <img src="images/plan-gate.jpg" alt="">
 --><!-- <div class="member-info">
<div class="member-info-content">Point of access to<br> project through <br>secured gate</div>
</div> -->
</div>
</div>
</div>
</div>
</div>
<div>
</div>
</div>
</div>

<!--Restricted-ame-end-->

</div>

<div>

</div>

</div>
</div>
</div>

<!---- Floor---plans-- -->

<div class="floor" id="floorplans">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<div class="section_title revealIn"><h2>Floor Plans</h2></div>
</div>


<!-- <div class="container">
<ul>
<li>
<a href="#"  class="btn fl-btn" data-toggle="modal" data-target=".bs-example-modal1">2 BHK Apartments</a></li>
<li><a href="#"  data-toggle="button" class="btn fl-btn" >2.5 BHK Apartments</a></li>
</ul> 

</div>-->

<div class="container revealIn">
<div class="inner-basic division-map div-toggle" data-toggle="modal" data-target=".bs-example-modal1" id="divisiondetail">
<ul>
<div class="row">
<li class="col-lg-3 col-12 offset-lg-3 col-sm-6 active">
<div class="map-point-sm" data-show=".darwin">
<i class="fa fa-map-o" aria-hidden="true"></i> Bageshree Floor Plans</div>
</li>
<li class="col-lg-3 col-12 col-sm-6">
<div class="map-point-sm" data-show=".ptown">
<i class="fa fa-map-o" aria-hidden="true"></i> Kalashree Floor Plans</div>
<!-- <li class="col-lg-3 col-12 col-sm-6 offset-sm-3 offset-lg-0">
<div class="map-point-sm" data-show=".yoga">
<i class="fa fa-map-o" aria-hidden="true"></i> Yogeshree Floor Plans</div>
</li> -->
</div>
</ul>


</div><!-- end inner basic -->
</div>


<div class="container revealIn">
<div class="inner-basic">
<div class="darwin show">
<div id="dvStats" class="fl-scroll">
<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor1.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor1.jpg" alt="">
<div class="img-content">
  <p>Parking/ 1st Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor2.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor2.jpg" alt="">
<div class="img-content">
  <p>Parking/ 2nd Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2>
</div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor3.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor3.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(3rd,4th,5th,6th,7th,9th,10th,
11th,12th,13th,14th,15th,16th,17th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>


<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor4.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor4.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(8th,13 and 18th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor5.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor5.jpg" alt="">
<div class="img-content">
  <p>Parking/ 1st Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor6.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor6.jpg" alt="">
<div class="img-content">
  <p>Parking/ 2nd Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor7.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor7.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(3rd,4th,5th,6th,7th,9th,10th,
11th,12th,13th,14th,15th,16th,17th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor8.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor8.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(8th,13 and 18th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor9.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor9.jpg" alt="">
<div class="img-content">
  <p>Parking/ 1st Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor10.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor10.jpg" alt="">
<div class="img-content">
  <p>Parking/ 2nd Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor11.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor11.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(3rd,4th,5th,6th,7th,9th,10th,
11th,12th,13th,14th,15th,16th,17th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor12.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor12.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(8th,13 and 18th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor13.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor13.jpg" alt="">
<div class="img-content">
  <p>Parking/ 1st Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor14.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor14.jpg" alt="">
<div class="img-content">
  <p>Parking/ 2nd Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor15.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor15.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(3rd,4th,5th,6th,7th,9th,10th,
11th,12th,13th,14th,15th,16th,17th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor16.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor16.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(8th,13 and 18th Floor)</p>
<h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor17.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor17.jpg" alt="">
<div class="img-content">
  <p>Parking/ 1st Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor18.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor18.jpg" alt="">
<div class="img-content">
  <p>Parking/ 2nd Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor19.jpg" class="img-innerc">
<img class="img-responsive" src="images/bagesree-2bhk-floor19.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(3rd,4th,5th,6th,7th,9th,10th,
11th,12th,13th,14th,15th,16th,17th Floor)</p>
<h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/bagesree-2bhk-floor20.jpg" class="img-innerc">

<img class="img-responsive" src="images/bagesree-2bhk-floor20.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(8th,13 and 18th Floor)</p>
<h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

</div>
</div>

<div class="ptown hide">
<div id="bhk" class="fl-scroll">
<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-a1.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-a1.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(3rd,4th,5th,6th,7th,9th,10th,
11th,12th,13th,14th,15th,16th,17th Floor)</p>
 <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-a2.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-a2.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(8th,13 and 18th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-a3.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-a3.jpg" alt="">
<div class="img-content">
<p>Typical Flat</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-a4.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-a4.jpg" alt="">
<div class="img-content">
  <p>Parking/ 2nd Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-b1.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-b1.jpg" alt="">
<div class="img-content">
  <p>Parking/ 1st Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-b2.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-b2.jpg" alt="">
<div class="img-content">
  <p>Parking/ 2nd Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-b3.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-b3.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(3rd,4th,5th,6th,7th,9th,10th,
11th,12th,13th,14th,15th,16th,17th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-b4.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-b4.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(8th,13 and 18th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-c1.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-c1.jpg" alt="">
<div class="img-content">
  <p>Parking/ 1st Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-c2.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-c2.jpg" alt="">
<div class="img-content">
  <p>Parking/ 2nd Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-c3.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-c3.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(3rd,4th,5th,6th,7th,9th,10th,
11th,12th,13th,14th,15th,16th,17th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-c4.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-c4.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(8th,13 and 18th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-d1.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-d1.jpg" alt="">
<div class="img-content">
  <p>Parking/ 1st Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-d2.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-d2.jpg" alt="">
<div class="img-content">
  <p>Parking/ 2nd Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-d3.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-d3.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(3rd,4th,5th,6th,7th,9th,10th,
11th,12th,13th,14th,15th,16th,17th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-d4.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-d4.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(8th,13 and 18th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-e1.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-e1.jpg" alt="">
<div class="img-content">
  <p>Parking/ 1st Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-e2.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-e2.jpg" alt="">
<div class="img-content">
  <p>Parking/ 2nd Floor Plan</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-e3.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-e3.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(3rd,4th,5th,6th,7th,9th,10th,
11th,12th,13th,14th,15th,16th,17th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/ks-e4.jpg" class="img-innerc">
<img class="img-responsive" src="images/ks-e4.jpg" alt="">
<div class="img-content">
<p>Typical Floor Plan
(8th,13 and 18th Floor)</p>
  <h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>


</div>
</div>


<div class="yoga hide">
<div id="yoga-sree" class="fl-scroll">
<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor1.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor1.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor2.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor2.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor3.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor3.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor4.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor4.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor5.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor5.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor6.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor6.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor7.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor7.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor8.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor8.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor9.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor9.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor10.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor10.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor11.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor11.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor12.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor12.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor13.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor13.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor14.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor14.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor15.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor15.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor16.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor16.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor17.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor17.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor18.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor18.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor19.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor19.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12 col-sm-4 img-col">
<div class="img-wrapp">
<a href="images/yogashree-floor20.jpg" class="img-innerc">
<img class="img-responsive" src="images/yogashree-floor20.jpg" alt="">
<div class="img-content"><h2><span><i class="fa fa-search-plus" aria-hidden="true"></i></span></h2></div>
</a>
</div>
</div>


</div>
</div>


</div>
</div>

</div>
</div>
</div>
<!---- Floor---plans---end---->

<!-- <div class="classes highlights" id="site">
<div class="container">
<div class="row">

<div class="col revealIn">
<div class="section_title_container text-center">
<div class="section_title"><h2>site highlights</h2></div>
</div>

<div class="carousel-wrap">
<div class="owl-carousel">
<div class="item">
    <div class="main">
      <div class="effects" id="effects">
                <div class="demo">
          <figure class="imghvr-fall-away-horiz fi-img">
            <div class="si-tl"><h2>Residential</h2></div>
            <figcaption>
              <h3>Residential</h3>
            </figcaption>
          </figure>
        </div>
        
      </div>
    </div>
</div>
<div class="item">
  <div class="demo">
          <figure class="imghvr-fall-away-horiz fi-img">
            <div class="si-tl"><h2>Security</h2></div>
            <figcaption>
              <h3>Security</h3>
            </figcaption>
          </figure>
        </div>
</div>

<div class="item">
  <div class="demo">
          <figure class="imghvr-fall-away-horiz fi-img">
            <div class="si-tl"><h2>Education</h2></div>
            <figcaption>
              <h3>Education</h3>
            </figcaption>
          </figure>
        </div>
</div>

<div class="item">
  <div class="demo">
          <figure class="imghvr-fall-away-horiz fi-img">
            <div class="si-tl"><h2>Greenery</h2></div>
            <figcaption>
              <h3>Greenery</h3>
            </figcaption>
          </figure>
        </div>
</div>

<div class="item">
  <div class="demo">
          <figure class="imghvr-fall-away-horiz fi-img">
             <div class="si-tl"><h2>Commercial</h2></div>
            <figcaption>
              <h3>Commercial</h3>
            </figcaption>
          </figure>
        </div>
</div>

<div class="item">
  <div class="demo">
          <figure class="imghvr-fall-away-horiz fi-img">
            <div class="si-tl"><h2>play ground</h2></div>
            <figcaption>
              <h3>play ground</h3>
            </figcaption>
          </figure>
        </div>
</div>
</div>
</div>

</div>

</div>
</div>
</div> -->





<div id="layout">
<div class="container no-pad">
  <div class="master-layout">
  <div class="col-lg-12 col-12 col-sm-12 col-md-12">
    <div class="section_title text-center">
      <h2>master layout</h2>
    </div>
  <div class="zoom-image">
<img class="product-photo" data-original-image="images/master-layout.gif" src="images/master-layout.gif" />
<!--  <img src="images/new-layout-1-old.png"/>
 --><!-- <div class="map-icon"><img src="images/map-icon.png" class="blink" /></div>
<div class="map-icon2"><img src="images/map-icon.png" class="blink" /></div>  -->
</div>
</div>
</div>
</div>
</div>

<section class="nan-section" id="ab-nan">
<div class="container">
<div class="row revealIn">
<div class="col-md-12 text-center revealIn">
<h2>about nanded city</h2>
</div>
<div class="col-lg-6 col-12 col-sm-12">
<div class="nan-img">
<img src="images/nanded.jpg" class="img-responsive" />
</div>
</div>

<div class="col-lg-6 col-12 col-sm-12">
<h3>A community of like-minded <br>individuals</h3>
<p>A modern, eco-friendly and futuristic living destination on Sinhagad Road, Nanded City provides wholesome family living experience like nowhere else. With an internationally acclaimed model of self-sustainable development, it boasts of residential neighbourhoods with cluster of towers ranging from 1, 2, 2.5 and 3 BHK apartments, shopping complex, CBSE and ICSE board schools, a sports complex, excellent infrastructures, sustainable modes of development and recreational features along with floras surrounding it from all sides.</p>
</div>

</div>
</div>
</section>

<section id="contact" class="section-bg ">
      <div class="container-fluid">

        <div class="section-header text-center revealIn">
          <h2>Contact Us</h2>
<!--           <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
 -->        </div>

        <div class="row contact-info revealIn">

          <div class="col-lg-5 col-md-5 col-sm-5 col-12">
            
            <div class="contact-address">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <h3>Address</h3>
              <address>Nanded City, Sinhagad Road, <br>Pune - 411 068, India.</address>
            </div>

            <div class="contact-email">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@nandedcitypune.com">info@nandedcitypune.com</a></p>
          </div>

            <div class="contact-phone">
             <i class="fa fa-phone" aria-hidden="true"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+91 20 67275300">+91 20 67275300/1/2</a></p>
            </div>

    <!-- <div class="contact-phone br-n">
    <ul class="list-inline social-buttons">
   <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
  </ul>
            </div> -->

          </div>

          <div class="col-md-7 col-lg-7 col-sm-7 col-12">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.544258512356!2d73.79801451436792!3d18.45899037587356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc29598f2073f9f%3A0x9115dd346cbab04b!2sNanded+City+Township!5e0!3m2!1sen!2sin!4v1546245922894" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
        </div>

          <!-- <div class="col-md-4">
            <div class="contact-email">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@nandedcitypune.com</a></p>
            </div>
          </div> -->

        </div>

      </div>
    </section>

<section class="maharera-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-lg-2 col-lg-8">
        <div class="mahar-content">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-2">
              <img src="images/adr-logo.png" class="img-responsive">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9">
            <p>The Project has been registered via</p> 
          <h2>MahaRERA Registration No.:</h2>
          <h3>Kalashree&nbsp; :&nbsp;P52100021483</h3>
          <h3>Bageshree :&nbsp;P52100021465</h3>
          <p> and is available on the website under registered projects.</p>
          <a href="https://maharera.mahaonline.gov.in/" target="_blank">Website: http://maharera.mahaonline.gov.in</a>
        </div>
      </div>
    </div>
      <!-- <div class="col-md-6">
        <div class="mahar-logo">
          <img src="images/adr-logo.png" class="img-responsive">
          <h4><a href="https://maharera.mahaonline.gov.in/" target="_blank">Website: http://maharera.mahaonline.gov.in</a></h4>
        </div>
      </div> -->
    </div>
  </div>
</div>
</section>

<!-- <div id=slider style="right:-342px;">
<div id=sidebar onclick="open_panel()">
<img src="img/icon/enquiry-icon.jpg"/>
</div>
<form id=enquiry-form class="" action=thankyou_enquiry.php method=post>
<div id=header_fd>
<h2>Contact Form</h2>
<input name=name placeholder="Enter Name"/>
<input type=email name=email placeholder="Enter Email"/>
<input name=mobile placeholder="Enter Mobile" onkeypress="javascript:return IsNumeric(event,'e_phone');" id=e_phone maxlength=10  minlength="10" />

<textarea type=text name=message placeholder="Enter Message"></textarea><br/>
<button onclick="enquiryForm();">Send Message</button>
</div>
</form>
</div> -->


<!-- Footer -->

<footer class="footer">
<div class="container">


<!-- <div class="col-md-12">
<div class="copyright_text text-center">Nandedcity &copy; 2019. All rights reserved.<a href="#">Tempest Advertising</a></div>
</div> -->


<div class="foot-adr">
  <div class="row">

<!-- <div class="col-md-4 text-center col-xs-12 col-sm-6">
<h2>MahaRERA Registration No.:</h2>
</div> -->

<div class="col-lg-7 offset-lg-3 col-12 col-sm-12">
<div class="link-foot text-center">
<p>&copy; Kalashree & Bageshree 2019. All rights reserved.</p>
 <a href="https://tempestadvertising.com" target="_blank">Developed by TempestAdvertising</a>
 </div>
</div>
</div>


</div>
</div>
</footer>



<div data-modal="trigger-1" class="modal-av">
  <article class="content-wrapper">
    <button class="close"></button>
    <header class="modal-header text-center">
      <h2>avail offers</h2>
    </header>
    <form id="aoffers" name="aoffers"   method="POST">
    
    <div class="content">
<div class="tab-frame">
  <input type="radio"  name="offers" value="FOR SELF"  id="tab1">
  <label for="tab1">for self</label>
    
  <input type="radio" name="offers" value="FOR REFERRAL" id="tab2">
  <label for="tab2">for referral</label>
  <div class="tab">
    
    <div id="download">
<div class="form-group">
<input type="text" name="name" placeholder="Name" class="form-control av-frm">
<i class="fa fa-pencil" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="text" name="email" placeholder="Email" class="form-control av-frm">
<i class="fa fa-envelope" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="text" name="mobile" placeholder="Mobile Number" class="form-control av-frm">
<i class="fa fa-phone" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="hidden" name="citizencode"  value="<?php echo $_SESSION['cid'];?>">
<input type="submit" name="submit" value="Submit" class="av-sub">
<div id='offerresults'></div>
</div>
</div>
  </div>
  
</div>

    </div>
    </form>
    
  </article>
</div>




<div id="callbook" class="mobile-call desk-hide">
<a id="cb_call" class="actioncall" href="tel:+91 20 67275300">
<span  class="callbook-icona-telefono"></span>
<span class="callbook-align"><i class="fa fa-mobile wh" aria-hidden="true"></i> +91 20 67275300</span></a>
<a id="cb_book" class="actionbook" target="_blank" href="mailto: info@nandedcitypune.com">
<span class="callbook-align"><i class="fa fa-envelope wh" aria-hidden="true"></i> info@nandedcitypune.com</span>
<span class=""></span></a> 
</div>



<!-- <div id="feedback">
<div id="feedback-form" style="display: none;" class="">

<div class="bs-example">
<div class="modal-header feed-head">
<h4 class="modal-title" id="myModalLabel">enquiry now</h4>
</div>
<div class="modal-body feed-bdy" id="download">
<form>
<div class="form-group">
<input type="" name="Name" value="" placeholder="Name" class="form-control frm">
<i class="fa fa-pencil" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="" name="Name" value="" placeholder="Email" class="form-control frm">
<i class="fa fa-envelope" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="" name="Name" value="" placeholder="Phone Number" class="form-control frm">
<i class="fa fa-phone" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="submit" name="Submit" class="se-btn">
</div>
</form>
</div>
</div> -->


</div>
</div>
<!-- <div class="enq-btn"><a href="#" class="btn" data-toggle="modal" data-target=".bs-example-modal2">Enquire Now</a>
</div> -->
</div>


<div class="sc-top scrollToTop"><a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>

<div id="popupboost" class="modal fade" role="dialog">
<div class="modal-dialog pop_box">
<!-- Modal content-->
<div class="modal-content con">
<div class="modal-header">
<button type="button" class="cls" data-dismiss="modal">X</button>
<h4 class="modal-title tl">Download Brochure</h4>
</div>
<form id="downloads" name="downloads"   method="POST">
<div class="modal-body">
<div id="download">
<div class="form-group">
<input type="text" name="name" placeholder="Name" class="form-control field">
<i class="fa fa-pencil" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="text" name="mobile" placeholder="Mobile Number" class="form-control field">
<input type="hidden" name="citizencode"  value="<?php echo $_SESSION['cid'];?>">
<i class="fa fa-phone" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="submit" name="submit" value="submit" class="br-down">
<div id="downresults"></div>
</div>

</div>
</div>

</form>
<!-- <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>-->
</div>
</div>
</div>


<div class="modal fade bs-example-modal-new"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

<div class="modal-dialog">

<!-- Modal Content: begins -->
<div class="modal-content mob-con">

<!-- Modal Header -->
<div class="">
<button type="button" class="cls" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
</div>

<!-- Modal Body -->  
<div class="modal-body">
<div class="body-message">
<div class="signup-form">
<h1><i class="fa fa-pencil" aria-hidden="true"></i> GET IN TOUCH WITH US</h1>
<form action="#">
<div class="form-group">
<input type="text" name="" placeholder="Name" class="form-name form-control">
</div>
<div class="form-group">
<input type="text" name="" placeholder="Email" class="form-email form-control">
</div>
<div class="form-group">
<input type="text" name="" placeholder="Phone Number" class="form-phone form-control">
</div>
<div class="form-group">
<textarea cols="4" rows="4" class="form-control txt-box" placeholder="Message"></textarea>
</div>
<div class="form-group">
<input type="button" name="submit" value="submit" class="s-btn">
</div>
<!--  <p>
*We never share your details with anyone and that's a promise
</p> -->
</form>
</div>
</div>
</div>

</div>
<!-- Modal Content: ends -->

</div>

</div>

<div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog reg-dialog">
<!-- Modal Content: begins -->
<div class="modal-content con">
<div class="modal-header">
<button type="button" class="reg-cls" data-dismiss="modal">X</button>
<h4 class="modal-title tl">plan a walk-in</h4>
</div>
<div class="modal-body">
<div id="download">
<div class="form-group">
<input type="text" name="" placeholder="Name" class="form-control field">
<i class="fa fa-pencil" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="text" name="" placeholder="Email" class="form-control field">
<i class="fa fa-envelope" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="text" name="" placeholder="Phone Number" class="form-control field">
<i class="fa fa-phone" aria-hidden="true"></i>
</div>
<div class="form-group">
<div class="input-group">
<i class="fa fa-calendar" aria-hidden="true"></i>
<input type = "text" id="datepicker" name="dob" placeholder="Date" value="" class="form-control field" >
</div>
</div>
<div class="form-group">
<select class="form-control frm">
<option>Time Slot</option>
<option>10 - 12pm</option>
<option>2 - 4pm</option>
<option>5 - 6pm</option>
</select>
<i class="fa fa-clock-o" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="button" name="submit" value="submit" class="reg-sub">
</div>
</div>
</div>
<!-- <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>-->
</div>
<!-- Modal Content: ends -->
</div>
</div>

<div class="hidediv">
<div class="modal fade bs-example-modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog reg-dialog">
<!-- Modal Content: begins -->
<div class="modal-content con">
<div class="modal-header">
<button type="button" class="reg-cls" data-dismiss="modal">X</button>
<h4 class="modal-title tl">Show Unit Plans</h4>
</div>
<form id="unitplans" name="unitplans"   method="POST">

<div class="modal-body">
<div id="download">
<div class="form-group">
<input type="text" name="name" placeholder="Name" class="form-control field">
<i class="fa fa-pencil" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="text" name="email" placeholder="Email" class="form-control field">
<i class="fa fa-envelope" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="text" name="mobile" placeholder="Mobile Number" class="form-control field">
<input type="hidden" name="citizencode"  value="<?php echo $_SESSION['cid'];?>">
<i class="fa fa-phone" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="submit" name="Submit" value="show unit plans" id="" class="plan-sub">
<div id="unitresults"></div>
</div>
</div>
</div>
</form>
</div>
<!-- Modal Content: ends -->
</div>
</div>
</div>


<div class="hidediv">
<div class="modal fade bs-example-modal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myunitplans">
<div class="modal-dialog reg-dialog">
<!-- Modal Content: begins -->
<div class="modal-content con">
<div class="modal-header">
<button type="button" class="reg-cls" data-dismiss="modal">X</button>
<h4 class="modal-title tl">Show Unit Plans</h4>
</div>
<div class="modal-body">
<div id="download">
<div class="form-group">
<input type="text" name="" placeholder="Name" class="form-control field">
<i class="fa fa-pencil" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="text" name="" placeholder="Email" class="form-control field">
<i class="fa fa-envelope" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="text" name="" placeholder="Phone Number" class="form-control field">
<i class="fa fa-phone" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="button" name="" value="show unit plansss" id="btnsta" class="plan-sub">
</div>
</div>
</div>
</div>
<!-- Modal Content: ends -->
</div>
</div>
</div>


<div class="modal fade bs-example-modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog reg-dialog di">
<!-- Modal Content: begins -->
<div class="modal-content con">
<div class="modal-header">
<button type="button" class="reg-cls" data-dismiss="modal">X</button>
<h4 class="modal-title tl">Enquiry Now</h4>
</div>
<div class="modal-body">
<div id="download">
<form id="aoffersaoffers" name="aoffers"   method="POST">
<div class="form-group">
<input type="text" name="name" placeholder="Name" class="form-control field">
<i class="fa fa-pencil" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="text" name="email" placeholder="Email" class="form-control field">
<i class="fa fa-envelope" aria-hidden="true"></i>
</div>
<div class="form-group">
<input type="text" name="mobile" placeholder="Mobile Number" class="form-control field">
<i class="fa fa-phone" aria-hidden="true"></i>
</div>


<div class = "tabi">
    <input type = "radio" value="kalashree" id = "tab3" name = "enqtype" checked>
  <label for = "tab3">Kalashree</label>
  <input type = "radio" value="bageshree" id = "tab4" name = "enqtype">
  <label for = "tab4">Bageshree</label>
    <div id = "content3">
   <div class="form-group">
<textarea cols="10" class="form-control com" name="message" placeholder="Message"></textarea>
<input type="hidden" name="citizencode"  value="<?php echo $_SESSION['cid'];?>">
<i class="fa fa-pencil" aria-hidden="true"></i>
</div>
  </div>
  
</div>




<div class="form-group">
<input type="submit" name="submit" value="submit" class="reg-sub">
<span class="enquire_text"><!-- Or Call: <a href="tel:+91 20 67275300">+91 20 67275300</a> --></span>
<div id='offerresults'></div>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- Modal Content: ends -->
</div>
</div>



<div id="popup_this">
<!-- <span class="b-close"><span>X</span></span>
 --><div id="download">
    <div class="tabbable">
      <div class="nan-logo">
        <img src="images/pop-nan-logo.png" />
      </div>
      <h2>are you a nanded city citizen?</h2>
      <ul class="nav nav-tabs pop-tabs">
    <li class="active"><a href="#tab-n1" data-toggle="tab"><i class="fa fa-check" aria-hidden="true"></i>yes</a></li>
        <li><a href="#tab-n2" data-toggle="tab"><i class="fa fa-ban" aria-hidden="true"></i>no</a></li>
      </ul>
      <div class="tab-content pop-tab-con">
        <div class="tab-pane" id="tab-n1">
          <!-- <div class="form-group">
<input type="text" name="" placeholder="Name" class="form-control field">
<i class="fa fa-pencil" aria-hidden="true"></i>
</div> -->
<!-- <div class="form-group">
<input type="text" name="" placeholder="Phone Number" class="form-control field">
<i class="fa fa-phone" aria-hidden="true"></i>
</div> -->
<form id="myformtwo" name="myformtwo"   method="POST">
<div class="form-group">
<input type="text" name="citizencode" placeholder="Citizen Code" class="form-control code">
<i class="fa fa-pencil" aria-hidden="true"></i>
</div>
<div class="form-group text-left mgb">
<input type="submit" name="submit" value="submit"  class="plan-sub">
</div></form>
        </div>
        <div class="tab-pane" id="tab-n2">
          <p>Keep watching this space for more</p>
         </div>
        
      </div>
    </div>
</div>
</div>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/TweenMax.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
<script src="js/load-popup.js"></script>

<script src="js/easing.js"></script>
<script src="js/custom.js" ></script>
<script src="js/jquery-ui.js"></script>

 
      
  <script type="text/javascript" src="https://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>

  <script>
$(document).ready(function(){
  
     $("#mess").fadeOut(20000);

});
</script>
  <script type="text/javascript">
 
  $(document).ready(function(){
    $("#myformtwo").validate({
      debug: false,
      rules: {
        
       citizencode: {
          required: true,
          number: true,
          minlength:6,
          maxlength:7
          
        }
        
        
     },
	 messages: {
        citizencode: "Please enter 6 or 7 digits citizen code"
        
        
      },
	 
	 
      submitHandler: function(form) {
        // do other stuff for a valid form
        document.myformtwo.submit();
      }
    });
  });
  </script>
  
  
  
  <script type="text/javascript">
  
  $(document).ready(function(){
    $("#aoffers").validate({
      debug: false,
      rules: {
        
        name:"required",
        mobile: {
          required: true,
          number: true,
          minlength:10,
          maxlength:10
          
        },
        email: {
          required: true,
          email: true
          
        }
        
      },
      
        
        
      messages: {
        name: "Required",
       
        mobile: "Please Enter Valide 10 digits mobile number",
		
        email: "Required."
        
        
      },
      submitHandler: function(form) {
        // do other stuff for a valid form
        $.post('https://nandedcitypune.info/offers.php', $("#aoffers").serialize(), function(data) {
          $('#offerresults').html(data);
          document.aoffers.name.value='';
		  document.aoffers.email.value='';
		  document.aoffers.mobile.value='';
        });
      }
    });
  });
  </script>
  
  
 <script type="text/javascript">
  
  $(document).ready(function(){
    $("#enquirymain").validate({
      debug: false,
      rules: {
        
        name:"required",
        mobile: {
          required: true,
          number: true,
          minlength:10,
          maxlength:10
          
        },
        email: {
          required: true,
          email: true
          
        }
		
		
		 
		
		
        
      },
      
        
        
      messages: {
        name: "Required",
       
        mobile: "Please Enter Valide 10 digits mobile number",
		
        email: "Required."
        
        
      },
      submitHandler: function(form) {
        // do other stuff for a valid form
        $.post('https://nandedcitypune.info/enquiry.php', $("#enquirymain").serialize(), function(data) {
          $('#enqresults').html(data);
          document.enquirymain.name.value='';
		  document.enquirymain.email.value='';
		  document.enquirymain.mobile.value='';
		  document.enquirymain.message.value='';
		  $("#enqresults").fadeOut(10000);
        });
      }
    });
  });
  </script>
  
  
  <script type="text/javascript">
  
  $(document).ready(function(){
    $("#enquirysub").validate({
      debug: false,
      rules: {
        
        name:"required",
        mobile: {
          required: true,
          number: true,
          minlength:10,
          maxlength:10
          
        },
        email: {
          required: true,
          email: true
          
        }
		
		
		 
		
		
        
      },
      
        
        
      messages: {
        name: "Required",
       
        mobile: "Please Enter Valide 10 digits mobile number",
		
        email: "Required."
        
        
      },
      submitHandler: function(form) {
        // do other stuff for a valid form
        $.post('https://nandedcitypune.info/enquiry.php', $("#enquirysub").serialize(), function(data) {
          $('#subresults').html(data);
           $("#subresults").fadeIn();
          document.enquirysub.name.value='';
		  document.enquirysub.email.value='';
		  document.enquirysub.mobile.value='';
		   $("#subresults").fadeOut(5000);
		
        });
      }
    });
  });
  </script>
  
  
  <script type="text/javascript">
  
  $(document).ready(function(){
    $("#downloads").validate({
      debug: false,
      rules: {
        
        name:"required",
        mobile: {
          required: true,
          number: true,
          minlength:10,
          maxlength:10
          
        }
      },
      
        
        
      messages: {
        name: "Required",
       
        mobile: "Please Enter Valide 10 digits mobile number"
        
        
      },
      submitHandler: function(form) {
        // do other stuff for a valid form
        $.post('https://nandedcitypune.info/downloads.php', $("#downloads").serialize(), function(data) {
          $('#downresults').html(data);
          document.downloads.name.value='';
		  
		  document.downloads.mobile.value='';
		  $("#downresults").fadeOut(10000);
		  $('#popupboost').hide();
		  window.open('https://nandedcitypune.info/Bageshree_Kalashree_Brochure.pdf', 'window name', 'window settings')
		
        });
      }
    });
  });
  </script>
  
  
  
  <script type="text/javascript">
  
  $(document).ready(function(){
    $("#unitplans").validate({
      debug: false,
      rules: {
        
         name:"required",
        mobile: {
          required: true,
          number: true,
          minlength:10,
          maxlength:10
          
        },
        email: {
          required: true,
          email: true
          
        }
      },
      
        
        
      messages: {
        name: "Required",
       
        mobile: "Please Enter Valide 10 digits mobile numberzxc"
        
        
      },
      submitHandler: function(form) {
        // do other stuff for a valid form
        $.post('https://nandedcitypune.info/unitplans.php', $("#unitplans").serialize(), function(data) {
          $('#unitresults').html(data);
          document.unitplans.name.value='';
		  document.unitplans.email.value='';
		  document.unitplans.mobile.value='';
		  $('#myunitplans').hide();
		  $("#unitresults").fadeOut(10000);
		  $("#dvStats").show();	
          $(".hidediv").hide("slow");
		  $("#bhk").show(); 
          $(".hidediv").hide("slow");
		   $("#yoga-sree").show(); 
          $(".hidediv").hide("slow");
		
        });
      }
    });
  });
  </script>
  
  
 <!-- Javascript -->
<?php 

if($_SESSION['cid']=='')
{

?>
<script>
$( document ).ready(function() {
$('#popup_this').bPopup();
});
</script>

<?php } else{?>
<script>
$('#popup_this').hide();
</script>
<?php }
?>


<!-- datepicker Javascript -->
<!-- <script>
$(function() {
$( "#datepicker" ).datepicker({
changeMonth:true,
changeYear:true,
numberOfMonths:[1,1],
yearRange: "-50:+10"
});
});
</script> -->
<script src="js/popup.js"></script>
<!-- <script>
$('.owl-carousel').owlCarousel({
autoplay: true,
margin: 15,
nav: true,
navText: [
"<i class='fa fa-caret-left'></i>",
"<i class='fa fa-caret-right'></i>"
],
autoplay: true,
autoPlaySpeed: 1500,
autoPlayTimeout: 1500,
autoplayHoverPause: true,  
responsive: {
0: {
items: 1
},
600: {
items: 3
},
1000: {
items: 3
}
}
})
</script> -->



<!-- smooth scrolling -->




<script type="text/javascript">
$(document).ready(function(){
 $("#dvStats").hide();
 $("#dvsta").show();

  $("#btnStats").click(function(){
    $("#dvStats").show();	
    $(".hidediv").hide("slow");

});

// $("#btnStats").click(function(){
// $("#bhk").show();
// $(".hidediv").hide("slow");
// });

});

</script>

<script type="text/javascript">
$(document).ready(function(){
 $("#bhk").hide();
 $("#2bhk").show();

  $("#btnStats").click(function(){
    $("#bhk").show(); 
    $(".hidediv").hide("slow");

});
});

</script> 

<script type="text/javascript">
$(document).ready(function(){
$("#yoga-sree").hide();
$("#2bhk").show();

$("#btnStats").click(function(){
$("#yoga-sree").show(); 
$(".hidediv").hide("slow");

});
});
</script> 


<script type="text/javascript">
  $(document).on('click', '.map-point-sm', function() {
  var show = $(this).data('show');
  $(show).removeClass("hide").siblings().addClass("hide");
});

</script>

<script>
  $(document).ready(function(){
  $('.map-point-sm').click(function(){
    $('.map-point-sm').removeClass("active");
    $(this).addClass("active");
});
});
</script>

<!-- <script type="text/javascript">


  $("#tab-B").click(function(){
    $("#dvsta").show();
    $("#dvStats").hide();
    });

  $("#tab-A").click(function(){
    $("#dvStats").show();
    $("#dvsta").hide();
    });


</script> -->


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".main_nav a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.18/jquery.zoom.min.js"></script>
<script type="text/javascript">
  $(function() {
  $('.zoom-image').each(function(){
    var originalImagePath = $(this).find('img').data('original-image');
    $(this).zoom({
      url: originalImagePath,
      magnify:1
    });
  });
}); 
</script>

<script src="js/jquery.viewbox.min.js"></script>

 <script>
    $(function(){
      
      $('.img-innerc').viewbox();

      (function(){
        var vb = $('.popup-link').viewbox();
        $('.popup-open-button').click(function(){
          vb.trigger('viewbox.open');
        });
        $('.close-button').click(function(){
          vb.trigger('viewbox.close');
        });
      })();
      
    });
  </script>

</body>
</html>
