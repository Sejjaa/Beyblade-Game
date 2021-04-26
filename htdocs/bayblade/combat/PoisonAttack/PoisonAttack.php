var PlayerPoisonCd=0;
var PlayerPoisonTurned;
var TrackerPlayerPoisonDmgOverTime;
var TrackerEnemyPoisonDmgOverTime;
var EnemyPoison;
var PoisonAnimation01;
var EnemyPoisonCd;
var EnemyPoisonTurned;
var PoisonAnimation00;
var PoisonCal=0;
var EnemyPoisonCd=0;

var PlayerPoison;
var EnemyPoison;
var PlayerMagicAttack;
var EnemyMagicAttack;

var PoisonImage;
var PoisonImage1;
var PoisonImage2;
var PoisonImage3;

var TrackerPoisonCd;

var PoisonAttackSound1;
var PoisonAttackSound2;
function PoisonAttack(){
var AllTypeArrey=['Fire','Grass','Winer','Wather','Rook','Darknes','Wild'];


	console.log('dadadada888888')

	if(turn==5){

		
		if(PlayerBeyblade.Type==AllTypeArrey[0]){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/fire1.png)';
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Fire2.ogg');
			functionPoisonforPlayer();

		}if(PlayerBeyblade.Type==AllTypeArrey[1]){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Wind6.ogg');
			functionPoisonforPlayer();

		}if(PlayerBeyblade.Type==AllTypeArrey[2]){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/ice1.png)';
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Ice3.ogg');
			functionPoisonforPlayer();
	
		}if(PlayerBeyblade.Type==AllTypeArrey[3]){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/water.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/water1.png)';
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Water4.ogg');
			functionPoisonforPlayer();
	
		}if(PlayerBeyblade.Type==AllTypeArrey[4]){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/rook1.png)';
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Earth2.ogg');
			functionPoisonforPlayer();
	
		}if(PlayerBeyblade.Type==AllTypeArrey[5]){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/darkness.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/darkness1.png)';
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Darkness6.ogg');
			functionPoisonforPlayer();
	
		}if(PlayerBeyblade.Type==AllTypeArrey[6]){
			let r200=Math.floor(Math.random()*5 );
			if(r200==0){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/fire1.png)';
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Fire2.ogg');
			functionPoisonforPlayer();

			}if(r200==1){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Wind6.ogg');
			functionPoisonforPlayer();
	
			}if(r200==2){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/ice1.png)';
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Ice3.ogg');
			functionPoisonforPlayer();
	
			}if(r200==3){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/water.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/water1.png)';	
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Water4.ogg');
			functionPoisonforPlayer();
	
			}if(r200==4){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/rook1.png)';
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Earth2.ogg');	
			functionPoisonforPlayer();

			}if(r200==5){
			PoisonImage='url(./combat/SkillsImg/PoisonAttack/darkness.png)';
			PoisonImage1='url(./combat/SkillsImg/PoisonAttack/darkness1.png)';
			PoisonAttackSound1=new Audio('./combat/CombatSkillSound/Darkness6.ogg');
			functionPoisonforPlayer();
	
			}


			
		}


		
		//end player

	}if(turn==6){

		

		if(EnemyArrey[0].Type==AllTypeArrey[0]){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/fire1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Fire2.ogg');
			functionPoisonforEnemy();

		}if(EnemyArrey[0].Type==AllTypeArrey[1]){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Wind6.ogg');
			functionPoisonforEnemy();

		}if(EnemyArrey[0].Type==AllTypeArrey[2]){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/ice1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Ice3.ogg');
			functionPoisonforEnemy();
	
		}if(EnemyArrey[0].Type==AllTypeArrey[3]){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/water.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/water1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Water4.ogg');
			functionPoisonforEnemy();
	
		}if(EnemyArrey[0].Type==AllTypeArrey[4]){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/rook1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Earth2.ogg');
			functionPoisonforEnemy();
	
		}if(EnemyArrey[0].Type==AllTypeArrey[5]){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/darkness.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/darkness1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Darkness6.ogg');
			functionPoisonforEnemy();
	
		}if(EnemyArrey[0].Typee==AllTypeArrey[6]){
			let r200=Math.floor(Math.random()*5 );
			if(r200==0){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/fire1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Fire2.ogg');
			functionPoisonforEnemy();

			}if(r200==1){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Wind6.ogg');
			functionPoisonforEnemy();
	
			}if(r200==2){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/ice1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Ice3.ogg');
			functionPoisonforEnemy();
	
			}if(r200==3){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/water.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/water1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Water4.ogg');	
			functionPoisonforEnemy();
	
			}if(r200==4){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/rook1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Earth2.ogg');	
			functionPoisonforEnemy();

			}if(r200==5){
			PoisonImage3='url(./combat/SkillsImg/PoisonAttack/darkness.png)';
			PoisonImage4='url(./combat/SkillsImg/PoisonAttack/darkness1.png)';
			PoisonAttackSound2=new Audio('./combat/CombatSkillSound/Darkness6.ogg');
			functionPoisonforEnemy();
	
			}


			
		}

	}///end comp

	function functionPoisonforPlayer(){
		player1.append('<div id="PlayerPoison"></div>    ');	
		PlayerPoison=$('#PlayerPoison');
		PlayerPoison.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:PoisonImage,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
		PoisonAnimation00="ON";
		PlayerPoisonCd=90;
		TrackerPoisonCd=TrackerButton;
		PlayerPoisonTurned="ON";
		NormalAttack();
		
	}

	///Comp enemy

		function functionPoisonforEnemy(){
		player2.append('<div id="EnemyPoison"></div>    ');	
		EnemyPoison=$('#EnemyPoison');
		EnemyPoison.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:PoisonImage3,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
		PoisonAnimation01="ON";
		EnemyPoisonCd=90;
		EnemyPoisonTurned="ON";
		NormalAttack();
		
	}
		
}	

function PoisonDmgOverTime(){

		if(EnemyPoisonTurned=="ON"){
		 TrackerEnemyPoisonDmgOverTime=setInterval( ()=>{


			EnemyPoisonCd+=-1;
			if(EnemyPoisonCd==65){
		        player1.append('<div id="EnemyPoison"></div>    ');	
		        EnemyPoison=$('#EnemyPoison');
		        EnemyPoison.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:PoisonImage4,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
		        PoisonAttackSound2.play();
		        setTimeout( ()=>{
		        	ForCal=31;
		        	CalculateCombat();
		        },1200 );

			}if(EnemyPoisonCd==35){
				player1.append('<div id="EnemyPoison"></div>    ');	
		        EnemyPoison=$('#EnemyPoison');
		        EnemyPoison.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:PoisonImage4,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
		        PoisonAttackSound2.play();
		        setTimeout( ()=>{
		        	ForCal=31;
		        	CalculateCombat();
		        	
		        },1200 );	


			}if(EnemyPoisonCd==5){
				player1.append('<div id="PlayerPoison"></div>    ');	
		        EnemyPoison=$('#EnemyPoison');
		        EnemyPoison.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:PoisonImage4,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
		        PoisonAttackSound2.play();
		        setTimeout( ()=>{
		        	ForCal=31;
		        	CalculateCombat();
		        },1200 );
			}

			if(EnemyPoisonCd<=0){
				EnemyPoisonCd=0;
				clearInterval(TrackerEnemyPoisonDmgOverTime);
			}

		
		},1000 );

	}else{
		clearInterval(TrackerEnemyPoisonDmgOverTime);

	}


////DOwn starting player

	if(PlayerPoisonTurned=="ON"){
		 TrackerPlayerPoisonDmgOverTime=setInterval( ()=>{
			if(PlayerPoisonCd>0){
				$(TrackerPoisonCd).text(PlayerPoisonCd);
			}
			PlayerPoisonCd+=-1;
			if(PlayerPoisonCd==65){
		        player2.append('<div id="PlayerPoison"></div>    ');	
		        PlayerPoison=$('#PlayerPoison');
		        PlayerPoison.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:PoisonImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
		        PoisonAttackSound1.play();
		        setTimeout( ()=>{
		        	ForCal=30;
		        	CalculateCombat();
		        },1200 );

			}if(PlayerPoisonCd==35){
				player2.append('<div id="PlayerPoison"></div>    ');	
		        PlayerPoison=$('#PlayerPoison');
		        PlayerPoison.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:PoisonImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
		        PoisonAttackSound1.play();
		        setTimeout( ()=>{
		        	ForCal=30;
		        	CalculateCombat();
		        	
		        },1200 );	


			}if(PlayerPoisonCd==5){
				player2.append('<div id="PlayerPoison"></div>    ');	
		        PlayerPoison=$('#PlayerPoison');
		        PlayerPoison.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:PoisonImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
		        PoisonAttackSound1.play();
		        setTimeout( ()=>{
		        	PlayerPoisonCd=0;
		        	$(TrackerPoisonCd).text("Poison");
		        	ForCal=30;
		        	CalculateCombat();
		        },1200 );
			}

			if(PlayerPoisonCd<=0){
				PlayerPoisonCd=0;
				clearInterval(TrackerPlayerPoisonDmgOverTime);
			}

		
		},1000 );

	}else{
		clearInterval(TrackerPlayerPoisonDmgOverTime);

	}

}


