///This will be do draw combat system and map
var body;
var Combatzone;

function SetUpCombatZone(){
	body=$('body');
	DrawZone();
}

function DrawZone(){
	let x=window.innerWidth;
	let y=window.innerHeight;
	body.append(' <div id="zone"></div> ');
	Combatzone=$('#zone');
	$(body).css({ margin:'0px',padding:'0px'  });
	$(Combatzone).css({ height:y,width:x,background:'',
	position:'absolute',overflow:'hidden' });
	DrawMoventRadius();
	
}

var MoventFloorArrey=[];
//Making Radius for movent
function DrawMoventRadius(){
	///reset Arrey
	MoventFloorArrey=[];
	
	for(let i=0;i<8;i++){
		Combatzone.append(' <div class="MoventFloor MoventFloor-'+i+' "></div>  ');
		let MoventFloor=$('.MoventFloor-'+i+'  ');
		MoventFloorArrey.push(MoventFloor);
	}
	DecorateMoventRadius();
}

//Seting up radius decoration

function DecorateMoventRadius(){
	let x=window.innerWidth;
	let y=window.innerHeight;

	$(MoventFloorArrey[0]).css({ position:'absolute',top:"10%",left:'10%',height:'300px'
	,width:'300px',borderRadius:'50%', });
	//combat radius
	$(MoventFloorArrey[1]).css({ position:'absolute',top:y/2-150,left:x/2-300,height:'300px'
	,width:'300px',borderRadius:'50%', });

	$(MoventFloorArrey[2]).css({ position:'absolute',top:"40%",left:'10%',height:'300px'
	,width:'300px',borderRadius:'50%', });
	//combat
	$(MoventFloorArrey[3]).css({ position:'absolute',top:y/2-50,left:x/2-150,height:'300px'
	,width:'300px',borderRadius:'50%', });

	$(MoventFloorArrey[4]).css({ position:'absolute',top:"40%",left:'65%',height:'300px'
	,width:'300px',borderRadius:'50%', });
	//combat
	$(MoventFloorArrey[5]).css({ position:'absolute',top:y/2-150,left:x/2-20,height:'300px'
	,width:'300px',borderRadius:'50%', });

	$(MoventFloorArrey[6]).css({ position:'absolute',top:"10%",left:'65%',height:'300px'
	,width:'300px',borderRadius:'50%', });
	//combat
	$(MoventFloorArrey[7]).css({ position:'absolute',top:y/2-300,left:x/2-150,height:'300px'
	,width:'300px',borderRadius:'50%', });
	for(let i=0;i<9;i++){
		$(MoventFloorArrey[i]).css({ });
	}

	setTimeout(WhoisEnemy,100);
}