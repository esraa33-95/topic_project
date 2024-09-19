<!doctype html>
<html lang="en">

@include('public.includes.head') 

<body id="top">

    <main>

        @include('public.includes.navbar') 

@yield('content')

    </main>

    @include('public.includes.footer')


    <!-- JAVASCRIPT FILES -->
    @include('public.includes.js')

</body>

</html>