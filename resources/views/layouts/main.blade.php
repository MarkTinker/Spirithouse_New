<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>

        @include('partials._head')             
        
    </head>
           
    <body>
                
            @include('partials._nav')

            <div class="container">

                @yield('content')
            
            </div> <!-- /.container -->

                @yield('content2') <!-- The contents of outside container -->
            @include('partials._footer')
        @include('partials._javascript') 

        @yield('scripts')

    </body>
</html>