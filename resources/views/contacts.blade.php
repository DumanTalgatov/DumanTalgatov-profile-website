@extends('main')
@section('content')
<link rel="stylesheet" href="{{asset('css/contacts.css')}}">
<div class="popup">
    	<div class="popup-content">
    		<h1>{{__('lang.Contact me')}}</h1>
    		
    		<center>      	
    			<input id="username" type="text" name="username" placeholder="{{__('lang.Name')}}">
    		</center>
    	    <center>	
    	   		<input type="password" id="pass" name="pass" placeholder="{{__('lang.Email')}}">
    	    </center>
    	    <center>
    	    	<input type="password" id="pass2" name="pass2" placeholder="{{__('lang.Telephone number')}}">
    	    </center>
    	    <center>
                <input type="text" id="sms" name="message" placeholder="{{__('lang.Message')}}">
            </center>
    	    	<button type="sign">{{__('lang.Send')}}</button>
            
    	  	
    	</div>
	</div>
@endsection