<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Association name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/77a63b4cd3.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!-- Styles/CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>

 <!-- head -->

<!-- body -->
  

   	<!-- nav menu -->

   	@extends('layouts.nav+modal')

   	<!-- nav menu -->

	   @section('content')
   	<!-- banner -->

 <div class="banner">
	<img src="../img/bg-banner.jpg" alt="A fjord from Norway" class="banner-image">		
	   	<div class="block banner-content">
	   			<div class="columns">
	   				<div class="column left">
	   					<img src="../img/podcastlogo.jpg" class="podcastlogo" width="400" height="400">
	   					
	   				</div>
	   				<div class="columun center">
		   				<h1 class="title is-1">Association name</h1>
		   				<h2 class="subtitle">In nature we trust</h2>
		   				<button class="button is-link open_contact">Contact Us</button>
	   				</div>
	   				<div class="column right">
	   					<h1 class="title is-2">Name of our journal</h1>
	   					
	   				</div>
	   			</div>
	   		<p>Photo by <a href="https://unsplash.com/@_wesgrant?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Wes Grant</a> on <a href="https://unsplash.com/s/photos/norway?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></p>
	   </div>
</div>
   	<!-- banner -->

   	<!-- section : about us --> 
   	<div class="block aboutus">
   		<div class="container about-us">
   			<div class="aboutustitle"><h1 class="title is-2">About Us</h1></div>
   			<div class="columns">
   				<div class="column about-us-single-element">
   					<i class="far fa-lightbulb icon"></i><h3 class="title is-3">The ideology</h3>
   					<p>
   						Ob haec et huius modi multa, quae cernebantur in paucis, omnibus timeri sunt coepta. et ne tot malis dissimulatis paulatimque serpentibus acervi crescerent aerumnarum, nobilitatis decreto legati mittuntur: Praetextatus ex urbi praefecto et ex vicario Venustus et ex consulari Minervius oraturi, ne delictis supplicia sint grandiora, neve senator quisquam inusitato et inlicito more tormentis exponeretur.
   					</p>
   				</div>
   				<div class="column about-us-single-element">
   					<i class="fas fa-users icon"></i><h3 class="title is-3">Who are we</h3>
   					<p>
   						Nihil morati post haec militares avidi saepe turbarum adorti sunt Montium primum, qui divertebat in proximo, levi corpore senem atque morbosum, et hirsutis resticulis cruribus eius innexis divaricaturn sine spiramento ullo ad usque praetorium traxere praefecti.
   					</p>
   					
   				</div>
   				<div class="column about-us-single-element">
   					<i class="far fa-clock icon"></i><h3 class="title is-3">Our objectives</h3>
   					<p>
   						His cognitis Gallus ut serpens adpetitus telo vel saxo iamque spes extremas opperiens et succurrens saluti suae quavis ratione colligi omnes iussit armatos et cum starent attoniti, districta dentium acie stridens adeste inquit viri fortes mihi periclitanti vobiscum.
   					</p>

   				</div>
   			</div>	
   		</div>	
   	</div>
   	<!-- section : about us -->

   	<!-- section : podcast -->
   	
		
   	<div class="block podcastinfo" >
   		<img src="../img/bg-podcastsection.jpg" alt="Microphone in studio" class=" podcast-image" > 
   		<div class="container podcast" >
   			<div class="content1 podcasttitle">
	   			
	   			<h1   class="title is-2"><img src="../img/podcastlogo.jpg" class="is-rounded podcastlogo" width="250" height="250">
	   			<p> <span>M</span>illenial <span>R</span>eport</p></h1>
	   			
   			</div>

 
   			<div class="columns podcastcontent">

   				<div class="column podcastnews">

					<div class="box">
						  <article class="media">
						    <div class="media-left">
						      <figure class="image is-64x64">
						      	<a href="#">
						        <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
						        </a>
						      </figure>
						    </div>
						    <div class="media-content">
						      <div class="content">
						        <p>
						          <strong>Name of the first podcast</strong> <small>Subject:</small> <small>31m</small>
						          <br>
						          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
						        </p>
						      </div>
						      <nav class="level is-mobile">
						        <div class="level-left">
						          <a class="level-item" aria-label="reply" href="#">
						            <span class="icon is-small">
						              <i class="fas fa-comments"></i>
						            </span>
						          </a>
						        </div>
						      </nav>
						    </div>
						  </article>
						</div>
   				</div>
   				<div class="column podcastpresentation">
   					<h3 class="title is-3">It's time to hear us!</h3>
   					<p>Sed ut tum ad senem senex de senectute, sic hoc libro ad amicum amicissimus scripsi de amicitia. Tum est Cato locutus, quo erat nemo fere senior temporibus illis, nemo prudentior; nunc Laelius et sapiens (sic enim est habitus) et amicitiae gloria excellens de amicitia loquetur. Tu velim a me animum parumper avertas, Laelium loqui ipsum putes. C. Fannius et Q. Mucius ad socerum veniunt post mortem Africani; ab his sermo oritur, respondet Laelius, cuius tota disputatio est de amicitia, quam legens te ipse cognosces.

					Nihil morati post haec militares avidi saepe turbarum adorti sunt Montium primum, qui divertebat in proximo, levi corpore senem atque morbosum, et hirsutis resticulis cruribus eius innexis divaricaturn sine spiramento ullo ad usque praetorium traxere praefecti.</p>
   				</div>
   			</div>
   		</div>
	   </div>
	   <div><p class="credit">Photo by <a href="https://unsplash.com/@jonathanvez?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Jonathan Velasquez</a> on <a href="https://unsplash.com/?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></p></div>
</div> 

   	<!-- section : podcast -->

   	<!-- footer : Contact -->

   	<div class="block">
   		<footer class="footer">
   			<h2 class="heading">Contact Us</h2>
   			<div class="footer-contact-form">
   				<form>
						

   			<div class="footer-information">
   				
   			</div>
   			
   		</footer>
   		
   	</div>

   	<!-- footer : Contact -->

  	
  </body>
 <!-- body -->

</html>
    