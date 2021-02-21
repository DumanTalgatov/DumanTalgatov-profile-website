@extends('main')
@section('content')
<link rel="stylesheet" href="css/contacts.css">
<div class="popup">
    	<div class="popup-content">
    		<h1>Contact me</h1>
    		
    		<center>      	
    			<input id="username" type="text" name="username" placeholder="Name">
    		</center>
    	    <center>	
    	   		<input type="password" id="pass" name="pass" placeholder="Email">
    	    </center>
    	    <center>
    	    	<input type="password" id="pass2" name="pass2" placeholder="Telephone number">
    	    </center>
    	    <center>
                <input type="text" id="sms" name="message" placeholder="Message">
            </center>
    	    	<button type="sign">Send</button>
            
    	  	
    	</div>
	</div>
@endsection