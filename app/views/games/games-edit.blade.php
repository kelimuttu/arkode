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
          <h3> Dashboard > Games > Edit Game </h3>
          <hr>
        </div>
      </div>

      <table class="large-12 columns">
        <tbody>
          {{Form::open(array('method'=>'post', 'url'=>'dashboard/games/edit/'.$games->id, 'files'=>'true'))}}
          <tr>
              <td><label>Game Image</label></td>
              <td>
              {{HTML::image('assets/img/games/'.$games->thumb_img, 'Arkode', array('id'=>'cover-image'))}}
              <button id="upload-foto" type="button" onclick="$('#input_file').trigger('click')">UPLOAD</button>
              <input type="file" name="cover" id="input_file" style="display:none;">
              </td>
          </tr>
          <tr>
            <td><label>Judul game</label></td>
            <td>
              <input type="text" name="judul" value="{{$games->judul}}">
            </td>
          </tr>
          <tr>
            <td><label>Deskripsi</label></td>
            <td>
              <input type="text" name="konten" value="{{$games->konten}}"></input>
            </td>
          </tr>
          <tr>
            <td><label>Link Download</label></td>
            <td>
              <input type="text" name="link" value="{{$games->link}}">
            </td>
          </tr>
          <tr>
            <td><label>Publish?</label></td>
            <td>
              <input type="checkbox" name="publish" value="1" @if($games->publish==1) checked="checked" @endif> Ya, Publish
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