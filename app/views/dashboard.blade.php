@extends('layout')

@section('content')

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
          <li class="has-dropdown"> <a href="#">Admin</a> 
            <ul class="dropdown"> 
              <li><a href="<?php echo URL::to('profile'); ?>">Profil</a></li>
              <li><a href="#">Logout</a></li> 
            </ul> 
          </li> 
        </ul> 
      </section> 
    </nav>

    <section class="container">
      <div class="row">
        <div class="large-12 columns">
          <h2> Dashboard</h2>
          <hr>
          <p>Cupcake ipsum dolor sit. Amet I love liquorice jujubes pudding croissant I love pudding. Apple pie macaroon toffee jujubes pie tart. </p>
        </div>
      </div>
      <div class="row">
        
      </div>
    </section>