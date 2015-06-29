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
          <h3> Dashboard > Games </h3>
          <hr>
          <a href="{{URL::to('dashboard/games/tambah')}}" class="button">Add more games</a>
        </div>
      </div>
      
      <div class="row">
        <table>
          <thead>
            <tr>
              <th width="50">No</th>
              <th width="150">Judul Game</th>
              <th width="100">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;?>
            @foreach($games as $item)
            <tr>
              <td class="centered-text"><?php echo $i; ?></td>
              <td><?php echo $item->judul; ?></td>
              <td>
                <a href="{{URL::to('games/'.$item->slug)}}"><i class="fi-link" title="Kunjungi" ></i></a>| 
                <a href="{{URL::to('dashboard/games/edit/'.$item->id)}}"><i class="fi-page-edit" title="Edit Halaman" ></i></a>|
                <!-- <a href="{{URL::to('dashboard/games/hapus/'.$item->id)}}"><i class="fi-x-circle" title="Hapus" onclick="hapus({{$item->id}})"></i></a> -->
                <i class="fi-x-circle" title="Hapus" onclick="hapus_games({{$item->id}})"></i>
              </td>
            </tr>
            <?php $i++; ?>
            @endforeach
          </tbody>
        </table>
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