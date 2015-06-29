<!DOCTYPE html>
<html lang='en'>
<head>
 <meta charset='utf-8' />
 <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
 <title>Arkode Studio | Dasboard</title>

 {{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans') }}
 {{ HTML::style('assets/css/backend/normalize.css') }}
 {{ HTML::style('assets/css/backend/foundation.css') }}
 {{ HTML::style('assets/css/backend/app.css') }}
 {{ HTML::style('assets/foundation-icons/foundation-icons.css') }}
 {{HTML::script('assets/js/backend/action.js')}}

 {{ HTML::script('assets/js/backend/vendor/modernizr.js') }}
</head>
<body>

@yield('content')

{{ HTML::script('assets/js/backend/vendor/jquery.js') }}
{{ HTML::script('assets/js/backend/foundation.min.js') }}

<script>
    $(document).foundation();
</script>

@yield('script')

</body>
</html>