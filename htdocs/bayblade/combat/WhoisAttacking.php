var turn;
var TrackingDetection;
var NormalAttackMove;
var ForCal;


function WhoHaveTurn(){


///player
if(turn==1){
	turn=2;	

WhoisGoingandAttack();

//comp
}if(turn==3){
	
	turn=4;

WhoisGoingandAttack();
}


	
}

function WhoisGoingandAttack(){

	if(turn==2){
		

		if(button0=="Attack"){
			NormalAttack();
			turn=5;
		}else if(button0=="Poison"){
			if(PlayerPoisonCd==0 ){
			    turn=5;
				PoisonAttack();
			    
			}else{
				turn=1;
			}
			
			
		}else if(button0=="LRS"){
			if(PlayerLongRangeSpellCd==0){
				turn=5;
			    LongRangeSpell();	
			}else{
				turn=1;
			}
			
		}else if(button0=="Rapid Fire"){
			if(RapidFirePlayerCd==0){
				turn=5;
			    RapidFire();
			}else{
				turn=1;
			}

			

		}else{
			turn=1;
		}


	}if(turn==4){

	let r2000=Math.floor(Math.random()*EnemyHaveSkill.length );	
		
		if(r2000==0){
		    NormalAttack();
		    turn=6
		}else if(r2000==1){
			
			if(EnemyArrey[0].Skill1=="Poison"){

			if(EnemyPoisonCd==0 ){
			    turn=6;
			    PoisonAttack();	

			}else{
		        NormalAttack();
		        turn=6;
			}//end of else
			


			}else if(EnemyArrey[0].Skill1=="LongRangeSpell"){
				if(EnemyLongRangeSpellCd==0){
					turn=6;
			        LongRangeSpell();
				}else{
					turn=6;	
					NormalAttack();
		        
				}
			

			}else if(EnemyArrey[0].Skill1=="Rapid Fire"){
					if(RapidFireEnemyCd==0){
						turn=6;
					    RapidFire();
					}else{
						turn=6;
						NormalAttack();
					}	


					


			}else{
		        NormalAttack();
		        turn=6;
			}	


			
			



		}else if(r2000==2){
		   if(EnemyArrey[0].Skill2=="Poison"){

			if(EnemyPoisonCd==0 ){
			    turn=6;
			    PoisonAttack();	
			}else{
		        NormalAttack();
		        turn=6;
			}//end of else
			


			}else if(EnemyArrey[0].Skill2=="LongRangeSpell"){
				if(EnemyLongRangeSpellCd==0){
					turn=6;
			        LongRangeSpell();
				}else{
					turn=6;	
					NormalAttack();
		        
				}
			

			}else if(EnemyArrey[0].Skill2=="Rapid Fire"){
					if(RapidFireEnemyCd==0){
						turn=6;
					    RapidFire();
					}else{
						turn=6;
						NormalAttack();
					}	


					


			}else{
		        NormalAttack();
		        turn=6;
			}	
		





		}else if(r2000==3){
			if(EnemyArrey[0].Skill3=="Poison"){

			if(EnemyPoisonCd==0 ){
			    turn=6;
			    PoisonAttack();	


			}else{
		        NormalAttack();
		        turn=6;
			}//end of else
			


			}else if(EnemyArrey[0].Skill3=="LongRangeSpell"){
				if(EnemyLongRangeSpellCd==0){
					turn=6;
			        LongRangeSpell();
				}else{
					turn=6;	
					NormalAttack();
		        
				}
			

			}else if(EnemyArrey[0].Skill3=="Rapid Fire"){
					if(RapidFireEnemyCd==0){
						turn=6;
					    RapidFire();
					}else{
						turn=6;
						NormalAttack();
					}	


					


			}else{
		        NormalAttack();
		        turn=6;
			}	

		}else if(r2000==4){
			if(EnemyArrey[0].Skill4=="Poison"){

			if(EnemyPoisonCd==0 ){
			    turn=6;
			    PoisonAttack();	
			}else{
		        NormalAttack();
		        turn=6;
			}//end of else
			


			}else if(EnemyArrey[0].Skill4=="LongRangeSpell"){
				if(EnemyLongRangeSpellCd==0){
					turn=6;
			        LongRangeSpell();
				}else{
					turn=6;	
					NormalAttack();
		        
				}
			

			}else if(EnemyArrey[0].Skill4=="Rapid Fire"){
					if(RapidFireEnemyCd==0){
						turn=6;
					    RapidFire();
					}else{
						turn=6;
						NormalAttack();
					}	


					


			}else{
		        NormalAttack();
		        turn=6;
			}	
		}


		
	}



}


var Rspell;
var Rspell1;
var Rspell2;
var Rspell3;
var Rspell4;
var Rspell5;
var Rspell6;
var Rspell7;
var Rspell8;
var Rspell9;
var RapidFireSkillUp;
var RapidFireSpellImage;
var RapidFireSpellImage1;
var RapidFireSound1;


function RapidFire(){

RapidFireSkillUp=new Audio('./combat/CombatSkillSound/Up2.ogg');

	if(turn==5){

		
		if(PlayerBeyblade.Type==AllTypeArrey[0]){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/fire1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Fire1.ogg');
			RapidFireforPlayer();

		}if(PlayerBeyblade.Type==AllTypeArrey[1]){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Wind1.ogg');
			RapidFireforPlayer();	

		}if(PlayerBeyblade.Type==AllTypeArrey[2]){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/ice.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Ice2.ogg');
			RapidFireforPlayer();	
	
		}if(PlayerBeyblade.Type==AllTypeArrey[3]){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/water.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Water1.ogg');
			RapidFireforPlayer();
	
		}if(PlayerBeyblade.Type==AllTypeArrey[4]){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Earth5.ogg');
			RapidFireforPlayer();
	
		}if(PlayerBeyblade.Type==AllTypeArrey[5]){
			RapidFireSpellImage='url(./combat/SkillsImg/LongRangeSkills/dark8.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Darkness7.ogg');
			RapidFireforPlayer();
	
		}if(PlayerBeyblade.Type==AllTypeArrey[6]){
			let r200=Math.floor(Math.random()*5 );
			if(r200==0){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/fire1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Fire1.ogg');
			RapidFireforPlayer();	
			

			}if(r200==1){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Wind1.ogg');
			RapidFireforPlayer();	
	
			}if(r200==2){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/ice.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Ice2.ogg');
			RapidFireforPlayer();
			
	
			}if(r200==3){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/water.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Water1.ogg');
			RapidFireforPlayer();
			
	
			}if(r200==4){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Earth5.ogg');
			RapidFireforPlayer();

			}if(r200==5){
			RapidFireSpellImage='url(./combat/SkillsImg/LongRangeSkills/dark8.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Darkness7.ogg');
			RapidFireforPlayer();

	
			}


			
		}


		
		//end player

	}if(turn==6){

		if(EnemyArrey[0].Type==AllTypeArrey[0]){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/fire1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Fire1.ogg');
			RapidFireforEnemy();	
			

		}if(EnemyArrey[0].Type==AllTypeArrey[1]){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Wind1.ogg');
			RapidFireforEnemy();		

		}if(EnemyArrey[0].Type==AllTypeArrey[2]){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/ice.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Ice2.ogg');
			RapidFireforEnemy();	
			
	
		}if(EnemyArrey[0].Type==AllTypeArrey[3]){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/water.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Water1.ogg');
			RapidFireforEnemy();	
			
	
		}if(EnemyArrey[0].Type==AllTypeArrey[4]){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Earth5.ogg');
			RapidFireforEnemy();	
			
	
		}if(EnemyArrey[0].Type==AllTypeArrey[5]){
			RapidFireSpellImage='url(./combat/SkillsImg/LongRangeSkills/dark8.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Darkness7.ogg');
			RapidFireforEnemy();	
			
	
		}if(EnemyArrey[0].Typee==AllTypeArrey[6]){
			let r200=Math.floor(Math.random()*5 );
			if(r200==0){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/fire1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Fire1.ogg');
			RapidFireforEnemy();	
			

			}if(r200==1){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Wind1.ogg');
			RapidFireforEnemy();	
			
	
			}if(r200==2){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/ice.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Ice2.ogg');
			RapidFireforEnemy();	
			
	
			}if(r200==3){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/water.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Water1.ogg');
			RapidFireforEnemy();	
			
	
			}if(r200==4){
			RapidFireSpellImage='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Earth5.ogg');
			RapidFireforEnemy();	
			

			}if(r200==5){
			RapidFireSpellImage='url(./combat/SkillsImg/LongRangeSkills/dark8.png)';
			RapidFireSpellImage1='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			RapidFireSound1=new Audio('./combat/CombatSkillSound/Darkness7.ogg');
			RapidFireforEnemy();
			
	
			}


			
		}


}
	

	

}

var LRO;
var RapidFirePlayerCd=0;
var RapidFireEnemyCd=0;
var RapidFirePlayerTurned="False";
var RapidFireEnemyTurned="False";
function RapidFireforEnemy(){
			
			RapidFireSkillUp.volume = 0.70;	
			RapidFireSkillUp.play();


			player2.append('<div id="LRO"></div>');
			LRO=$('#LRO');
			LRO.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:RapidFireSpellImage,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });


			setTimeout( ()=>{



			setTimeout(RapidFireAnimation1,400);

			},1100 );

	       




}




function RapidFireAnimation1(){
   		
   	let x=0;
   	function Repeat_1(){


   		   	let PP=$(folow2).position();
         	Combatzone.append('<div class="spell spell-'+x+'"></div> ');

         	if(x==0){
         		Rspell=$('.spell-'+x+'  ');
            Rspell.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell.css({transition:'0.5s'});
         	}if(x==1){
         		Rspell1=$('.spell-'+x+'  ');
         	Rspell1.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell1.css({transition:'0.5s'});	
         	}if(x==2){
         		Rspell2=$('.spell-'+x+'  ');
         	Rspell2.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell2.css({transition:'0.5s'});	
         	}if(x==3){
         		Rspell3=$('.spell-'+x+'  ');
         	Rspell3.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell3.css({transition:'0.5s'});	
         	}if(x==4){
         		Rspell4=$('.spell-'+x+'  ');
         	Rspell4.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell4.css({transition:'0.5s'});	
         	}if(x==5){
         		Rspell5=$('.spell-'+x+'  ');
         	Rspell5.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell5.css({transition:'0.5s'});	
         	}if(x==6){
         		Rspell6=$('.spell-'+x+'  ');
         	Rspell6.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell6.css({transition:'0.5s'});	
         	}if(x==7){
         		Rspell7=$('.spell-'+x+'  ');
         	Rspell7.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell7.css({transition:'0.5s'});	
         	}if(x==8){
         		Rspell8=$('.spell-'+x+'  ');
         	Rspell8.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell8.css({transition:'0.5s'});	
         	}if(x==9){
         		Rspell9=$('.spell-'+x+'  ');
         	Rspell9.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell9.css({transition:'0.5s'});	
         	}


var Repeat4=setTimeout( ()=>{


   			clearInterval(myZoneNowRotating1);
   			clearInterval(myZoneNowRotating3);
   			let EP=folow1.position();

   			if(x==0){
   				RapidFireSound1.play();
   				Rspell.css({left:EP.left,top:EP.top });
   			}if(x==1){
   				Rspell1.css({left:EP.left,top:EP.top });
   			}if(x==2){
   				Rspell2.css({left:EP.left,top:EP.top });
   			}if(x==3){
   				RapidFireSound1.play();
   				Rspell3.css({left:EP.left,top:EP.top });
   			}if(x==4){
   				RapidFireSound1.play();
   				Rspell4.css({left:EP.left,top:EP.top });
   			}if(x==5){
   				RapidFireSound1.play();
   				Rspell5.css({left:EP.left,top:EP.top });
   			}if(x==6){
   				RapidFireSound1.play();
   				Rspell6.css({left:EP.left,top:EP.top });
   			}if(x==7){
   				Rspell7.css({left:EP.left,top:EP.top });
   			}if(x==8){
   				Rspell8.css({left:EP.left,top:EP.top });
   			}if(x==9){
   				Rspell9.css({left:EP.left,top:EP.top });
   				RapidFireSound1.play();
   			}


   	        setTimeout( ()=>{

   	        	if(x==0){
   	        		
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==1){
   	        		Rspell.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==2){
   	        		Rspell1.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==3){
   	        		Rspell2.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==4){
   	        		Rspell3.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==5){
   	        		Rspell4.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==6){
   	        		Rspell5.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==7){
   	        		Rspell6.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==8){
   	        		Rspell7.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==9){
   	        		Rspell8.remove();
   	        	    x++;
   	        	    RapidFireSound1.play();
   	        	    setTimeout( ()=>{
   	        	    Rspell9.remove();	
   	        	    LRO.remove();

   	        	    if(CheckStopRotation1==1){
   	        			RotateMyZone1();
   	        		}else{
   	        			RotateMyZone3();
   	        		}	

   	        		RapidFireEnemyCd=130;
   	        		RapidFireEnemyTurned="True";
   	        		ForCal=3;
   	        		CalculateCombat();

   	        	    },300 );

   	        	}


   	        },200 );

   	    },30);

                   }


     Repeat_1();              

}















///player func

var RapidFireTracker;

function RapidFireforPlayer(){
			
			RapidFireSkillUp.volume = 0.70;	
			RapidFireSkillUp.play();


			player1.append('<div id="LRO"></div>');
			LRO=$('#LRO');
			LRO.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:RapidFireSpellImage,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });


			setTimeout( ()=>{



			setTimeout(RapidFireAnimation,400);

			},1100 );

	       




}




function RapidFireAnimation(){
   		
   	let x=0;
   	function Repeat_1(){


   		   	let PP=$(folow1).position();
         	Combatzone.append('<div class="spell spell-'+x+'"></div> ');

         	if(x==0){
         		Rspell=$('.spell-'+x+'  ');
            Rspell.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell.css({transition:'0.5s'});
         	}if(x==1){
         		Rspell1=$('.spell-'+x+'  ');
         	Rspell1.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell1.css({transition:'0.5s'});	
         	}if(x==2){
         		Rspell2=$('.spell-'+x+'  ');
         	Rspell2.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell2.css({transition:'0.5s'});	
         	}if(x==3){
         		Rspell3=$('.spell-'+x+'  ');
         	Rspell3.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell3.css({transition:'0.5s'});	
         	}if(x==4){
         		Rspell4=$('.spell-'+x+'  ');
         	Rspell4.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell4.css({transition:'0.5s'});	
         	}if(x==5){
         		Rspell5=$('.spell-'+x+'  ');
         	Rspell5.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell5.css({transition:'0.5s'});	
         	}if(x==6){
         		Rspell6=$('.spell-'+x+'  ');
         	Rspell6.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell6.css({transition:'0.5s'});	
         	}if(x==7){
         		Rspell7=$('.spell-'+x+'  ');
         	Rspell7.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell7.css({transition:'0.5s'});	
         	}if(x==8){
         		Rspell8=$('.spell-'+x+'  ');
         	Rspell8.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell8.css({transition:'0.5s'});	
         	}if(x==9){
         		Rspell9=$('.spell-'+x+'  ');
         	Rspell9.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:RapidFireSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        Rspell9.css({transition:'0.5s'});	
         	}


var Repeat4=setTimeout( ()=>{


   			clearInterval(myZoneNowRotating2);
   			clearInterval(myZoneNowRotating4);
   			let EP=folow2.position();

   			if(x==0){
   				RapidFireSound1.play();
   				Rspell.css({left:EP.left,top:EP.top });
   			}if(x==1){
   				Rspell1.css({left:EP.left,top:EP.top });
   			}if(x==2){
   				Rspell2.css({left:EP.left,top:EP.top });
   			}if(x==3){
   				RapidFireSound1.play();
   				Rspell3.css({left:EP.left,top:EP.top });
   			}if(x==4){
   				RapidFireSound1.play();
   				Rspell4.css({left:EP.left,top:EP.top });
   			}if(x==5){
   				RapidFireSound1.play();
   				Rspell5.css({left:EP.left,top:EP.top });
   			}if(x==6){
   				RapidFireSound1.play();
   				Rspell6.css({left:EP.left,top:EP.top });
   			}if(x==7){
   				Rspell7.css({left:EP.left,top:EP.top });
   			}if(x==8){
   				Rspell8.css({left:EP.left,top:EP.top });
   			}if(x==9){
   				Rspell9.css({left:EP.left,top:EP.top });
   				RapidFireSound1.play();
   			}


   	        setTimeout( ()=>{

   	        	if(x==0){
   	        		
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==1){
   	        		Rspell.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==2){
   	        		Rspell1.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==3){
   	        		Rspell2.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==4){
   	        		Rspell3.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==5){
   	        		Rspell4.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==6){
   	        		Rspell5.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==7){
   	        		Rspell6.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==8){
   	        		Rspell7.remove();
   	        	    x++;
   	        	    Repeat_1();	
   	        	}else if(x==9){
   	        		Rspell8.remove();
   	        	    x++;
   	        	    RapidFireSound1.play();
   	        	    setTimeout( ()=>{
   	        	    Rspell9.remove();	
   	        	    LRO.remove();

   	        	    if(CheckStopRotation3==1){
   	        			RotateMyZone2();
   	        		}else{
   	        			RotateMyZone4();
   	        		}
   	        		RapidFireTracker=TrackerButton;
   	        		RapidFirePlayerCd=130;
   	        		RapidFirePlayerTurned="True";
   	        		ForCal=3;
   	        		CalculateCombat();

   	        	    },300 );

   	        	}


   	        },200 );

   	    },30);

                   }


     Repeat_1();              

}


var RapidFirePlayerInterval;
var RapidFireEnemyInterval;

function RapidFireCd(){

	if(RapidFirePlayerTurned==="True"){
		if(RapidFirePlayerCd>0 ){

   			RapidFirePlayerInterval=setInterval( ()=>{

   				RapidFirePlayerCd+=-1;
   				$(RapidFireTracker).text(RapidFirePlayerCd);
   				if(RapidFirePlayerCd<=0){
   					clearInterval(RapidFirePlayerInterval);
   					RapidFirePlayerCd=0;
   					$(RapidFireTracker).text("Rapid Fire");
   				}
   			
   			},1000);	

   		

		}

	}if(RapidFirePlayerTurned==="False"){
		clearInterval(RapidFirePlayerInterval);
	}


	if(RapidFireEnemyTurned==="True"){
		if(RapidFireEnemyCd>0 ){

   			RapidFireEnemyInterval=setInterval( ()=>{

   				
   				RapidFireEnemyCd+=-1;
   				
   				if(RapidFireEnemyCd<=0){
   					clearInterval(RapidFireEnemyInterval);
   					RapidFireEnemyCd=0;
   					
   				}
   			
   			},1000);	

   		

		}

	}if(RapidFireEnemyTurned==="False"){
		clearInterval(RapidFireEnemyInterval);
	}


}






//clear 

function clearAllBefforeAttack(){
	clearInterval(myZoneNowRotating1);
	clearInterval(myZoneNowRotating2);
	clearInterval(myZoneNowRotating3);
	clearInterval(myZoneNowRotating4);
	setTimeout(BonusReset,100);
	function BonusReset(){
	for(let i=0;i<MoventFloorArrey.length;i++){
		$(MoventFloorArrey[i]).css({transform: 'rotateZ('+0+'deg) '});
	}	
	}
	

	
}




function UpdatingVarforDetectionandCal(){
	TrackingDetection=1;
    ForCal=1;
} 