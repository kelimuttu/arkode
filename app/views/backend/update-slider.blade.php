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
          <h3> Dashboard > Intro > Update Slider </h3>
          <hr>
        </div>
      </div>

      <table class="large-12 columns">
        <tbody>
          {{Form::open(array('method'=>'post', 'url'=>'dashboard/intro/update/'.$image->id, 'files'=>'true'))}}
          <tr>
              <td><label>Game Image</label></td>
              <td>
              {{HTML::image('assets/img/slider/'.$image->slider, 'Arkode', array('id'=>'slider-image'))}}
              <button id="upload-foto" type="button" onclick="$('#input_file').trigger('click')">UPLOAD</button>
              <input type="file" name="slider" id="input_file" style="display:none;">
              </td>
          </tr>

          <tr>
            <td><label>Display?</label></td>
            <td>
              <input type="checkbox" name="display" value="1" @if($image->display==1) checked="checked" @endif> Ya
            </td>
          </tr>
          <tr>
            <td>
              <button class="button">Simpan</button>
            </td>
          </tr>
          {{Form::close()}}
        </tbody>
      </table>

      

    </section>
@endif
@stop
