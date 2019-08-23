<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!doctype html>
<html amp>
<head>
	<meta charset="utf-8">
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
	<meta name="viewport" content="width=device-width,minimum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google-site-verification" content="YotaIaOvuQa95NuQ3O85bTVXxUYKh3iNc6nv7fCZL5o" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic&subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">-->
	<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
	<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
	<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
	<script async custom-element="amp-facebook" src="https://cdn.ampproject.org/v0/amp-facebook-0.1.js"></script>
	<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script> 
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<?php 
		$queried_object = get_queried_object();
		var_dump($queried_object); die;
	?>
	
	<script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "<?php wp_title('', false)?>",
        "datePublished": "<?php echo $queried_object->title?>",
        "image": [
          "logo.jpg"
        ]
      }
    </script>
	
   <style amp-custom>
 /* Structure */
html{
	margin:0 ;
}
.inner{
	display:block;
	margin-left:auto;
	margin-right:auto;
}

.col{
	display:inline-block;
	float:left;
}

.col.col-right{
	float:right;
}

b, strong{
	font-weight:normal;
}
.broken_link, 
a.broken_link{
	text-decoration: none  ;
}

.s-hidden{
	display:none;
}
article .aligncenter{
	text-align:center;
}
body{
	font-family: 'Roboto', sans-serif; 
        font-weight:300;
	font-size:16px;
	color:#2f2f2f;
}

img.img-border{
	border:1px solid #ccc;
	 box-shadow: 10px 10px 5px #888888;
}

h1{
    text-transform: uppercase;        
    color:#01afef;
}
article{	
	
}
a, a:hover, a:visited{
	text-decoration:none;
        color:#01afef;
}

#logo-package{
	margin:10px 0 30px;
}
#logo-package .package{
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	border:1px solid #888;
	margin:0;
	padding:0;	
}
#logo-package .package.recommend{
	z-index:9;
	background:#FFF;
	-webkit-box-shadow: 0px 7px 16px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 7px 16px 0px rgba(0,0,0,0.75);
	box-shadow: 0px 7px 16px 0px rgba(0,0,0,0.75);
}
#logo-package .package.recommend .price{
	font-weight:bold;
}
#logo-package  .recommend .package-header {
	background:url('../images/recommended.png') no-repeat #01afef;
	background-size:80px 80px;
}
#logo-package  .package-header{
	border-bottom:1px solid #888;
	padding:20px;
	background:#01afef;
	color:#FFF;
	text-align:center;
}
#logo-package  .package-detail{
	padding:20px;
}

#related-block{
	margin-top:40px; border-top:1px dotted #ccc; padding-top:10px;
}
a:hover, a:focus{
	color:#green;
}

img{
    max-width:100%;
    height:auto;
}
img.aligncenter{
    display:block;
    margin:auto;
}

#wslide{
	background:#01afef;
	height:650px;
	display:inline-block;
	width:100%;
	position:relative;
	overflow:hidden;
	color:#FFF;
}
#wslide .slide .sl-readmore{
	display:inline-block;
	width:100%;
	margin-top:30px;
}
#wslide .slide .sl-readmore a{
	background:#FFF;
	color:#01afef;
	text-transform:uppercase;
	padding:10px 20px;
	margin-top:50px;
}
#wslide .slide{
	display:inline-block;	
	width:100%;
	height:100%;
	position:relative;
	-webkit-perspective: 1600px; /* Chrome, Safari, Opera  */
    perspective: 1600px;
	top:0;
	left:0;
	display:none;
}

#wslide .slide.active{	
	display:inline-block;	
}

#wslide .slide-images{
	position:absolute;
	transform:translateY(-50%) rotateX(60deg) rotateZ(35deg);
	transform-style:preserve-3d;
	width:100%;
	top:40%;
	left:55%;
	
}

#wslide .slide .slide-img-1{
	width:45%;
}
#wslide .slide .slide-img-2{
	width:45%;
	left: 0%;
	position: absolute;
	top: 110%;
}

/* even */
#wslide  .even .slide-images{
	position: absolute;
	width: 100%;
	height: 100%;
	left: 40%;
	top: 30%;
	transform-style: preserve-3d;
	transform: translateY(-50%) rotateX(60deg) rotateZ(-20deg);	
}
#wslide .slide.even .slide-img-1{
	width:40%;
	top: 0%;
	left: 0%;
}
#wslide .slide.even .slide-img-2{
	width: 40%;
	position: absolute;
	left: 0px;
	top: 67%;
}

#wslide .slide.even.active .slide-images{
	animation:slide_even 5s infinite;	
	-webkit-animation:slide_even 5s infinite;
}
@keyframes slide_even{
	0%{
		left:150%;
		top:150%;
	}
	10%{
		left: 40%;
		top: 20%;
	}
	70%{
		left: 40%;
		top: 20%;
	}	
	85%{
		left:43%;
		top:23%;
	}
	100%{
		left:-50%;
		top:-70%;
	}
}
@-webkit-keyframes slide_even{
	0%{
		left: 50%;
		top: 50%;
	}
	70%{
		left: 50%;
		top: 50%;
	}	
	85%{
		left:53%;
		top:53%;
	}
	100%{
		left:-20%;
		top:-20%;
	}
}


#wslide .slide.odd.active .slide-images{
	animation:slide_odd 5s infinite;	
	-webkit-animation:slide_odd 5s infinite;	
}
@keyframes slide_odd{
	0%{
		top: 140%;
		left: -55%;
	}
	10%{
		top: 40%;
		left: 55%;
	}
	70%{
		top: 40%;
		left: 55%;
	}
	85%{
		top: 43%;
		left: 52%;
	}
	100%{
		top: -20%;
		left: 125%;
	}
}
@-webkit-keyframes slide_odd{
	0%{
		top: 140%;
		left: -55%;
	}
	10%{
		top: 40%;
		left: 55%;
	}
	70%{
		top: 40%;
		left: 55%;
	}
	85%{
		top: 43%;
		left: 52%;
	}
	100%{
		top: -20%;
		left: 125%;
	}
}

#wslide .slide-title{
	position:absolute;
	top:60px;
	left:60px;
	font-size:40px;
	width:380px;
}
#wslide .slide-description{
	position:absolute;
	top:150px;
	left:60px;
	font-size:20px;
	width:380px;	
}
#wslide .slide-title,
#wslide .slide-description{
	opacity:0;
	animation:fade_on 2s forwards;
	-webkit-animation:fade_on 2s forwards;	
}
@keyframes fade_on{
	from{
		opacity:0;
	}
	to{
		opacity:1;
	}
}
@-webkit-keyframes fade_on{
	from{
		opacity:0;
	}
	to{
		opacity:1;
	}
}
/* END SLIDE */

/* PROCESS */
#process{
	display:inline-block;
	width:960px;
	height:300px;
}
#process .container{
	display:block;
	margin:0 auto;
	position:relative;
}
#process #paper{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/paper.png') no-repeat;
	background-size:100% 100%;
	position:absolute;	
	left:0px;
	top:20px;
	display:inline-block;
	width:10%;
	height:150px;
	opacity:0;
}
#process.active #paper{
	animation:fade_on 3s forwards;
	-webkit-animation:fade_on 3s forwards;
}
#process #paper2{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/paper.png') no-repeat;
	background-size:100% 100%;
	position:absolute;	
	left:0;
	top:20px;
	display:inline-block;
	width:10%;
	height:150px;
	opacity:0;	
}
#process.active #paper2{
	animation:paper2 0.5s forwards;
	-webkit-animation:paper2 0.5s forwards;
	animation-delay:4s;
	-webkit-animation-delay:4s;
}
@keyframes paper2{
	0{
		left:0px;
		opacity:0;
	}
	100%{
		left:40%;
		opacity:1;
	}	
}
#process #question{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/question.png') no-repeat;
	background-size:100% 100%;
	position:absolute;	
	left:40px;
	top:40px;
	display:inline-block;
	width:50px;
	height:50px;
	opacity:0;
}
#process.active #question{
	animation:fade_on 0.2s forwards;
	-webkit-animation:fade_on 0.2s forwards;
	animation-delay:1s;
	-webkit-animation-delay:1s;
}
#process #question2{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/question2.png') no-repeat;
	background-size:100% 100%;
	position:absolute;	
	left:20px;
	top:100px;
	display:inline-block;
	width:50px;
	height:50px;
	opacity:0;
}
#process.active #question2{
	animation:fade_on 0.2s forwards;
	-webkit-animation:fade_on 0.2s forwards;
	animation-delay:1.5s;
	-webkit-animation-delay:1.5s;
}
#process #question3{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/question3.png') no-repeat;
	background-size:100% 100%;
	position:absolute;	
	left:60px;
	top:80px;
	display:inline-block;
	width:50px;
	height:50px;
	opacity:0;	
}
#process.active #question3{
	animation:fade_on 0.2s forwards;
	-webkit-animation:fade_on 0.2s forwards;
	animation-delay:2s;
	-webkit-animation-delay:2s;
}
#process #idea{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/idea.png') no-repeat;
	background-size:100% 100%;
	position:absolute;	
	left:20%;
	top:40px;
	display:inline-block;
	width:10%;
	height:120px;
	opacity:0;	
}
#process.active #idea{
	animation:fade_on 0.3s forwards;
	-webkit-animation:fade_on 0.3s	 forwards;
	animation-delay:3s;
	-webkit-animation-delay:3s;
}
#process #pen{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/pen.png') no-repeat;
	background-size:100% 100%;
	position:absolute;	
	left:42%;
	top:20px;
	display:inline-block;
	width:7%;
	height:80px;
	opacity:0;	
}
#process.active #pen{
	animation:pen 1.5s forwards;
	-webkit-animation:pen 1.5s forwards;
	animation-delay:4.5s;
	-webkit-animation-delay:4.5s;
}
@keyframes pen{
	0%{
		opacity:0;
		top:0px;
	}
	25%{
		opacity:1;
		top:40px;
	}
	70%{
		opacity:0;
		top:40px;
	}
}
#process #paper3{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/paper2.png') no-repeat;
	background-size:100% 100%;
	position:absolute;	
	left:40%;
	top:20px;
	display:inline-block;
	width:10%;
	height:150px;
	opacity:0;
}
#process.active #paper3{
	animation:fade_on 0.5s forwards;
	-webkit-animation:fade_on 0.5s forwards;
	animation-delay:5s;
	-webkit-animation-delay:5s;
}
#process #printer{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/printer.png') no-repeat;
	background-size:100% 100%;
	position:absolute;	
	left:60%;
	top:35px;
	display:inline-block;
	width:12%;
	height:140px;
	opacity:0;	
}
#process.active #printer{
	animation:printer 0.5s forwards;
	-webkit-animation:printer 0.5s forwards;
	animation-delay:6.5s;
	-webkit-animation-delay:6.5s;
}
@keyframes printer{
	from{
		opacity:0;
		top:150px;
	}
	to{
		opacity:1;
		top:35px;
	}
}

#process #product{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/product.png') no-repeat;
	background-size:100% 100%;
	position:absolute;	
	left:80%;
	top:20px;
	display:inline-block;
	width:12%;
	height:160px;
	opacity:0;	
}
#process.active #product{
	animation:brochure 1s forwards;
	-webkit-animation:brochure 1s forwards;
	animation-delay:8s;
	-webkit-animation-delay:8s;
}
@keyframes brochure{
	from{
		opacity:0;
		left:60%;
	}
	to{
		opacity:1;
		left:80%;
	}
}

#scroll-process{
	display:inline-block;	
	overflow:hidden;
	height:10px;
	background:red;
	animation:process 21s  linear forwards;
	-webkit-animation:process 21s linear forwards;
	bottom:200px;
}
@keyframes process{
	from{
		background:red;
		width:0;
	}
	to{
		background:green;
		width:100%;
	}
}

@keyframes fade_on_off{
	0%{
		opacity:0;
	}
	70%{
		opacity:1;
	}
	100%{
		opacity:0;
	}
}


#main-menu{
	margin:0;
	padding:0;
}
#main-menu li{
	list-style:none;
	background:#eee;
-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	display:inline-block;
	margin:5px 3px;
	padding:5px;
}

#main-header{
	padding:10px;
}


#menu-region a{
	color:#01afef;/* xanh */
	font-size:18px;
}
#mmenu{
	
}
#p-hotline{
	width: 90%;
	display:inline-block;
	font-size: 22px;
	color:#01afef;/* xanh */
}
#main-header{
	position:relative;	
	/*-webkit-box-shadow: inset 0px -12px 11px -10px rgba(206,206,206,1);
	-moz-box-shadow: inset 0px -12px 11px -10px rgba(206,206,206,1);
	box-shadow: inset 0px -12px 11px -10px rgba(206,206,206,1);*/
}

#btn-show-menu{
	position:absolute;
	top:20px;
	right:20px;
	background:url('http://snh.vn/wp-content/themes/thsnh/images/mmenu-icon.png') no-repeat;
	background-size:100% 100%;
	width:34px;
	height:27px;
}

#h-about{
	text-align:center;
	color:#01afef;/* xanh */
	background:url('http://snh.vn/wp-content/themes/thsnh/images/h-about2.png');	
	padding:20px 0 40px;
}
#h-about i{
    font-weight:400;
}
#h-about h2,
#h-process h2{
	margin:40px 0 20px;
	text-transform:uppercase;	
	text-align:center;	
}
#feature {
	display:inline-block;
	width:100%;
	position:relative;
	height:440px;
}
#feature .feature{
	padding:5%;
	opacity:0;	
}
#feature h4{
	text-transform:uppercase;
	margin-top:25px;
}
#feature.active .sangtao{
	animation:moveTop 0.5s forwards;	
	-webkit-animation:moveTop 0.5s forwards;	
}
#feature.active .nhanhchong{
	animation:moveTop 0.5s forwards;		
	-webkit-animation:moveTop 0.5s forwards;	
	animation-delay:0.5s;
	-webkit-animation-delay:0.5s;
}
#feature.active .chuyennghiep{
	animation:moveTop 0.5s forwards;	
	-webkit-animation:moveTop 0.5s forwards;	
	animation-delay:1s;
	-webkit-animation-delay:1s;
}
@keyframes moveTop{
	0%{
		margin-top:90px;		
		opacity:0;
	}	
	100%{
		margin-top:0;
		opacity:1;
	}
}

#feature .thumb{
	background:#01afef;
	padding:20px 0;
	position:relative;
	overflow:hidden;	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 5px 5px 10px -3px rgba(0,0,0,1);
	-moz-box-shadow: 5px 5px 10px -3px rgba(0,0,0,1);
	box-shadow: 5px 5px 10px -3px rgba(0,0,0,1);
}
#feature .thumb img{
	width:50%;
	display:block;
	margin:40px auto;
}
#feature .thumb .des{
	position:absolute;
	top:0;
	padding:20px;	
	top:-50px;
	opacity:0;
	font-size:16px;
	color:#FFF;
	background:#01afef;
}
#feature .thumb:hover .des{
	animation:dropdown 0.5s forwards;	
	-webkit-animation:dropdown 0.5s forwards;	
}
@keyframes dropdown{
	0%{
		top:-50px;		
		opacity:0;
	}	
	100%{
		top:0px;		
		opacity:1;
	}
}

/* index 2 */
#index2{
}
#index2 #box{
	background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('http://snh.vn/wp-content/themes/thsnh/images/box-on.png') no-repeat ;
	background-size:100%;
	position:relative;
	display:inline-block;
	width:100%;
	height:800px;/* update by js */
	overflow:hidden;
}
#index2 #box.on{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/box-on.png') no-repeat;
	background-size:100%;
	animation:appear_opacity_f5 2s forwards;	
	-webkit-animation:appear_opacity_f5 2s forwards;	
}
#index2 #light{
	position:absolute;
	background:url('http://snh.vn/wp-content/themes/thsnh/images/light-off.png') no-repeat center 0;
	width:100%;
	height:100%;
	animation:appear_light 2s forwards;	
	-webkit-animation:appear_light 2s forwards;	
	top:-200px;
}
#index2 #light.on{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/light-on.png') no-repeat center 0;
	animation:appear_opacity 3s forwards;	
	-webkit-animation:appear_opacity 3s forwards;	
	top:0px ;
}
@keyframes appear_light{
	0%{
		top:-200px;		
	}	
	100%{
		top:0px;		
	}
}
@keyframes appear_opacity_f5{
	0%{
		opacity:0.5;
	}	
	100%{
		opacity:1;
	}
}

#index2 #g-content{
	position:absolute;
	top:220px;
	width:50%;
	left: 50%;
	transform: translateX(-50%);
	color:#FFF;
	font-size:24px;	
	font-family:cursive;
}
#index2 #g-content.on #home-product{	
}
#index2 #snh-name{	
	font-size:48px;
	opacity:0;		
}
#index2 #snh-des .des{
	padding-left:50px;
	opacity:0;
}
#index2 #g-content.on #snh-des .des{
	animation:move_to_left_1 0.5s forwards;	
	-webkit-animation:move_to_left_1 0.5s forwards;	
	animation-delay:1s;
	-webkit-animation-delay:1s;
}
#index2 #g-content.on #snh-des .des-2{
	animation-delay:2s;
	-webkit-animation-delay:2s;
}
#index2 #g-content.on #snh-name{
	animation:move_to_left 0.5s forwards;	
	-webkit-animation:move_to_left 0.5s forwards;	
}

@keyframes move_to_left{
	from{
		padding-left:30px;
		opacity:0;
	}
	to{
		padding-left:0;
		opacity:1;
	}
}
@keyframes move_to_left_1{
	from{
		padding-left:80px;
		opacity:0;
	}
	to{
		padding-left:50px;
		opacity:1;
	}
}
#index2  #home-product{	
	width:60%;
	left:20%;
	position:relative;
}
#index2  #home-product img{
	opacity:0;
	position:absolute;
}
#index2  .on #home-product img{
	animation:move_to_top 1s forwards;	
	-webkit-animation:move_to_top 1s forwards;	
	animation-delay:3.5s;
	-webkit-animation-delay:3.5s;
}
@keyframes move_to_top{
	from{
		top:50px;
		opacity:0;
	}
	to{
		top:0;
		opacity:1;
	}
}


/* index 3 */
#index3{
}
#index3 #box{
	background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('http://snh.vn/wp-content/themes/thsnh/images/bg-on.png') no-repeat ;
	background-size:100%;
	position:relative;
	display:inline-block;
	width:100%;
	height:800px;/* update by js */
	overflow:hidden;
}
#index3 #box.on{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/bg-on.png') no-repeat;
	background-size: 100%;
	animation:appear_opacity_f5 2s forwards;	
	-webkit-animation:appear_opacity_f5 2s forwards;	
}
#index3 #light{
	position:absolute;
	background:url('http://snh.vn/wp-content/themes/thsnh/images/lightoff.png') no-repeat center 0;
	background-size:32%;
	width:100%;
	height:100%;
	animation:appear_light 2s forwards;	
	-webkit-animation:appear_light 2s forwards;	
	top:-200px;
}
#index3 #light.on{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/lighton.png') no-repeat center 0;
	background-size:32%;
	animation:appear_opacity_f5 3s forwards;	
	-webkit-animation:appear_opacity_f5 3s forwards;	
	top:0px ;
}

#index3 #g-content{
	position:absolute;
	top:37%;
	width:35%;
	left: 50%;
	transform: translateX(-50%);
	color:#FFF;
	font-size:24px;		
}
#index3 #g-content.on #home-product{	
}
#index3 #snh-name{	
	font-size:48px;
	opacity:0;		
}
#index3 #snh-name #cursor{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/hand.png') no-repeat right 0;
	display:inline-block;
	padding-left:40px;
	height:40px;	
	opacity:0;
	animation:hand_cursor 2s infinite;	
	-webkit-animation:hand_cursor 2s infinite;	
	animation-delay:6s;
	-webkit-animation-delay:6s	;
}
@keyframes hand_cursor{
	0%{
		padding-left:40px;
		opacity:1;
	}	
	50%{
		padding-left:80px;
		opacity:1;
	}
	100%{
		padding-left:40px;
		opacity:1;
	}
}

#index3 #snh-des .des{
	padding-left:50px;
	opacity:0;
}
#index3 #g-content.on #snh-des .des{
	animation:move_to_left_1 0.5s forwards;	
	-webkit-animation:move_to_left_1 0.5s forwards;	
	animation-delay:1s;
	-webkit-animation-delay:1s;
}
#index3 #g-content.on #snh-des .des-2{
	animation-delay:2s;
	-webkit-animation-delay:2s;
}
#index3 #g-content.on #snh-name{
	animation:move_to_left 0.5s forwards;	
	-webkit-animation:move_to_left 0.5s forwards;	
}
#index3  #home-product{	
	width:60%;
	left:20%;
	position:relative;
}
#index3  #home-product img{
	opacity:0;
	position:absolute;
}
#index3  .on #home-product img{
	animation:move_to_top 1s forwards;	
	-webkit-animation:move_to_top 1s forwards;	
	animation-delay:3.5s;
	-webkit-animation-delay:3.5s;
}
/* END index 3 */

#process{
	position:relative;
	margin-top:50px;
	width:100%;	
}
#h-process{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/processbg.png') no-repeat #01afef;
	color:#FFF;
	padding:20px 0 40px;
}
.h-about{
	text-align:center;
}


@media (min-width:769px){ 
	#main-menu li{
		display:inline-block;
		float:left;
	}
	#btn-show-menu{
		display:none;
	}
	#logo{
		width:30%;
		display:inline-block;
		float:left;		
	}
	#menu-region{
		display:inline-block;
		float:left;
		width:70%;
	}
	#index3 #box{
		background-size:100% 100%  ;
	}	
}

@media (max-width: 960px) and (min-width:768px){ 
	#process #idea{
		left:168px;
	}
	#process #paper3{
		left:336px;
	}
	#process #printer{
		left:502px;
	}
	#process #product{
		left:670px;
	}
	@keyframes paper2{
		0{
			left:0px;
			opacity:0;
		}
		25%{
			left:336px;
			opacity:1;
		}
		75%{
			opacity:0;
			left:336px;
		}
	}
	@keyframes brochure{
		from{
			opacity:0;
			left:600px
		}
		to{
			opacity:1;
			left:670px;
		}
	}
}

@media (max-width:768px){ 
	#p-hotline{
		position:absolute;
		top:50px;
		right:20px;
	}
	#process{
		height:400px;
	}
	#process #paper,
	#process #idea,
	#process #paper3,
	#process #pen,
	#process #printer,
	#process #product{
		width:50%;
		height:380px;
		left: 50%;
		transform: translate(-50%, 0);
	}
	
	#process #paper{
		animation-name:fade_on_off;		
		animation-duration:8s;
	}
	#process #question,
	#process #question2,
	#process #question3{
		animation-name:fade_on_off;	
		animation-duration:2s;		
		transform: translate(-50%, 0);
		left:50%;
	}
	#process #idea{
		animation-name:fade_on_off;
		animation-duration:5s;		
		animation-delay:9s;
	}
	#process #paper2{
		display:none;
	}
	#process #paper3{
		animation-name:fade_on_off;
		animation-duration:6s;	
		animation-delay:16s;	
	}
	#process #pen{
		left:60% ;
		top:50px;
		width:100px;
		height:90px;
		animation-name:fade_on_off;
		animation-duration:4s;	
		animation-delay:15s;	
	}
	#process #printer{
		animation-name:fade_on_off;
		animation-delay:21s;
		animation-duration:5s;
	}
	#process #product{
		animation-name:fade_on;
		animation-delay:27s;	
	}
		
}

@media (max-width:480px){ 
	#process #paper,
	#process #idea,
	#process #paper3,
	#process #pen,
	#process #printer,
	#process #product{
		width:80%;
		height:380px;
		left: 10%;
		transform: none;
	}
	#process #pen{
		left:60% ;
		top:50px;
		width:120px;
		height:120px;
	}
	#wslide .slide-images{
		display:none;
	}
}

#main-footer{
	padding:10px 0;
}
#main-footer .social{
	margin-top:10px;
}
#main-footer .item{
	margin-left:10px;
}
#main-footer li{
	list-style:none;
	margin:4px 0;
}
#main-footer .social a{
	display:inline-block;
	width:20px;
	height:20px;	
	margin-right:10px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
#main-footer .social a.facebook{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/ffacebook.png') no-repeat;
	background-size:100% 100%;
}
#main-footer .social a.twitter{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/ftwitter.png') no-repeat;
	background-size:100% 100%;
}
#main-footer .social a.linkhay{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/flinkhay.png') no-repeat;
	background-size:100% 100%;
}
#main-footer .social a.youtube{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/fyoutube.png') no-repeat;
	background-size:100% 100%;
}

#copy-right{
	background:#000;
	color:#FFF;
	text-align:center;
	padding:10px;
}
#copy-right a{
    color:#FFF;
}
#sidebar  li{
	list-style:none;

}
#sidebar .service-item{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/pen2.png') no-repeat -100px 8px #01afef;
	padding:5px 10px;
	color:#FFF;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	margin:5px 0;
}
#sidebar .service-item:hover{
	animation:slide_service 0.5s forwards;	
	-webkit-animation:slide_service 0.5s forwards;
}
@keyframes slide_service{
	from{
		padding-left:10px;
		background-position:-50px 8px;
	}
	to{
		padding-left:60px;
		background-position:10px  8px;
	}
}

h2.block-title{	
	text-transform:uppercase;
	margin:5px 0 10px;
	overflow:hidden;
	position:relative;
	font-size:24px;
}

#sidebar .block{
	padding:10px; 
	/*background:#f8f8f8;*/
	margin-bottom:20px;
	border: 1px solid #eee;
	display:inline-block;
	width:100%;
}

#sticky-article li{
	display:inline-block;
	width:100%;
	margin-bottom:5px;
	border-bottom:1px dotted #eee;
	padding-bottom:5px;
}
#sticky-article li:last-child{
	border:none;
}
#sticky-article li .posted{
	font-size:12px;
	color:#999;
	padding-top:5px;
}

#main-area{
	border-bottom:1px solid #01afef;
	padding:20px 0;
}

#sub-header,
#sub-footer{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/thuonghieu.jpg') center 20%;
	background-size:100%;
	height:200px;
	width:100%;
	display:inline-block;	
}
#sub-footer{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/thuonghieu.jpg') center 50%;
        background-size:100%;
}
.page-contact .wpcf7-form .ajax-loader{
    display: none;
}

.page-contact .wpcf7-form input,
.page-contact .wpcf7-form textarea{
    width:230px;
    border:none;
    background:transparent;
}
.page-contact .wpcf7-form input:focus,
.page-contact .wpcf7-form textarea:focus{
    outline: none;
}
.page-contact .wpcf7-form textarea{
    height: 150px;  
    text-indent:100px;
    width:320px;
}
.page-contact .wpcf7-form{
    background: url('http://snh.vn/wp-content/themes/thsnh/images/contact.png') no-repeat;
    background-size:100%;
    width:500px;
    position: relative;
    height: 500px;
    font-family: cursive;
    font-size:26px;
}
.page-contact .wpcf7-form .wpcf7-form-control-wrap{
    position: absolute;
    left:190px;
}
.page-contact .wpcf7-form .wpcf7-form-control-wrap.your-name{
    top:70px;
}
.page-contact .wpcf7-form .wpcf7-form-control-wrap.tel-997{
    top:135px;
}
.page-contact .wpcf7-form .wpcf7-form-control-wrap.your-email{
    top:207px;
}
.page-contact .wpcf7-form .wpcf7-form-control-wrap.your-message{
    top:270px;
    left:80px;
}
.page-contact .wpcf7-form span.wpcf7-not-valid-tip {
    color: #FFF;
    font-size: 1em;
    display: block;
    background: red;
    font-size: 20px;
}
.page-contact .wpcf7-form div.wpcf7-validation-errors{ 
    display: none  ;
}

.page-template-page-contact #sub-header{
    /*background-image:url('http://snh.vn/wp-content/themes/thsnh/images/contact-header.jpg');    */
}
#ct-send input{
    position:absolute;
    bottom:0px;
    right:0;
    background: url('http://snh.vn/wp-content/themes/thsnh/images/sendhand.png') no-repeat;
    display: inline-block;
    width:80px;
    height:100px;
    background-size:100%;
    cursor: pointer;
    font-size:0;
}


/* Flip effect */
/* entire container, keeps perspective */
.flip-container {
	perspective: 1000;
}
	/* flip the pane when hovered */
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 100%;
	height: 230px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
}
.flip-container:hover .flipper, .flip-container.hover .flipper, .flip-container.flip .flipper {
	transform: rotateY(180deg);
}
/* END flip effect */

.article-item .title{
    height:50px;
}
.article-item{
    margin-bottom:50px;    
}
.article-item .more{
    text-align:right;
}

/* Pagination */
#page-paginate{
    display: inline-block;
    width:100%;
}
#page-paginate .current{
    margin:0 5px;
}
#page-paginate a{
    margin:0 5px;
    color:#FFF  ;
    padding:5px 10px  ;
    background:#01afef;
    border:none;
}
/* END Pagination */


/* Share */
.share{	display:inline-block;	float:left;	width:24px;	height:24px;	margin-right:10px;}
.share.facebook{	background:url("http://snh.vn/wp-content/themes/thsnh/images/s_facebook.png");}
.share.twitter{	background:url("http://snh.vn/wp-content/themes/thsnh/images/s_twitter.png");}
.share.linkhay{	background:url("http://snh.vn/wp-content/themes/thsnh/images/s_linkhay.png");}
.share.zing{	background:url("http://snh.vn/wp-content/themes/thsnh/images/s_zing.png");}
#custom_share{
    position:relative;
	height:30px;
	/*overflow:hidden;        */
        margin-bottom:20px;
        width:360px;
}
#custom_share .fb-like{
    position:absolute;
    top:0px;
	left:210px;
}
/* END Share */
#article-social{
    margin-bottom: 30px;
    border-bottom: 1px dotted #eee;
    padding-bottom:10px;
}
#article-social .post-date{
    font-size: 12px;
    color: #999;
    padding-top: 5px;
}

.p-service{
    display: inline-block;
    width:100%;
    border-top:10px solid #efefef;    
}

.p-service .service-des{
    padding:10px 0;
}
.p-service .col-sm-4{
    padding:10px;
    transform: skew(-10deg, 0deg) ;
-webkit-transform: skew(-10deg, 0deg) ;
-moz-transform: skew(-10deg, 0deg) ;
-o-transform: skew(-10deg, 0deg) ;
-ms-transform: skew(-10deg, 0deg) ;
}
#service-online .col-sm-4{
    background:#01afef;
}
#service-media .col-sm-4{
    background: #EF5350;
}

#service-media .col-sm-8{
	float:right;
}
#service-design .col-sm-8,
#service-media .col-sm-8{
    padding-left:50px;
}

#term-des{
    margin:10px 0 30px;
}
.wp-caption-text{
    text-align: center;
    font-style: italic;
    font-size:14px;
}

img.border{
    border:1px solid #eee;
}
.wp-caption{
    width:100% ;
}
article h3{
    color:#01afef;
}

#home-features{
	position:relative;
	background:#F2F2F5;
	height:250px;
        margin:20px 0;
}

#home-features #sub-home-features{
	position:absolute;
	top:-50px;
	z-index:999;
	display:inline-block;
	width:100%;
}

#home-features .item{		
}
#home-features .sub-item{
	margin:4px;
	padding:15px;
	background:#FFF;
	height:240px;	
}
#home-features .item .thumb{
	width:50px;
	height:50px;
	display:block;
	margin:40px auto;
	border-radius: 30px;
    -moz-border-radius: 30px;
    -webkit-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
}
#home-features .private .thumb{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/private.png') no-repeat center center #bec1c5;
}
#home-features .social .thumb{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/socials.png') no-repeat center center #bec1c5;
}
#home-features .quality .thumb{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/quality.png') no-repeat center center #bec1c5;
}
#home-features .performance .thumb{
	background:url('http://snh.vn/wp-content/themes/thsnh/images/performance.png') no-repeat center center #bec1c5;
}

#home-features .sub-item:hover{
	background:#64a0bc;	
}
#home-features .sub-item:hover .thumb{
	-webkit-animation:feature_hover 0.4s;
    animation:feature_hover 0.4s;  
	background-color:#414141;
	border-radius: 10px;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		-ms-border-radius: 10px;
		-o-border-radius: 10px;
}
@keyframes feature_hover
{
    from {
		background:#64a0bc;
		-ms-transform: rotate(0deg); /* IE 9 */
		-webkit-transform: rotate(0deg); /* Safari */
		transform: rotate(0deg); /* Standard syntax */
		border-radius: 30px;
		-moz-border-radius: 30px;
		-webkit-border-radius: 30px;
		-ms-border-radius: 30px;
		-o-border-radius: 30px;
    }
    to {
        background-color:#414141;
		-ms-transform: rotate(360deg); /* IE 9 */
		-webkit-transform: rotate(360deg); /* Safari */
		transform: rotate(360deg); /* Standard syntax */
		border-radius: 10px;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		-ms-border-radius: 10px;
		-o-border-radius: 10px;
    }
}
@-webkit-keyframes feature_hover
{
    from {
		background:#64a0bc;
		-ms-transform: rotate(0deg); /* IE 9 */
		-webkit-transform: rotate(0deg); /* Safari */
		transform: rotate(0deg); /* Standard syntax */
		border-radius: 30px;
		-moz-border-radius: 30px;
		-webkit-border-radius: 30px;
		-ms-border-radius: 30px;
		-o-border-radius: 30px;
    }
    to {
        background-color:#414141;
		-ms-transform: rotate(360deg); /* IE 9 */
		-webkit-transform: rotate(360deg); /* Safari */
		transform: rotate(360deg); /* Standard syntax */
		border-radius: 10px;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		-ms-border-radius: 10px;
		-o-border-radius: 10px;
    }
}

#home-features .sub-item .title{
	font-size:22px;
	text-align:center;
	text-transform:uppercase;
	margin-bottom:20px;
	font-family: 'Roboto Condensed', sans-serif;     
}

#support-online .supporter{
    border-bottom:1px dotted #efefef;
    margin-bottom: 10px;
    padding-bottom:10px;
}
.entry-content h2{
	color:	#2a6496;
}

.scroll-to-top {
  background: #3B3B3B;
  background: rgba(0, 0, 0, 0.4);
  color: #FFF;
  bottom: 30px;
  cursor: pointer;
  display: none;
  position: fixed;
  right: 30px;
  z-index: 999;
  font-size: 16px;
  padding: 2px 10px;
  border-radius: 4px;
  -webkit-transition: background-color 0.1s linear;
     -moz-transition: background-color 0.1s linear;
       -o-transition: background-color 0.1s linear;
          transition: background-color 0.1s linear;
}
.scroll-to-top:hover {
  background: #1FA67A;
  opacity: .8;
}
.contact-snh{
  display: none;
  position: fixed;
  right: -240px;
  top: 50%;
  width:300px;
  height:100px;
  z-index: 999;
  animation:contact_snh 3s infinite;	
  -webkit-animation:contact_snh 3s infinite;
}
@keyframes contact_snh{
	0%{
		right:-240px;
	}
	50%{
		right:-260px;
	}
}
.contact-snh:hover{
	right:0;
	animation:show_contact_snh 1s forwards;	
  -webkit-animation:show_contact_snh 1s forwards;
}
@keyframes show_contact_snh{
	0%{
		right:-240px;
	}
	50%{
		right:0px;
	}
}

#main-header.small {
	position: fixed;
    background: #FFF;
    z-index: 9999;
    width: 100%;
	height:60px;
	border-bottom:1px solid #ccc;
}

#main-header.small  #logo img{
	width:46px;
}
#main-header.small #p-hotline{
	display:none;
}
#main-header.small #main-menu li{
	padding:10px;
}

#main-header.small #main-menu > li.active,
#main-header.small #main-menu > li:hover{
	background:none;
	border-bottom:3px solid #ccc;
}

@media only screen and (max-width: 768px) {
	#box #snh-des{
		display:none;
	}
	#index3 #g-content{
		top:15%;	
	}
	#logo{
		width:30%;
		display:inline-block;
		float:left;		
	}
	#main-menu li{
		margin:3px;
		padding:5px 10px;
	}
	#main-menu li a{
		font-size:20px;
	}
	#wslide .slide-title{
		top:30px;
		left:30px;
		font-size:32px;
	}
	#wslide .slide-description{
		top:100px;
		left:30px;
		width:300px;
	}
	#wslide{
		height:500px;
	}
	#process{
		display:none;
	}
	#m-process{
		display:inline-block;
		width:100%;
		height:700px;
		background:url('http://snh.vn/wp-content/themes/thsnh/images/quy-trinh-thiet-ke.jpg') no-repeat;
		background-size:100%;
	}
	#feature{
		height:auto;
	}
}
@media only screen and (max-device-width: 480px) {
	#index3 #g-content{
		top:10%;	
	}
	#index3 #snh-name{
		font-size:36px;	
	}
	#index3 #snh-name #cursor{
		display:none;
	}
	#m-process{
		height:400px;
	}
	#wslide .slide-images{
		display:none;
	}
	.contact-snh{
		display:none  ;
	}
}

@media only screen and (max-device-width: 360px) {
	#index3 #g-content{
		top:7%;	
	}
}

article img,
article amp-img{
	max-width:100%;
	width:100%;
	height:auto;
}

#click-to-call a{
	background:url('http://snh.vn/wp-content/themes/thsnh_mb/images/ringing.gif') no-repeat;
	background-size:100% 100%;
	display:inline-block;
	width:60px;
	height:60px;
	position:fixed;
	bottom:20px;
	right:20px; 
} 
  
  /* bootstrap mini */
*, *:before, *:after {
  -webkit-box-sizing: border-box; 
  -moz-box-sizing: border-box; 
  box-sizing: border-box;
}

.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.row {
  margin-right: -15px;
  margin-left: -15px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: " ";
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-footer:after {
  clear: both;
}

#logo-area{
	position:relative;	
	display:inline-block;
	width:100%;
	height:100px;
}
#logo-area #p-hotline{
	position:absolute;
	right:10px;
	width:200px;
	text-align:right;
}
#logo-area img{
	max-height:100px;
	max-width:100px;
}
#menu-region{
	display:inline-block;
	width:100%;
}
</style>
		<link rel="shortcut icon" type="image/png" href="<?php echo IMG_PATH; ?>snhlogo2.ico"/>    		
        <?php
			wp_head(); 
			global $post;
			if($post->ID==PID_HOME){			
				echo "<script type='text/javascript' src='http://snh.vn/wp-content/themes/thsnh_mb/js/jquery.min.js'></script>";
				echo "<script type='text/javascript' src='http://snh.vn/wp-content/themes/thsnh_mb/js/js.js?ver=4.4.2'></script>";			
			}
		?>		 








</head>

<body <?php body_class(); ?>>
    <div id="fb-root"></div>    

	<div><!-- for mmenu wrapper -->
		
	<header id="main-header">				
		<div class="container">
			<div id="logo-area">
				<div id="logo" class=""><a href="<?php echo get_home_url();?>"><amp-img src="<?php echo IMG_PATH;?>snhlogo2.jpg" alt="Cong ty thiet ke quang cao SNH" height="100" width="100"></amp-img></a></div>
				<div id="p-hotline"><?php echo get_theme_mod('o_hotline'); ?></div>
			</div>
			
			<div id="menu-region" class="">				
				
					<ul id="main-menu">
                                                <?php 
                                                    $queried_object = get_queried_object();
                                                    $cPID = $queried_object->ID;                                                    
                                                ?>
						<li <?php if($cPID==PID_HOME) echo 'class="active"'; ?>><a href="<?php echo get_permalink(PID_HOME);?>">Trang Chủ</a></li>
						<li <?php if($cPID==PID_ABOUT) echo 'class="active"'; ?>><a href="<?php echo get_permalink(PID_ABOUT);?>"><?php pll_e('Giới Thiệu'); ?></a></li>
						<li <?php if($cPID==PID_SERVICES) echo 'class="active"'; ?>><a href="<?php echo get_permalink(PID_SERVICES);?>">Dịch Vụ</a>
							<!--<ul>
                                                            <li><a href="<?php echo get_term_link(TID_DESIGN, 'service-category'); ?>">Thiết Kế Quảng Cáo</a></li>
                                                            <li><a href="<?php echo get_term_link(TID_ONLINE, 'service-category'); ?>">Giải Pháp Online</a></li>
                                                            <li><a href="<?php echo get_term_link(TID_MEDIA, 'service-category'); ?>">Media</a></li>
                                                        </ul>-->
						</li>
						<li <?php if($cPID==PID_ARTICLES) echo 'class="active"'; ?>><a href="<?php echo get_permalink(PID_ARTICLES);?>">Kiến Thức</a></li>
						<li <?php if($cPID==PID_CONTACT) echo 'class="active"'; ?>><a href="<?php echo get_permalink(PID_CONTACT);?>">Liên Hệ</a></li>
						<li><a href="http://snh.vn/portfolio">Portfolio</a></li>
					</ul>				
			</div>				   
		</div>	
	</header>
	
	<?php 
                $queried_object = get_queried_object();             
		if($queried_object->ID != PID_HOME){			
			echo '<div id="sub-header"></div>';			
		}
	?>