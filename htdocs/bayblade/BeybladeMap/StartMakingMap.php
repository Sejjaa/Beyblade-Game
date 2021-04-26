// We are starting to create Map 
var map1;
var body;


function StartMakingMap(){
	
	MakeVillage00();
	
}

var village0;
var map0;
var fild0;
function MakeVillage00(){

	body.append("<div class='village village-0'></div>  ");
	village0=$('.village-0');
	village0.css({position:'absolute',width:1000,height:600,top:2000,backgroundImage:'url(./Maps/village0.jpg) ',  })
	body.append('<div class="map map-0">5</div>  ');
	map0=$('.map-0');
	map0.css({position:'absolute',width:2000,height:2000,backgroundImage:'url(./Maps/map01.jpg) ',fontSize:'0px' })
	body.append('<div class="fild fild-0"></div> ');
	fild0=$('.fild-0');
	fild0.css({position:'absolute',width:600,height:600,backgroundImage:'url(./Maps/openfild0.jpg) ',top:2000,left:1000  })



	

	createCharacter();


	setTimeout(WhereIm,3000);

}	