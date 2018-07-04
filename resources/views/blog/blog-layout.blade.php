<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VOG BLOG | @yield('title')</title>
    @include('blog.partials._header')
</head>
<body>


    @include('blog.partials._navbar')
    @include('blog.partials._navbar2')

    @include('blog.partials._category')



    @include('blog.partials._message')
   <div id="post-wrapper">
    @yield('content')

   </div>




    @include('blog.partials._footer')
    @include('blog.partials._javascript')


</body>
</html>