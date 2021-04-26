

$( ()=>{
var body=$('body');
$(body).css({ padding:'0px',margin:'0px'});

body.append('<button id="startgame" >StartGame</button>');
var x=window.innerWidth;
var y=window.innerHeight;
var StartGame=$('#startgame');
$(StartGame).css({width:'100px',height:'50px' ,marginTop:y/2-25,marginLeft:x/2-50});
StartGame.on('click',()=>{
	
	
	StartGame.remove();
	CreateMainMenu();
	//StartMakingMap();
	// setTimeout(setupcombat,1000);
})






// setTimeout(setupcombat,1000);  /// this is combat 











} )