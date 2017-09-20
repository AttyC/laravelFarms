<!DOCTYPE html>
<html lang="en">
    <head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
<link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css" >

<link href="{!! asset('css/main.css') !!}" media="all" rel="stylesheet" type="text/css" />     <title>Farm to Market</title>
    </head>
    <body>
        <header class="container">
            <h1>Farms to Markets - Laravel App with Code School</h1>
        </header>
<section class="container">
        @yield('main')
        @if( count($errors)  > 0){
        <ul class="list-group">
            @foreach( $errors->all as $error)
              <li class="list-group-item">
                {{ $error }}
            </li>
            @endforeach
        </ul>

    }
    @endif
    </body>
</html>