var chardown0;
var chardown1;
var charleft0;
var charleft1;
var charright0;
var charright1;
var chartop0;
var PlayerBeyblade;
function AskGamedoCharacterExist(){

	let basicdata=`<?php

	session_start();
	$id=$_SESSION["id"];
	$database=mysqli_connect('localhost','root','','database' ) or die ("Connection error");
	$sql="SELECT * FROM makeornotmake WHERE id='$id'   ";
	$query=mysqli_query($database,$sql);
    $result=mysqli_fetch_assoc($query);

   
    $check=$result["exist"];
    
    
    ?>
	`;

	let Exist=`<?php echo $check;   ?>`;
	
	if(Exist==0){

		RunCharacterSelection();

	}else{

	}

	var CharHolder;
	var button1;


function RunCharacterSelection(){
		body.append(' <div id="CharHolder"></div>  ');
		CharHolder=$('#CharHolder');
		let y=window.innerHeight;
		CharHolder.css({
			width:'98%',
			height:y-10,
			background:'gray',
			marginTop:'0.5%',
			marginLeft:'1%',
			marginRight:'1%',

		})
	CharHolder.append('<div class="char  char-1"></div>    ');
	CharHolder.append('<div class="char  char-2"></div>    ');

	let char1=$('.char-1');	

		char1.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'2%',
		top:'2%',
		backgroundImage:'url(./Character/likovi/lik1/down0.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})

	let char2=$('.char-2');	

		char2.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'22%',
		top:'2%',
		backgroundImage:'url(./Character/likovi/lik2/down0.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})	

	CharHolder.append('<button class="button  button-1">Chose This Character</button>    ');
	button1=$('.button-1');

	button1.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'25%',
		left:'5%',
		borderRadius:'15%',
		textAlign:'center'

	 });

	CharHolder.append('<button class="button  button-2">Chose This Character</button>    ');
	button2=$('.button-2');

	button2.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'25%',
		left:'25%',
		borderRadius:'15%',
		textAlign:'center'

	 });


	let trendbutton=$('.button');

	for(let anybutton of trendbutton ){
		anybutton.addEventListener('click',function saysomething(){
				
			if(this==trendbutton[0]){
			chardown0='url(./Character/likovi/lik1/down0.png )';
            chardown1='url(./Character/likovi/lik1/down1.png )';
            charleft0='url(./Character/likovi/lik1/left0.png )';
            charleft1='url(./Character/likovi/lik1/left1.png )';
            charright0='url(./Character/likovi/lik1/right0.png )';
            charright1='url(./Character/likovi/lik1/right1.png )';
            chartop0='url(./Character/likovi/lik1/top0.png )';
            PlayerisChousen();

			}if(this==trendbutton[1]){
			chardown0='url(./Character/likovi/lik2/down0.png )';
            chardown1='url(./Character/likovi/lik2/down1.png )';
            charleft0='url(./Character/likovi/lik2/left0.png )';
            charleft1='url(./Character/likovi/lik2/left1.png )';
            charright0='url(./Character/likovi/lik2/right0.png )';
            charright1='url(./Character/likovi/lik2/right1.png )';
            chartop0='url(./Character/likovi/lik2/top0.png )';
            PlayerisChousen();
			}

		} )

	} 


	}


function PlayerisChousen(){
	let c=$('.char');
	let b=$('.button');
	c.remove();
	b.remove();
	CharHolder.remove();
	DisplayBeyblade();



}


function DisplayBeyblade(){
		body.append(' <div id="BeybladeHolder"></div>  ');
		BeybladeHolder=$('#BeybladeHolder');
		let y=window.innerHeight;
		BeybladeHolder.css({
			width:'98%',
			height:y-10,
			background:'gray',
			marginTop:'0.5%',
			marginLeft:'1%',
			marginRight:'1%',

		})
	BeybladeHolder.append('<div class="beyblade  beyblade-1"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-2"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-3"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-4"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-5"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-6"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-7"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-8"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-9"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-10"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-11"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-12"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-13"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-14"></div>    ');
	BeybladeHolder.append('<div class="beyblade  beyblade-15"></div>    ');



	let beyblade1=$('.beyblade-1');	

		beyblade1.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'2%',
		top:'2%',
		backgroundImage:'url(./beybladeimg/BeybladeMageEarth.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})

	let beyblade2=$('.beyblade-2');	

		beyblade2.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'22%',
		top:'2%',
		backgroundImage:'url(./beybladeimg/GodofBurst.png )',	
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})	


	let beyblade3=$('.beyblade-3');	

		beyblade3.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'41%',
		top:'2%',
		backgroundImage:'url(./beybladeimg/BladeorHide.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})	

	let beyblade4=$('.beyblade-4');	

		beyblade4.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'60%',
		top:'2%',
		backgroundImage:'url(./beybladeimg/DragonBlue.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})	

	let beyblade5=$('.beyblade-5');	

		beyblade5.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'79%',
		top:'2%',
		backgroundImage:'url(./beybladeimg/DragonBorn.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})	

	let beyblade6=$('.beyblade-6');	

		beyblade6.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'2%',
		top:'33%',
		backgroundImage:'url(./beybladeimg/HeavenPegasus.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})		

	let beyblade7=$('.beyblade-7');	

		beyblade7.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'22%',
		top:'33%',
		backgroundImage:'url(./beybladeimg/HeavyFang.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})		

	let beyblade8=$('.beyblade-8');	

		beyblade8.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'41%',
		top:'33%',
		backgroundImage:'url(./beybladeimg/LethalTempoCuter.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})		

    let beyblade9=$('.beyblade-9');	

		beyblade9.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'60%',
		top:'33%',
		backgroundImage:'url(./beybladeimg/MediumCuter.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})	


	let beyblade10=$('.beyblade-10');	

		beyblade10.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'79%',
		top:'33%',
		backgroundImage:'url(./beybladeimg/PureCloud.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})		



	let beyblade11=$('.beyblade-11');	

		beyblade11.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'2%',
		top:'64%',
		backgroundImage:'url(./beybladeimg/RedBurst.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})	


	let beyblade12=$('.beyblade-12');	

		beyblade12.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'22%',
		top:'64%',
		backgroundImage:'url(./beybladeimg/RoseDrake.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})		


	let beyblade13=$('.beyblade-13');	

		beyblade13.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'41%',
		top:'64%',
		backgroundImage:'url(./beybladeimg/Samuray.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})	

	let beyblade14=$('.beyblade-14');	

		beyblade14.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'60%',
		top:'64%',
		backgroundImage:'url(./beybladeimg/TakarZxeno.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})	

	let beyblade15=$('.beyblade-15');	

		beyblade15.css({ 
		width:'17%',
		height:'150px',
		background:'orange',
		position:'absolute',
		left:'79%',
		top:'64%',
		backgroundImage:'url(./beybladeimg/ValkyrieSlash.png )',
		backgroundRepeat:'no-repeat',
		backgroundSize:'contain',
		backgroundPosition:'center',

	})	

	BeybladeHolder.append('<button class="button  button-1">Chose This Beyblade</button>    ');
	button1=$('.button-1');

	button1.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'25%',
		left:'4.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });

	BeybladeHolder.append('<button class="button  button-2">Chose This Beyblade</button>    ');
	button2=$('.button-2');

	button2.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'25%',
		left:'24.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });


	BeybladeHolder.append('<button class="button  button-3">Chose This Beyblade</button>    ');
	button3=$('.button-3');

	button3.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'25%',
		left:'43.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });


	BeybladeHolder.append('<button class="button  button-4">Chose This Beyblade</button>    ');
	button4=$('.button-4');

	button4.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'25%',
		left:'62.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });


	BeybladeHolder.append('<button class="button  button-5">Chose This Beyblade</button>    ');
	button5=$('.button-5');

	button5.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'25%',
		left:'81.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });

	BeybladeHolder.append('<button class="button  button-6">Chose This Beyblade</button>    ');
	button6=$('.button-6');

	button6.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'56.5%',
		left:'4.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });


	BeybladeHolder.append('<button class="button  button-7">Chose This Beyblade</button>    ');
	button7=$('.button-7');

	button7.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'56.5%',
		left:'24.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });


	BeybladeHolder.append('<button class="button  button-8">Chose This Beyblade</button>    ');
	button8=$('.button-8');

	button8.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'56.5%',
		left:'43.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });

	BeybladeHolder.append('<button class="button  button-9">Chose This Beyblade</button>    ');
	button9=$('.button-9');

	button9.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'56.5%',
		left:'62.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });

	BeybladeHolder.append('<button class="button  button-10">Chose This Beyblade</button>    ');
	button10=$('.button-10');

	button10.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'56.5%',
		left:'81.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });


	BeybladeHolder.append('<button class="button  button-11">Chose This Beyblade</button>    ');
	button11=$('.button-11');

	button11.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'87.5%',
		left:'4.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });

	BeybladeHolder.append('<button class="button  button-12">Chose This Beyblade</button>    ');
	button12=$('.button-12');

	button12.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'87.5%',
		left:'24.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });


	BeybladeHolder.append('<button class="button  button-13">Chose This Beyblade</button>    ');
	button13=$('.button-13');

	button13.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'87.5%',
		left:'43.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });


	BeybladeHolder.append('<button class="button  button-14">Chose This Beyblade</button>    ');
	button14=$('.button-14');

	button14.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'87.5%',
		left:'62.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });	


	BeybladeHolder.append('<button class="button  button-15">Chose This Beyblade</button>    ');
	button15=$('.button-15');

	button15.css({ 
		width:'12%',
		height:'35px',
		background:'red',
		position:'absolute',
		top:'87.5%',
		left:'81.5%',
		borderRadius:'15%',
		textAlign:'center'

	 });

	let trendbutton=$('.button');

	for(let anybutton of trendbutton ){
		anybutton.addEventListener('click',function saysomething(){
				
			if(this==trendbutton[0]){

			PlayerBeyblade={
			Name:'BeybladeMageEarth',
			url:'url(./beybladeimg/BeybladeMageEarth.png )',	
			Attack:8,
			Healt:100,
			Defence:2,
			MagicPower:15,
			Level:1,
			Type:"Rook",
			Skill0:"Attack",
			Skill1:"Poison",
			Skill2:"LRS",
			Skill3:"Rapid Fire",
			Skill4:"none",
			Exp:0,



			};
			
		

            BeybladeisChousen();

			}if(this==trendbutton[1]){
				PlayerBeyblade={
			    Name:'GodofBurst',
			    url:'url(./beybladeimg/GodofBurst.png )',	
			    Attack:7,
			    Healt:150,
			    Defence:5,
			    MagicPower:7,
			    Level:1,
			    Type:"Wild",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[2]){
				
				PlayerBeyblade={
			    Name:'BladeorHide',
			    url:'url(./beybladeimg/BladeorHide.png )',	
			    Attack:15,
			    Healt:90,
			    Defence:1,
			    MagicPower:10,
			    Level:1,
			    Type:"Darknes",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[3]){
				
				PlayerBeyblade={
			    Name:'DragonBlue',
			    url:'url(./beybladeimg/DragonBlue.png )',	
			    Attack:12,
			    Healt:95,
			    Defence:3,
			    MagicPower:12,
			    Level:1,
			    Type:"Winter",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[4]){
				
				PlayerBeyblade={
			    Name:'DragonBorn',
			    url:'url(./beybladeimg/DragonBorn.png )',	
			    Attack:8,
			    Healt:100,
			    Defence:5,
			    MagicPower:8,
			    Level:1,
			    Type:"Fire",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			
			}if(this==trendbutton[5]){
				
				PlayerBeyblade={
			    Name:'HeavenPegasus',
			    url:'url(./beybladeimg/HeavenPegasus.png )',	
			    Attack:10,
			    Healt:100,
			    Defence:3,
			    MagicPower:10,
			    Level:1,
			    Type:"Wather",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[6]){
				
				PlayerBeyblade={
			    Name:'HeavyFang',
			    url:'url(./beybladeimg/HeavyFang.png )',	
			    Attack:10,
			    Healt:110,
			    Defence:1,
			    MagicPower:10,
			    Level:1,
			    Type:"Wild",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[7]){
				
				PlayerBeyblade={
			    Name:'LethalTempoCuter',
			    url:'url(./beybladeimg/LethalTempoCuter.png )',	
			    Attack:15,
			    Healt:115,
			    Defence:1,
			    MagicPower:3,
			    Level:1,
			    Type:"Winter",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[8]){
				
				PlayerBeyblade={
			    Name:'MediumCuter',
			    url:'url(./beybladeimg/MediumCuter.png )',	
			    Attack:11,
			    Healt:95,
			    Defence:2,
			    MagicPower:11,
			    Level:1,
			    Type:"Wild",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[9]){
				
				PlayerBeyblade={
			    Name:'PureCloud',
			    url:'url(./beybladeimg/PureCloud.png )',	
			    Attack:5,
			    Healt:95,
			    Defence:2,
			    MagicPower:15,
			    Level:1,
			    Type:"Wather",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[10]){
				
				PlayerBeyblade={
			    Name:'RedBurst',
			    url:'url(./beybladeimg/RedBurst.png )',	
			    Attack:10,
			    Healt:100,
			    Defence:3,
			    MagicPower:10,
			    Level:1,
			    Type:"Fire",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[11]){
				
				PlayerBeyblade={
			    Name:'RoseDrake',
			    url:'url(./beybladeimg/RoseDrake.png )',	
			    Attack:13,
			    Healt:75,
			    Defence:3,
			    MagicPower:13,
			    Level:1,
			    Type:"Darknes",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[12]){
				
				PlayerBeyblade={
			    Name:'Samuray',
			    url:'url(./beybladeimg/Samuray.png )',	
			    Attack:11,
			    Healt:92,
			    Defence:4,
			    MagicPower:11,
			    Level:1,
			    Type:"Darknes",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[13]){
				
				PlayerBeyblade={
			    Name:'TakarZxeno',
			    url:'url(./beybladeimg/TakarZxeno.png )',	
			    Attack:13,
			    Healt:88,
			    Defence:4,
			    MagicPower:13,
			    Level:1,
			    Type:"Wild",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}if(this==trendbutton[14]){
				
				PlayerBeyblade={
			    Name:'ValkyrieSlash',
			    url:'url(./beybladeimg/ValkyrieSlash.png )',	
			    Attack:13,
			    Healt:88,
			    Defence:4,
			    MagicPower:13,
			    Level:1,
			    Type:"Water",
			    Skill0:"Attack",
			    Skill1:"none",
			    Skill2:"none",
			    Skill3:"none",
			    Skill4:"none",
			    Exp:0,



			};

              BeybladeisChousen();
			}

		} )

	} 


 function BeybladeisChousen(){
 	let b1=$('.beyblade');
	let b2=$('.button');
	b1.remove();
	b2.remove();
	BeybladeHolder.remove();
	StartMakingMap();
	AddItems();
 }




}


}

var AllItems=[];

function AddItems(){
	PlayerBeyblade.Gold=0;
	PlayerBeyblade.Boxes=0;
	PlayerBeyblade.Keys=0;

	AllItems.push(PlayerBeyblade.Gold,PlayerBeyblade.Boxes,PlayerBeyblade.Keys);

}