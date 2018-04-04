<?php
 ?>
<html>
    <head>
         <link rel="stylesheet" href="css/app.css" />
         <link rel="stylesheet" href="css/clean-blog.css"/>
         <link rel="stylesheet" href="css/clean-blog.min.css" />
        <title>Blog - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
