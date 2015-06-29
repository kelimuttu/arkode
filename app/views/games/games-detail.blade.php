@extends('layouts.main_layout')

@section('content')

<nav>
        <ul id="navigation" class="slimmenu">
       		<li><a href="#intro"> <img src="<?php echo URL::to('assets/img/nav.png'); ?>" width="50" height="50" alt=""> </a></li>
			<li><a href="<?php echo URL::to('/'); ?>">Back to home</a></li>
        </ul>
    </nav>

    

	<div id="games" class="sixteen columns clearfix">

		<div class="container">
		<h2><span class="lines">{{strtoupper($games->judul)}}</span></h2>

		<div class="six columns center">
			{{HTML::image('assets/img/games/'.$games->thumb_img)}}
		</div>

		<div class="ten columns center">
			<br><br>
			<p>{{$games->konten}}</p>
			<br>
			<a href="{{URL::to($games->link)}}">{{HTML::image('assets/img/games/gplay.png')}}</a>
		</div>
		</div>
	</div>
	
	<div id="feed" class="sixteen columns clearfix center">
		<div class="container">
			<h3>Read another game news:</h3>
			<script type="text/javascript" src="http://feed.informer.com/widgets/RQNVTUMC8S.js"></script>
			<noscript><a href="http://feed.informer.com/widgets/RQNVTUMC8S.html">"Game News"</a>
			Powered by <a href="http://feed.informer.com/">RSS Feed Informer</a></noscript>
		</div>
	</div>


	<div id="blog">
		<div class="container">
			<div class="sixteen columns">
				<div class="copyright">
					<p class="small">&copy; 2014. Arkode Studio. All Rights Reserved.</p>
				</div><!-- end copyright-->
			</div><!-- end sixteen columns-->
		</div>
	</div> <!-- end blog -->

@stop