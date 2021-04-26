var AllBattleSongs=[];

var BattleSong1;
var BattleSong2;
var BattleSong3;
var BattleSong4;
var BattleSong5;

var Victory1;
var Victory2;
function CreateCombatSound(){
	AllBattleSongs=[];
	BattleSong1=new Audio('./combat/CombatSound/Battle1.ogg');
	BattleSong2=new Audio('./combat/CombatSound/Battle3.ogg');
	BattleSong3=new Audio('./combat/CombatSound/Battle6.ogg');
	BattleSong4=new Audio('./combat/CombatSound/Battle9.ogg');
	BattleSong5=new Audio('./combat/CombatSound/Dungeon7.ogg');
	Victory1=new Audio('./combat/CombatSound/Victory1.ogg');
	Victory2=new Audio('./combat/CombatSound/Victory2.ogg');

	AllBattleSongs.push(BattleSong1,BattleSong2,BattleSong3,BattleSong4,BattleSong5);

}