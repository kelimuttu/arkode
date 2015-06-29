@extends('layouts.backend_layout')

@section('content')

@if(Session::has('logged_in'))
<nav class="top-bar" data-topbar role="navigation"> 
      <ul class="title-area"> 
        <li class="name"> <h1><a href="<?php echo URL::to('dashboard'); ?>">Arkode Studio</a></h1> </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone --> 
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li> 
      </ul> 
      <section class="top-bar-section"> 
        <!-- Right Nav Section --> 
        <ul class="right"> 
          <li class="active"><a href="<?php echo URL::to('dashboard'); ?>">Dashboard</a></li> 
          <li><a href="<?php echo URL::to('dashboard/intro'); ?>">Intro</a></li>
          <li><a href="<?php echo URL::to('dashboard/about'); ?>">About</a></li>
          <li><a href="<?php echo URL::to('dashboard/games'); ?>">Games</a></li>
          <li class="has-dropdown"> <a href="#">{{Session::get('username')}}</a> 
            <ul class="dropdown"> 
              <li><a href="{{URL::to('/logout')}}">Logout</a></li> 
            </ul> 
          </li> 
        </ul> 
      </section> 
    </nav>

    <section class="container">
      <div class="row">
        <div class="large-12 columns">
          <h3> Dashboard</h3>
          <hr>
          <div class="margin">
          <div class="small-1 large-1 columns testimonial">
              <div class="quote-marks">&#8220;</div>
          </div>
          <div class="small-11 large-11 columns testimonial">
            <div class="quote">
              <p>We strive our best to make a game that not only satisfying people needs of entertainment but also beneficial as it has some positive and meaningful messages.</p>
            </div>
            <div class="student">
              <div class="photo"> 
                {{HTML::image('assets/img/team/team1.png')}}
              </div>
              <p>Haris Praba A</p>
              <p>CEO, Arkode Studio</p>
            </div>
          </div>
          </div>        
            
        </div>
      </div>
    </section>

    <div id="copyright">
      <div class="container">
          <div class="copyright centered-text">
            <p>&copy; 2014. Arkode Studio. All Rights Reserved.</p>
        </div>
      </div> 
  </div> 

@endif
@stop