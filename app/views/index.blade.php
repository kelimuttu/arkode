@extends('layout')

@section('content')

<div class="row">
		    <div class="large-6 columns">
		      <div class="signup-panel">
		        <p class="welcome">Welcome to Arkode Studio</p>
		        <form>
		          <div class="row collapse">
		            <div class="small-2  columns">
		              <span class="prefix"><i class="fi-torso-female"></i></span>
		            </div>
		            <div class="small-10  columns">
		              <input type="text" placeholder="username">
		            </div>
		          </div>
		          <div class="row collapse">
		            <div class="small-2 columns ">
		              <span class="prefix"><i class="fi-lock"></i></span>
		            </div>
		            <div class="small-10 columns ">
		              <input type="text" placeholder="password">
		            </div>
		          </div>
		        </form>
		        <a href="<?php echo URL::to('dashboard'); ?>" class="button ">Sign In</a>
		      </div>
		    </div>
		</div>