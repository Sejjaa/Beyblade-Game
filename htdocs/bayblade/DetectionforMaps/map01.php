var Tmap0;
var Tmap1;
var Tmap2;
var ArreyWidth0=[];
var ArreyWidth1=[];	
var ArreyWidth2=[];
var ArreyHeight0=[];
var ArreyHeight1=[];
var ArreyHeight2=[];
var stop001,stop002,stop003,stop004;
var loop1=0;

///This function will track pos evry 5 sec
var Allvillage;
var AllFild;
var AllMaps;


var AllvillageWidth,AllFildWidth,AllMapsWidth;
var MonstersSpawn;

function WhereIm() {
		
 AllvillageWidth=document.querySelectorAll('.village');
 AllFildWidth=document.querySelectorAll('.fild');
 AllMapsWidth=document.querySelectorAll('.map');

Allvillage=$('.village');
AllFild=$('.fild');
AllMaps=$('.map');


 	GetWidthofMaps();
	setTimeout(NowTraceAllThis,1000);

}


 function GetWidthofMaps(){
 	ArreyWidth0=[];
    ArreyWidth1=[];
    ArreyWidth2=[];
    ArreyHeight0=[];
    ArreyHeight1=[];
    ArreyHeight2=[];

    for(let i=0;i<AllvillageWidth.length;i++){
    	let w3=getComputedStyle(AllvillageWidth[i]).width;
    	let h3=getComputedStyle(AllvillageWidth[i]).height;
    	let w=parseInt(w3);
    	let h=parseInt(h3);

    	ArreyWidth0.push(w);
    	ArreyHeight0.push(h);
    }

        for(let i=0;i<AllFildWidth.length;i++){
    	let w3=getComputedStyle(AllFildWidth[i]).width;
    	let h3=getComputedStyle(AllFildWidth[i]).height;
    	let w=parseInt(w3);
    	let h=parseInt(h3);
    	ArreyWidth1.push(w);
    	ArreyHeight1.push(h);
    }

        for(let i=0;i<AllMapsWidth.length;i++){
    	let w3=getComputedStyle(AllMapsWidth[i]).width;
    	let h3=getComputedStyle(AllMapsWidth[i]).height;
    	let w=parseInt(w3);
    	let h=parseInt(h3);
    	ArreyWidth2.push(w);
    	ArreyHeight2.push(h);
    }

 }

var loop=0;
var ImIn;

/////////Tracker Who runing no stop for change

function NowTraceAllThis(){
        
		loop=0;

	    for(let i=0;i<AllvillageWidth.length;i++){
    	let igrac=player.position();
    	let ww=$(Allvillage[i]).position();
    	
    	

    	if(igrac.left+50 >= ww.left &&  igrac.left+50 <= ww.left+ArreyWidth0[i] || igrac.left <=  ww.left+ArreyWidth0[i] && igrac.left >= ww.left ){
    		if( igrac.top+50 >= ww.top && igrac.top+50 <= ww.top+ArreyHeight0[i] || igrac.top <= ww.top+ArreyHeight0[i] && igrac.top >= ww.top  ){
    			ImIn=Allvillage[i];
    			loop=i;
    		}

    	}

    	
    }

        for(let i=0;i<AllFildWidth.length;i++){

        let igrac=player.position();
    	let ww=$(AllFild[i]).position();

    	if(igrac.left+50 >= ww.left &&  igrac.left+50 <= ww.left+ArreyWidth1[i] || igrac.left <=  ww.left+ArreyWidth1[i] && igrac.left >= ww.left ){
    		if( igrac.top+50 >= ww.top && igrac.top+50 <= ww.top+ArreyHeight1[i] || igrac.top <= ww.top+ArreyHeight1[i] && igrac.top >= ww.top  ){
    			ImIn=AllFild[i];
    			loop=i;
    		}

    	}	

    	

    }

        for(let i=0;i<AllMapsWidth.length;i++){
    		
        let igrac=player.position();
    	let ww=$(AllMaps[i]).position();

    	if(igrac.left+50 >= ww.left &&  igrac.left+50 <= ww.left+ArreyWidth2[i] || igrac.left <=  ww.left+ArreyWidth2[i] && igrac.left >= ww.left ){
    		if( igrac.top+50 >= ww.top && igrac.top+50 <= ww.top+ArreyHeight2[i] || igrac.top <= ww.top+ArreyHeight2[i] && igrac.top >= ww.top  ){
    			ImIn=AllMaps[i];
    			loop=i;

    		}

    	}		

    	
    }


    LetsCheck();
	setTimeout(NowTraceAllThis,300);
}

    ///Checker where im 

function LetsCheck(){
	
	
    for(let i=0;i<=loop;i++){
		
        if(ImIn==AllMaps[i]){
            RunMapDet();


		}if(ImIn==AllFild[i]){
			RunFildDet();
		

        }if(ImIn==Allvillage[i]){
			RunVillageDet();
		}

	}


}
var LevelMap;

var ImruningDet01=false;    //for map


var ImruningDet30=false;    //for fild



var ImruningDet60=false;    //for village


///for all vilage


function RunVillageDet(){

        if(loop==0){
        
        if(ImruningDet60==false){
            CancelAllAnimationRequestforMaps();
            DrawBarierVillage0();
            LevelMap=$(Allvillage[loop]).text();
        }



    }///end of main loop 


}


function DrawBarierVillage0(){


    ImruningDet60=true;

    //Here going obj for det

    RunDetforVillage0();


}

 function RunDetforVillage0(){
    stop003=requestAnimationFrame(RunDetforVillage0);

    //here going blokcing and entering
    
 }








//for all filds

function RunFildDet(){

    if(loop==0){
        
        if(ImruningDet30==false){
            CancelAllAnimationRequestforMaps();
            DrawBarierFild0();
            LevelMap=$(AllFild[loop]).text();
        }



    }///end of main loop 


}///end of omain func


function DrawBarierFild0(){


    ImruningDet30=true;

    //Here going obj for det

    RunDetforFild0();


}

 function RunDetforFild0(){
    stop002=requestAnimationFrame(RunDetforFild0);

    //here going blokcing and entering
    
 }








///for All maps
function RunMapDet(){

	if(loop==0){
		
		if(ImruningDet01==false){
            CancelAllAnimationRequestforMaps();
			DrawBarierMap0();
			LevelMap=$(AllMaps[loop]).text();
	    }



	}///end of main loop 

}//end of main fun 



var Elements;
var BossSpawn=[];
function DrawBarierMap0(){

    BossSpawn=[];
	MonstersSpawn=[];
	ImruningDet01=true;
	$(body).append('<div class="MonstersSpawn MonstersSpawn-0">Grass</div>   ');
	MonstersSpawn=$('.MonstersSpawn');
	$(MonstersSpawn[0]).css({position:'absolute',left:1650,top:1570,width:50,height:50,backgroundImage: 'url(./EnemyMonster/mark.png)  ',backgroundSize:'contain',backgroundPosition:'center',backgroundRepeat:'no-repeat',fontSize:'0px'     });
   
    $(body).append('<div class="Boss BossSpawn-0">Grass</div>   ');
    BossSpawn=$('.Boss');
    $(BossSpawn[0]).css({position:'absolute',left:1400,top:1570,width:50,height:50,backgroundImage: 'url(./EnemyMonster/spider.png)  ',backgroundSize:'contain',backgroundPosition:'center',backgroundRepeat:'no-repeat',fontSize:'0px'     });


	RunDetforMap0();
  
  

}




function RunDetforMap0(){
	stop001=requestAnimationFrame(RunDetforMap0);

    
	for(let i=0;i<MonstersSpawn.length;i++){
		let pos=$(MonstersSpawn[i]).position();
		let pl=$(player).position();
		if(pl.left+50 >=pos.left && pl.left+50 <= pos.left+50 || pl.left <= pos.left+50 && pl.left >=pos.left ){
			if(pl.top+50 >=pos.top && pl.top+50 <= pos.top+50 || pl.top <= pos.top+50 && pl.top >= pos.top  ){
				if(loop1==0){
					loop1++;
					
				player.css({display:'none'});
				for(let i=0;i<Allvillage.length;i++){
					$(Allvillage[i]).css({ display:'none'})
				}

				for(let i=0;i<AllFild.length;i++){
					$(AllFild[i]).css({ display:'none'})
				}

				for(let i=0;i<AllMaps.length;i++){
					$(AllMaps[i]).css({ display:'none'})
				}

				for(let i=0;i<MonstersSpawn.length;i++){
					$(MonstersSpawn[i]).css({ display:'none'})
				}


                 for(let i=0;i<BossSpawn.length;i++){
                    $(BossSpawn[i]).css({ display:'none'})
                }


					cancelAnimationFrame(stop001);
					cancelAnimationFrame(WillCharaterMove);
					CreateOneEnemy();
				}

			}

		}

	}



    for(let i=0;i<BossSpawn.length;i++){
        let pos=$(BossSpawn[i]).position();
        let pl=$(player).position();
        if(pl.left+50 >=pos.left && pl.left+50 <= pos.left+50 || pl.left <= pos.left+50 && pl.left >=pos.left ){
            if(pl.top+50 >=pos.top && pl.top+50 <= pos.top+50 || pl.top <= pos.top+50 && pl.top >= pos.top  ){
                if(loop1==0){
                    loop1++;
                    
                player.css({display:'none'});
                for(let i=0;i<Allvillage.length;i++){
                    $(Allvillage[i]).css({ display:'none'})
                }

                for(let i=0;i<AllFild.length;i++){
                    $(AllFild[i]).css({ display:'none'})
                }

                for(let i=0;i<AllMaps.length;i++){
                    $(AllMaps[i]).css({ display:'none'})
                }

                for(let i=0;i<BossSpawn.length;i++){
                    $(BossSpawn[i]).css({ display:'none'})
                }

                for(let i=0;i<MonstersSpawn.length;i++){
                    $(MonstersSpawn[i]).css({ display:'none'})
                }



                    cancelAnimationFrame(stop001);
                    cancelAnimationFrame(WillCharaterMove);
                    CreateBoss();
                    
                }

            }

        }

    }



		

}


function CancelAllAnimationRequestforMaps(){
    ImruningDet01=false;
    ImruningDet30=false;  
    ImruningDet60=false;


    loop1=0;
    cancelAnimationFrame(stop001);
    cancelAnimationFrame(stop002);
    cancelAnimationFrame(stop003);
    cancelAnimationFrame(stop004);
}