<?php
   include ("jeu.php");
   session_start();
   if (!isset($_SESSION['jeu']))
   { 
       $_SESSION['jeu']=new jeu(11);
   }
   if (isset($_POST['joue']))
   {
	   $_SESSION['jeu']->compare($_POST['nbre']);
   }
   if (isset($_POST['nouveau']))
   {
	    $_SESSION['jeu']=new jeu(11);
   }
   if (isset($_POST['sauver']))
   {
	   file_put_contents("mystere.txt",serialize($_SESSION['jeu']));
   }
   if (isset($_POST['reprendre']))
   {
	   $_SESSION['jeu']=unserialize(file_get_contents("mystere.txt"));
   }  
?>
    <form name="jeu" action="mystere.php" method="POST"> 
	   <?php  if ($_SESSION['jeu']->getstatut()=="en cours")
	   { ?>  
           <label> entre ton nombre </label>
		   <input type="number" name="nbre" />
		   <input type="submit" name="joue" value="joue" />
		   <input type="submit" name="reprendre" value="reprendre" />
		   <input type="submit" name="sauver" value="sauver" />
		<?php   
	   }?>
	   <input type="submit" name="nouveau" value="nouveau" />
	   
	</form>
   <div id="message"><?php echo $_SESSION['jeu']->getmessage()?></div>
