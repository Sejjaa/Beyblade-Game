<?php   
session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 <script type='text/javascript' src='./beckupcode/jquery.php'></script> 
 <?php   
  if(isset($_SESSION["id"])){
    echo "<title>Beyblade</title>";
  }else{
    echo "<title>Beyblade Main Page</title>";
  } 
  ?>

	 <?php   
  if(isset($_SESSION["id"])){
    echo "

   <!--Combat Audio Sound    --> 
   <script type='text/javascript' src='./combat/CombatSound/LoaderCombatSound.php'></script>
   <script type='text/javascript' src='./combat/CombatSkillSound/LoaderCombatSkillSound.php'></script>
 

  <script type='text/javascript' src='./beckupcode/jquery.php'></script>  
  <script type='text/javascript' src='./MainMenu/MainMenu.php'></script>
  <script type='text/javascript' src='./MainMenu/loadImgforMenu.php'></script>
  <script type='text/javascript' src='./MainMenu/loadSongsforGame.php'></script>

  <!--Php new player or exist player   -->
  <script type='text/javascript' src='./DataBaseCharacter/CheckCharacter.php'></script>

  <!--Story    -->
  <script type='text/javascript' src='./StoryMode/Story01.php'></script>
  <!--Character    -->
  <script type='text/javascript' src='./Character/Char.php'></script>
  <!--Map for baybled    -->
  <script type='text/javascript' src='./BeybladeMap/StartMakingMap.php'></script>
   <!--Detection for Maps    -->
  <script type='text/javascript' src='./DetectionforMaps/map01.php'></script> 


  <!--Combat Code Game folder    -->
  <script type='text/javascript' src='./combat/MiniGameImg/MiniGame.php'></script>
  <script type='text/javascript' src='./combat/Freemove.php'></script>
  <script type='text/javascript' src='./combat/PoisonAttack/PoisonAttack.php'></script>
  <script type='text/javascript' src='./combat/LongRangeSpell/LongRangeSpell.php'></script>
  <script type='text/javascript' src='./combat/NormalAttack/NormalAttack.php'></script>
  <script type='text/javascript' src='./combat/Ull/SkillsUll.php'></script>
  <script type='text/javascript' src='./combat/CallCombatandEdit/combatready.php'></script>
  <script type='text/javascript' src='./combat/CallCombatandEdit/CombatZone.php'></script>
  <script type='text/javascript' src='./combat/CallCombatandEdit/WhoisEnemy.php'></script>
  <script type='text/javascript' src='./combat/Animations.php'></script>
  <script type='text/javascript' src='./combat/Detection00.php'></script>
  <script type='text/javascript' src='./combat/AttackMoves.php'></script>
  <script type='text/javascript' src='./combat/WhoisAttacking.php'></script>
  <script type='text/javascript' src='./combat/EnemyDataBase/EnemyDataBase.php'></script>
  <script type='text/javascript' src='./combat/CalCombat.php'></script>
    ";  


  }else{
    
  } 
  ?>
 

  <?php   
  if(isset($_SESSION["id"])){


  }else{
    echo " <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>  ";
  }  ?>

	




</head>
<body>
<?php  if(isset($_SESSION["id"])){
  echo "
  <script type='text/javascript' src='./beybladegame/beyblade.php'></script>

  ";

}else{
echo "

<body style='background-color: lightblue;'>
  <h1 style='text-align: center;color:red;font-family: sans-serif; '>Beyblade</h1>
    
  <nav class='navbar navbar-expand-sm bg-dark navbar-dark'>
    <a class='navbar-brand' href='#'>
    <img src='./MainMenu/MenuImg/menu0.jpg' style='width:100px;height: 50px; '>
  </a>
  <ul class='navbar-nav'>
      <li class='nav-item'>
        <button class='btn  btn-lg btn-danger  btnL' style='margin-left: 20px'>Login</button>
      </li>
      <li class='nav-item'>
       <button class='btn  btn-lg btn-info  btnR' style='margin-left: 20px'>Register</button>
      </li>
    </ul>
</nav>

<script type='text/javascript' src='./PHP/RandL.php'></script>

</body>
"; 



if( isset($_SESSION['usererror']) ){
    echo '<h1 style="margin-top:50px;text-align:center;border-radius:10%;border:1px solid black;
     background:red;">   '.$_SESSION["usererror"] .'     </h1>';

}


} ?>


</html>
