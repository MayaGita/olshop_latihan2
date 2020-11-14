
    <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="referrer" content="strict-origin" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">

  <style type="text/css">
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

  p{
  color:#6c6c6f;
  font-size:1em;
  }
  h1,h2,h3,h4,h5,h6,p{color:#323233;text-transform:uppercase;}
.navbar-brand  span{
  color: #fed136;
  font-size:25px;font-weight:700;letter-spacing:0.1em;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
}
.navbar-brand {
  color: #fff;
  font-size:25px;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
  font-weight:700;
  letter-spacing:0.1em;
}

.navbar-nav .nav-item .nav-link{
  padding: 1.1em 1em!important;
  font-size: 120%;
    font-weight: 500;
    letter-spacing: 1px;
    color: #fff;
   font-family: 'Gothic A1', sans-serif;
}
.navbar-nav .nav-item .nav-link:hover{color:#fed136;}
.navbar-expand-md .navbar-nav .dropdown-menu{
  border-top:3px solid #fed136;
}

  
 .shrink {
    padding-top: 0;
    padding-bottom: 0;
    background-color: #212529;
}
.hero-image {
  background-image: url(<?php echo base_url('aset/bn.jpg');?>);
  height: 100%;
  border: none;
  border-radius: 0 0 15px 15px;
  filter: contrast()5;
  background-position: center;
  background-attachment: scroll;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: left;
  position: absolute;
  top: 90%;
  left: 10%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  border-radius: 15px;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: white;
  background-color: red;
  text-align: left;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
  form{
    margin:100px 100px 75px 100px;
    color:black;
    font-size:20px;
    font-family: 'times new roman';
  }
  
  h1{
    color:white;
    font-family: 'Poiret One', cursive;
    font-size: 48px;
  }

  .opa{
    opacity: 0.9;
    border-style: 2px solid black;
    border-radius: 15px;
    background-color: #0d6b33;

  }
    .nav-custom{
       height: 100px
    }

    .open-edit{
       background-color: black;

    }
 .img{
    width: 32px
  }
  
  .img2{
    width: 72px;
    margin-bottom: 7px
    
  }

.title{
   background-image: white;
   border: 2px black dotted;
   border-radius: 100px;
   width: 200px;
   height:50px;

}
.title2{
   background-image: white;
   border-bottom: 3px black solid;
   width: 250px;
   height:50px;


}
  
  .btn-custom{
    background-color: white;
    border:1px solid white;

    border-radius:5px 

  }
  .list-group{
    margin-left:10%;
  }
    .list-group-item:hover{
    box-shadow: 0 0 11px rgba(255,134,125,0.9); 
  }
  .img4{
    width: 72px
  }
  
   .checked {
  color: yellow;
}
input[type=text] {
  width: 250px;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 25px;
  font-size: 16px;
  background-color: white;
  background-image: url(<?php echo base_url('aset/search.png');?>);
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 300px;
}

@media (min-width: 768px) and (max-width: 991px) {
    /* Show 4th slide on md if col-md-4*/
    .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) and (max-width: 768px) {
    /* Show 3rd slide on sm if col-sm-6*/
    .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) {
    .carousel-item {
        margin-right: 0;
    }
    /* show 2 items */
    .carousel-inner .active + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* farthest right hidden item must be also positioned for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* MD */
@media (min-width: 768px) {
    /* show 3rd of 3 item slide */
    .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* LG */
@media (min-width: 991px) {
    /* show 4th item */
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    /* Show 5th slide on lg if col-lg-3 */
    .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction //t - previous slide direction last item animation fix */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
    .nav-cus:hover{
      color: white
    }
 
    .row2 {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column2 {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column2 img {
  border: 7px solid #ffdeeb;
  margin-top: 8px;
  vertical-align: middle;
  width: 250PX;
  height: 250PX

}
.column3  {
  border: 7px solid #ffdeeb;
  background-image: url(<?php echo base_url('aset/product1.jpg');?>);
  background-size: 150%;
  margin-top: 8px;
  vertical-align: middle;
  margin-left: -105px;
  width: 450PX;
  height: 507PX;

}

.image-text {
  text-align: left;
  position: absolute;
  top: 180%;
  left: 87%;
  transform: translate(-50%, -50%);
  color: #ff334b;
}

.image-text button {
  border: none;
  border-radius: 15px;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: #ff334b;
  background-color: white;
  text-align: left;
  cursor: pointer;
}

.image-text button:hover {
  background-color: #ff334b;
  color: white;
}
.column1 img {
  border: 5px solid #ffdeeb;
  margin-top: 8px;
  vertical-align: middle;
  width: 507PX;
  transition: transform .2s;
  height: 507PX;
}

..column1 img:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}

.column1 h1 {
    border: 5px solid #ffdeeb;
  writing-mode: vertical-lr;
  text-orientation: upright;
  font-size: 24px;
  background-color: rgba(255, 82, 102,0.5);
  margin-left:50px;
  margin-top: 8px;
  color: white;
  height: 507px
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column2 {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column2 {
    flex: 100%;
    max-width: 100%;
  }
}

</style>
</head>
<body>

 <script type="text/javascript">
   $(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 300) {
      $(".navbar-light").css("background" , "#ff334b");
    }

    else{
      $(".navbar-light").css("background" , "none");   
    }
  })
})


$(document).ready(function(){
  $(".navbar").mouseenter(function(){
    $(".navbar").css("background", "#ff334b");
  });
  $(".navbar").mouseleave(function(){
    $(".navbar").css("background", "none");
  });
});

  function zo(y) {
  x.style.transition = "transform .2s";
  x.style.transform = "scale(1.5)";
}
  function zi(x) {
  x.style.transition = "none";
  x.style.transform = "none";
}

$('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
 </script> 





<nav class="navbar nav-custom navbar-light fixed-top"  onmouseover="changecolour(this)" onmouseleave="back(this)">
  <div class="container">
  <!-- Brand -->
 <a class="navbar-brand " href="#" style="color:white;font-weight: bold;font-family: 'Jua', sans-serif; "><img class="img2" src="<?php echo base_url('Aset/dreamis ver1.png');?>"><strong style="font-family: 'Jua', sans-serif;color: white;font-size: 24px;font-weight: bold; margin-bottom: :-10px"> Dreamies</strong> k-store</a>
   
  <center> <form class="form-inline my-2 my-lg-0">
      <input type="text" name="search" placeholder="Search.."></form></center>
     <span class="nav-item">
      <a class="nav-link nav-cus" href="#" style="color:white;font-weight: bold;font-family: 'Jua', sans-serif; "><i><img class="img" src="<?php echo base_url('Aset/cart.png');?>"></i></a>
     </span>

     <span class="nav-item">
      <a class="nav-link" href="#" style="color:#18204d;font-weight: bold;font-family: 'Jua', sans-serif; ">LOGIN</a>
     </span>
    <small style="color: white;font-weight: bold;font-family: 'Jua', sans-serif; ">or</small> 
     <span class="nav-item">
      <a class="nav-link" href="#"style="color:#18204d;font-weight: bold;font-family: 'Jua', sans-serif; ">REGISTER</a>
       </span>
 
  </div>
</nav>


<div class="hero-image">
  <div class="hero-text">
   
    <a href="<?php echo site_url('main/newseason'); ?>"><button>shop now</button></a>
  </div>
</div>

<br>
<br>
<br>

<div class=" row2">
  <div class="column column1">
   <h1>3CE spring kit make up <small style="font-size: 10px;color: maroon">by style nanda</small> </h1>
  </div>
  <div class="column column1">
    <img onmouseover="zo(this)" onmouseleave="zi(this)" src="<?php echo base_url('aset/product.jpg');?>" >
  </div>
  <div class="column column2 ">
    <img src="<?php echo base_url('aset/LIP.jpg');?>">
    <img src="<?php echo base_url('aset/BLUSH.PNG');?>">
  </div>
   <div class="column column3 ">
     <div class="image-text">
   <a href="https://en.stylenanda.com/product/3ce-spring-kit-peach-coral/246795/?cate_no=1&display_group=3"><button>see details >></button></a>
  </div>

  </div>
</div>



<br>
<br>
<br>
<div class="title">
<h3 style="color:black;margin-left:20px;font-weight: bold;font-family: 'Jua', sans-serif;margin-top: 8px">Categories</h3>
</div>
<br>

<ul class="list-group list-group-horizontal">
<li class="list-group-item"><div class="container">
  <button class="btn-custom"><img class="img4" style="margin-top: 2px" src="<?php echo base_url('aset/man.png');?>"> <br> Men's wear</button>
</div></li>
<li class="list-group-item"><div class="container">
  <button class="btn-custom"><img class="img4" style="margin-top: 2px" src="<?php echo base_url('aset/nct.png');?>"> <br> Kpop merch's</button>
</div></li>
<li class="list-group-item"><div class="container">
  <button class="btn-custom"><img class="img4" style="margin-top: 2px" src="<?php echo base_url('aset/freeze.png');?>"> <br> frozen food</button>
</div></li>
<li class="list-group-item"><div class="container">
  <button class="btn-custom"><img class="img4" style="margin-top: 2px" src="<?php echo base_url('aset/woman.png');?>"> <br>women's wear</button>
</div></li>
<li class="list-group-item"><div class="container">
  <button class="btn-custom"><img class="img4" style="margin-top: 2px" src="<?php echo base_url('aset/body.png');?>"> <br> Body <br>care</button>
</div></li>
<li class="list-group-item"><div class="container">
  <button class="btn-custom"><img class="img4" style="margin-top: 2px" src="<?php echo base_url('aset/snack.png');?>"> <br> Korean snack</button>
</div></li>
<li class="list-group-item"><div class="container">
  <button class="btn-custom"><img class="img4" style="margin-top: 2px" src="<?php echo base_url('aset/make.png');?>"> <br> Make <br> Up</button>
</div></li>
</ul>



<br>
<br>
<br>
<div style="background-color: white;height:400px">
<div class="title2">
<h3 style="color:black;margin-left:20px;font-weight: bold;font-family: 'Jua', sans-serif;margin-top: 8px">New Arrivals</h3>
</div>
<br>
<div style="background-color:rgba(22,0,69,0.5);height: 250PX;">
 <div class="top-content" style="padding-top: 5px;">
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
</div>
<br>
<br>
<br>
<h1 align="center" style="color:black">About us</h1>
<center><img class="img2" src="<?php echo base_url('aset/dreamis ver1.png');?>">
    <h4 style="color: black">DREAMIES korean store</h4></center>
    <p style="font-family:'Jua',sans-serif;font-size: 18px " align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     <p style="font-family:'Jua',sans-serif;font-size: 18px " align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

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
    background: #ff334b !important;
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