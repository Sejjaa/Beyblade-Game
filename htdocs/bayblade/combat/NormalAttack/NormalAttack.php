///Normal attack 

function NormalAttack(){
	clearAllBefforeAttack();

	let free=0;
	let playerpostition01=$(myZone1).position();
	let playerpostition02=$(myZone2).position();

///Asking for first player position
	let test1=$(player1).position();
	let test2=$(player2).position();  
	$(player1).css({left:test1.left+playerpostition01.left+15 ,top:test1.top+playerpostition01.top+15  });
	$(player2).css({left:test2.left+playerpostition02.left+15 ,top:test2.top+playerpostition02.top+15  }); 	
	  TrackingFolow="free";
	  Combatzone.append(player1);
	  Combatzone.append(player2);
	  
	 
	                            let Freezone=[1,3];
	                            let Freezone1=[5,7];
								let rand=Math.floor(Math.random() * Freezone.length );
	                            let rand1=Math.floor(Math.random() * Freezone.length );
	                            let nowarrey=Freezone[rand];
	                            let nowarrey1=Freezone1[rand1];
	                            myZone1=MoventFloorArrey[nowarrey];
	                            myZone2=MoventFloorArrey[nowarrey1];

	NormalAttackMove=setInterval( ()=>{

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

		if(Zn02.left.toFixed() == pl02.left.toFixed() || Zn02.left.toFixed()+1 == pl02.left.toFixed() || Zn02.left.toFixed()+2 == pl02.left.toFixed() || Zn02.left.toFixed()+3 == pl02.left.toFixed() || Zn02.left.toFixed() == pl02.left.toFixed() || Zn02.left.toFixed()-1 == pl02.left.toFixed() || Zn02.left.toFixed()-2 == pl02.left.toFixed() || Zn02.left.toFixed()-3 == pl02.left.toFixed() || Zn02.left.toFixed()-4 == pl02.left.toFixed() || Zn02.left.toFixed()-5 == pl02.left.toFixed() || Zn02.left.toFixed()+4 == pl02.left.toFixed() || Zn02.left.toFixed()+5 == pl02.left.toFixed() || Zn02.left.toFixed()+6 == pl02.left.toFixed() || Zn02.left.toFixed()-6 == pl02.left.toFixed() || Zn02.left.toFixed()-7 == pl02.left.toFixed() || Zn02.left.toFixed()-8 == pl02.left.toFixed() || Zn02.left.toFixed()-9 == pl02.left.toFixed() || Zn02.left.toFixed()-10 == pl02.left.toFixed() || Zn02.left.toFixed()+7 == pl02.left.toFixed() || Zn02.left.toFixed()+8 == pl02.left.toFixed() || Zn02.left.toFixed()+9 == pl02.left.toFixed() || Zn02.left.toFixed()+10 == pl02.left.toFixed() ){
			if(Zn02.top.toFixed() == pl02.top.toFixed() || Zn02.top.toFixed()+1 == pl02.top.toFixed() || Zn02.top.toFixed()+2 == pl02.top.toFixed() || Zn02.top.toFixed()+3 == pl02.top.toFixed() || Zn02.top.toFixed() == pl02.top.toFixed() || Zn02.top.toFixed()-1 == pl02.top.toFixed() || Zn02.top.toFixed()-2 == pl02.top.toFixed() || Zn02.top.toFixed()-3 == pl02.top.toFixed() || Zn02.top.toFixed()-4 == pl02.top.toFixed() || Zn02.top.toFixed()-5 == pl02.top.toFixed() || Zn02.top.toFixed()+4 == pl02.top.toFixed() || Zn02.top.toFixed()+5 == pl02.top.toFixed() || Zn02.top.toFixed()+6 == pl02.top.toFixed() || Zn02.top.toFixed()-7 == pl02.top.toFixed() || Zn02.top.toFixed()-8 == pl02.top.toFixed() || Zn02.top.toFixed()-9 == pl02.top.toFixed()  || Zn02.top.toFixed()-10 == pl02.top.toFixed() || Zn02.top.toFixed()+6 == pl02.top.toFixed() || Zn02.top.toFixed()+7 == pl02.top.toFixed() || Zn02.top.toFixed()+8 == pl02.top.toFixed() || Zn02.top.toFixed()+9 == pl02.top.toFixed() || Zn02.top.toFixed()+10 == pl02.top.toFixed() || Zn02.top.toFixed()-6 == pl02.top.toFixed() ){
				if(Zn01.left.toFixed() == pl01.left.toFixed() || Zn01.left.toFixed()+1 == pl01.left.toFixed() || Zn01.left.toFixed()+2 == pl01.left.toFixed() || Zn01.left.toFixed()+3 == pl01.left.toFixed() || Zn01.left.toFixed() == pl01.left.toFixed() || Zn01.left.toFixed()-1 == pl01.left.toFixed() || Zn01.left.toFixed()-2 == pl01.left.toFixed() || Zn01.left.toFixed()-3 == pl01.left.toFixed() || Zn01.left.toFixed()-4 == pl01.left.toFixed() || Zn01.left.toFixed()-5 == pl01.left.toFixed() || Zn01.left.toFixed()+4 == pl01.left.toFixed() || Zn01.left.toFixed()+5 == pl01.left.toFixed() || Zn01.left.toFixed()+6 == pl01.left.toFixed() || Zn01.left.toFixed()-6 == pl01.left.toFixed() || Zn01.left.toFixed()-7 == pl01.left.toFixed() || Zn01.left.toFixed()-8 == pl01.left.toFixed() || Zn01.left.toFixed()-9 == pl01.left.toFixed() || Zn01.left.toFixed()-10 == pl01.left.toFixed() || Zn01.left.toFixed()+7 == pl01.left.toFixed() || Zn01.left.toFixed()+8 == pl01.left.toFixed() || Zn01.left.toFixed()+9 == pl01.left.toFixed() || Zn01.left.toFixed()+10 == pl01.left.toFixed() ){
					if(Zn01.top.toFixed() == pl01.top.toFixed() || Zn01.top.toFixed()+1 == pl01.top.toFixed() || Zn01.top.toFixed()+2 == pl01.top.toFixed() ||  Zn01.top.toFixed()+3 == pl01.top.toFixed() || Zn01.top.toFixed() == pl01.top.toFixed() || Zn01.top.toFixed()-1 == pl01.top.toFixed() || Zn01.top.toFixed()-2 == pl01.top.toFixed() ||  Zn01.top.toFixed()-3 == pl01.top.toFixed() || Zn01.top.toFixed()-4 == pl01.top.toFixed() || Zn01.top.toFixed()-5 == pl01.top.toFixed() || Zn01.top.toFixed()+4 == pl01.top.toFixed() || Zn01.top.toFixed()+5 == pl01.top.toFixed() || Zn01.top.toFixed()+6 == pl01.top.toFixed() || Zn01.top.toFixed()-6 == pl01.top.toFixed() || Zn01.top.toFixed()-7 == pl01.top.toFixed() || Zn01.top.toFixed()-8 == pl01.top.toFixed() || Zn01.top.toFixed()-9 == pl01.top.toFixed() || Zn01.top.toFixed()-10 == pl01.top.toFixed() || Zn01.top.toFixed()+7 == pl01.top.toFixed() || Zn01.top.toFixed()+8 == pl01.top.toFixed() || Zn01.top.toFixed()+9 == pl01.top.toFixed() || Zn01.top.toFixed()+10 == pl01.top.toFixed() ){
						
						if(free==0){
							free++;
							setTimeout(Chain02,1000);
							function Chain02(){
								clearInterval(NormalAttackMove);
								player1.css({left:0,top:0});
								player2.css({left:0,top:0});
								TrackingFolow="nofree";
								myZone1.append(player1);
								myZone2.append(player2);
								setTimeout(UpdatingVarforDetectionandCal,200);

								Animations01();
							}
							}

						}
					}
				}
			}

		
	

	




	},10 )  



	
}///main end normal attack