var EnemyBaybladeName=["BeybladeMageEarth","BladeorHide","DragonBlue","DragonBorn","GodofBurst","HeavenPegasus","HeavyFang","LethalTempoCuter","MediumCuter","PureCloud","RedBurst","RoseDrake","Samuray","TakarZxeno","ValkyrieSlash"];
var EnemyMainBeybladeUrl=[  'url(./beybladeimg/BeybladeMageEarth.png )', 'url(./beybladeimg/BladeorHide.png )', 'url(./beybladeimg/DragonBlue.png )', 'url(./beybladeimg/DragonBorn.png )', 'url(./beybladeimg/GodofBurst.png )', 'url(./beybladeimg/HeavenPegasus.png )', 'url(./beybladeimg/HeavyFang.png )', 'url(./beybladeimg/LethalTempoCuter.png )', 'url(./beybladeimg/MediumCuter.png )', 'url(./beybladeimg/PureCloud.png )', 'url(./beybladeimg/RedBurst.png )', 'url(./beybladeimg/RoseDrake.png )', 'url(./beybladeimg/Samuray.png )', 'url(./beybladeimg/TakarZxeno.png )', 'url(./beybladeimg/ValkyrieSlash.png )', ];

var EnemyArrey=[];

var AllSkills=['Poison','Rapid Fire','LongRangeSpell'];


var AllTypeArrey=['Fire','Grass','Winter','Wather','Rook','Darknes','Wild'];
var EnemyHaveSkill=[];
var EnemySkillsArrey=[];

function CreateBoss(){
	EnemyArrey=[];
	EnemyHaveSkill=[];
	let rand1=Math.floor(Math.random()*EnemyBaybladeName.length );
		   
		    EnemyUrl=EnemyMainBeybladeUrl[rand1];
		

	var Boss={
		Name:'Boss',
		url:EnemyUrl,
		Attack:40,
		Healt:310,
		Defence:21,
		MagicPower:40,
		Level:7,
		Type:"Grass",
		Skill0:"Attack",
		Skill1:'Poison',
		Skill2:'Rapid Fire',
		Skill3:"LongRangeSpell",
		Skill4:'none',
		Exp:2000,
	}

	EnemyArrey.push(Boss);

	EnemyHaveSkill=['Attack','Poison','Rapid Fire','LongRangeSpell'];

	setTimeout( ()=>{

		setupcombat();
		UpdateFakeVar();

	},500 );


}






///global stat
var r1;
var r2;
var r3;
var r4;
var r5;
var r6;
var r7;
var r8;
var r9;
var r10;
var r11;
var r12;
var EnemySkillLength;
var EnemyType;

var EnemyArrey=[];
class Beyblade {
	constructor(Name,url,Attack,Healt,Defence,MagicPower,Level,Type,Skill0,Skill1,Skill2,Skill3,Skill4,Exp){
		this.Name=Name;
		this.url=url;
		this.Attack=Attack;
		this.Healt=Healt;
		this.Defence=Defence;
		this.MagicPower=MagicPower;
		this.Level=Level;
		this.Type=Type;
		this.Skill0=Skill0;
		this.Skill1=Skill1;
		this.Skill2=Skill2;
		this.Skill3=Skill3;
		this.Skill4=Skill4;
		this.Exp=Exp;
		
	}
}

       
		
		let PickedEnemy;
		let PickedEnemyUrl;
		let EnemyName;
		let EnemyUrl;

function CreateOneEnemy(){
	EnemyArrey=[];
	EnemyHaveSkill=[];
	
		
		let level = parseInt(LevelMap);

		let rand1=Math.floor(Math.random()*EnemyBaybladeName.length );
		    EnemyName=EnemyBaybladeName[rand1];
		    EnemyUrl=EnemyMainBeybladeUrl[rand1];
		let rand2=Math.floor(Math.random()*AllTypeArrey.length );	
		EnemyType=AllTypeArrey[rand2];
		GiveStatus();


}

var Diff;

function GiveStatus(){

	if(PlayerBeyblade.Level <=2 && PlayerBeyblade.Level >=0  ){

	 r1=Math.floor(Math.random()*15)+1;
	 r2=Math.floor(Math.random()*20)+20;
	 r3=Math.floor(Math.random()*5);
	 r4=Math.floor(Math.random()*15);
	 r5=Math.floor(Math.random()*5);
	 r6=EnemyType;
	 r7="Attack";
	 r8="none";
	 r9="none";
	 r10="none";
	 r11="none";	
	 r12=Math.floor(Math.random()*100)+50;	
	Diff=0;

	GiveSkills();

	}else if(PlayerBeyblade.Level >=2 && PlayerBeyblade.Level <= 5  ){

	 r1=Math.floor(Math.random()*25);
	 r2=Math.floor(Math.random()*40)+40;
	 r3=Math.floor(Math.random()*15);
	 r4=Math.floor(Math.random()*25);
	 r5=Math.floor(Math.random()*5);
	 r6=EnemyType;
	 r7="Attack";
	 r8="none";
	 r9="none";
	 r10="none";
	 r11="none";	
	 r12=Math.floor(Math.random()*200)+100;	
	 Diff=2;
	 GiveSkills();
	}else if(PlayerBeyblade.Level >=5 && PlayerBeyblade.Level <= 8  ){

	 r1=Math.floor(Math.random()*40)+10;
	 r2=Math.floor(Math.random()*180)+50;
	 r3=Math.floor(Math.random()*35)+5;
	 r4=Math.floor(Math.random()*45)+10;
	 r5=Math.floor(Math.random()*5);
	 r6=EnemyType;
	 r7="Attack";
	 r8="none";
	 r9="none";
	 r10="none";
	 r11="none";	
	 r12=Math.floor(Math.random()*230)+150;
	 Diff=5;
	 GiveSkills();	
	}
		


}


function GiveSkills(){
	EnemyHaveSkill.push(r7);
	var ThisMonster = new Beyblade( EnemyName,EnemyUrl,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12 );
	EnemyArrey.push(ThisMonster);
	
	if(1==1){
		let r1000=Math.floor(Math.random()*Diff);
		let r1001=Math.floor(Math.random()*Diff);
		let r1002=Math.floor(Math.random()*Diff);
		let r1003=Math.floor(Math.random()*Diff);
		
		if(r1000==1 || r1000==4 ){
			let s1=Math.floor(Math.random()*AllSkills.length);
			EnemyHaveSkill.push( AllSkills[s1] );

		}if(r1001==1 || r1001==4){
			let s2=Math.floor(Math.random()*AllSkills.length);
			EnemyHaveSkill.push( AllSkills[s2] );
			
		}if(r1002==1 || r1002==4){
			let s3=Math.floor(Math.random()*AllSkills.length);
			EnemyHaveSkill.push( AllSkills[s3] );
		}if(r1003==1 || r1003==4){
			let s4=Math.floor(Math.random()*AllSkills.length);
			EnemyHaveSkill.push( AllSkills[s4] );
		}

	}

	if(EnemyHaveSkill.length==2){
		EnemyArrey[0].Skill1=EnemyHaveSkill[1];
	}if(EnemyHaveSkill.length==3){
		EnemyArrey[0].Skill1=EnemyHaveSkill[1];
		EnemyArrey[0].Skill2=EnemyHaveSkill[2];
	}if(EnemyHaveSkill.length==4){
		EnemyArrey[0].Skill1=EnemyHaveSkill[1];
		EnemyArrey[0].Skill2=EnemyHaveSkill[2];
		EnemyArrey[0].Skill3=EnemyHaveSkill[3];
	}if(EnemyHaveSkill.length==5){
		EnemyArrey[0].Skill1=EnemyHaveSkill[1];
		EnemyArrey[0].Skill2=EnemyHaveSkill[2];
		EnemyArrey[0].Skill3=EnemyHaveSkill[3];
		EnemyArrey[0].Skill4=EnemyHaveSkill[4];
	}

			
	
	if(EnemyArrey[0].Skill4==EnemyArrey[0].Skill3 || EnemyArrey[0].Skill4==EnemyArrey[0].Skill2 || EnemyArrey[0].Skill4==EnemyArrey[0].Skill1){
		EnemyArrey[0].Skill4="none";
	}if(EnemyArrey[0].Skill3==EnemyArrey[0].Skill4 || EnemyArrey[0].Skill3==EnemyArrey[0].Skill2 || EnemyArrey[0].Skill3==EnemyArrey[0].Skill1){
		EnemyArrey[0].Skill3="none";
	}if(EnemyArrey[0].Skill2==EnemyArrey[0].Skill4 || EnemyArrey[0].Skill2==EnemyArrey[0].Skill3 || EnemyArrey[0].Skill2==EnemyArrey[0].Skill1){
		EnemyArrey[0].Skill2="none";
	}
	
	if(EnemyArrey[0].Skill4=="none"){
		EnemyHaveSkill.splice(4,1);
	}if(EnemyArrey[0].Skill3=="none"){
		EnemyHaveSkill.splice(3,1);
	}if(EnemyArrey[0].Skill2=="none"){
		EnemyHaveSkill.splice(2,1);
	}if(EnemyArrey[0].Skill1=="none"){
		EnemyHaveSkill.splice(1,1);
	}

				
			setupcombat();
			UpdateFakeVar();
}