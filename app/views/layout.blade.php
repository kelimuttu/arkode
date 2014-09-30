<!DOCTYPE html>
<html lang='en'>
<head>
 <meta charset='utf-8' />
 <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
 <title>Arkode Studio | Dashboard</title>

 {{ HTML::style('assets/css/normalize.css') }}
 {{ HTML::style('assets/css/foundation.css') }}
 {{ HTML::style('assets/css/app.css') }}
 {{ HTML::style('assets/foundation-icons/foundation-icons.css') }}

 {{ HTML::script('assets/js/vendor/modernizr.js') }}
</head>;
<body>

@yield('content')

{{ HTML::script('assets/js/vendor/jquery.js') }}
{{ HTML::script('assets/js/foundation.min.js') }}
<script>
    $(document).foundation();
</script>

</body>
</html>