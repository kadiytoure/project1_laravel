<?php
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content= "">
        <meta name="author" content="News">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/clean-blog.css')}}"/>
        
        <title>Blog - @yield('title')</title>
         </head>
    <body>
        @include('article.header')
        
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>

        <hr>
        @include("article.footer")

        <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
    </body>
</html>
