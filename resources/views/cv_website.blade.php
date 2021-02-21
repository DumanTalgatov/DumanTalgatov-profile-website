@extends('main')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="main">
        <p><img src="https://habrastorage.org/files/965/274/447/965274447f3b4ad1ab9263039ada2589.jpg" alt="" width="400px" class="leftimg">
            <div class="text"><h2>Hello</h2>
            <h1>My name is Duman</h1>
            <h2>I'm sophomore</h2></div>
            <button id="btn1"><a href="{{route('about')}}">About me</a></button>  <button id="btn2"><a href="{{route('contacts')}}">Contacts</a></button>
        </p>
    </div>
    <div class="icons">
        <p>Created by me</p> <a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-instagram"></a><a href="#" class="fa fa-twitter"></a><a href="#" class="fa fa-vk"></a>
    </div>
@endsection