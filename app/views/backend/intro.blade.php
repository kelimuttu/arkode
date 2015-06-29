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
          <h3> Dashboard > Intro </h3>
          <hr>
          <a href="#" class="button" data-reveal-id="gambar2">Upload Slider</a>
          <div class="row">
          <table>
            <thead>
              <tr>
                <th width="50">No</th>
                <th width="150">Nama Slider</th>
                <th width="80">Display</th>
                <th width="100">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1;?>
              @foreach($image as $item)
              <tr>
                <td class="centered-text"><?php echo $i; ?></td>
                <td><?php echo $item->slider; ?></td>
                <td class="centered-text"><?php echo $item->display; ?></td>
                <td>
                  <a href="{{URL::to('dashboard/intro/update/'.$item->id)}}"><i class="fi-page-edit" title="Edit Halaman" ></i></a>|
                  <i class="fi-x-circle" title="Hapus" onclick="hapus_slider({{$item->id}})"></i>
                  <!-- <a href="{{URL::to('dashboard/intro/hapus/'.$item->id)}}"><i class="fi-x-circle" title="Hapus" ></i></a> -->
                </td>
              </tr>
              <?php $i++; ?>
              @endforeach
            </tbody>
          </table>
        </div>

          
          <div id="gambar2" class="reveal-modal" data-reveal> 
            <div class="large-12 columns">
              {{Form::open(array('method'=>'post', 'url'=>'dashboard/intro/upload', 'files'=>'true'))}}
              <div class="row">
                <!-- {{HTML::image('assets/img/slider/slider1.png', 'Arkode', array('id'=>'slider-image'))}} -->
              </div>
              <div class="row">
                <input type="file" name="slider" id="input_file">
                <div class="row">
                  <label>Display</label>
                  <input type="checkbox" name="display" value="1"> Ya
                </div>
                <button class="button">Simpan</button>
                <!-- <form action="" method="post" enctype="multipart/form-data">
                    Choose File : <input type="file" name="slider"> <input type="submit" value="Upload">
                </form> -->
              </div>
              {{Form::close()}}
            </div>
            <a class="close-reveal-modal">&#215;</a> 
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