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
          <h2> Intro Menu </h2>
          <hr>
          <p>Cupcake ipsum dolor sit. Amet I love liquorice jujubes pudding croissant I love pudding. Apple pie macaroon toffee jujubes pie tart.  </p>
          <a href="#" class="button" data-reveal-id="gambar1">Gambar 1</a> 
          <div id="gambar1" class="reveal-modal" data-reveal> 
            <div class="large-12 columns">
              <div class="large-6 columns">
                <?php $pict = DB::table('images')->where('id', 3)->first(); ?>
               <!--  <?php echo $pict->image; ?> -->
                <img src="<?php echo URL::to('assets/img/1.png'); ?>">

              </div>
              <div class="large-6 columns">
                <form action="" method="post" enctype="multipart/form-data">
                    Choose File : <input type="file" name="image"> <input type="submit" value="Upload">
                </form>
                <!-- <a href="#" class="button">Browse</a> 
                <a href="#" class="button">Change</a>  -->
              </div>
            </div>
            <a class="close-reveal-modal">&#215;</a> 
          </div>
          <a href="#" class="button" data-reveal-id="gambar2">Gambar 2</a> 
          <div id="gambar2" class="reveal-modal" data-reveal> 
            <div class="large-12 columns">
              <div class="large-6 columns">
                <img src="<?php echo URL::to('assets/img/2.png'); ?>">
              </div>
              <div class="large-6 columns">
                <form action="" method="post" enctype="multipart/form-data">
                    Choose File : <input type="file" name="image"> <input type="submit" value="Upload">
                </form>
                <!-- <a href="#" class="button">Browse</a> 
                <a href="#" class="button">Upload</a> --> 
              </div>
            </div>
            <a class="close-reveal-modal">&#215;</a> 
          </div>
          <a href="#" class="button" data-reveal-id="gambar3">Gambar 3</a> 
          <div id="gambar3" class="reveal-modal" data-reveal> 
            <div class="large-12 columns">
              <div class="large-6 columns">
                <img src="<?php echo URL::to('assets/img/3.png'); ?>">
              </div>
              <div class="large-6 columns">
                <form action="" method="post" enctype="multipart/form-data">
                    Choose File : <input type="file" name="image"> <input type="submit" value="Upload">
                </form>
                <!-- <a href="#" class="button">Browse</a> 
                <a href="#" class="button">Upload</a> -->  
              </div>
            </div>
            <a class="close-reveal-modal">&#215;</a> 
          </div>
        </div>
      </div>
      <div class="row">
        
      </div>
    </section> 