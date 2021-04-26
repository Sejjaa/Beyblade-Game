var vs;
/////All combat function for one game to run 
function setupcombat(){

	let x=window.innerWidth;
	let y=window.innerHeight;
	
	DisplayEnemys();
	function DisplayEnemys(){


		body.append( '<div id="background"></div>  ' );
		var background=$('#background');
		background.css({width:x,height:y,backgroundPosition: 'center',background:'black',backgroundSize: 'cover',backgroundImage:"url(./DisplayVsEnemy/Dragons.png)" ,backgroundRepeat:'no-Repeat' })
		background.append('<div class="playerdisplay"></div>  ');
		background.append('<div class="enemydisplay"></div>  ');
		var display1=$('.playerdisplay');
		var display2=$('.enemydisplay');
		display1.css({position:'absolute',width:400,height:400,left:'14%',backgroundPosition: 'center',backgroundSize: 'contain',backgroundImage:"url(./DisplayVsEnemy/Fire.png)" ,backgroundRepeat:'no-Repeat' });
		display2.css({position:'absolute',width:400,top:'37%',height:400,left:'57%',backgroundPosition: 'center',backgroundSize: 'contain',backgroundImage:"url(./DisplayVsEnemy/Mountains.png)" ,backgroundRepeat:'no-Repeat' });

		display1.append('<div class="display3"></div>  ');
		display2.append('<div class="display4"></div>  ');

	    var display3=$('.display3');
		var display4=$('.display4');

		display3.css({position:'absolute',width:200,top: '25%',height:200,left:'25%',backgroundPosition: 'center',backgroundSize: 'contain', backgroundImage:PlayerBeyblade.url , backgroundRepeat:'no-Repeat' });
		display4.css({position:'absolute',width:200,top:'25%',height:200,left:'25%',backgroundPosition: 'center',backgroundSize: 'contain', backgroundImage:EnemyArrey[0].url , backgroundRepeat:'no-Repeat' });
		

		setTimeout(DisplayVs,1500);

		function DisplayVs(){

		background.append('<div class="vs"></div> ');	
		vs=$('.vs');

		vs.css({position:'absolute',width:200,top:'45%',height:200,left:'45%',backgroundPosition: 'center',backgroundSize: 'contain', backgroundImage:'url(./DisplayVsEnemy/vs2.png)' , backgroundRepeat:'no-Repeat'   })

		setTimeout(GiveTurn,1500);
		}


		function GiveTurn(){
			let rand=Math.floor(Math.random()*5  );

			if(rand==0 || rand==3 || rand==5){
				turn=10;
			}if(rand==1 || rand==4 || rand==2){
				turn=11;
			}else{
				turn=10;
			}

		}
		
		

		function DeleteAllThis(){
			
			background.remove();

			display1.remove();
			display2.remove();
			display3.remove();
			display4.remove();
			vs.remove();
			SetUpCombatZone();  //when wana enter in combat
		}

		setTimeout(DeleteAllThis,2000);
	}

	











			

}