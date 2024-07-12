<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Longtek Electronics Ltd">
    <meta name="description" content="Longtek Electronics LtdLongtek Electronics Europe Ltd is an active company incorporated on 10 September 2004 with 
    the registered office located in Enfield, Greater London. Longtek Electronics Europe Ltd has been running for 19 years. There is currently 1 active 
    director and 1 active secretary according to the latest confirmation statement submitted on 12th April 2024.">
    <link rel="icon" title="Favicon" sizes="16x16" type="image/png" href="assets/images/favicon.png">
    <title>Longtek Electronics (Europe) Ltd</title>

    <!-- CSS here -->
    @include('layouts.components.styles')

</head>

<body>

    <div class="main_page_wrapper">

        <!-- header start -->
        <header class="header_section">
            @include('layouts.components.header')

            @include('layouts.components.sidebar')
        </header>

        @yield('content')
        @yield('modal')

        @include('layouts.components.footer')

        <a id="button"></a>
        

    </div>
<!-- plugins js -->

@include('layouts.components.scripts')
</body>

</html>