var PlayerLongRangeSpellInterval;
var EnemyLongRangeSpellInterval;

var LongRangeSpellImage,LongRangeSpellImage10,LongRangeSpellImage11,LongRangeSpellImage12,LongRangeSpellImage13,LongRangeSpellImage14,LongRangeSpellImage15,LongRangeSpellImage16,LongRangeSpellImage17;
var LongRangeSpellImage1;
var LongRangeSpellImage2;
var LongRangeSpellImage3;
var LSRTrackerCd;

var LongRangeSpellSound1;
var LongRangeSpellSound2;
var LongRangeSpellSound3;
var LongRangeSpellSound4;

function LongRangeSpell(){



	if(turn==5){

		
		if(PlayerBeyblade.Type==AllTypeArrey[0]){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/fire1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/fire2.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/fire3.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/fire4.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/fire5.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/fire6.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/fire7.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/fire8.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/fire9.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Fire1.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Fire9.ogg');
			LongRangeSpellforPlayer();	

		}if(PlayerBeyblade.Type==AllTypeArrey[1]){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/wind2.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/wind3.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/wind4.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/wind5.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/wind6.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/wind7.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/wind8.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/wind9.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Wind1.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Wind8.ogg');
			LongRangeSpellforPlayer();	

		}if(PlayerBeyblade.Type==AllTypeArrey[2]){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/ice.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/ice1.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/ice2.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/ice3.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/ice4.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/ice5.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/ice6.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/ice7.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/ice8.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Ice2.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Ice11.ogg');
			LongRangeSpellforPlayer();	
	
		}if(PlayerBeyblade.Type==AllTypeArrey[3]){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/water.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/water1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/water2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/water3.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/water4.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/water5.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/water6.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/water7.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Water1.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Water5.ogg');
			LongRangeSpellforPlayer();
	
		}if(PlayerBeyblade.Type==AllTypeArrey[4]){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/rook.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/rook2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/rook2.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/rook3.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/rook4.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/rook5.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/rook6.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Earth5.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Earth8.ogg');
			LongRangeSpellforPlayer();
	
		}if(PlayerBeyblade.Type==AllTypeArrey[5]){
			LongRangeSpellImage='url(./combat/SkillsImg/LongRangeSkills/dark8.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/dark1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/dark2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/dark3.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/dark4.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/dark5.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/dark6.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/dark7.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Darkness7.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Darkness1.ogg');
			LongRangeSpellforPlayer();
	
		}if(PlayerBeyblade.Type==AllTypeArrey[6]){
			let r200=Math.floor(Math.random()*5 );
			if(r200==0){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/fire1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/fire2.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/fire3.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/fire4.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/fire5.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/fire6.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/fire7.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/fire8.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/fire9.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Fire1.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Fire9.ogg');
			LongRangeSpellforPlayer();	
			

			}if(r200==1){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/wind2.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/wind3.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/wind4.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/wind5.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/wind6.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/wind7.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/wind8.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/wind9.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Wind1.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Wind8.ogg');
			LongRangeSpellforPlayer();	
	
			}if(r200==2){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/ice.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/ice1.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/ice2.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/ice3.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/ice4.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/ice5.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/ice6.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/ice7.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/ice8.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Ice2.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Ice11.ogg');
			LongRangeSpellforPlayer();	
			
	
			}if(r200==3){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/water.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/water1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/water2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/water3.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/water4.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/water5.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/water6.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/water7.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Water1.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Water5.ogg');
			LongRangeSpellforPlayer();
			
	
			}if(r200==4){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/rook.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/rook2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/rook2.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/rook3.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/rook4.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/rook5.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/rook6.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Earth5.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Earth8.ogg');
			LongRangeSpellforPlayer();

			}if(r200==5){
			LongRangeSpellImage='url(./combat/SkillsImg/LongRangeSkills/dark8.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/dark1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/dark2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/dark3.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/dark4.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/dark5.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/dark6.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/dark7.png)';
			LongRangeSpellSound1=new Audio('./combat/CombatSkillSound/Darkness7.ogg');
			LongRangeSpellSound2=new Audio('./combat/CombatSkillSound/Darkness1.ogg');
			LongRangeSpellforPlayer();

	
			}


			
		}


		
		//end player

	}if(turn==6){

		if(EnemyArrey[0].Type==AllTypeArrey[0]){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/fire1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/fire2.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/fire3.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/fire4.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/fire5.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/fire6.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/fire7.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/fire8.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/fire9.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Fire1.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Fire9.ogg');
			LongRangeSpellforEnemy();
			

		}if(EnemyArrey[0].Type==AllTypeArrey[1]){
			LongRangeSpellImage2='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			LongRangeSpellImage3='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/wind2.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/wind3.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/wind4.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/wind5.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/wind6.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/wind7.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/wind8.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/wind9.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Wind1.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Wind8.ogg');
			LongRangeSpellforEnemy();	

		}if(EnemyArrey[0].Type==AllTypeArrey[2]){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/ice.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/ice1.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/ice2.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/ice3.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/ice4.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/ice5.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/ice6.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/ice7.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/ice8.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Ice2.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Ice11.ogg');
			LongRangeSpellforEnemy();
			
	
		}if(EnemyArrey[0].Type==AllTypeArrey[3]){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/water.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/water1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/water2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/water3.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/water4.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/water5.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/water6.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/water7.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Water1.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Water5.ogg');
			LongRangeSpellforEnemy();
			
	
		}if(EnemyArrey[0].Type==AllTypeArrey[4]){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/rook.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/rook2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/rook2.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/rook3.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/rook4.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/rook5.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/rook6.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Earth5.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Earth8.ogg');
			LongRangeSpellforEnemy();
			
	
		}if(EnemyArrey[0].Type==AllTypeArrey[5]){
			LongRangeSpellImage='url(./combat/SkillsImg/LongRangeSkills/dark8.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/dark1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/dark2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/dark3.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/dark4.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/dark5.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/dark6.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/dark7.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Darkness7.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Darkness1.ogg');
			LongRangeSpellforEnemy();
			
	
		}if(EnemyArrey[0].Typee==AllTypeArrey[6]){
			let r200=Math.floor(Math.random()*5 );
			if(r200==0){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/fire.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/fire1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/fire2.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/fire3.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/fire4.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/fire5.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/fire6.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/fire7.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/fire8.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/fire9.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Fire1.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Fire9.ogg');
			LongRangeSpellforEnemy();
			

			}if(r200==1){
			LongRangeSpellImage2='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			LongRangeSpellImage3='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/wind.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/PoisonAttack/wind1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/wind2.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/wind3.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/wind4.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/wind5.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/wind6.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/wind7.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/wind8.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/wind9.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Wind1.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Wind8.ogg');
			LongRangeSpellforEnemy();
			
	
			}if(r200==2){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/ice.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/ice.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/ice1.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/ice2.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/ice3.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/ice4.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/ice5.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/ice6.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/ice7.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/ice8.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Ice2.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Ice11.ogg');
			LongRangeSpellforEnemy();
			
	
			}if(r200==3){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/water.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/water.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/water1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/water2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/water3.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/water4.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/water5.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/water6.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/water7.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Water1.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Water5.ogg');
			LongRangeSpellforEnemy();	
			
	
			}if(r200==4){
			LongRangeSpellImage='url(./combat/SkillsImg/PoisonAttack/rook.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/rook.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/rook1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/rook2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/rook2.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/rook3.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/rook4.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/rook5.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/rook6.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Earth5.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Earth8.ogg');
			LongRangeSpellforEnemy();	
			

			}if(r200==5){
			LongRangeSpellImage='url(./combat/SkillsImg/LongRangeSkills/dark8.png)';
			LongRangeSpellImage1='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			LongRangeSpellImage10='url(./combat/SkillsImg/LongRangeSkills/dark.png)';
			LongRangeSpellImage11='url(./combat/SkillsImg/LongRangeSkills/dark1.png)';
			LongRangeSpellImage12='url(./combat/SkillsImg/LongRangeSkills/dark2.png)';
			LongRangeSpellImage13='url(./combat/SkillsImg/LongRangeSkills/dark3.png)';
			LongRangeSpellImage14='url(./combat/SkillsImg/LongRangeSkills/dark4.png)';
			LongRangeSpellImage15='url(./combat/SkillsImg/LongRangeSkills/dark5.png)';
			LongRangeSpellImage16='url(./combat/SkillsImg/LongRangeSkills/dark6.png)';
			LongRangeSpellImage17='url(./combat/SkillsImg/LongRangeSkills/dark7.png)';
			LongRangeSpellSound3=new Audio('./combat/CombatSkillSound/Darkness7.ogg');
			LongRangeSpellSound4=new Audio('./combat/CombatSkillSound/Darkness1.ogg');
			LongRangeSpellforEnemy();
			
	
			}


			
		}
}
	



}



var LSRP;

var SpellExplosion;
var EnemyLongRangeSpellTurned="False";
var EnemyLongRangeSpellCd=0;

var PlayerLongRangeSpellTurned="False";
var PlayerLongRangeSpellCd=0;
var SpellExplosion;

function LongRangeSpellforEnemy(){
			
			player2.append('<div id="LRSP"></div>');
			LSRP=$('#LRSP');
			LSRP.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
			setTimeout(LongRangeSpellAnimation01,400);
		
}

	


function LongRangeSpellAnimation01(){ 		
   	let x=0;
   	function Repeat(){
   		   	let PP=$(folow2).position();
         	Combatzone.append('<div class="spell"></div> ');
   	        let spell=$('.spell');
   	        spell.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:LongRangeSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        spell.css({transition:'0.5s'});
   	var Repeat1=setTimeout( ()=>{
   			clearInterval(myZoneNowRotating1);
   			clearInterval(myZoneNowRotating3);
   			let SP=spell.position();
   			let EP=folow1.position();
   	        spell.css({left:EP.left,top:EP.top });

   	        if(x==0){
   	        	LongRangeSpellSound3.play();
   	        }if(x==1){
   	        	LongRangeSpellSound3.play();
   	        }if(x==2){
   	        	LongRangeSpellSound3.play();
   	        }

   	        setTimeout( ()=>{
   	        	
   	        	
   	        	if(x==2){
   	        	x++;
   	        	$(spell).remove();
   	        	SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage12,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })	
   	        	
   	        	setTimeout( ()=>{
   	        		SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage13,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })
   	        		LongRangeSpellSound4.play();
   	        	setTimeout( ()=>{

   	        		SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage14,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })

   	        	setTimeout( ()=>{

   	        		SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage15,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })

   	        	setTimeout( ()=>{

   	        		SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage16,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })

   	        	setTimeout( ()=>{

   	        		SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage17,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })

   	        	setTimeout( ()=>{
   	        		
   	        		if(CheckStopRotation1==1){
   	        			RotateMyZone1();
   	        		}else{
   	        			RotateMyZone3();
   	        		}	

   	        		
   	        		SpellExplosion.remove();
   	        		LSRP.remove();
   	        		EnemyLongRangeSpellTurned="True";	
   	        		EnemyLongRangeSpellCd=130;
   	        		ForCal=2;
   	        		CalculateCombat();
   	        	},200 );	
   	        			
   	        	},200 );	

   	        	},200 );	

   	        	},200 );	


   	        	},200 );	

   	        	},300 );

   	        	}
   	        		

   	        	if(x==1){
   	        		$(spell).remove();
   	        		SpellExplosion.css({left:'0px',top:'0px' , width:'100px',position:'absolute',height:'100px',background:LongRangeSpellImage11,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })
   	        		x++;
   	        	    setTimeout(Repeat,300);
   	        	}if(x==0){
   	        		$(spell).remove();
   	        		player1.append('<div id="SpellExplosion"></div>   ');
   	        		SpellExplosion=$('#SpellExplosion');
   	        		SpellExplosion.css({left:'0px',top:'0px' , width:'100px',position:'absolute',height:'100px',background:LongRangeSpellImage10,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })
   	        		 x++;
   	        	    setTimeout(Repeat,300);
   	        	   	
   	        	}

   	        	
   	        },550 )	
   	        

   	},400 )

   
}

 Repeat();  

   }


//////////////////////Down going player


function LongRangeSpellforPlayer(){
			
			player1.append('<div id="LRSP"></div>');
			LSRP=$('#LRSP');
			LSRP.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });

			setTimeout(LongRangeSpellAnimation,400);

			

}

	
function LongRangeSpellAnimation(){
   		
   	let x=0;
   
   	function Repeat(){


   		   	let PP=$(folow1).position();
         	Combatzone.append('<div class="spell"></div> ');
   	        let spell=$('.spell');
   	        spell.css({width:'100px',height:'100px',left:PP.left-25,top:PP.top,position:'absolute',background:LongRangeSpellImage1,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  });
   	        spell.css({transition:'0.5s'});
   			if(x==0){
   	        	LongRangeSpellSound1.play();
   	        }if(x==1){
   	        	LongRangeSpellSound1.play();
   	        }if(x==2){
   	        	LongRangeSpellSound1.play();
   	        }


   	var Repeat1=setTimeout( ()=>{
   			clearInterval(myZoneNowRotating2);
   			clearInterval(myZoneNowRotating4);
   			let SP=spell.position();
   			let EP=folow2.position();
   	        spell.css({left:EP.left,top:EP.top });

   	        setTimeout( ()=>{
   	        	
   	        	
   	        	if(x==2){
   	        	x++;
   	        	$(spell).remove();
   	        	SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage12,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })	
   	        	
   	        	setTimeout( ()=>{
   	        		SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage13,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })
   	        		LongRangeSpellSound2.play();
   	        	setTimeout( ()=>{

   	        		SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage14,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })

   	        	setTimeout( ()=>{

   	        		SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage15,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })

   	        	setTimeout( ()=>{

   	        		SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage16,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })

   	        	setTimeout( ()=>{

   	        		SpellExplosion.css({left:'-40px',top:'-40px' , width:'175px',position:'absolute',height:'175px',background:LongRangeSpellImage17,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })

   	        	setTimeout( ()=>{
   	        		
   	        		if(CheckStopRotation3==1){
   	        			RotateMyZone2();
   	        		}else{
   	        			RotateMyZone4();
   	        		}	

   	        		
   	        		SpellExplosion.remove();
   	        		LSRP.remove();
   	        		PlayerLongRangeSpellTurned="True";	
   	        		PlayerLongRangeSpellCd=130;
   	        		ForCal=2;
   	        		LSRTrackerCd=TrackerButton;
   	        		
   	        		CalculateCombat();
   	        	},200 );	
   	        			
   	        	},200 );	

   	        	},200 );	

   	        	},200 );	


   	        	},200 );	

   	        	},300 );

   	        	}
   	        		

   	        	if(x==1){
   	        		$(spell).remove();
   	        		SpellExplosion.css({left:'0px',top:'0px' , width:'100px',position:'absolute',height:'100px',background:LongRangeSpellImage11,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })
   	        		x++;
   	        	    setTimeout(Repeat,300);
   	        	}if(x==0){
   	        		$(spell).remove();
   	        		player2.append('<div id="SpellExplosion"></div>   ');
   	        		SpellExplosion=$('#SpellExplosion');
   	        		SpellExplosion.css({left:'0px',top:'0px' , width:'100px',position:'absolute',height:'100px',background:LongRangeSpellImage10,backgroundPosition:'center',backgroundSize:'cover',backgroundRepeat:'no-repeat'  })
   	        		 x++;
   	        	    setTimeout(Repeat,300);
   	        	   	
   	        	}

   	        	
   	        },550 )	
   	        

   	},400 )

   
}

 Repeat();  

   }





var PlayerLongRangeSpellInterval;
var EnemyLongRangeSpellInterval;

function LongRangeSpellCd(){

   	if(PlayerLongRangeSpellTurned=="True"){

   		if(PlayerLongRangeSpellCd>0){
   			PlayerLongRangeSpellInterval=setInterval( ()=>{

   				PlayerLongRangeSpellCd+=-1;
   				$(LSRTrackerCd).text(PlayerLongRangeSpellCd);
   				if(PlayerLongRangeSpellCd<=0){
   					clearInterval(PlayerLongRangeSpellInterval);
   					PlayerLongRangeSpellCd=0;
   					$(LSRTrackerCd).text("LRS");
   				}
   			
   			},1000);	

   		}

   	

   	}if(PlayerLongRangeSpellTurned=="False"){
   		clearInterval(PlayerLongRangeSpellInterval);
   		
   	}




   	if(EnemyLongRangeSpellTurned=="True"){
   		

   		if(EnemyLongRangeSpellCd>0){

   			EnemyLongRangeSpellInterval=setInterval( ()=>{
   				
   				EnemyLongRangeSpellCd+=-1;

   				if(EnemyLongRangeSpellCd<=0){
   					clearInterval(EnemyLongRangeSpellInterval);
   					EnemyLongRangeSpellCd=0;
   				}
   			
   			},1000);	

   		}

   	

   		

   	}if(EnemyLongRangeSpellTurned=="False"){
   			
   		clearInterval(EnemyLongRangeSpellInterval);
   	}     		




}









