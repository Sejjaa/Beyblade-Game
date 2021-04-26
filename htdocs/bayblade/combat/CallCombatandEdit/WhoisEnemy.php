var player1;
var player2;
var myZone1;
var myZone2;
var folow1;
var folow2;
var ping1;
var ping2;
var waitMode=0;
var monsta;
//Creating player and chose starting line
function WhoisEnemy(){

	// BeforeStartMiniGame();

	

	Combatzone.append('<div id="ping1"></div>  ');
	Combatzone.append('<div id="ping2"></div>  ');	
	ping1=$('#ping1');
	ping2=$('#ping2');

	Combatzone.append('<div id="player1"></div>  ' );
	Combatzone.append('<div id="player2"></div>  ' );
	player1=$('#player1');
	player2=$('#player2');

	////This is folowing player where they are 
	Combatzone.append('<div id="folow1"></div> ');
	folow1=$('#folow1');
	
	Combatzone.append('<div id="folow2"></div> ');
	folow2=$('#folow2');

	DecoratePlayers();
		
	
	
}

function DecoratePlayers(){

	$(player1).css({ position:'absolute',width:'100px',height:'100px',
	 backgroundPosition: 'center',
	backgroundSize: 'cover',backgroundImage:PlayerBeyblade.url });

	$(player2).css({ position:'absolute',width:'100px',height:'100px',
	 backgroundPosition: 'center',left:'86%',
	backgroundSize: 'cover',backgroundImage:EnemyArrey[0].url });

	$(folow1).css({ position:'absolute',width:'100px',height:'100px',});
	$(folow2).css({ position:'absolute',width:'100px',height:'100px',});

	$(ping1).css({ position:'absolute',width:'10px',height:'10px',});
	$(ping2).css({ position:'absolute',width:'10px',height:'10px',});


	PlayCombatSound();

	setTimeout(AddSkillsUll,100);
	Animations();
	Spinout();

}


var BattleCombatSound;
function PlayCombatSound(){
	BattleCombatSound=0;
	let r3000=Math.floor(Math.random()*AllBattleSongs.length  );
	BattleCombatSound=AllBattleSongs[r3000];

    BattleCombatSound.play();    
    BattleCombatSound.volume = 0.10;

        $(BattleCombatSound).on("ended", ()=>{
		 BattleCombatSound.play();
		
		 
		 

		} );	



}
