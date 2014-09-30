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
          <h2> Games Menu </h2>
          <hr>
          <a href="#" class="button" data-reveal-id="gambar1">Add more games</a> 
          <div id="gambar1" class="reveal-modal" data-reveal> 
            <h2>Add a new Game</h2> 
          <form> 
            <fieldset>
              <label class="bold">Game Tittle 
                <input type="text" placeholder="Enter the tittle here">
              </label>
              <label>Description
                <input type="text" placeholder="Enter the description here">
              </label> 
              <label>Download link
                <input type="text" placeholder="Paste the Google Play link here">
              </label> 
              <form action="" method="post" enctype="multipart/form-data">
                    Choose File : <input type="file" name="image"> <input class="button" type="submit" value="Upload">
              </form>
              <!-- <label>Upload the game pict
                <a href="#" class="button">Upload here</a> 
              </label> --> 
              <a href="#" class="button">Save</a> 
            </fieldset> 
          </form>
            <a class="close-reveal-modal">&#215;</a> 
          </div>
        </div>
      </div>
      <div class="row">
        
      </div>
    </section>