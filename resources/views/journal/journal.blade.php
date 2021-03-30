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

       @section('content')


<img src="../img/bg-podcast.jpg" alt="Colored guys with a megaphone" class="podcast-image">
<span>Photo by <a href="https://unsplash.com/@melanyrochester?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Melany Rochester</a> on <a href="https://unsplash.com/s/photos/megaphone?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
        <div class="block podcasttitle">
            <div class="columns podcasttitle">
                    

                            <div class="column left-podcasttitle">
                                            
                                            <h1   class="title is-2">
                                            <p><img src="../img/podcastlogo.jpg" class="is-rounded podcastlogo" width="250" height="250"> <span>M</span>illenial <span>R</span>eport</p></h1>
                                            
                            </div>
                                        
                            <div class="column rigth-podcasttitle">
                        <h3 class="title is-3">It's time to hear us!</h3>
                        <p>Sed ut tum ad senem senex de senectute, sic hoc libro ad amicum amicissimus scripsi de amicitia. Tum est Cato locutus, quo erat nemo fere senior temporibus illis, nemo prudentior; nunc Laelius et sapiens (sic enim est habitus) et amicitiae gloria excellens de amicitia loquetur. Tu velim a me animum parumper avertas, Laelium loqui ipsum putes. C. Fannius et Q. Mucius ad socerum veniunt podcast mortem Africani; ab his sermo oritur, respondet Laelius, cuius tota disputatio est de amicitia, quam legens te ipse cognosces.

                        Nihil morati podcast haec militares avidi saepe turbarum adorti sunt Montium primum, qui divertebat in proximo, levi corpore senem atque morbosum, et hirsutis resticulis cruribus eius innexis divaricaturn sine spiramento ullo ad usque praetorium traxere praefecti.</p>
                    </div>
                    
                
            </div> 
        </div>





@if(count($podcasts) > 1)

<div class="block newpodcasts">
    <div class="box">
                    
            @foreach($podcasts as $podcast)
                

                        <article class="media">
                            <i class="far fa-play-circle"></i>

                            <div class="media-content">
                                <div class="content">
                                    <p>
                                    <h3><a href="/podcasts/{{$podcast->id}}">{{$podcast->title}}</a></h3>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit blandit non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis.
                                    <br>
                                    <small>Written on {{$podcast->created_at}}</small>
                                    </p>
                                </div>
                            </div>   
                            
                        </article>

                
            @endforeach

    </div>
</div>
    
        @else

        @endif

        
@endsection
       </body>
 <!-- body -->

</html>