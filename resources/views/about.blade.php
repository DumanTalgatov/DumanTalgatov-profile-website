@extends('main')
@section('content')
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <div class="main">
        <h1>{{__('lang.About me')}}</h1>
        <div class="circles">
            <div class="circle">{{__('lang.About me')}}</div>
            <p>{{__('lang.I was born in East Kazakhstan. Im 19 age old. I like detective serials, anime, rap, eat and sleep')}}</p>

            <div class="circle">{{__('lang.Education')}}</div>
            <p>{{__('lang.Now im second year student at Suleyman Demirel University. My specialization is Informational Systems')}}</p>

            <div class="circle">{{__('lang.Skills')}}</div>
            <p>{{__('lang.I can learn something if i need very immediatly, for example before few days of aftograding in ICT, i have learn basics of Python and OpenCV library')}}</p>

            <div class="circle">{{__('lang.Languages')}}</div>
            <p>{{__('lang.Java, Html, Css, JS...')}}</p>
        
        </div>
    </div>
@endsection