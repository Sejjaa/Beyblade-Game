<?php session_start();  ?>

var RegisterForm;
var LoginForm;



var body=$('body');
var btnL=$('.btnL');
var btnR=$('.btnR');


var btnRClick=0;
var btnLClick=0;
btnR.on( 'click',()=>{
	let destroy=`<?php  session_destroy();   ?> `;
btnRClick++;
	RegisterForm=` 
	<form action="./PHP/Register.php"  method="POST"  id="reg" style="margin-left:auto;margin-right:auto;background:orange;margin-top:50px;height:auto;border-radius:10%;  ">
	<h1 style="text-align:center;margin-top:25px;" >Register Page</h1>
	<input type="username" name="username" placeholder="Username"  required style="margin-top:20px;margin-left:42%;"><br>
	<input type="password" name="password" placeholder="Password"  required  style="margin-top:20px;margin-left:42%;"><br>
	<button name="btnR" class="btn btn-lg btn-success  type="submit" style="margin-top:30px;margin-left:45%;"   " >Register</button>

	</from>

 

  `;


ShowRegisterForm();





});



btnL.on( 'click',()=>{
btnLClick++;
	LoginForm=` 
	<form action="./PHP/Login.php" method="POST"  id="log" style="margin-left:auto;margin-right:auto;background:orange;margin-top:50px;height:auto;border-radius:10%;  ">
	<h1 style="text-align:center;margin-top:25px;" >Login</h1>
	<input type="username" name="username" placeholder="Username"  required style="margin-top:20px;margin-left:42%;"><br>
	<input type="password" name="password" placeholder="Password"  required  style="margin-top:20px;margin-left:42%;"><br>
	<button name="btnL" class="btn btn-lg btn-success type="submit" style="margin-top:30px;margin-left:46%;"   " >Login</button>

	</from>

 

  `;


ShowLoginForm();





});


function ShowRegisterForm(){
let loginform=$('#log')
btnRClick++;
if(btnRClick==2){
	loginform.remove();
	body.append(RegisterForm);
    btnLClick=0;
}




}




function ShowLoginForm(){
let registerform=$('#reg');
	

if(btnLClick==1){
	btnLClick++;
	registerform.remove();
	body.append(LoginForm);
    btnRClick=0;
}




}



