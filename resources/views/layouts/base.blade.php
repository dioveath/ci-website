<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Charicha Institute </title>

    <link rel="stylesheet" href="{{ asset("css/app.css") }}" type="text/css" media="screen" />
    
    <script src="{{ asset("js/app.js") }}"></script>
  </head>
  <body class="bg-gray-200 text-black">
    <main>
      @yield('main-content')
    </main>
  </body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
	  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	  crossorigin="anonymous"></script>  
</html>
