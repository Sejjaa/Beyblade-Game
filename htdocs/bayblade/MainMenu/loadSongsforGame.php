var MenuVideo=[];
var MenuVideo1=[];

//loading menu song and video
function loadMusicforGame(){
	MenuVideo1=[];
	MenuVideo=[];
	for(let i=0;i<4;i++){
		let loop=new Audio('./MainMenu/MenuSongs/Song'+i+'.mp4  ');
		let loop1='./MainMenu/MenuSongs/Song'+i+'.mp4 ';
		MenuVideo.push(loop);
		MenuVideo1.push(loop1);
	}

	
}