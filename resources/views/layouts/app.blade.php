<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Farm to Market</title>
    </head>
    <body>

        @yield('main')
        @if( count($errors)  > 0){
        <ul>
            @foreach( $errors->all as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>

    }
    @endif
    </body>
</html>