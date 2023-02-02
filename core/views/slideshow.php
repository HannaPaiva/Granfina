<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->


<style>
  /* ------------------------------------------------------------------------------
 	Author: WebThemez
/* ------------------------------------------------------------------------------
	Typography
-------------------------------------------------------------------------------*/

@import url(http://fonts.googleapis.com/css?family=Open%20Sans:300,400,500,600,700); 
p {
	font-size: 14px;
	line-height: 22.4px;
	color: #d5cbf3;
}
h1 {
	font-size: 65px;
	color: #2d3033;
}
h2 {
	font-size: 40px;
	color: #2d3033;
}
h3 {
	font-size: 28px;
	color: #2d3033;
	font-weight: 300;
}
h4 {
	font-size: 22px;
	color: #ffffff;
	font-weight: 400;
}
h5 {
	font-size: 14px;
	color: #2d3033;
	text-transform: uppercase;
	font-weight: 700;
}
.btn {
	background-color: transparent;
	color: #F05DA3;
	font-size: 16px;
	font-weight: 600;
	border: 0;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	display: inline-block;
	text-transform: uppercase;
	border: 1px solid #F05DA3;
}
.btn:hover, .btn:focus {
	background-color: #F05DA3;
	color: #fff;
	border-color: #F05DA3;
}
.btn-large {
	padding: 15px 40px;
}
#map-overlay {
    height:400px;
    margin-top:-405px;
    background-color: rgba(98, 75, 164, 0.88);
    padding:40px;
    color: #fff;
}
/* ------------------------------------------------------------------------------
	Global Styles
-------------------------------------------------------------------------------*/
a {
	color: #e84545;
}
a:hover, a:focus {
	text-decoration: none;
	-moz-transition: background-color, color, 0.3s;
	-o-transition: background-color, color, 0.3s;
	-webkit-transition: background-color, color, 0.3s;
	transition: background-color, color, 0.3s;
}
body {
	font-family: "Open Sans", Arial, sans-serif;
	font-weight: 400;
	color: #6c7279;
	background: #624ba4;
}
ul, ol {
	margin: 0;
	padding: 0;
}
ul li {
	list-style: none;
}
.section {
	padding: 75px 0;
}
.no-padding {
	padding: 0;
}
.no-gutter [class*=col-] {
	padding-right: 0;
	padding-left: 0;
}
.space {
	margin-top: 60px;
}
/* ------------------------------------------------------------------------------
	Header
-------------------------------------------------------------------------------*/
#header {
	position: fixed;
	width: 100%;
	z-index: 999;
	background: rgba(255, 255, 255, 0);
}
#header .header-content {
	margin: 0 auto;
	max-width: 1170px;
	padding: 30px 0;
	width: 100%;
	-moz-transition: padding 0.3s;
	-o-transition: padding 0.3s;
	-webkit-transition: padding 0.3s;
	transition: padding 0.3s;
}
#header .logo {
	float: left;
	font-size: 18px;
	font-weight:700;
	color: #ffffff;
	text-decoration:none;
	text-transform:uppercase;
	letter-spacing: 2px;
	border: 1px solid #fff;
	padding: 8px 15px;
	margin-top: -11px;
}
#header.fixed {
	background-color: #fff;
}
#header.fixed a {
	color: #624ba4;
}
#header.fixed .header-content {
	border-bottom: 0;
	padding: 25px 0px 12px;
}
#header.fixed .nav-toggle {
	top: 18px;
	color: #000;
}
.navigation.open {
	opacity: 0.9;
	visibility: visible;
	-moz-transition: opacity 0.5s;
	-o-transition: opacity 0.5s;
	-webkit-transition: opacity 0.5s;
	transition: opacity 0.5s;
}
.navigation {
	float: right;
}
.navigation li {
	display: inline-block;
}
.navigation a {
	color: rgba(255, 255, 255, 0.86);
	font-size: 14px;
	font-weight: 600;
	margin-left: 40px;
	text-transform: uppercase;
}
.navigation a:hover, .navigation a.active {
	color: #ff52ff;
}
.nav-toggle {
	display: none;
	height: 44px;
	overflow: hidden;
	position: fixed;
	right: 5%;
	text-indent: 100%;
	top: 32px;
	white-space: nowrap;
	width: 44px;
	z-index: 99999;
	-moz-transition: all 0.3s;
	-o-transition: all 0.3s;
	-webkit-transition: all 0.3s;
	transition: all 0.3s;
	background: transparent;
}
.nav-toggle:before, .nav-toggle:after {
	border-radius: 50%;
	content: "";
	height: 100%;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
	-moz-transform: translateZ(0);
	-ms-transform: translateZ(0);
	-webkit-transform: translateZ(0);
	transform: translateZ(0);
	-moz-backface-visibility: hidden;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-moz-transition-property: -moz-transform;
	-o-transition-property: -o-transform;
	-webkit-transition-property: -webkit-transform;
	transition-property: transform;
}
.nav-toggle:before {
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	-webkit-transform: scale(1);
	transform: scale(1);
	-moz-transition-duration: 0.3s;
	-o-transition-duration: 0.3s;
	-webkit-transition-duration: 0.3s;
	transition-duration: 0.3s;
	color: #f05da3;
}
.nav-toggle:after {
	background-color: transparent;
	-moz-transform: scale(0);
	-ms-transform: scale(0);
	-webkit-transform: scale(0);
	transform: scale(0);
	-moz-transition-duration: 0s;
	-o-transition-duration: 0s;
	-webkit-transition-duration: 0s;
	transition-duration: 0s;
	color: #f05da3;
}
.nav-toggle span {
	bottom: auto;
	display: inline-block;
	height: 3px;
	left: 50%;
	position: absolute;
	right: auto;
	top: 50%;
	width: 18px;
	z-index: 10;
	-moz-transform: translateX(-50%) translateY(-50%);
	-ms-transform: translateX(-50%) translateY(-50%);
	-webkit-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);
}
.nav-toggle span:before, .nav-toggle span:after {
	background-color: #000;
	content: "";
	height: 100%;
	position: absolute;
	right: 0;
	top: 0;
	width: 100%;
	-moz-transform: translateZ(0);
	-ms-transform: translateZ(0);
	-webkit-transform: translateZ(0);
	transform: translateZ(0);
	-moz-backface-visibility: hidden;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-moz-transition: -moz-transform 0.3s;
	-o-transition: -o-transform 0.3s;
	-webkit-transition: -webkit-transform 0.3s;
	transition: transform 0.3s;
}
.nav-toggle span:before {
	-moz-transform: translateY(-6px) rotate(0deg);
	-ms-transform: translateY(-6px) rotate(0deg);
	-webkit-transform: translateY(-6px) rotate(0deg);
	transform: translateY(-6px) rotate(0deg);
}
.nav-toggle span:after {
	-moz-transform: translateY(6px) rotate(0deg);
	-ms-transform: translateY(6px) rotate(0deg);
	-webkit-transform: translateY(6px) rotate(0deg);
	transform: translateY(6px) rotate(0deg);
}
.nav-toggle.close-nav:before {
	-moz-transform: scale(0);
	-ms-transform: scale(0);
	-webkit-transform: scale(0);
	transform: scale(0);
}
.nav-toggle.close-nav:after {
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	-webkit-transform: scale(1);
	transform: scale(1);
}
.nav-toggle.close-nav span {
	background-color: rgba(255, 255, 255, 0);
}
.nav-toggle.close-nav span:before, .nav-toggle.close-nav span:after {
	background-color: #fff;
}
.nav-toggle.close-nav span:before {
	-moz-transform: translateY(0) rotate(45deg);
	-ms-transform: translateY(0) rotate(45deg);
	-webkit-transform: translateY(0) rotate(45deg);
	transform: translateY(0) rotate(45deg);
}
.nav-toggle.close-nav span:after {
	-moz-transform: translateY(0) rotate(-45deg);
	-ms-transform: translateY(0) rotate(-45deg);
	-webkit-transform: translateY(0) rotate(-45deg);
	transform: translateY(0) rotate(-45deg);
}
/* ------------------------------------------------------------------------------
	Banner
-------------------------------------------------------------------------------*/
#main-slider {
  overflow: hidden;
}
#main-slider .item {
  height: 600px;
  background-repeat: no-repeat;
  background-position: 50% 0;
  background-size: cover;
}
#main-slider .slider-inner {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  color: #000;
  position: relative;
}
#main-slider .slider-inner h2 {
  margin-top: 180px;
  font-size: 34px;
  line-height: 49px;
  color: #fff;
  font-weight: 600;
}
#main-slider .slider-inner h2 > span {
  color: #45aed6;
}
#main-slider .slider-inner .btn {
  margin-top: 10px;
  background-color: #FFFFFF;
  color: #8718bd;
  border: none;
  font-size: 13px;
  padding: 10px 20px;
}
#main-slider .owl-prev,
#main-slider .owl-next {
  position: absolute;
  top: 47%;
  background-color: rgb(143, 28, 157);
  color: #ffffff;
  font-size: 30px;
  display: inline-block;
  margin-top: -35px;
  height: 70px;
  width: 70px;
  line-height: 70px;
  text-align: center;
  z-index: 5;
  -webkit-transition: background-color 400ms;
  transition: background-color 400ms;
  border-radius: 50%;
}
#main-slider .owl-prev:hover,
#main-slider .owl-next:hover {
  background-color: #45aed6;
}
#main-slider .owl-prev {
  left: -35px;
  text-indent: 14px;
}
#main-slider .owl-next {
  right: -35px;
  text-indent: -14px;
}
#bar {
  width: 0%;
  max-width: 100%;
  height: 2px;
  background: #fff;
}
#progressBar {
  margin-top: -4px;
  position: relative;
  z-index: 999;
  width: 100%;
  background: rgba(0, 0, 0, 0.1);
}
.carousel-content {
    margin-top: 30%;
    width: 44%;
}
.carousel-content p{ 
color:#fff;
}
.thumbnail{
	margin-top:25px;
}
 .thumbnail h3{
    font-size: 18px !important;
    margin-top: 14px !important;
}

.banner {
	background-image: url(../images/banner.jpg);
	background-position: center top;
	background-repeat: no-repeat;
	-moz-background-size: cover;
	-o-background-size: cover;
	-webkit-background-size: cover;
	background-size: cover;
	min-height: 750px;
}
.banner-text {
	padding-top: 45%;
}
.banner-text h1 {
	color: #000000;
	font-family: "Open Sans", Arial, sans-serif;
	font-size: 36px;
	font-weight: 700;
	text-transform: uppercase;
}
.banner-text p {
	color: #000;
	font-size: 16px;
	font-weight: 400;
	line-height: 24px;
	margin-top: 30px;
	margin-bottom: 80px;
}
/* ==========================================================================
	$intro
========================================================================== */
.intro {
	background-color: #ffffff;
	/* color: #000; */
	padding: 50px 0;
}
.intro h3 {
	color: #b133b8;
	margin-top: 0;
	font-weight: 600;
	font-size: 32px;
}
.intro p {
	color: #737373;
	font-weight: 400;
}
/* -----------------------------------------------------------------------------
Common Styles
------------------------------------------------------------------------------- */
.section-header{	
text-align: center;	
padding-bottom: 30px;
}
.section-header h2{
	
color: #fff;
}
.section-header p{
	
color: #fff;
}


/* ------------------------------------------------------------------------------
	 Serives
-------------------------------------------------------------------------------*/
.service-section {
	padding-top: 100px;
}
.services {
	margin-bottom: 50px;
}
.services-content {
	padding: 38px 30px 20px;
	margin-top: 30px;
	background: #624ba4;
	border: 1px solid #d6cbf7;
	text-align: left;
}
.services .icon {
	color: #9222a8;
	font-size: 32px;
	padding-left: 15px;
	float: left;
	background: #fff;
	padding: 14px;
	width: 74px;
	height: 64px;
}
/* ------------------------------------------------------------------------------
	 gallery
-------------------------------------------------------------------------------*/
.work {
	-moz-box-shadow: 0 0 0 1px #fff;
	-webkit-box-shadow: 0 0 0 1px #fff;
	box-shadow: 0 0 0 1px #624ba4;
	overflow: hidden;
	position: relative;
}
.work img {
	width: 100%;
	height: 100%;
}
.work .overlay {
	background: rgba(240, 93, 163, 0.7);
	height: 100%;
	left: 0;
	opacity: 0;
	position: absolute;
	top: 0;
	width: 100%;
	-moz-transition: opacity, 0.3s;
	-o-transition: opacity, 0.3s;
	-webkit-transition: opacity, 0.3s;
	transition: opacity, 0.3s;
}
.work .overlay-caption {
	position: absolute;
	text-align: center;
	top: 50%;
	width: 100%;
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}
.work h5, .work p, .work img {
	-moz-transition: all, 0.5s;
	-o-transition: all, 0.5s;
	-webkit-transition: all, 0.5s;
	transition: all, 0.5s;
}
.work h5, .work p {
	color: #fff;
	margin: 0;
	opacity: 0;
}
.work span {
	font-size: 45px;
}
.work h5 {
	margin-bottom: 5px;
	-moz-transform: translate3d(0, -200%, 0);
	-ms-transform: translate3d(0, -200%, 0);
	-webkit-transform: translate3d(0, -200%, 0);
	transform: translate3d(0, -200%, 0);
}
.work p {
	-moz-transform: translate3d(0, 200%, 0);
	-ms-transform: translate3d(0, 200%, 0);
	-webkit-transform: translate3d(0, 200%, 0);
	transform: translate3d(0, 200%, 0);
}
.work-box:hover img {
	-moz-transform: scale(1.2);
	-ms-transform: scale(1.2);
	-webkit-transform: scale(1.2);
	transform: scale(1.2);
}
.work-box:hover .overlay {
	opacity: 1;
}
.work-box:hover .overlay h5, .work-box:hover .overlay p {
	opacity: 1;
	-moz-transform: translate3d(0, 0, 0);
	-ms-transform: translate3d(0, 0, 0);
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}
/* ------------------------------------------------------------------------------
	 package
-------------------------------------------------------------------------------*/
.packageList {
	margin-bottom: 50px;
	background: #a92bb3;
	padding: 50px 0;
}
h5 {
    font-size: 1.286em;
    font-weight: 500;
    margin: 0.3em 0;
    text-transform: capitalize;
    color: #fff;
}
ul.list-default {
    list-style-type: none;
    padding: 0;
}
ul.list-default li {
    padding: 0.5em 0 0.5em 2em;
    position: relative;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}
.package {
	border: 1px solid rgba(0, 0, 0, 0.1) !important;
	position: relative;
	border-style: none none solid none !important;
	padding: 1em 0 0.5em;
}

.package:hover h5 {
	color: ALICEBLUE;
}
.package:hover .price {
	background-color: #624ba4;
}
.package ul.list-default li {
	border: none !important;
	padding: 4px 0;
	color: #ef94f7;
} 
.package ul.list-default li:before {
	top: 0.3em !important;
}
.price {
    top: 0;
    right: 0;
    bottom: 0;
    left: auto;
    position: absolute;
    background-color: #7d66c1;
    font-size: 1.35em;
    font-weight: 500;
    color: #fff;
    padding: 0.5em;
    margin: -1px -1px -1px 0;
}
.package .price {
	top: 1em;
	right: 1em;
	bottom: auto;
	font-size: 1.5em;
	padding: 0.7em;
}
.package .price small {
	font-size: 0.7em;
	margin-right: 3px;
}
/* ------------------------------------------------------------------------------
	 Teams
-------------------------------------------------------------------------------*/
.person {
	max-width: 270px;
	text-align: center;
}
.person img {
	width: 150px;
	height: 150px;
	margin: auto;
}
.person-content {
	margin-top: 20px;
}
.person h4 {
	font-weight: 400;
}
.person h5 {
	color: #d0c1fc;
	font-size: 13px;
	font-weight: 400;
	margin-bottom: 20px;
}
.social-icons, .footer .footer-share {
	margin-top: 20px;
}
.social-icons li, .footer .footer-share li {
	display: inline-block;
	float: none;
}
.social-icons a, .footer .footer-share a {
	border: 1px solid #F05DA3;
	color: #F05DA3;
	display: block;
	font-size: 14px;
	height: 32px;
	line-height: 32px;
	margin-right: 5px;
	text-align: center;
	width: 32px;
}
.social-icons a:hover {
	background-color: #00aeda;
	border-color: #01a9d4;
	color: #fff;
}
/* ------------------------------------------------------------------------------
	 Testimonials
-------------------------------------------------------------------------------*/
.testimonials {
	background-color: #a92bb3;
	position: relative;
	text-align: center;
}
.testimonials blockquote {
	border: 0;
	margin: 0;
	padding: 100px 15%;
}
.testimonials h1 {
	color: #fff;
	font-weight: 300;
	font-size: 16px;
	line-height: 30px;
}
.testimonials p {
	color: #fff;
	display: block;
	font-size: 13px;
	font-style: normal;
	letter-spacing: 2px;
	font-weight: 400;
	margin-top: 30px;
	text-transform: uppercase;
}
.flex-control-nav {
	margin-top: 2%;
	bottom: none!important;
	position: relative!important;
	right: 0;
	text-align: center;
	width: 100%!important;
	z-index: 100;
}
/* ------------------------------------------------------------------------------
	Contact form
-------------------------------------------------------------------------------*/
.conForm {
	text-align: center;
}
.conForm h5 {
	font-size: 30px;
}
.conForm p {
	text-align: center;
	margin: 7%;
}
.conForm input {
	color: #797979;
	padding: 15px 30px;
	border: none;
	margin-right: 3%;
	margin-bottom: 30px;
	outline: none;
	font-style: normal;
	border: #e0e0e0 1px solid;
	font-size: 15px;
}
.conForm input.noMarr {
	margin-right: 0px;
}
.conForm textarea {
	color: #797979;
	padding: 15px 30px;
	margin-bottom: 18px;
	outline: none;
	height: 150px;
	font-style: normal;
	resize: none;
	font-size: 15px;
	border: none;
	border: #e0e0e0 1px solid;
}
.conForm .submitBnt {
	background: #F05DA3;
	color: #fff;
	margin-top: 30px;
	padding:15px 30px 15px 30px;
	font-size: 13px;
	font-weight: 600;
	letter-spacing: 5px;
	border: 0;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	display: inline-block;
	text-transform: uppercase;
}
.conForm .submitBnt:hover {
	background: #E5E5E5;
	color: #F05DA3;
}
#success_page{
	color: #00bdbd;
	font-weight: 500;
}
.error_message{
	color: #ff675f;
	padding-bottom: 15px;
	font-weight: 500;
}
#success_page h3{
	font-size:17px;
	color:#5ed07b;
	font-weight: 700;
}

/* ------------------------------------------------------------------------------
	 Footer
-------------------------------------------------------------------------------*/
.footer {
	text-align: left;
}
.footer-top {
	background-color: #181818;
	padding-top: 50px;
}
.footer-bottom {
	background-color: #313454;
	padding: 20px 0;
}
.footer .footer-col {
	margin-bottom: 80px;
}
.footer h5 {
	color: #fff;
}
.footer h5 {
	margin-bottom: 20px;
}
.footer p {
	color: rgba(255, 255, 255, 0.25);
}
.footer a {
	color: rgba(255, 255, 255, 0.50);
}
.footer a:hover {
	color: #e84545;
}
.footer .footer-share {
	margin-top: 0;
}
.footer .footer-share li {
	display: inline-block;
	float: none;
}
.footer .footer-share a {
	border: none;
	font-size: 21px;
	color: rgba(255, 255, 255, 0.25);
}
.footer .fa-heart {
	color: #e84545;
	font-size: 11px;
	margin: 0 2px;
}

</style>
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MakeOver - beauty and spa bootstrap template</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.transitions.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- header section -->
<!-- <section role="banner" id="home">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.html"><span class="icon icon-genius"></span> MakeOver</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#intro">About</a></li>
          <li><a href="#services">services</a></li>
          <li><a href="#package">Package</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#teams">Our Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header> 
</section> -->
<!-- header section --> 

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h2>Look Beautiful</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore.</p>
                                    <a class="btn btn-primary btn-lg" href="#package">Offers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h2>Feel Beautiful</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore.</p>
                                    <a class="btn btn-primary btn-lg" href="#package">Offers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>MakeOver Your Looks</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/portfolio/05.jpg" alt="img">
      <div class="caption">
        <h3>Beauty</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum</p>
        
      </div>
    </div>
  </div>
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/portfolio/07.jpg" alt="img">
      <div class="caption">
        <h3>Aroma Spa</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum</p>
        
      </div>
    </div>
  </div>
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/portfolio/08.jpg" alt="img">
      <div class="caption">
        <h3>Makekup</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum</p>
        
      </div>
    </div>
  </div>
  </div>
</div>
</section>
<!-- intro section --> 
<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="section-header">
                <h2 class="wow fadeInDown animated">Our Services</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-strategy"></span>
        <div class="services-content">
          <h5>Aroma Therapy</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-briefcase"></span>
        <div class="services-content">
          <h5>Body Spa</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-tools"></span>
        <div class="services-content">
          <h5>Expert Hair Spa</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-genius"></span>
        <div class="services-content">
          <h5>Massage</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
        <div class="services-content">
          <h5>Manicure</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-trophy"></span>
        <div class="services-content">
          <h5>Wedding Makekup</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- services section --> 
<!-- package section -->
<section id="package" class="packageList">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Package</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">  
            <div class="col-md-6">
            
            	<div class="package wow fadeInLeft animated" data-wow-offset="250" data-wow-delay="200ms">
                	<h5>Hair Styling</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>38</strong>
                </div><!-- end package -->
                
                <div class="package wow fadeInLeft animated" data-wow-offset="200" data-wow-delay="300m">
                	<h5>Skin Treatment</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>75</strong>
                </div><!-- end package -->
                
                <div class="package no-border wow fadeInLeft animated" data-wow-offset="150" data-wow-delay="400m" >
                	<h5>Hair Treatment</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>46</strong>
                </div><!-- end package -->
                
            </div><!-- end col-md-6 -->
            <div class="col-md-6">
            
            	<div class="package wow fadeInRight animated" data-wow-offset="250" data-wow-delay="500m" >
                	<h5>Body Massage</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>15</strong>
                </div><!-- end package -->
                
                <div class="package wow fadeInRight animated" data-wow-offset="200" data-wow-delay="600m">
                	<h5>Nail Painiting</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>84</strong>
                </div><!-- end package -->
                
                <div class="package no-border wow fadeInRight animated" data-wow-offset="150" data-wow-delay="700m">
                	<h5>Color Treatment</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>95</strong>
                </div><!-- end package -->
                
            </div><!-- end col-md-6 -->
        </div><!-- end row -->    
  </div>
</section>
<!-- package section --> 

<!-- gallery section -->
<section id="gallery" class="gallery section">
  <div class="container">
    <div class="section-header">
                <h2 class="wow fadeInDown animated">Gallery</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row no-gutter">
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/01.jpg" class="work-box"> <img src="images/portfolio/01.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
             <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/02.jpg" class="work-box"> <img src="images/portfolio/02.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/03.jpg" class="work-box"> <img src="images/portfolio/03.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/04.jpg" class="work-box"> <img src="images/portfolio/04.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption"> 
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/05.jpg" class="work-box"> <img src="images/portfolio/05.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/06.jpg" class="work-box"> <img src="images/portfolio/06.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/07.jpg" class="work-box"> <img src="images/portfolio/07.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/08.jpg" class="work-box"> <img src="images/portfolio/08.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
             <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
</section>
<!-- gallery section --> 
<!-- our team section -->
<section id="teams" class="section teams">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Our Team</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="person"><img src="images/team-1.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Jonh Dow</h4>
            <h5 class="role">Founder</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-2.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Markus Linn</h4>
            <h5 class="role">Creative</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-3.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Chris Jemes</h4>
            <h5 class="role">Technical</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-4.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Vintes Mars</h4>
            <h5 class="role">Marketing</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- our team section --> 
<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>Chris Mentsl</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Praesent eget risus vitae massa Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>Kristean velnly</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>Markus Denny</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Vitae massa semper aliquam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>John Doe</p>
              </blockquote>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials section --> 

<!-- contact section -->
<section id="contact" class="section">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Contact Us</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">       
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
          <div id="simple-msg"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- contact section --> 
<!-- Footer section -->
<footer class="footer">
<div class="container-fluid">
<div id="map-row" class="row">
    <div class="col-xs-12">    
    	<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe> 
      
          <div id="map-overlay" class="col-xs-5 col-xs-offset-6" >
    		<h2 style="margin-top:0;color:#fff;">Contact us</h2>
    		<address style="color:#fff;">
    			<strong>Company name</strong><br>
    			1234 Street Dr.<br>
    			Vancouver, BC<br>
    			Canada<br>
    			V6G 1G9<br>
    			<abbr title="Phone">Tel:</abbr> (604) 555-4321
    		</address>
			  © 2019 Company Name. <a href="https://webthemez.com/tag/free" target="_blank">Free Template</a> by WebThemez.com.
    	</div>
    </div>
	 </div>
</div>
</footer>
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script>
<script src="js/mousescroll.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script>  
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
</body>
</html>