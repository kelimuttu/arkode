<!DOCTYPE html>
<html lang='en'>
<head>
 <meta charset='utf-8' />
 <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
 <title>Arkode Studio | Backend</title>

 {{ HTML::style('assets/css/backend/normalize.css') }}
 {{ HTML::style('assets/css/backend/foundation.css') }}
 {{ HTML::style('assets/css/backend/login.css') }}
 {{ HTML::style('assets/css/backend/app.css') }}
 {{ HTML::style('assets/foundation-icons/foundation-icons.css') }}

 {{ HTML::script('assets/js/backend/vendor/modernizr.js') }}
</head>;

<body>

	<!-- container -->
    <div class="row container">
        <div class="row">
          <div class="medium-5 columns centered">
            <img src="assets/img/about-logo.png" class="img-login">
            <h4>Arkode<br>
            <small>Game Studio</small></h4>
          </div>
          <div class="medium-7 columns left-bordered">
            <h4>Login Panel Administrator</h4>
            {{Form::open(array('method'=>'post', 'url'=>'login'))}}
            <input class="form-control floatlabel" id="username" type="text" name="username" placeholder="Username">
            <input class="form-control floatlabel" id="password" type="password" name="password" placeholder="Password">
            <button class="button tiny radius" type="submit">Sign in</button>
            {{Form::close()}}
          </div>
        </div>
    </div>
    <!-- end of container -->

{{ HTML::script('assets/js/backend/vendor/jquery.js') }}
{{ HTML::script('assets/js/backend/foundation.min.js') }}
<script>
    $(document).foundation();
</script>

</body>