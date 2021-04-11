<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/cv_website.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="header">  
        <div class="logo">
            <h3>Duman Talgatov</h3>
        </div>  
        <div class="menu">
            <ul>
                <li><a href="{{route('home', ['lang'])}}">{{__('lang.Home')}}</a></li>
                <li><a href="{{route('about', ['lang'])}}">{{__('lang.About me')}}</a></li>
                <li><a href="{{route('contacts', ['lang'])}}">{{__('lang.Contacts')}}</a></li>
            </ul>
        </div>
    </div>
    @yield('content')
</body>
</html>