var spacebar;
var minigame1;
var spacebarzone1;
var BonusDmg;
var widthforZone;
var movespacebarRight;
var movespacebarLeft;
var DifLevel=0;
var stopMiniGame;
var start=0;
var resetvar;
//Making first minig game like fishing
function BeforeStartMiniGame(){
	start++;
	if(start==1){
	body.append('<div id="minigame1"></div> ');	
	minigame1=$('#minigame1');
	minigame1.css({ position:'absolute',width:350,height:20,background:'violet',left:'38%',top:'47%',borderRadius:'25px'   });
	DifLevel=1;

	function drawSpacebarZone1(){

	if(DifLevel==3){
	let Z=[40,50,60,70,30,20];
	let r=Math.floor(Math.random()*Z.length );	
	minigame1.append('<div id="spacebarzone1"></div>  ');
	spacebarzone1=$('#spacebarzone1');
	widthforZone=Z[r];
	let randnum=100*r/2.5;
	spacebarzone1.css({position:"absolute" ,background:'orange',height:20,width:Z[r],left:randnum,  });
	
	}if(DifLevel==2 ){
	let Z=[80,60,70,50];
	let r=Math.floor(Math.random()*Z.length );	
	minigame1.append('<div id="spacebarzone1"></div>  ');
	spacebarzone1=$('#spacebarzone1');
	widthforZone=Z[r];
	let randnum=150*r/2.5;
	spacebarzone1.css({position:"absolute" ,background:'orange',height:20,width:Z[r],left:randnum  ,  });
	
	}if(DifLevel==1){
	let Z=[110,120,130,140,150];
	let r=Math.floor(Math.random()*Z.length );	
	minigame1.append('<div id="spacebarzone1"></div>  ');
	spacebarzone1=$('#spacebarzone1');
	widthforZone=Z[r];
	let randnum=90*r/2.5;
	spacebarzone1.css({position:"absolute" ,background:'orange',height:20,width:Z[r],left:randnum,  });
	

	}	
	
}

	drawSpacebarZone1();
//This is moving and detektin space bar 
	minigame1.append('<div id="spacebar"></div>  ');
	spacebar=$('#spacebar');
	spacebar.css({width:30,height:20,background:'black',position:'absolute'    })


	let speed=[1,2,3];
	let speed1=[1,2,3];


//functgion moving spacebar left and right
	function MoveRight(){
		let r1=Math.floor(Math.random()*speed.length );

		movespacebarRight=setInterval( ()=>{
		spacebar.css({left:'+='+speed1[r1]  });	


		},speed[r1] ); 


	}	

	MoveRight();

	function MoveLeft(){
		let r1=Math.floor(Math.random()*speed.length );

		movespacebarLeft=setInterval( ()=>{
		spacebar.css({left:'-='+speed1[r1]  });	


		},speed[r1] ); 


	}	

		
let x1=0;
let x2=0;

//Detection dont wana bar exit game
	function DetectMinigame(){
	stopMiniGame=requestAnimationFrame(DetectMinigame );

		let posZone=$(spacebarzone1).position();
		let posspacebar=$(spacebar).position();	


		if(posspacebar.left<0){
			clearInterval(movespacebarLeft);
			x2++;
			if(x2==1){
				x1=0;
				MoveRight();
			}

		}if(posspacebar.left>320){
			clearInterval(movespacebarRight);
			x1++;
			if(x1==1){
			x2=0;	
			MoveLeft();	
			}
			

		}
	

	}

DetectMinigame();

//Event on keydown succes or fail game
addEventListener('keydown',function CheckSpaceBar(e){
		
		if(e.which==32){
			let posZone=$(spacebarzone1).position();
		    let posspacebar=$(spacebar).position();

			if(posspacebar.left+40 >= posZone.left && posspacebar.left+40 <= posZone.left+widthforZone || posspacebar.left <= posZone.left+widthforZone && posspacebar.left >= posZone.left  ){
				
				if(posspacebar.top+20 >= posZone.top && posspacebar.top+20 <= posZone.top+20 || posspacebar.top <= posZone.top+20 && posspacebar.top >= posZone.top   ){


					if(DifLevel==3){
						spacebarzone1.remove();
						DifLevel++;
						removeEventListener("keydown",CheckSpaceBar);
						cancelAnimationFrame(stopMiniGame);
						clearInterval(movespacebarRight);
						clearInterval(movespacebarLeft);
						spacebar.remove();
						minigame1.remove();
						spacebarzone1.remove();
						AddBonus01();
						setTimeout(NewMiniGame,1500);
					}if(DifLevel==2){
						spacebarzone1.remove();
						DifLevel++;
						drawSpacebarZone1();
					}if(DifLevel==1){
						spacebarzone1.remove();
						DifLevel++;
						drawSpacebarZone1();
					}	

				}

			}else{
				removeEventListener("keydown",CheckSpaceBar);
				cancelAnimationFrame(stopMiniGame);
				clearInterval(movespacebarRight);
				clearInterval(movespacebarLeft);
				spacebar.remove();
				minigame1.remove();
				spacebarzone1.remove();
				AddSkillsUll();
				start=0;
			}


		

		}



})

//new minig game combo key can you get more bonuses
var WordArrey=["A","W","S","D" ];
var keywordholder;
var dif;
var TaskArrey=[];
var MyTaskArrey=[];
function NewMiniGame(){
	TaskArrey=[];
	MyTaskArrey=[];
	body.append('<div id="keywordholder"></div> '  );
	keywordholder=$('#keywordholder');
	keywordholder.css({ position:'absolute',width:500,height:60,background:'lightblue',left:'32%',top:'38%',borderRadius:'25px' })

	GiveRandomDif();

}

	function GiveRandomDif(){
		dif=Math.floor(Math.random()* 12  );
		if(dif<4){
			dif=5;
		}
	GivePlayerTask();	
	}

	function GivePlayerTask(){
		for(let i=0;i<dif;i++){
			let r=Math.floor(Math.random()*WordArrey.length);
			let r1=WordArrey[r];
			TaskArrey.push(r1);
			
		}
let x=0;
		for(let i=0;i<TaskArrey.length;i++){
			if(TaskArrey[i]=="A"){

				keywordholder.append('<div class="word word-'+i+'">'+TaskArrey[i]+' </div> ');
				let word=$('.word-'+i+' ');
				word.css({position:'absolute',marginLeft:x ,height:"30px",fontSize:'24px',textAlign:'center',width:'70px'  });
				keywordholder.append('<div class="imgame imggame-'+i+'"></div>  ');
				let img=$('.imggame-'+i+' ');
				img.css({position:'absolute',marginTop:'30px',marginLeft:x+15 ,height:"30px",backgroundImage:'url(./combat/MiniGameImg/left.png)',width:'40px',backgroundSize: 'contain',backgroundRepeat:'no-repeat',backgroundPosition: 'center'   })
				x+=45;

			}if(TaskArrey[i]=="D"){
				
				keywordholder.append('<div class="word word-'+i+'">'+TaskArrey[i]+' </div> ');
				let word=$('.word-'+i+' ');
				word.css({position:'absolute',marginLeft:x ,height:"30px",fontSize:'24px',textAlign:'center',width:'70px'  });
				keywordholder.append('<div class="imgame imggame-'+i+'"></div>  ');
				let img=$('.imggame-'+i+' ');
				img.css({position:'absolute',marginTop:'30px',marginLeft:x+15 ,height:"30px",backgroundImage:'url(./combat/MiniGameImg/right.png)',width:'40px',backgroundSize: 'contain',backgroundRepeat:'no-repeat',backgroundPosition: 'center'   })
				x+=45;

			}if(TaskArrey[i]=="W"){
				
				keywordholder.append('<div class="word word-'+i+'">'+TaskArrey[i]+' </div> ');
				let word=$('.word-'+i+' ');
				word.css({position:'absolute',marginLeft:x ,height:"30px",fontSize:'24px',textAlign:'center',width:'70px'  });
				keywordholder.append('<div class="imgame imggame-'+i+'"></div>  ');
				let img=$('.imggame-'+i+' ');
				img.css({position:'absolute',marginTop:'30px',marginLeft:x+15 ,height:"30px",backgroundImage:'url(./combat/MiniGameImg/up.png)',width:'40px',backgroundSize: 'contain',backgroundRepeat:'no-repeat',backgroundPosition: 'center'   })
				x+=45;

			}if(TaskArrey[i]=="S"){
				
				keywordholder.append('<div class="word word-'+i+'">'+TaskArrey[i]+' </div> ');
				let word=$('.word-'+i+' ');
				word.css({position:'absolute',marginLeft:x ,height:"30px",fontSize:'24px',textAlign:'center',width:'70px'  });
				keywordholder.append('<div class="imgame imggame-'+i+'"></div>  ');
				let img=$('.imggame-'+i+' ');
				img.css({position:'absolute',marginTop:'30px',marginLeft:x+15 ,height:"30px",backgroundImage:'url(./combat/MiniGameImg/down.png)',width:'40px',backgroundSize: 'contain',backgroundRepeat:'no-repeat',backgroundPosition: 'center'   })
				x+=45;
			}


		}
		Timer();


	}
var timer;
var time=20;
var timecount;
var decwidth22=900;
var keys=0;
var event2;
function Timer(){

	addEventListener("keydown", function TrackKey(e){
		
		event2=TrackKey;
		if(keys==TaskArrey.length-1){
			keys++;
			Reset000();
			AddBonus02();
		}
		if(e.which==87){
			let w="W";
			MyTaskArrey.push(w);
			if(MyTaskArrey[keys]==TaskArrey[keys] ){
				keys++;
			}else{
				Reset000();
			}

		}if(e.which==83){
			let w="S";
			MyTaskArrey.push(w);
			if(MyTaskArrey[keys]==TaskArrey[keys] ){
				keys++;
			}else{
				Reset000();
			}

		}if(e.which==68){
			let w="D";
			MyTaskArrey.push(w);
			if(MyTaskArrey[keys]==TaskArrey[keys] ){
				keys++;
			}else{
				Reset000();
			}

		}if(e.which==65){
			let w="A";
			MyTaskArrey.push(w);
			if(MyTaskArrey[keys]==TaskArrey[keys] ){
				keys++;
			}else{
				Reset000();
			}

		}

	})

	body.append('<div id="timer">'+time+' secound</div>');
	timer=$('#timer');
	timer.css({ width:decwidth22,height:"25px",borderRadius:"30px",background:'orange',position:"absolute",left:'12%',top:'5%',textAlign:'center',tranisiton:'1s'   })
	timecount=setInterval(()=>{
		time-=1;
		decwidth22-=45;
		timer.css({width:decwidth22, });
		timer.text(time +" secound" );
		if(time<0){
			Reset000();
		}


	},1000 );

	function Reset000(){
		    clearInterval(timecount);
			timer.remove();
			keywordholder.remove();
			removeEventListener("keydown",event2);
			start=0;
			AddSkillsUll();
			
	}

}

	function AddBonus01(){
		BonusDmg=0;
		BonusDmg=1.15;

	}

	function AddBonus02(){
		BonusDmg=0;
		BonusDmg=1.25;

	}


	}




}

