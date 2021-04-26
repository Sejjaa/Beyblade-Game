var button0;
var TrackerButton;
function WhatisClicked(){
	
	if(this==Buttons[0]){
	
		button0=$(Buttons[0]).text();
		TrackerButtons=this;
		WhoHaveTurn();
		
	}if(this==Buttons[1]){
		button0=$(Buttons[1]).text();
		TrackerButton=this;
		WhoHaveTurn();
		
	}if(this==Buttons[2]){
		button0=$(Buttons[2]).text();
		TrackerButton=this;
		WhoHaveTurn();
		
	}if(this==Buttons[3]){
		button0=$(Buttons[3]).text();
		TrackerButton=this;
		WhoHaveTurn();
		
	}

	

}