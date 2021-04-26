//detection when they hit 
var FromWhereYouAreEntering;
var ForDetectionAnimation;

var TrackingFolow;

function Detection00(){
	
	ForDetectionAnimation=requestAnimationFrame(Detection00);
	HitorNotHit();






}///end of function detection 

//Ask if two obj are hiting each others
function HitorNotHit(){

	let playerpostition01;
    let playerpostition02;
    let test1;
    let finalplayerposition1;
    let test2;
    let finalplayerposition2;

	if(TrackingFolow=="nofree"){

	playerpostition01=$(myZone1).position();
	playerpostition02=$(myZone2).position();
	
///Asking for first player position
	test1=$(player1).position();
	$(folow1).css({ left:test1.left+playerpostition01.left+15 ,top:test1.top+playerpostition01.top+15});
	finalplayerposition1=$(folow1).position();

///Asking for 2 player position
    test2=$(player2).position();
	$(folow2).css({ left:test2.left+playerpostition02.left+15 ,top:test2.top+playerpostition02.top+15});
	finalplayerposition2=$(folow2).position();	
	}else{

	test1=$(player1).position();
	$(folow1).css({ left:test1.left+15 ,top:test1.top+15});
	finalplayerposition1=$(folow1).position();
	test2=$(player2).position();
	$(folow2).css({ left:test2.left+15 ,top:test2.top+15});
	finalplayerposition2=$(folow2).position();
	}



	

	//Detection for left and right
	if(finalplayerposition1.left+100 >= finalplayerposition2.left && finalplayerposition1.left+100 <= finalplayerposition2.left+100 || 
	finalplayerposition1.left <= finalplayerposition2.left+100 && finalplayerposition1.left >= finalplayerposition2.left){
	///Detection for top and down
	if( finalplayerposition1.top+100 >= finalplayerposition2.top && finalplayerposition1.top+100 <= finalplayerposition2.top+100 ||
	finalplayerposition1.top <= finalplayerposition2.top+100 && finalplayerposition1.top >= finalplayerposition2.top){
		

		if(TrackingDetection==1){
			TrackingDetection=3;
			if(finalplayerposition1.left+100 >= finalplayerposition2.left && finalplayerposition1.left+100 <= finalplayerposition2.left+100 && finalplayerposition1.top+100 >= finalplayerposition2.top && finalplayerposition1.top+100 <= finalplayerposition2.top+100 ){
				clearAllBefforeAttack();
				FromWhereYouAreEntering="LeftTop";
				NormalAtttackAnimation();
			}if(finalplayerposition1.left <= finalplayerposition2.left+100 && finalplayerposition1.left >= finalplayerposition2.left && finalplayerposition1.top+100 >= finalplayerposition2.top && finalplayerposition1.top+100 <= finalplayerposition2.top+100 ){
				clearAllBefforeAttack();
			FromWhereYouAreEntering="RightTop";
				NormalAtttackAnimation();
			}if(finalplayerposition1.left+100 >= finalplayerposition2.left && finalplayerposition1.left+100 <= finalplayerposition2.left+100 && finalplayerposition1.top <= finalplayerposition2.top+100 && finalplayerposition1.top >= finalplayerposition2.top ){
				clearAllBefforeAttack();
				FromWhereYouAreEntering="LeftBottom";
				NormalAtttackAnimation();
			}if(finalplayerposition1.left <= finalplayerposition2.left+100 && finalplayerposition1.left >= finalplayerposition2.left && finalplayerposition1.top <= finalplayerposition2.top+100 && finalplayerposition1.top >= finalplayerposition2.top){
				clearAllBefforeAttack();
				FromWhereYouAreEntering="RightBottom";
				NormalAtttackAnimation();
			}


		}


	}	


	}	

	let x=window.innerWidth;
	let y=window.innerHeight;

	



}