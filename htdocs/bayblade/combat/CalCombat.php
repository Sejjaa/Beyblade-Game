var LevelsArrey=[400,600,800,1000,1200,1400,1600,1800,2200,2500,3000,3400,3800,4400  ];
var PlayerHealt;
var BothHealt;
var CompHealt;
var LevelUp;
var CompDefence;
var PlayerDefence;
var oldAttack;
var oldHealt;
var oldDefence;
var oldMagicPower;
var oldLevel;


var BothAttack;
var BothFolow;
var BothMagicAttack;
var TrackingNextLevel;
var TrackingLevel;

var LuckyNumber=[];
var RewardLuck=0;

var SkillBox;
var NewSkill;

var Gold;

var Strong=1;
var Normal=2;
var Weak=3;
var TrackerChangerMap;
var WhoisStronger;
////What type is stronger
var AllTypeArrey=['Fire','Grass','Winter','Wather','Rook','Darknes','Wild'];

function WhatTypeisStronger(){

	if(PlayerBeyblade.Type == AllTypeArrey[0]){
		
		if( EnemyArrey[0].Type == AllTypeArrey[0] ){
			WhoisStronger=2;
			TrackerChangerMap=MapTypeUrlArrey[0];

		}if( EnemyArrey[0].Type == AllTypeArrey[1] ){
			WhoisStronger=1;
			TrackerChangerMap=MapTypeUrlArrey[0];

		}if( EnemyArrey[0].Type == AllTypeArrey[2] ){
			WhoisStronger=3;
			TrackerChangerMap=MapTypeUrlArrey[2];
		
		}if( EnemyArrey[0].Type == AllTypeArrey[3] ){
			WhoisStronger=3;
			TrackerChangerMap=MapTypeUrlArrey[3];

		}if( EnemyArrey[0].Type == AllTypeArrey[4] ){
			WhoisStronger=2;
			
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[0];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[4];
			}
 
		}if( EnemyArrey[0].Type == AllTypeArrey[5] ){
			WhoisStronger=1;
			TrackerChangerMap=MapTypeUrlArrey[0];

		}if( EnemyArrey[0].Type == AllTypeArrey[6] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[0];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[6];
			}
		}					




	}if(PlayerBeyblade.Type == AllTypeArrey[1]){
		
		if( EnemyArrey[0].Type == AllTypeArrey[0] ){
			WhoisStronger=3;
			TrackerChangerMap=MapTypeUrlArrey[0];

		}if( EnemyArrey[0].Type == AllTypeArrey[1] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[1];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[1];
			}
			
		}if( EnemyArrey[0].Type == AllTypeArrey[2] ){
			WhoisStronger=3;
			TrackerChangerMap=MapTypeUrlArrey[2];

		}if( EnemyArrey[0].Type == AllTypeArrey[3] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[1];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[3];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[4] ){
			WhoisStronger=1;
			TrackerChangerMap=MapTypeUrlArrey[1];

		}if( EnemyArrey[0].Type == AllTypeArrey[5] ){
			WhoisStronger=3;
			TrackerChangerMap=MapTypeUrlArrey[5];

		}if( EnemyArrey[0].Type == AllTypeArrey[6] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[1];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[6];
			}
		}	


	}if(PlayerBeyblade.Type == AllTypeArrey[2]){
		
		if( EnemyArrey[0].Type == AllTypeArrey[0] ){
			WhoisStronger=1;

			TrackerChangerMap=MapTypeUrlArrey[2];


		}if( EnemyArrey[0].Type == AllTypeArrey[1] ){
			WhoisStronger=1;
			TrackerChangerMap=MapTypeUrlArrey[2];

		}if( EnemyArrey[0].Type == AllTypeArrey[2] ){
			WhoisStronger=2;
			TrackerChangerMap=MapTypeUrlArrey[2];


		}if( EnemyArrey[0].Type == AllTypeArrey[3] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[3];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[2];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[4] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[2];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[4];
			}

		}if( EnemyArrey[0].Type == AllTypeArrey[5] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[2];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[5];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[6] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[2];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[6];
			}
		}


		


	}if(PlayerBeyblade.Type == AllTypeArrey[3]){
		
		if( EnemyArrey[0].Type == AllTypeArrey[0] ){
			WhoisStronger=1;
			TrackerChangerMap=MapTypeUrlArrey[3];


		}if( EnemyArrey[0].Type == AllTypeArrey[1] ){
			WhoisStronger=1;
			TrackerChangerMap=MapTypeUrlArrey[3];
		
		}if( EnemyArrey[0].Type == AllTypeArrey[2] ){
			WhoisStronger=3;
			TrackerChangerMap=MapTypeUrlArrey[2];

		}if( EnemyArrey[0].Type == AllTypeArrey[3] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[3];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[3];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[4] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[3];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[4];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[5] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[3];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[5];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[6] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[3];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[6];
			}
		}



	}if(PlayerBeyblade.Type == AllTypeArrey[4]){
		
		if( EnemyArrey[0].Type == AllTypeArrey[0] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[4];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[0];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[1] ){
			WhoisStronger=3;
			TrackerChangerMap=MapTypeUrlArrey[1];

		}if( EnemyArrey[0].Type == AllTypeArrey[2] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[4];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[2];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[3] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[4];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[3];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[4] ){
			WhoisStronger=2;
			TrackerChangerMap=MapTypeUrlArrey[4];

		}if( EnemyArrey[0].Type == AllTypeArrey[5] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[4];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[5];
			}

		}if( EnemyArrey[0].Type == AllTypeArrey[6] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[4];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[6];
			}
		}


	}if(PlayerBeyblade.Type == AllTypeArrey[5]){
		
		if( EnemyArrey[0].Type == AllTypeArrey[0] ){
			WhoisStronger=3;
			TrackerChangerMap=MapTypeUrlArrey[0];

		}if( EnemyArrey[0].Type == AllTypeArrey[1] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[5];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[1];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[2] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[5];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[2];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[3] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[5];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[3];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[4] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[5];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[4];
			}
		
		}if( EnemyArrey[0].Type == AllTypeArrey[5] ){
			WhoisStronger=2;
			TrackerChangerMap=MapTypeUrlArrey[5];

		}if( EnemyArrey[0].Type == AllTypeArrey[6] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[5];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[6];
			}
		}

	}if(PlayerBeyblade.Type == AllTypeArrey[6]){
		
		if( EnemyArrey[0].Type == AllTypeArrey[0] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[6];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[0];
			}

		}if( EnemyArrey[0].Type == AllTypeArrey[1] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[6];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[1];
			}
		}if( EnemyArrey[0].Type == AllTypeArrey[2] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[6];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[2];
			}
		}if( EnemyArrey[0].Type == AllTypeArrey[3] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[6];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[3];
			}

		}if( EnemyArrey[0].Type == AllTypeArrey[4] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[6];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[4];
			}

		}if( EnemyArrey[0].Type == AllTypeArrey[5] ){
			WhoisStronger=2;
			let r100=Math.floor(Math.random()*1 );
			if(r100==0){
				TrackerChangerMap=MapTypeUrlArrey[6];
			}else{
				TrackerChangerMap=MapTypeUrlArrey[5];
			}

		}if( EnemyArrey[0].Type == AllTypeArrey[6] ){
			WhoisStronger=3;
			TrackerChangerMap=MapTypeUrlArrey[6];
		}

	}

	funChangerMap();

}

	function funChangerMap(){
		Combatzone.css({ background:TrackerChangerMap,backgroundSize:'cover',backgroundRepeat:'no-repeat',backgroundPosition:'center' });
		

	}

///Calculationg combat

function CalculateCombat(){
	RewardLuck=0;
	BothAttack=0;
    BothFolow=0;
    BothMagicAttack=0;
	LuckyNumber=[];
	SkillBox=0;
	NewSkill=0;
	Gold=0;
///for Leveling
	LevelUp=false;
	for(let i=0;i<50;i++){
		if(PlayerBeyblade.Level==i){
			TrackingLevel=PlayerBeyblade.Level;
			TrackingLevel+= -1;
			TrackingNextLevel=i-1;
			
		}
	}




///Combat start Here



	var BonusTypeAttack;
///PLayer attack enemy
        if(turn==5 || turn==10 || ForCal==30){
		var PlayerResultAttack;	
		var PlayerResultMagic;
        	if(WhoisStronger==Strong){
        		BonusTypeAttack=1.25;
        		PlayerResultAttack=PlayerBeyblade.Attack*BonusTypeAttack;
        		PlayerResultMagic=PlayerBeyblade.MagicPower*BonusTypeAttack;	
        	}if(WhoisStronger==Normal){
        		BonusTypeAttack=1;
        		PlayerResultAttack=PlayerBeyblade.Attack*BonusTypeAttack;
        		PlayerResultMagic=PlayerBeyblade.MagicPower*BonusTypeAttack;
        	}if(WhoisStronger==Weak){
        		BonusTypeAttack=1.5;
        		PlayerResultAttack=PlayerBeyblade.Attack/BonusTypeAttack;
        		PlayerResultMagic=PlayerBeyblade.MagicPower/BonusTypeAttack;
        	}

        	BothFolow=folow2;
			if(ForCal==1){
			BothAttack=PlayerResultAttack;
            	
			BothHealt=EnemyArrey[0].Defence+EnemyArrey[0].Healt-PlayerResultAttack;
			let RH=BothHealt.toFixed();   	
        	EnemyArrey[0].Healt=parseInt(RH);
        	EnemyHealt.text(''+EnemyArrey[0].Name+' : '+RH+' ' );
			DisplayDmg();

			

			}if(ForCal==2){///Long Range Speell

			for(let i=0;i<3;i++){
				PlayerMagicAttack=PlayerResultMagic/3; 
				EnemyArrey[0].Healt+=EnemyArrey[0].Defence;      	
		        BothHealt=EnemyArrey[0].Healt-PlayerMagicAttack;
		        let RH=BothHealt.toFixed();   	
                EnemyArrey[0].Healt=parseInt(RH);
                EnemyHealt.text(''+EnemyArrey[0].Name+' : '+RH+' ' );
		      	BothMagicAttack+=PlayerMagicAttack;
		      	
				}
			
			    PlayerMagicAttack=PlayerResultMagic/1.75;  
			    EnemyArrey[0].Healt+=EnemyArrey[0].Defence;       	
		        BothHealt=EnemyArrey[0].Healt-PlayerMagicAttack;
		        let RH=BothHealt.toFixed();   	
                EnemyArrey[0].Healt=parseInt(RH);
                EnemyHealt.text(''+EnemyArrey[0].Name+' : '+RH+' ' );
                BothMagicAttack+=PlayerMagicAttack;	
                DisplayDmg1();
                
                setTimeout(RelisingBeybladefromDifrentOption,3200);
			}if(ForCal==30){//POison Attack
				PlayerMagicAttack=PlayerResultMagic/3;       	
		        BothHealt=EnemyArrey[0].Healt-PlayerMagicAttack;
		        let RH=BothHealt.toFixed();   	
                EnemyArrey[0].Healt=parseInt(RH);
                EnemyHealt.text(''+EnemyArrey[0].Name+' : '+RH+' ' );
		        PlayerPoison.remove();
		        BothMagicAttack=PlayerMagicAttack;
		        DisplayDmg1();
			}if(ForCal==3){

				for(let i=0;i<10;i++){
					PlayerMagicAttack=PlayerResultMagic/6; 
					EnemyArrey[0].Healt+=EnemyArrey[0].Defence;        	
		            BothHealt=EnemyArrey[0].Healt-PlayerMagicAttack;
		            let RH=BothHealt.toFixed();   	
                    EnemyArrey[0].Healt=parseInt(RH);
                    EnemyHealt.text(''+EnemyArrey[0].Name+' : '+RH+' ' );
		      	    BothMagicAttack+=PlayerMagicAttack;


				}

				DisplayDmg1();
				setTimeout(RelisingBeybladefromDifrentOption,3200);
			}
        	
        
   HealtAnimationforEnemy();


///Enemy Attack PLayer 

		}if(turn==6 || turn==11 || ForCal==31){
			var EnemyResultAttack;
			var EnemyResultMagic;
		    if(WhoisStronger==Strong){
		    	BonusTypeAttack=1.5;
        		EnemyResultAttack=EnemyArrey[0].Attack/BonusTypeAttack;
        		EnemyResultMagic=EnemyArrey[0].MagicPower/BonusTypeAttack;
        	}if(WhoisStronger==Normal){
        		BonusTypeAttack=1;
        		EnemyResultAttack=EnemyArrey[0].Attack*BonusTypeAttack;
        		EnemyResultMagic=EnemyArrey[0].MagicPower*BonusTypeAttack;
        	}if(WhoisStronger==Weak){
        		BonusTypeAttack=1.25;
        		EnemyResultAttack=EnemyArrey[0].Attack*BonusTypeAttack;
        		EnemyResultMagic=EnemyArrey[0].MagicPower*BonusTypeAttack;
        	}	
			
        	BothFolow=folow1;
			if(ForCal==1){

			BothAttack=EnemyResultAttack;	
			BothHealt= (PlayerBeyblade.Defence+PlayerHealt)-EnemyResultAttack;
			let RH=BothHealt.toFixed();
        	PlayerHealt=parseInt(RH);
        	Healt.text(''+ PlayerBeyblade.Name +'  : '+RH+' ' );
			DisplayDmg();

			}if(ForCal==2){///Long Range Speell

			for(let i=0;i<3;i++){
				EnemyMagicAttack=EnemyResultMagic/3; 
				PlayerHealt+=PlayerBeyblade.Defence;      	
		        BothHealt=PlayerHealt-EnemyMagicAttack;
		        let RH=BothHealt.toFixed();   	
                PlayerHealt=parseInt(RH);
                Healt.text(''+PlayerBeyblade.Name+' : '+RH+' ' );
				BothMagicAttack+=EnemyMagicAttack;
		      	
				}
			
			    EnemyMagicAttack=EnemyResultMagic/1.75;
			    PlayerHealt+=PlayerBeyblade.Defence;       	
		        BothHealt=PlayerHealt-EnemyMagicAttack;
		        let RH=BothHealt.toFixed();   	
                PlayerHealt=parseInt(RH);
                Healt.text(''+PlayerBeyblade.Name+' : '+RH+' ' );
                BothMagicAttack+=EnemyMagicAttack;
                DisplayDmg1();
                setTimeout(RelisingBeybladefromDifrentOption,3200);
			
			}if(ForCal==31){
				EnemyMagicAttack=EnemyResultMagic/3;       	
		        BothHealt=PlayerHealt-EnemyMagicAttack;
		        let RH=BothHealt.toFixed();   	
                PlayerHealt=parseInt(RH);
                Healt.text(''+PlayerBeyblade.Name+' : '+RH+' ' );
		        EnemyPoison.remove();
		        BothMagicAttack=EnemyMagicAttack;
		        DisplayDmg1();
			}if(ForCal==3){

				for(let i=0;i<10;i++){
					EnemyMagicAttack=EnemyResultMagic/6;
					PlayerHealt+=PlayerBeyblade.Defence;       	
		            BothHealt=PlayerHealt-EnemyMagicAttack;
		            let RH=BothHealt.toFixed();   	
                    PlayerHealt=parseInt(RH);
                    Healt.text(''+PlayerBeyblade.Name+' : '+RH+' ' );
				    BothMagicAttack+=EnemyMagicAttack;	
				}

				DisplayDmg1();
                setTimeout(RelisingBeybladefromDifrentOption,3200);

			}


			HealtAnimationforPlayer();

		}

//normal Attack
function DisplayDmg(){
				let FP=BothFolow.position();
				Combatzone.append('<div id="ShowDmg">'+BothAttack.toFixed()+'  </div>  '   );
				let ShowDmg=$('#ShowDmg');
				ShowDmg.css({position:'absolute',left:FP.left-25,top:FP.top-50,width:25,height:20,background:'red',border:'1px solid black',borderRadius:"50%",textAlign:'center',padding:'10px',fontSize:'20px'   })
				setTimeout( ()=>{
					ShowDmg.remove();
				},3000 );
}	

function DisplayDmg1(){
				let FP=BothFolow.position();
				Combatzone.append('<div id="ShowDmg">'+BothMagicAttack.toFixed()+'  </div>  '   );
				let ShowDmg=$('#ShowDmg');
				ShowDmg.css({position:'absolute',left:FP.left-15,top:FP.top-15,width:25,height:20,background:'red',border:'1px solid black',borderRadius:"50%",textAlign:'center',padding:'10px',fontSize:'20px'   })
				setTimeout( ()=>{
					ShowDmg.remove();
				},3000 );
}	
		



function HealtAnimationforEnemy(){
	let Ehalt=(EnemyArrey[0].Healt/CompHealt)*100;
	Ehalt.toFixed();
	EnemyHealt.append('<div id="EnemyHealtAni"></div>');
	EnemyHealtAni=$('#EnemyHealtAni');
	$(EnemyHealtAni).css({width:' '+Ehalt+'%  '  ,height:'25px',top:'0px', background:'red',position:'absolute',borderRadius:'25px'   });
	$(EnemyHealtAni).text(EnemyArrey[0].Healt);
}


function HealtAnimationforPlayer(){
	let Ehalt=(PlayerHealt/PlayerBeyblade.Healt)*100;
	Ehalt.toFixed();
	Healt.append('<div id="PlayerHealtAni"></div>');
	PlayerHealtAni=$('#PlayerHealtAni');
	$(PlayerHealtAni).css({width:' '+Ehalt+'%  '  ,height:'25px',top:'0px',  background:'red',position:'absolute',borderRadius:'25px'   });
	$(PlayerHealtAni).text(PlayerHealt);
}


		CombatFinish();





}


///I dont vana demage True objet of player

function UpdateFakeVar(){
	CompHealt=EnemyArrey[0].Healt;	
	PlayerHealt=PlayerBeyblade.Healt;
	PlayerDefence=PlayerBeyblade.Defence;
	CompDefence=EnemyArrey[0].Defence;
}


///Cheking if Combatr is done

function CombatFinish(){

	if(PlayerHealt<=0){
		console.log('GameOver');
	

	}if(EnemyArrey[0].Healt <= 0){

		LevelUpAndReward();

	}


}

var rewardlist;

var x;
var x1;
var r;
var nl;
function LevelUpAndReward(){

	RemoveEvryThing();

	body.append( '<div id="rewardlist">Reward List</div> ' )
	rewardlist=$('#rewardlist');
	rewardlist.css({ background:'black',marginLeft:'auto',marginRight:'auto',width:'750px',height:'500px',marginTop:'25px',color:'lightblue',fontSize:'20px',textAlign:'center'  })

	x=PlayerBeyblade.Exp;
	x1=PlayerBeyblade.Exp+EnemyArrey[0].Exp;

	if(x1 >= LevelsArrey[TrackingLevel]){
		r=x1-LevelsArrey[TrackingLevel];
		LevelUp=true;
		nl=LevelsArrey[TrackingNextLevel]-r;
		LevelsUp();
	}else{
		r=x1;
		nl=LevelsArrey[TrackingNextLevel]-r;
		LevelsUp();
	}

	function LevelsUp(){

		oldAttack=PlayerBeyblade.Attack;
        oldHealt=PlayerBeyblade.Healt;
        oldDefence=PlayerBeyblade.Defence;
        oldMagicPower=PlayerBeyblade.MagicPower;
        oldLevel=PlayerBeyblade.Level;
        
        PlayerBeyblade.Exp=r;
         
	if(LevelUp==true){
		LevelUp=false;

		Victory2.play();

		let r50=Math.floor(Math.random()*5 );
		let r51=Math.floor(Math.random()*30 );
		let r52=Math.floor(Math.random()*3 );
		let r53=Math.floor(Math.random()*5 );
		PlayerBeyblade.Attack+=r50;
		PlayerBeyblade.Healt+=r51;
		PlayerBeyblade.Defence+=r52;
		PlayerBeyblade.MagicPower+=r53;
		PlayerBeyblade.Level+=1;

		

	}else{
		Victory1.play();
	}




	rewardlist.append('<div id="FinalExp">New Player Exp</div> <div id="pExp">PlayerNowExp </div>  <div id="eExp"> EnemyExp</div><div id="NextLevel">NextLevel</div> ');

	let FinalExp=$('#FinalExp');
	FinalExp.css({ position:'absolute' ,marginTop:'50px',marginLeft:'30px' })
    
    let pExp=$('#pExp');
	pExp.css({ position:'absolute' ,marginTop:'50px',marginLeft:'230px' })
	
	let eExp=$('#eExp');
	eExp.css({ position:'absolute' ,marginTop:'50px',marginLeft:'450px'})

	let NextLevel=$('#NextLevel');
	NextLevel.css({ position:'absolute' ,marginTop:'50px',marginLeft:'630px'})

	rewardlist.append('<div id="Finalexp">'+PlayerBeyblade.Exp+'</div> <div id="pexp">'+x+'</div>  <div id="eexp">'+EnemyArrey[0].Exp+' </div> <div id="Nextlevel">'+nl+' </div>  ');

	let Finalexp=$('#Finalexp');
	Finalexp.css({ position:'absolute' ,marginTop:'75px',marginLeft:'90px' })
    
    let pexp=$('#pexp');
	pexp.css({ position:'absolute' ,marginTop:'75px',marginLeft:'280px' })
	
	let eexp=$('#eexp');
	eexp.css({ position:'absolute' ,marginTop:'75px',marginLeft:'480px'})

	let Nextlevel=$('#Nextlevel');
	Nextlevel.css({ position:'absolute' ,marginTop:'75px',marginLeft:'660px'})



}

var HolderStatus;




	 rewardlist.append(`<div id="AllStatus">Updated Status <div id="NewStatus">New Status</div><div id="OldStatus">Old Status</div> 		<div id="att">Attack</div><div id="hea">Healt</div><div id="def">Defence</div><div id="mag">MagicPower</div><div id="lev">Level</div><div id="natt">${PlayerBeyblade.Attack}</div><div id="nhea">${PlayerBeyblade.Healt}</div><div id="ndef">${PlayerBeyblade.Defence}</div><div id="nmag">${PlayerBeyblade.MagicPower}</div><div id="nlev">${PlayerBeyblade.Level}</div><div id="oatt">${oldAttack}</div><div id="ohea">${oldHealt}</div><div id="odef">${oldDefence}</div><div id="omag">${oldMagicPower}</div><div id="olev">${oldLevel}</div></div>          `         );
		
	var AllStatus=$('#AllStatus');
	var NewStatus=$('#NewStatus');
	var OldStatus=$('#OldStatus');
	
	var att=$('#att');
	var hea=$('#hea');
	var def=$('#def');
	var mag=$('#mag');
	var lev=$('#lev');	
	
	var natt=$('#natt');
	var nhea=$('#nhea');
	var ndef=$('#ndef');
	var nmag=$('#nmag');
	var nlev=$('#nlev');	

	var oatt=$('#oatt');
	var ohea=$('#ohea');
	var odef=$('#odef');
	var omag=$('#omag');
	var olev=$('#olev');
	

	AllStatus.css({position:'absolute',marginTop:'130px',marginLeft:'15px',width:'400px',background:'gray',height:'330px',fontSize:'22px'  })
	NewStatus.css({position:'absolute',marginTop:'30px',marginLeft:'160px',  })
	OldStatus.css({position:'absolute',marginTop:'30px',marginLeft:'290px',  })
	
	att.css({position:'absolute',marginTop:'70px',marginLeft:'20px',  })
	hea.css({position:'absolute',marginTop:'110px',marginLeft:'20px',  })
	def.css({position:'absolute',marginTop:'150px',marginLeft:'20px',  })
	mag.css({position:'absolute',marginTop:'190px',marginLeft:'20px',  })
	lev.css({position:'absolute',marginTop:'230px',marginLeft:'20px',  })
	
	natt.css({position:'absolute',marginTop:'70px', marginLeft:'200px',  })
	nhea.css({position:'absolute',marginTop:'110px',marginLeft:'200px',  })
	ndef.css({position:'absolute',marginTop:'150px',marginLeft:'200px',  })
	nmag.css({position:'absolute',marginTop:'190px',marginLeft:'200px',  })
	nlev.css({position:'absolute',marginTop:'230px',marginLeft:'200px',  })
	
	oatt.css({position:'absolute',marginTop:'70px', marginLeft:'320px',  })
	ohea.css({position:'absolute',marginTop:'110px',marginLeft:'320px',  })
	odef.css({position:'absolute',marginTop:'150px',marginLeft:'320px',  })
	omag.css({position:'absolute',marginTop:'190px',marginLeft:'320px',  })
	olev.css({position:'absolute',marginTop:'230px',marginLeft:'320px',  })

////reward and luck

	for(let i=0;i<20;i++){

		LuckyNumber.push(i);

	}

	let luck=Math.floor(Math.random()*LuckyNumber.length );
	let winprize=EnemyArrey[0].Exp/2;
	Gold=winprize.toFixed();
	if(luck>17){
		let luck1=Math.floor(Math.random()*60 );	
		let luck2=Math.floor(Math.random()*60 );
		let luck3=Math.floor(Math.random()*60 );
		let re1=Math.floor(Math.random()*60 );
		let re2=Math.floor(Math.random()*60);
		let re3=Math.floor(Math.random()*60 );
		
		if(luck1==LuckyNumber[re1] || luck1==LuckyNumber[re2] || luck1==LuckyNumber[re3] || luck2==LuckyNumber[re1] || luck2==LuckyNumber[re2] || luck2==LuckyNumber[re3] || luck3==LuckyNumber[re1] || luck3==LuckyNumber[re2] || luck3==LuckyNumber[re3]   ){
    		RewardPlayer();
    	}


	}if(luck>12 && luck<17){
		let luck1=Math.floor(Math.random()*60 );	
    	let luck2=Math.floor(Math.random()*60 );
    	let re1=Math.floor(Math.random()*60 );
    	let re2=Math.floor(Math.random()*60 );
    	
    	if(luck1==LuckyNumber[re1] || luck1==LuckyNumber[re2] || luck2==LuckyNumber[re1] || luck2==LuckyNumber[re2]  ){
    		RewardPlayer();
    	}	


	}if(luck<12){
    	let luck1=Math.floor(Math.random()*LuckyNumber.length );
    	let re1=Math.floor(Math.random()*LuckyNumber.length );
    	
    	if(luck1==LuckyNumber[re1]){
    		RewardPlayer();

    	}

	}

	function RewardPlayer(){
		RewardLuck=Math.floor(Math.random()*10 );

		if(RewardLuck >=5 ){
			NewSkill="You got new Skill";

			let RS=Math.floor(Math.random()*AllSkills.length  );
			let jx=AllSkills[RS];

			if(PlayerBeyblade.Skill1==="none" || PlayerBeyblade.Skill1===jx ){
				PlayerBeyblade.Skill1=jx;
			}else if(PlayerBeyblade.Skill2==="none" || PlayerBeyblade.Skill2===jx ){
				PlayerBeyblade.Skill2=jx;
			}else if(PlayerBeyblade.Skill3==="none" || PlayerBeyblade.Skill3===jx ){
				PlayerBeyblade.Skill3=jx;
			}else if(PlayerBeyblade.Skill4==="none" || PlayerBeyblade.Skill4===jx ){
				PlayerBeyblade.Skill4=jx;
			}else{

			}


		}else{
			SkillBox="You got box";

			PlayerBeyblade.Boxes+=1;



		}

	}


	rewardlist.append(`     
		<div id="RewardItems">Reward Items
		
		<div id="NSkill">New Skill</div>
		<div id="NBoxes">New Box</div>
        <div id="NGold">Gold</div>

        <div id="OSkill">${NewSkill}</div>
		<div id="OBoxes">${SkillBox}</div>
        <div id="OGold">${Gold}</div>

		</div>



		`);

var RewardItems=$('#RewardItems');
var	NSkill=$('#NSkill');
var NBoxes=$('#NBoxes');
var NGold=$('#NGold');

var OSkill=$('#OSkill');
var OBoxes=$('#OBoxes');
var OGold=$('#OGold');





RewardItems.css({position:'absolute',marginTop:'130px',marginLeft:'450px',width:'280px',background:'orange',height:'330px',fontSize:'22px',color:'gold'  })

body.css({ background:'violet'});
NSkill.css({position:'absolute',marginTop:'40px',marginLeft:'15px', })
NBoxes.css({position:'absolute',marginTop:'130px',marginLeft:'15px', })
NGold.css({position:'absolute',marginTop:'210px',marginLeft:'15px', })

OSkill.css({position:'absolute',marginTop:'40px',marginLeft:'150px', })
OBoxes.css({position:'absolute',marginTop:'130px',marginLeft:'150px', })
OGold.css({position:'absolute',marginTop:'210px',marginLeft:'150px', })


rewardlist.append('<div id="changer">Update All</div> ');
var changer=$('#changer');
changer.css({position:'absolute',width:'150px',height:'30px',background:'green',color:'black',marginTop:'500px',marginLeft:'300px',padding:'8px',  })

changer.on('click',()=>{
	rewardlist.remove();
	RemoveEvryThing();
	setTimeout(RemoveEvryThing,2000);
	UpdateMapShowHide();
})


}




///Update Map hide or show

function UpdateMapShowHide(){
				body.css({background:'white'});
		        player.css({display:''});
				
				for(let i=0;i<Allvillage.length;i++){
					$(Allvillage[i]).css({ display:''})
				}

				for(let i=0;i<AllFild.length;i++){
					$(AllFild[i]).css({ display:''})
				}

				for(let i=0;i<AllMaps.length;i++){
					$(AllMaps[i]).css({ display:''})
				}

				for(let i=0;i<MonstersSpawn.length;i++){
					$(MonstersSpawn[i]).css({ display:''})
				}

				for(let i=0;i<BossSpawn.length;i++){
					$(BossSpawn[i]).css({ display:''})
				}	

				CharacterMove();

				setTimeout(UpdateMapShowHide1,3000);
}

function UpdateMapShowHide1(){
		CancelAllAnimationRequestforMaps();
					
		

}







///Ramoving Combat 


function RemoveEvryThing(){
	clear();
    clearInterval(myZoneNowRotating1);
	clearInterval(myZoneNowRotating2);
	clearInterval(myZoneNowRotating3);
	clearInterval(myZoneNowRotating4);
	cancelAnimationFrame(ForDetectionAnimation);
	clearInterval(FreeMoveBeyblade);
	clearInterval(AskZoneThenMove);
	Cards.remove();
	CardHolder.remove();
	clearInterval(TimerCardTracker);
	turn=30;
	PlayerLongRangeSpellCd=0;
	EnemyLongRangeSpellCd=0;
	RapidFirePlayerCd=0;
	RapidFireEnemyCd=0;

	BattleCombatSound.pause();
	BattleCombatSound.remove();
	PlayerPoisonCd=0;
	EnemyPoisonCd=0;
    Combatzone.remove();
	Healt.remove();
    SkillHolder.remove();
    EnemyHealt.remove();
    ping1.remove();
    ping2.remove();
    player1.remove();
    player2.remove();
    folow1.remove();
    folow2.remove();




}






