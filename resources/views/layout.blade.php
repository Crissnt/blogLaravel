<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <Menu>
    <ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">Acerca de</a></li>
    <li><a href="{{ route('blog.index')}}">Blog</a></li>
    <li><a href="{{ route('contact') }}">Contactos</a></li>
    </ul>
    </Menu>

    <div>
    @yield('content')
    </div>
    
</body>
</html>