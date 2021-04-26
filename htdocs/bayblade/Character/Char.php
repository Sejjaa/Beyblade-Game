var player;
var ArreyMovent={87:false,68:false,65:false,83:false };
var WhereToLook;
function createCharacter(){
	
	body.append('<div id="player"></div>  ');	
	player=$('#player');
	$(player).css({position:'absolute',width:'40px',height:'40px',backgroundPosition: 'center',
	backgroundSize: 'cover',backgroundImage:chardown0   ,backgroundRepeat: 'no-repeat',left:1400,top:1300   })
	AllCameras();
	CharacterMove();
}




addEventListener('keydown',function CheckKey(e){
	e.preventDefault();
	ArreyMovent[e.which]=true;

    
})


addEventListener('keyup',function CheckUPKey(e){
	e.preventDefault();
	ArreyMovent[e.which]=false;

    
})

var WillCharaterMove;
var ani=0;

function CharacterMove(){

WillCharaterMove=requestAnimationFrame(CharacterMove);
WhereToLook="player";
	

	if(ArreyMovent[87]==true){
		$(player).css({top:'-='+1});
		ani++;
		if(ani==1){
			$(player).css({ backgroundImage:chartop0});
			ani=0;
		}else{
			ani=0;
		}

	}if(ArreyMovent[83]==true){
		$(player).css({top:'+='+1});
		ani++;
		if(ani<10){
			$(player).css({ backgroundImage: chardown0});

		}if(ani>10){
			$(player).css({ backgroundImage:chardown1});
			
		}if(ani>21){
			ani=0;
		}


	}if(ArreyMovent[65]==true){
		$(player).css({left:'-='+1});
		ani++;
		if(ani<10){
			$(player).css({ backgroundImage:charleft0});
			
		}if(ani>10){
			$(player).css({ backgroundImage:charleft1});
		}if(ani>21){
			ani=0;
		}
		

	}if(ArreyMovent[68]){
		$(player).css({left:'+='+1});
		ani++;
		if(ani<10){
			$(player).css({ backgroundImage:charright0});
			
		}if(ani>10){
			$(player).css({ backgroundImage:charright1});
			
		}if(ani>20){
			ani=0;
		}


	}




} 

var EventItems=true;
var lv=0;
var ItemsHolder;

addEventListener('keydown',function DisplayItems(e){

	if(EventItems=true){
		if(e.which===73){
				
			if(lv==0){
				lv++;
				body.append('<div id="ItemsHolder"></div>   ');
				ItemsHolder=$('#ItemsHolder');

				ItemsHolder.css({ position:'fixed',width:'500px',height:'250px',background:'orange',left:'40%',top:'20%'  });

				for(let i=0;i<AllItems.length;i++){
					ItemsHolder.append( '<div class="items items-'+i+' "></div>  ');
					let vv=$('.items-'+i+'  ');
					vv.append('<div class="Items Items-'+i+'  "></div>  ');
				}

				let item0=$('.items-0');
				let item1=$('.items-1');
				let item2=$('.items-2');
				let Item0=$('.Items-0');
				let Item1=$('.Items-1');
				let Item2=$('.Items-2');
				item0.css({position:'absolute', left:'40px',top:'50px',width:'100px',height:'100px',fontSize:'20px',background:'black',backgroundImage:'url(./beybladeimg/gold.png)',backgroundRepeat:'no-repeat',backgroundPosition:'center',backgroundSize:'cover'  });
				item1.css({position:'absolute', left:'200px',top:'50px',width:'100px',height:'100px',fontSize:'20px',background:'black',backgroundImage:'url(./beybladeimg/chest.png)',backgroundRepeat:'no-repeat',backgroundPosition:'center',backgroundSize:'contain'  })
				item2.css({position:'absolute', left:'360px',top:'50px',width:'100px',height:'100px',fontSize:'20px',background:'black',backgroundImage:'url(./beybladeimg/key.png)',backgroundRepeat:'no-repeat',backgroundPosition:'center',backgroundSize:'contain'  })

				Item0.css({position:'absolute', left:'0px',top:'100px',width:'100px',height:'25px',fontSize:'20px',background:'blue',textAlign:'center'  })
				Item1.css({position:'absolute', left:'0px',top:'100px',width:'100px',height:'25px',fontSize:'20px',background:'blue',textAlign:'center'  })
				Item2.css({position:'absolute', left:'0px',top:'100px',width:'100px',height:'25px',fontSize:'20px',background:"blue",textAlign:'center'  })

				Item0.text(PlayerBeyblade.Gold);	
				Item1.text(PlayerBeyblade.Boxes);
				Item2.text(PlayerBeyblade.Keys);

				if(AllItems[1]>=1 && AllItems[2] ){

					Item1.text( 'Open Chest' );

				}else{
					Item1.text(AllItems[1]);
				    Item2.text(AllItems[2]);
				}




			}else{
				lv=0;
				ItemsHolder.remove();
			}

		}

	}



}  )


function AllCameras(){
	requestAnimationFrame(AllCameras);

	
		
		let x=document.getElementById('player')
		let x1=x.scrollIntoView( {inline: "center",block:'center' }   );

	



}