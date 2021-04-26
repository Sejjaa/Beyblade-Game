///Editing Main Menu and this just for main menu

var body;
var ChangeImg;
function CreateMainMenu(){
///First loading img and songs
	loadMusicforGame();
	loadImageforMenu();
	body=$('body');
	setTimeout( ()=>{
		
		
		drawImgHolder();

		//playing audio on loading main menu then in this function it add new video song
		playfirstAudio();

	},100);

}

var ColorArray = ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6', 
		  '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
		  '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A', 
		  '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
		  '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC', 
		  '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
		  '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680', 
		  '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
		  '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3', 
		  '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF',
		  'red','gray','orange','lightblue','green','violet'];

var ImgHolder=[];
function drawImgHolder(){
	let rand1;
	let rand2;
	let rand3;
	let rand4;
	let x=window.innerWidth;
	let y=window.innerHeight;
	ImgHolder=[];

	for(let i=0;i<4;i++){
		body.append('<div class="ImgHolder ImgHolder-'+i+' "></div>  '  );
		let loop=$('.ImgHolder-'+i+'  ');
		ImgHolder.push(loop);
	}
	MenuAnimation00();
	//just drawing on border
	function MenuAnimation00(){
		let x1=x-x;
		let y1=y-y;
		BasicColorPick();
		ImgHolder[0].css({ width:'50px',position:'absolute',height:'50px',background:'black',left:x1,top:y1, });
		ImgHolder[1].css({ width:'50',position:'absolute',height:'50',background:'black',left:x-50,top:y1, });
		ImgHolder[2].css({ width:'50',position:'absolute',height:'50',background:'black',left:x1,top:y-50, });
		ImgHolder[3].css({ width:'50',position:'absolute',height:'50',background:'black',left:x-50,top:y-50, });

		setTimeout(MenuAnimation01,100);
	}

	///Moving into centar of border
	function MenuAnimation01(){
		let x1=x/2;
		let y1=y/2;
		let m=100;
		BasicColorPick();
		ImgHolder[0].css({ width:'200px',position:'absolute',height:'200px',background:'black',left:x1-m,top:y1-m,transition:'5s',background:rand1  });
		ImgHolder[1].css({ width:'200px',position:'absolute',height:'200px',background:'black',left:x1-m,top:y1-m,transition:'5s',background:rand2  });
		ImgHolder[2].css({ width:'200px',position:'absolute',height:'200px',background:'black',left:x1-m,top:y1-m,transition:'5s',background:rand3  });
		ImgHolder[3].css({ width:'200px',position:'absolute',height:'200px',background:'black',left:x1-m,top:y1-m,transition:'5s',background:rand4  });
		setTimeout(MenuAnimation02,2000);
	}

	///Making small margin 	
	function MenuAnimation02(){
		BasicColorPick();
		ImgHolder[0].css({ width:'200px',position:'absolute',height:'200px',background:'black',transition:'2s',marginTop:'-120px',marginLeft:'-120px',background:rand1  });
		ImgHolder[1].css({ width:'200px',position:'absolute',height:'200px',background:'black',transition:'2s',marginTop:'-120px',marginLeft:'120px',background:rand2    });
		ImgHolder[2].css({ width:'200px',position:'absolute',height:'200px',background:'black',transition:'2s',marginLeft:'-120px',marginTop:'120px',background:rand3    });
		ImgHolder[3].css({ width:'200px',position:'absolute',height:'200px',background:'black',transition:'2s',marginTop:'120px', marginLeft:'120px',background:rand4  });
	setTimeout(MenuAnimation03,1000);	
	}

	//Moving in first position where they are created
	function MenuAnimation03(){
		BasicColorPick();
		let x1=x-x;
		let y1=y-y;
		let box = 200;
		ImgHolder[0].css({ width:'200',position:'absolute',height:'200',background:rand1,left:x1,top:y1,transition:'5s',margin:'0px' });
		ImgHolder[1].css({ width:'200',position:'absolute',height:'200',background:rand2,left:x-box,top:y1,transition:'5s',margin:'0px' });
		ImgHolder[2].css({ width:'200',position:'absolute',height:'200',background:rand3,left:x1,top:y-box,transition:'5s',margin:'0px' });
		ImgHolder[3].css({ width:'200',position:'absolute',height:'200',background:rand4,left:x-box,top:y-box,transition:'5s',margin:'0px' });
		setTimeout(MenuAnimation04,1500);
	}

	///After moing in first position how big border will be
	function MenuAnimation04(){
		let x1=x-x;
		let y1=y-y;
		BasicColorPick();
		let width1=x/2;
		let height1=y/2;
		let box1 = width1;
		let box2=height1;

		ImgHolder[0].css({ width:width1,position:'absolute',height:height1,background:rand1,left:x1,top:y1,transition:'3s', });
		ImgHolder[1].css({ width:width1,position:'absolute',height:height1,background:rand2,left:x-box1,top:y1,transition:'3s', });
		ImgHolder[2].css({ width:width1,position:'absolute',height:height1,background:rand3,left:x1,top:y-box2,transition:'3s',margin:'0px' });
		ImgHolder[3].css({ width:width1,position:'absolute',height:height1,background:rand4,left:x-box1,top:y-box2,transition:'3s',margin:'0px' });

		setTimeout(MenuAnimation05,1000);

	}

////Puting img into holder
	function MenuAnimation05(){
		for(let i=0;i<ImgHolder.length;i++){
				let num=Math.floor(Math.random()* ImgArrey.length  );
				let randimg=ImgArrey[num];

				ImgHolder[i].css({ backgroundPosition: 'center',
	            backgroundSize: 'cover',backgroundImage:randimg,backgroundRepeat: 'no-repeat' });
			}


		ChangeImg= setInterval( ()=>{
			
			for(let i=0;i<ImgHolder.length;i++){
				let num=Math.floor(Math.random()* ImgArrey.length  );
				let randimg=ImgArrey[num];

				ImgHolder[i].css({ backgroundPosition: 'center',
	            backgroundSize: 'cover',backgroundImage:randimg,backgroundRepeat: 'no-repeat', });
			}

		

		},15000 );

		
	}

	//picking random color
	function BasicColorPick(){
		let num1=Math.floor(Math.random()* ColorArray.length  );
		let num2=Math.floor(Math.random()* ColorArray.length  );
		let num3=Math.floor(Math.random()* ColorArray.length  );
		let num4=Math.floor(Math.random()* ColorArray.length  );
		rand1=ColorArray[num1];
		rand2=ColorArray[num2];
		rand3=ColorArray[num3];
		rand4=ColorArray[num4];
	}




}
	
///Audio code blow 


	///play audio on load
	function playfirstAudio(){
		let rand=Math.floor(Math.random()* MenuVideo.length  );
		let onloadsong=MenuVideo[rand];
		onloadsong.play();
			
		setTimeout(AddVideoToMenu,18000  );
		setTimeout(AddButtonsForMainMenu,23000  );

var GameWillEnter;

///Add video to main menu
	function AddVideoToMenu(){
		onloadsong.pause();	
		let x=window.innerWidth;
	    let y=window.innerHeight;
		let rand1=Math.floor(Math.random()* MenuVideo1.length  );
		let loadvideo=MenuVideo1[rand1];
		body.append( '<video id="video" src="'+loadvideo+' "></video>');
		var video =document.getElementById('video');
		$(video).css({width:'920px',height:'450px',marginTop:'10px',marginLeft:x/2-460,position:'absolute',  });
		video.play();

		video.addEventListener("ended", ()=>{
			video.remove();
			AddVideoToMenu();

		} );	

		

	}

///add buttons for game exit and run game
function AddButtonsForMainMenu(){
	let x=window.innerWidth;
	let y=window.innerHeight;
	body.append('<button id="GameWillEnter">Enter in Game</button>');
	GameWillEnter=$('#GameWillEnter');
	$(GameWillEnter).css({position:'absolute',width:'150px',height:'50px',borderRadius:'17px',border:'5px solid blue',fontSize:'20px',fontFamily:'Tahoma',marginLeft:x/2-75,marginTop:y/2+140,background:'orange'   });

	/////we will pick draw game or pick character with who will you play future

    //on clikc draw game 
    $(GameWillEnter).on ('click', function xx(){

	$(GameWillEnter).remove();
	StopallinMainMenu();

});

}




function StopallinMainMenu(){
	video.remove();
	for(let i=0;i<4;i++){
		ImgHolder[i].remove();
	}

	setTimeout(checkagineissomethingruning,20000);

	function checkagineissomethingruning(){
		clearInterval(ChangeImg);
	}

	//asking new player on exist player
	AskGamedoCharacterExist();
	CreateSkillSound();
	CreateCombatSound();

}


}


