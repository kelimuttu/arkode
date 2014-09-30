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
          <h2> About Menu </h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <div class="panel callout radius"> 
          <h5 class="bold">Current value: </h5>
          <?php $dt = DB::table('about')->where('id_about', 1)->first(); ?>
          <p><?php echo $dt->content; ?></p>
        </div>
        
        <a href="dashboard/edit/<?php echo $dt->id_about; ?>" class="button" data-reveal-id="myModal">Update</a> 
        <div id="myModal" class="reveal-modal" data-reveal> 
          <h2>Update the About menu</h2> 
          <form method="post" action="/dashboard/doupdate"/>
            <fieldset> 
              <legend>About</legend> 
              <label>Update here: 
                <input type="text" name="content" value="<?php echo $dt->content; ?>"> 
                <input class="button" type="submit" name="submit" value="submit"/>
                <!-- <a href="#" class="button">Save</a> --> 
              </label> 
            </fieldset> 
          </form>
          <a class="close-reveal-modal">&#215;</a> 
        </div>
        </div>
      </div>
    </section>