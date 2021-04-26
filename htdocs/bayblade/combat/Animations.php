var VarforFakeVar;

var r21;
var r22;
var r23;
var r24;

var CheckStopRotation1;
var CheckStopRotation2;
var CheckStopRotation3;
var CheckStopRotation4;
var RotateMyZone1;
var RotateMyZone3;
var RotateMyZone2;
var RotateMyZone4;

function Animations(){

	Animations00();/////this is for players 

}

//Animation rotate players
var rotation01;
var rotation02;

var functionRotation01;
var functionRotation02;

////this is for players they rotate only in self space  they are not moving
function Animations00(){
	

	var basicfunction01 = ()=>{
		rotation01=0;
		
		functionRotation01=setInterval( ()=>{
			$(player1).css({ transform: 'rotateZ('+rotation01+'deg )' })
			
			if(rotation01 >=359 ){
				rotation01=0;
			}
			rotation01+=8;
			
		}  ,1)
	}

	var basicfunction02 = ()=>{
		rotation02=0;
		functionRotation02=setInterval( ()=>{
			$(player2).css({ transform: 'rotateZ('+rotation01+'deg )' })
			if(rotation02 >=359 ){
				rotation02=0;
			}
			rotation02+=7;
			
		}  ,1)
	}


	basicfunction01();
	basicfunction02();
	
	//Detection hit in battle
	setTimeout(Detection00,1000);
}
var rotation03;
var rotation04;
var myZoneNowRotating1;
var myZoneNowRotating2;
var myZoneNowRotating3;
var myZoneNowRotating4;

var CheckRot=0;
//player zone rotate and players are moving 
function Animations01(){
	rotation03=0;
	rotation04=0;
	CheckStopRotation1=0;
	CheckStopRotation2=0;
	CheckStopRotation3=0;
	CheckStopRotation4=0;


	CheckRot=0;

		let rand=Math.floor(Math.random() * 2);
		let rand1=Math.floor(Math.random() * 2);
	
		if(rand==0 ){

		RotateMyZone1=( )=>{
			r21=Math.floor(Math.random()*4)+1;
			CheckStopRotation1=1;
			myZoneNowRotating1=setInterval( ()=>{
		  	$(myZone1).css({ transform: 'rotateZ('+rotation03+'deg) '})
		  	if(rotation03 >=359){
		  		rotation03=0;
		  	}
		  	rotation03+=r21;
		  	
		},20 )
	}

	RotateMyZone1();

		}if(rand==1){
		RotateMyZone3=( )=>{
			r22=Math.floor(Math.random()*4)+1;
			CheckStopRotation2=1;
			myZoneNowRotating3=setInterval( ()=>{	
		  	$(myZone1).css({ transform: 'rotateZ('+rotation03+'deg) '})
		  	if(rotation03 <= -359){
		  		rotation03=0;
		  	}
		  	rotation03 += -r22;

		},20 )
	}

	RotateMyZone3();



		}if(rand1==0){
		 r23=Math.floor(Math.random()*4)+1;	
		RotateMyZone2=( )=>{
		 CheckStopRotation3=1;	
		  myZoneNowRotating2=setInterval( ()=>{
		  	$(myZone2).css({ transform: 'rotateZ('+rotation04+'deg) '})
		  	if(rotation04 >=359){
		  		rotation04=0;
		  	}
		  	rotation04+=r23;

		},15 )
	}

	
	RotateMyZone2();


		}if(rand1==1){
		
		RotateMyZone4=( )=>{
			 r24=Math.floor(Math.random()*4)+1;
		  myZoneNowRotating4=setInterval( ()=>{
		  	CheckStopRotation4=1;
		  	$(myZone2).css({ transform: 'rotateZ('+rotation04+'deg) '})
		  	if(rotation04 <= -359){
		  		rotation04=0;
		  	}
		  	rotation04+= -r24;
		  	
		},15 )
	}

	
	RotateMyZone4();			



		}   



		if(r21==r23 || r21==r24){
			r21+=2;
			r22+=2;
		}if(r22==r23 || r22==r24){
			r22+=2;
			r21+=2;
		}

		

}//end of animation 01




//stop intervals
function clear(){
	clearInterval(functionRotation01);
	clearInterval(functionRotation02);
}


function NormalAtttackAnimation(){
	RealeasBeyblade();

}


function RealeasBeyblade(){
	let playerpostition01=$(myZone1).position();
	let playerpostition02=$(myZone2).position();

///Asking for first player position
	let test1=$(player1).position();
	let test2=$(player2).position();  
	$(player1).css({left:test1.left+playerpostition01.left+15 ,top:test1.top+playerpostition01.top+15  });
	$(player2).css({left:test2.left+playerpostition02.left+15 ,top:test2.top+playerpostition02.top+15  }); 
	 TrackingFolow="free";		 
	  Combatzone.append(player1);
	  Combatzone.append(player2);
	  
	  Deflection();
}

function Deflection(){
	
	if(FromWhereYouAreEntering == "LeftTop"){
		NormalAttackSound.play();
		let pos=$(player1).position();
		let pos1=$(player2).position();
		$(player1).css({top:pos.top-70,left:pos.left-70 });	
		$(player2).css({top:pos1.top+70,left:pos1.left+70 });	
		ResetAttack();

	}if(FromWhereYouAreEntering == "LeftBottom"){
		NormalAttackSound.play();
		let pos=$(player1).position();
		let pos1=$(player2).position();
		$(player1).css({top:pos.top+70,left:pos.left+70 });	
		$(player2).css({top:pos1.top-70,left:pos1.left+70 });	
		ResetAttack();
		
	}if(FromWhereYouAreEntering == "RightTop"){
		NormalAttackSound.play();
		let pos=$(player1).position();
		let pos1=$(player2).position();
	
		$(player1).css({top:pos.top-70,left:pos.left+70 });	
		$(player2).css({top:pos1.top+70,left:pos1.left-70 });	
		ResetAttack();
		
	}if(FromWhereYouAreEntering == "RightBottom"){
		NormalAttackSound.play();
		let pos=$(player1).position();
		let pos1=$(player2).position();
	
		$(player1).css({top:pos.top+70,left:pos.left-70 });	
		$(player2).css({top:pos1.top-70,left:pos1.left+70 });
		ResetAttack();
		
	}


//for poisonSkill

	function forDeletingPoison(){

	if(PoisonAnimation00=="ON"){
		PoisonAnimation00="OFF";
	}
	

	if(PoisonAnimation00=="OFF"){
		PlayerPoison.remove();
	}

	if(PoisonAnimation01=="ON"){
		PoisonAnimation01="OFF";
	}
	

	if(PoisonAnimation01=="OFF"){
		EnemyPoison.remove();
	}

}//end of func


	forDeletingPoison();
	CalculateCombat();

}


function ResetAttack(){
	
	setTimeout(FreeMove,200  );
}





function RelisingBeybladefromDifrentOption(){
	    clearAllBefforeAttack();
		let playerpostition01=$(myZone1).position();
	    let playerpostition02=$(myZone2).position();

///Asking for first player position
	let test1=$(player1).position();
	let test2=$(player2).position();  
	$(player1).css({left:test1.left+playerpostition01.left+15 ,top:test1.top+playerpostition01.top+15  });
	$(player2).css({left:test2.left+playerpostition02.left+15 ,top:test2.top+playerpostition02.top+15  }); 
	 TrackingFolow="free";		 
	  Combatzone.append(player1);
	  Combatzone.append(player2);
	  
	  ResetAttack();

}