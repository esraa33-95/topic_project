<!doctype html>
<html lang="en">
    @include('public.includes.head')
    
    <body class="topics-listing-page" id="top">

        <main>

            @include('public.includes.navpages')

        
            @yield('pages')

        
        </main>
            @include('public.includes.footer')

            <!-- JAVASCRIPT FILES -->
            @include('public.includes.js')
    
        </body>
    </html>