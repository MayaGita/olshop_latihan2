   <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="referrer" content="strict-origin" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">

   <link href="<?= base_url('aset/')?>css/indexstyle.css" rel="stylesheet" media="all">
   <style type="text/css">
      header{
       background-image: url(<?php echo base_url('aset/jeno.jpg');?>);
   </style>

  <script type="text/javascript">
      $(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 500) {
      $(".navbar-light").css("background"  , "rgba(21,15,54,0.9)");
    }

    else{
      $(".navbar-light").css("background" , "none");   
    }
  })
})
      window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}
//for arrow click part (PART2)
$(document).ready( function () {
 $('#down').on('click',function () {
  $("html").scrollTop(0);
   $('html, body').animate({
     scrollTop: $(where-you-want-to-scroll).offset().top
 }, 1000);
 });
});
  </script>


</head>
<body>

<nav class="navbar navbar-expand-md navbar-light  fixed-top" onmouseover="changecolour(this)" onmouseleave="back(this)">
 
<a class="navbar-brand"><img class="img2" src="<?php echo base_url('Aset/LOGOO2.png');?>"></a>
 
<button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
 
<span  class="navbar-light navbar-toggler-icon "></span>
 
</button>
 
<div class="collapse navbar-collapse justify-content-between" id="nav">
 
<ul class="navbar-nav">
 
<li class="nav-item" >
 
<a class="nav-link text-light font-weight-bold px-3" href="#">HOME</a>
 
</li>
 
<li class="nav-item dropdown" data-toggle="dropdown">
 
<a class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">CATEGORIES</a>
 
<div class="dropdown-menu">
 
<a class="dropdown-item  active2 " href="#">New arrivals  <span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
<a class="dropdown-item  active2" href="#">popular this season</a>
 
<a class="dropdown-item" href="#">Man zone</a>
 
<a class="dropdown-item" href="#">woman zone</a>
 
</div>
 
</li>
<li class="nav-item" >
 
<a class="nav-link text-light font-weight-bold px-3" href="#aboutus">ABOUT US</a>
 
</li>
   

 
</ul>
 
  <center> <form class="form-inline my-2 my-lg-0">
      <input type="text" name="search" placeholder="Search.."></form></center>

 <ul class="navbar-nav">
   <li class="nav-item" >
 
  <a class="nav-link nav-cus" href="#" style="color:white;font-weight: bold;font-family: 'Jua', sans-serif; "><i><img style="width: 32px" src="<?php echo base_url('Aset/cart.png');?>"></i></a>
 
</li>
 <li class="nav-item" >
 
<a style="padding-top: 15px" class="nav-link text-danger font-weight-bold px-3" href="<?php echo site_url('main/login'); ?>" >Login</a>
 
</li>
<li class="nav-item" >
 
<a style="padding-top: 15px" class="nav-link text-light font-weight-bold px-3" href="<?php echo site_url('main/register')?>">Register</a>
 
</li>
</ul>
 
</nav>
  <header>

    <h1 style="color: white" >DREAMIES</h1>
    <p style="color: white">Korean style fashion store</p>

    <span id="down">&#8595;</span>
  </header>

  <br>
  <br>

<div class="title2">
<h3 style="color:white;margin-left:20px;font-weight: bold;font-family: 'Caveat', cursive;margin-top: 8px">New Arrivals</h3>
</div>
<br>
<div style="height: 250PX;">
 <div class="top-content" style="padding-top: 5px;border: 5px solid white; border-right: none;border-left: none;">
    <div class="container-fluid">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <img style="height: 200px" src="<?php echo base_url('aset/fw1.jpg');?>" class="img-fluid mx-auto d-block" alt="img1">
                    <center><button  class="btn btn-danger">check out</button></center>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                     <img style="height: 200px" src="<?php echo base_url('aset/fw2.jpg');?>" class="img-fluid mx-auto d-block" alt="img1">
                     <center><button  class="btn btn-danger">check out</button></center>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                     <img style="height: 200px" src="<?php echo base_url('aset/fw3.jpg');?>" class="img-fluid mx-auto d-block" alt="img1">
                     <center><button  class="btn btn-danger">check out</button></center>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img style="height: 200px" src="<?php echo base_url('aset/fw4.jpg');?>" class="img-fluid mx-auto d-block" alt="img1">
                    <center><button  class="btn btn-danger">check out</button></center>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                     <img style="height: 200px" src="<?php echo base_url('aset/fw5.jpg');?>" class="img-fluid mx-auto d-block" alt="img1">
                     <center><button  class="btn btn-danger">check out</button></center>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img style="height: 200px" src="<?php echo base_url('aset/fm1.jpg');?>" class="img-fluid mx-auto d-block" alt="img1">
                    <center><button  class="btn btn-danger">check out</button></center>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img style="height: 200px" src="<?php echo base_url('aset/fm2.jpg');?>" class="img-fluid mx-auto d-block" alt="img1">
                    <center><button  class="btn btn-danger">check out</button></center>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                     <img style="height: 200px" src="<?php echo base_url('aset/fm3.jpg');?>" class="img-fluid mx-auto d-block" alt="img1">
                     <center><button  class="btn btn-danger">check out</button></center>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="sr-only"><i class="fa fa-chevron-circle-left"></i></span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="sr-only"><i class="fa fa-chevron-circle-right"></i></span>
            </a>
        </div>
    </div>
</div>
</div>
<br>
<br>

<center><div class="hvrbox">
  <img style="width: 500px; height: 507px" src="<?php echo base_url('Aset/set.jpg');?>" alt="Mountains" class="hvrbox-layer_bottom">
  <div class="hvrbox-layer_top">
    <div class="hvrbox-text">Laflamme 3D pocket training set grey <button class="btn btn2">See details</button></div>
  </div>
</div></center>
<br>
<br>
<br>
<h1 id="aboutus" align="center" style="color:white;font-family:'Caveat'cursive;">About us</h1>
<center><img style="width: 72px" src="<?php echo base_url('aset/dreamis ver1.png');?>">
    <h4 style="color: white;font-family: monospace;">DREAMIES korean store</h4></center>
    <p align="justify"  style="font-family:monospace;font-size: 14px;color: white;margin: 0 10px 0 10px; " align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

     <p align="justify" style="font-family:monospace;font-size: 14px;color: white;margin: 0 10px 0 10px;  " align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<br>
<br>
  

</body>
<style type="text/css">
  
  section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #150f36 !important;
}
#footer h5{
  padding-left: 10px;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
  padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
  font-size:25px;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.social li:hover a i {
  font-size:30px;
  margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
  color:#ffffff;
}
#footer ul.social li a:hover{
  color:#eeeeee;
}
#footer ul.quick-links li{
  padding: 3px 0;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.quick-links li:hover{
  padding: 3px 0;
  margin-left:5px;
  font-weight:700;
}
#footer ul.quick-links li a i{
  margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
  #footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}

</style>

<section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5><i><img src="<?php echo base_url('aset/crown.png');?>"></i> Top brands</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>cosrx</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>style nanda</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>8 second</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>peripera</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>somebymi</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5><i><img src="<?php echo base_url('aset/pin.png');?>"></i> our location</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i><i><img src="<?php echo base_url('aset/indonesia.png');?>"></i>
            indonesia</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i><i><img src="<?php echo base_url('aset/singapore.png');?>"></i>
            singapore</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i><i><img src="<?php echo base_url('aset/malaysia.png');?>"></i>
            malaysia</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i><i><img src="<?php echo base_url('aset/philippines.png');?>"></i>
            philippimes</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i><i><img src="<?php echo base_url('aset/thailand.png');?>"></i>
            thailand</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5><i><img src="<?php echo base_url('aset/partner.png');?>"></i> Pertnership</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>TNT EXPRESS</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>GLOBAL EXPRESS</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>IPS PARCEL</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>PARCEL MONKEY</a></li>
            <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>EASYSHIP</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
              <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
          <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">MOMIJI</a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->
</html>
