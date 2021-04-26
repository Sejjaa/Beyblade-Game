var Healt;
var EnemyHealt;
var SkillHolder;
var Buttons;
var EnemyHealtAni;
var PlayerHealtAni;
var CardHolder;
var Cards;
var BlookCard=0;
var TimerCard;
var AllTypeArrey=['Fire','Grass','Winter','Wather','Rook','Darknes','Wild'];

var MapTypeUrlArrey=['url(./Cards/Lavamap.jpg)','url(./Cards/Grassmap.jpg)','url(./Cards/Wintermap.jpg)','url(./Cards/Watermap.jpg)','url(./Cards/Rookmap.jpg)','url(./Cards/Darknesmap.jpg)','url(./Cards/Wildmap.jpg)',];

var BackgroundColor=['red','green','lightblue','blue','gray','#615a59','gold' ];
function AddSkillsUll(){
	body.append('<div id="Healt">'+PlayerBeyblade.Name+' : '+PlayerBeyblade.Healt+'</div> ');
	body.append('<div id="EnemyHealt">'+EnemyArrey[0].Name+' : '+EnemyArrey[0].Healt+'</div> ');
	body.append('<div id="SkillHolder"></div> ');
	Healt=$('#Healt');
	SkillHolder=$('#SkillHolder');
	EnemyHealt=$('#EnemyHealt');

	Healt.css({position:'absolute',width:400,height:'25px',top:'1%',left:'2%',textAlign:'center' ,background:'lightblue',borderRadius:'25px',  })
	Healt.append('<div id="PlayerHealtAni"></div>');
	PlayerHealtAni=$('#PlayerHealtAni');
	PlayerHealtAni.css({position:'absolute',width:'100%',height:'25px' ,top:'0px', backgroundColor:'red',borderRadius:'25px',   });
	PlayerHealtAni.text(' '+PlayerBeyblade.Name+' : '+PlayerBeyblade.Healt+' ');

	EnemyHealt.css({position:'absolute',width:400,height:'25px',top:'1%',left:'65%',textAlign:'center',marginLeft:-10,background:'lightblue',borderRadius:'25px' })
	EnemyHealt.append('<div id="EnemyHealtAni"></div>');
	
	EnemyHealtAni=$('#EnemyHealtAni');
	EnemyHealtAni.css({position:'absolute',width:'100%',height:'25px',top:'0px' , background:'red',borderRadius:'25px'   });
	EnemyHealtAni.text(''+EnemyArrey[0].Name+' : '+EnemyArrey[0].Healt+'');

	SkillHolder.css({position:'absolute',width:450,height:'45px',borderRadius:'25px',background:'gray',top:'92.7%',left:'34%',textAlign:'center'  }) ;

	for(let i=0;i<5;i++){
		SkillHolder.append(' <div class="skill skill-'+i+'"></div> ');


	}


	
	setTimeout(afteredit,200);

	let x=16;
	function afteredit(){
		let something=$('.skill');
	 Buttons=$('.skill');

		$(something[0]).css({
			position:'absolute',
			width:'70px',
			height:'40px',
			marginLeft:x,
			marginTop:'2.5px',
			background:'red',
			userSelect: 'none',

		});	

		$(something[1]).css({
			position:'absolute',
			width:'70px',
			height:'40px',
			marginLeft: x+= 86,
			marginTop:'2.5px',
			background:'red',
			userSelect: 'none',

		});

		$(something[2]).css({
			position:'absolute',
			width:'70px',
			height:'40px',
			marginLeft: x+= 86,
			marginTop:'2.5px',
			background:'red',
			userSelect: 'none',

		});	

		$(something[3]).css({
			position:'absolute',
			width:'70px',
			height:'40px',
			marginLeft: x+= 86,
			marginTop:'2.5px',
			background:'red',
			userSelect: 'none',

		});	

		$(something[4]).css({
			position:'absolute',
			width:'70px',
			height:'40px',
			marginLeft: x+= 86,
			marginTop:'2.5px',
			background:'red',
			userSelect: 'none',

		});			

	$(something[0]).text(PlayerBeyblade.Skill0);
	$(something[1]).text(PlayerBeyblade.Skill1);
	$(something[2]).text(PlayerBeyblade.Skill2);
	$(something[3]).text(PlayerBeyblade.Skill3);
	$(something[4]).text(PlayerBeyblade.Skill4);	

	setTimeout(onlyonetime,2000);

	function onlyonetime(){
		for(let i=0;i<something.length;i++){
			$(something[i]).on('click',WhatisClicked);
		}

	}
		

	}


	body.append('<div id="CardHolder"></div>  ');
	
	CardHolder=$('#CardHolder');
	CardHolder.css({position:'absolute',width:'200px',top:'71%',left:'3.4%',height:'150px',borderRadius:'50%',border:'2px solid black',textAlign:'center',backgroundColor:'orange' });

	for(let i=0;i<7;i++){
		CardHolder.append('<div class="Cards Card-'+i+' "></div>  ');	
	}
	
	Cards=$('.Cards');

    $(Cards[0]).css({borderRadius:'50%',position:'absolute',width:'70px',height:'70px',border:'1px solid black',left:'-35px',top:'35px' });
	$(Cards[1]).css({borderRadius:'50%',position:'absolute',width:'70px',height:'70px',border:'1px solid black',left:'20px',top:'-30px'  });
	
	$(Cards[2]).css({borderRadius:'50%',position:'absolute',width:'70px',height:'70px',border:'1px solid black',left:'105px',top:'-30px' });
	$(Cards[3]).css({borderRadius:'50%',position:'absolute',width:'70px',height:'70px',border:'1px solid black',left:'165px',top:'35px' });
	
	$(Cards[4]).css({borderRadius:'50%',position:'absolute',width:'70px',height:'70px',border:'1px solid black',left:'105px',top:'105px' });
	$(Cards[5]).css({borderRadius:'50%',position:'absolute',width:'70px',height:'70px',border:'1px solid black',left:'20px',top:'105px' });	

	$(Cards[6]).css({borderRadius:'50%',position:'absolute',width:'70px',height:'70px',border:'1px solid black',left:'65px',top:'35px' });

	

	WhatTypeisStronger();

	GiveCardText();



	$(Cards).on('click',ChangeType);


}

function GiveCardText(){
	for(let i=0;i<Cards.length;i++){
	$(Cards[i]).text(AllTypeArrey[i]);
	$(Cards[i]).css({backgroundColor:BackgroundColor[i] , backgroundImage:MapTypeUrlArrey[i],backgroundPosition:'center',backgroundSize:'contain',backgroundRepeat:'no-Repeat'   });
	
	}

}



function ChangeType(){
		console.log(TimerCard);

	if(BlookCard==0){
		BlookCard++;
	if( $(this).text()==$(Cards[0]).text()  ){
		
		Combatzone.css({ background:MapTypeUrlArrey[0],backgroundSize:'cover',backgroundRepeat:'no-repeat',backgroundPosition:'center', })
		

	}if( $(this).text()==$(Cards[1]).text()  ){
		
		Combatzone.css({ background:MapTypeUrlArrey[1],backgroundSize:'cover',backgroundRepeat:'no-repeat',backgroundPosition:'center', })



	}if( $(this).text()==$(Cards[2]).text()  ){

		Combatzone.css({ background:MapTypeUrlArrey[2],backgroundSize:'cover',backgroundRepeat:'no-repeat',backgroundPosition:'center', })

	}if( $(this).text()==$(Cards[3]).text()  ){

		Combatzone.css({ background:MapTypeUrlArrey[3],backgroundSize:'cover',backgroundRepeat:'no-repeat',backgroundPosition:'center', })

	}if( $(this).text()==$(Cards[4]).text()  ){

		Combatzone.css({ background:MapTypeUrlArrey[4],backgroundSize:'cover',backgroundRepeat:'no-repeat',backgroundPosition:'center', })

	}if( $(this).text()==$(Cards[5]).text()  ){

		Combatzone.css({ background:MapTypeUrlArrey[5],backgroundSize:'cover',backgroundRepeat:'no-repeat',backgroundPosition:'center', })

	}if( $(this).text()==$(Cards[6]).text()  ){

		Combatzone.css({ background:MapTypeUrlArrey[6],backgroundSize:'cover',backgroundRepeat:'no-repeat',backgroundPosition:'center', })

	}

	TimerCard=150;
	PlayerBeyblade.Type=$(this).text();
	
	if(TimerCard>0){
		for(let i=0;i<Cards.length;i++){
		$(Cards[i]).css({background:'black'   });
	}

	WhatTypeisStronger();

	}

	}///end of main if



}

var TimerCardTracker;

function BlockAllCards(){
	console.log(TimerCard);

	if(TimerCard>0){
		for(let i=0;i<Cards.length;i++){
		$(Cards[i]).css({background:'black'   });
	}

	WhatTypeisStronger();

	}

TimerCardTracker=setInterval( ()=>{

	TimerCard+=-1;
	
	if(TimerCard<=0){
		clearInterval(TimerCardTracker);
		BlookCard=0;
		GiveCardText();
	}

},1000 );


}