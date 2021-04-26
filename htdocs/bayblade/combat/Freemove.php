
function Spinout(){


setTimeout(FreeMove,1000  );	
}

var AskZoneThenMove;
var FreeMoveBeyblade;
var free=0;
function FreeMove(){

	TrackingFolow="free";
	free=0;
	let x=[20,40,60,80,100,120,140,160,180,200,220,240,260,280,300,320,340,360,380,400,420,450];
	let y=[40,60,80,100,120,140,160,180,200,220,240,260,280,300,320,340,360,380,400,420,440,460,480,520];

	let x1=[550,570,590,610,630,650,680,700,720,740,780,760,800,820,840,860,880,900,920,960,940,980];
    let x100= Math.floor(Math.random() * x.length );
	let x101=Math.floor(Math.random()*y.length);	
	
	let x102=Math.floor(Math.random()*x1.length);
	let x103=Math.floor(Math.random()*y.length);
	$(ping1).css({ position:'absolute',width:'10px',height:'10px',top:y[x101],left:x[x100]  });
	$(ping2).css({ position:'absolute',width:'10px',height:'10px',top:y[x103],left:x1[x102]  });

	FreeMoveBeyblade=setInterval( ()=>{
		let ping01=$(ping1).position();
		let ping02=$(ping2).position();

		let pl01=$(player1).position();
		let pl02=$(player2).position();

		if(ping01.left>pl01.left){
			$(player1).css({left:'+='+1   })

		}if(ping01.top>pl01.top){
			$(player1).css({top:'+='+1   })

		}if(ping01.left<pl01.left){
			$(player1).css({left:'-='+1   })

		}if(ping01.top<pl01.top){
			$(player1).css({top:'-='+1   })

		}if(ping02.top<pl02.top){
			$(player2).css({top:'-='+1   })

		}if(ping02.top>pl02.top){
			$(player2).css({top:'+='+1   })

		}if(ping02.left<pl02.left){
			$(player2).css({left:'-='+1   })

		}if(ping02.left>pl02.left){
			$(player2).css({left:'+='+1   })

		}if(ping02.left.toFixed() == pl02.left.toFixed() || ping02.left.toFixed()+1 == pl02.left.toFixed() || ping02.left.toFixed()+2 == pl02.left.toFixed() || ping02.left.toFixed()+3 == pl02.left.toFixed() || ping02.left.toFixed() == pl02.left.toFixed() || ping02.left.toFixed()-1 == pl02.left.toFixed() || ping02.left.toFixed()-2 == pl02.left.toFixed() || ping02.left.toFixed()-3 == pl02.left.toFixed() ){

			if(ping02.top.toFixed() == pl02.top.toFixed() || ping02.top.toFixed()+1 == pl02.top.toFixed() || ping02.top.toFixed()+2 == pl02.top.toFixed() || ping02.top.toFixed()+3 == pl02.top.toFixed() || ping02.top.toFixed() == pl02.top.toFixed() || ping02.top.toFixed()-1 == pl02.top.toFixed() || ping02.top.toFixed()-2 == pl02.top.toFixed() || ping02.top.toFixed()-3 == pl02.top.toFixed() || ping02.top.toFixed()+4 == pl02.top.toFixed() || ping02.top.toFixed()+5 == pl02.top.toFixed() || ping02.top.toFixed()-4 == pl02.top.toFixed()  || ping02.top.toFixed()-5 == pl02.top.toFixed() || ping02.top.toFixed()-6 == pl02.top.toFixed() || ping02.top.toFixed()-7 == pl02.top.toFixed() || ping02.top.toFixed()-8 == pl02.top.toFixed() || ping02.top.toFixed()-9 == pl02.top.toFixed() || ping02.top.toFixed()-10 == pl02.top.toFixed() || ping02.top.toFixed()+6 == pl02.top.toFixed() || ping02.top.toFixed()+6 == pl02.top.toFixed()   || ping02.top.toFixed()+7 == pl02.top.toFixed()     ||  ping02.top.toFixed()+8 == pl02.top.toFixed() || ping02.top.toFixed()+9 == pl02.top.toFixed() || ping02.top.toFixed()+10 == pl02.top.toFixed() ){
				if(ping01.left.toFixed() == pl01.left.toFixed() || ping01.left.toFixed()+1 == pl01.left.toFixed() || ping01.left.toFixed()+2 == pl01.left.toFixed() || ping01.left.toFixed()+3 == pl01.left.toFixed() || ping01.left.toFixed() == pl01.left.toFixed() || ping01.left.toFixed()-1 == pl01.left.toFixed() || ping01.left.toFixed()-2 == pl01.left.toFixed() || ping01.left.toFixed()-3 == pl01.left.toFixed() || ping01.left.toFixed()+4 == pl01.left.toFixed() || ping01.left.toFixed()+5 == pl01.left.toFixed() || ping01.left.toFixed()-5 == pl01.left.toFixed() || ping01.left.toFixed()-4 == pl01.left.toFixed() || ping01.left.toFixed()-4 == pl01.left.toFixed() || ping01.left.toFixed()-4 == pl01.left.toFixed() || ping01.left.toFixed()-8 == pl01.left.toFixed() || ping01.left.toFixed()-9 == pl01.left.toFixed() || ping01.left.toFixed()-10 == pl01.left.toFixed() || ping01.left.toFixed()-7 == pl01.left.toFixed() || ping01.left.toFixed()+6 == pl01.left.toFixed() || ping01.left.toFixed()+6 == pl01.left.toFixed() || ping01.left.toFixed()+7 == pl01.left.toFixed() || ping01.left.toFixed()+8 == pl01.left.toFixed() || ping01.left.toFixed()+9 == pl01.left.toFixed() || ping01.left.toFixed()+10 == pl01.left.toFixed()  ){
					if(ping01.top.toFixed() == pl01.top.toFixed() || ping01.top.toFixed()+1 == pl01.top.toFixed() || ping01.top.toFixed()+2 == pl01.top.toFixed() ||  ping01.top.toFixed()+3 == pl01.top.toFixed() || ping01.top.toFixed() == pl01.top.toFixed() || ping01.top.toFixed()-1 == pl01.top.toFixed() || ping01.top.toFixed()-2 == pl01.top.toFixed() ||  ping01.top.toFixed()-3 == pl01.top.toFixed() || ping01.top.toFixed()+4 == pl01.top.toFixed() || ping01.top.toFixed()+5 == pl01.top.toFixed() || ping01.top.toFixed()-5 == pl01.top.toFixed() || ping01.top.toFixed()-4 == pl01.top.toFixed() || ping01.top.toFixed()-5 == pl01.top.toFixed() || ping01.top.toFixed()-6 == pl01.top.toFixed() || ping01.top.toFixed()-7 == pl01.top.toFixed() || ping01.top.toFixed()-8 == pl01.top.toFixed() || ping01.top.toFixed()-9 == pl01.top.toFixed() || ping01.top.toFixed()-10 == pl01.top.toFixed() || ping01.top.toFixed()+10 == pl01.top.toFixed() || ping01.top.toFixed()+9 == pl01.top.toFixed() || ping01.top.toFixed()+8 == pl01.top.toFixed() || ping01.top.toFixed()+7 == pl01.top.toFixed() || ping01.top.toFixed()+11 == pl01.top.toFixed() || ping01.top.toFixed()+6 == pl01.top.toFixed() ){
						
						if(free==0){
							free++;
							clearInterval(FreeMoveBeyblade);
							setTimeout(NowtheyWillMovetoZone,200);

						}
					}
				}
			}

		}

	

	},1 )


}


function NowtheyWillMovetoZone(){
	                            let free=0;
	                            let Freezone=[0,2];
	                            let Freezone1=[4,6];
								let rand=Math.floor(Math.random() * Freezone.length );
	                            let rand1=Math.floor(Math.random() * Freezone.length );
	                            let nowarrey=Freezone[rand];
	                            let nowarrey1=Freezone1[rand1];
	                            myZone1=MoventFloorArrey[nowarrey];
	                            myZone2=MoventFloorArrey[nowarrey1];

	AskZoneThenMove=setInterval( ()=>{
		let Zn01=myZone1.position();
		let Zn02=myZone2.position();
		let pl01=player1.position();
		let pl02=player2.position();

	if(Zn01.left>pl01.left){
			$(player1).css({left:'+='+1   })

		}if(Zn01.top>pl01.top){
			$(player1).css({top:'+='+1   })

		}if(Zn01.left<pl01.left){
			$(player1).css({left:'-='+1   })

		}if(Zn01.top<pl01.top){
			$(player1).css({top:'-='+1   })

		}if(Zn02.top<pl02.top){
			$(player2).css({top:'-='+1   })

		}if(Zn02.top>pl02.top){
			$(player2).css({top:'+='+1   })

		}if(Zn02.left<pl02.left){
			$(player2).css({left:'-='+1   })

		}if(Zn02.left>pl02.left){
			$(player2).css({left:'+='+1   })	

		}

		if(Zn02.left.toFixed() == pl02.left.toFixed() || Zn02.left.toFixed()+1 == pl02.left.toFixed() || Zn02.left.toFixed()+2 == pl02.left.toFixed() || Zn02.left.toFixed()+3 == pl02.left.toFixed() || Zn02.left.toFixed() == pl02.left.toFixed() || Zn02.left.toFixed()-1 == pl02.left.toFixed() || Zn02.left.toFixed()-2 == pl02.left.toFixed() || Zn02.left.toFixed()-3 == pl02.left.toFixed() || Zn02.left.toFixed()-4 == pl02.left.toFixed() || Zn02.left.toFixed()-5 == pl02.left.toFixed() || Zn02.left.toFixed()+4 == pl02.left.toFixed() || Zn02.left.toFixed()+5 == pl02.left.toFixed() ){
			if(Zn02.top.toFixed() == pl02.top.toFixed() || Zn02.top.toFixed()+1 == pl02.top.toFixed() || Zn02.top.toFixed()+2 == pl02.top.toFixed() || Zn02.top.toFixed()+3 == pl02.top.toFixed() || Zn02.top.toFixed() == pl02.top.toFixed() || Zn02.top.toFixed()-1 == pl02.top.toFixed() || Zn02.top.toFixed()-2 == pl02.top.toFixed() || Zn02.top.toFixed()-3 == pl02.top.toFixed() || Zn02.top.toFixed()-4 == pl02.top.toFixed() || Zn02.top.toFixed()-5 == pl02.top.toFixed() || Zn02.top.toFixed()+4 == pl02.top.toFixed() || Zn02.top.toFixed()+5 == pl02.top.toFixed() ){
				if(Zn01.left.toFixed() == pl01.left.toFixed() || Zn01.left.toFixed()+1 == pl01.left.toFixed() || Zn01.left.toFixed()+2 == pl01.left.toFixed() || Zn01.left.toFixed()+3 == pl01.left.toFixed() || Zn01.left.toFixed() == pl01.left.toFixed() || Zn01.left.toFixed()-1 == pl01.left.toFixed() || Zn01.left.toFixed()-2 == pl01.left.toFixed() || Zn01.left.toFixed()-3 == pl01.left.toFixed() || Zn01.left.toFixed()-4 == pl01.left.toFixed() || Zn01.left.toFixed()-5 == pl01.left.toFixed() || Zn01.left.toFixed()+4 == pl01.left.toFixed() || Zn01.left.toFixed()+5 == pl01.left.toFixed() ){
					if(Zn01.top.toFixed() == pl01.top.toFixed() || Zn01.top.toFixed()+1 == pl01.top.toFixed() || Zn01.top.toFixed()+2 == pl01.top.toFixed() ||  Zn01.top.toFixed()+3 == pl01.top.toFixed() || Zn01.top.toFixed() == pl01.top.toFixed() || Zn01.top.toFixed()-1 == pl01.top.toFixed() || Zn01.top.toFixed()-2 == pl01.top.toFixed() ||  Zn01.top.toFixed()-3 == pl01.top.toFixed() || Zn01.top.toFixed()-4 == pl01.top.toFixed() || Zn01.top.toFixed()-5 == pl01.top.toFixed() || Zn01.top.toFixed()+4 == pl01.top.toFixed() || Zn01.top.toFixed()+5 == pl01.top.toFixed() ){
						
						if(free==0){
							free++;
							setTimeout(Chain01,200);
							function Chain01(){
								clearInterval(AskZoneThenMove);
								player1.css({left:0,top:0});
								player2.css({left:0,top:0});

								myZone1.append(player1);
								myZone2.append(player2);
								TrackingFolow="nofree";
								Animations01();

								
								if(turn==5 || turn==10){
									button0=0;
									turn=3;
									ResetingandTrackingSkills00();
									setTimeout(WhoHaveTurn,3000);
									
								}if(turn==6 || turn==11){
									button0=0;
									turn=1;
									ResetingandTrackingSkills01();
									
								}

								setTimeout(FixIfNothingHappen,15000);
							}

						}
					}
				}
			}

		}




	},1 );         


}

///Computer Turn

function ResetingandTrackingSkills00(){

	



	RapidFirePlayerTurned="True";
	RapidFireEnemyTurned="False";

	RapidFireCd();



	EnemyLongRangeSpellTurned="False";
	PlayerLongRangeSpellTurned="True";
	LongRangeSpellCd();


	EnemyPoisonTurned="OFF";
	PlayerPoisonTurned="ON";
	BlockAllCards();///111
    PoisonDmgOverTime();
    clearInterval(TrackerEnemyPoisonDmgOverTime);
    
}

///PLayer Turn
function ResetingandTrackingSkills01(){

	
	RapidFirePlayerTurned="False";
	RapidFireEnemyTurned="True";

	RapidFireCd();

	
	EnemyLongRangeSpellTurned="True";
	PlayerLongRangeSpellTurned="False";
	LongRangeSpellCd();

   
	EnemyPoisonTurned="ON";
    PlayerPoisonTurned="OFF";
    PoisonDmgOverTime();
	clearInterval(TimerCardTracker);////111
	clearInterval(TrackerPlayerPoisonDmgOverTime);
}

function FixIfNothingHappen(){
	
	if(CheckRot==0){
		CheckRot++;
		r21+=1;
	    r22+=1;

	    
	    setTimeout( ()=>{
	    if(CheckRot==1){

	     setTimeout( ()=>{
	     	if(CheckRot==2){
	     	  r21+=1;
	          r22+=1;	
	     	}
	     CheckRot++;	
	     },5000 );	

	     r21+=1;
	     r22+=1;
	    }	

	    CheckRot++;	

	    },5000 );
	    
	    

	}
	

	setTimeout( ()=>{

		r21+=2;
	    r22+=2;

	},13000 );


}