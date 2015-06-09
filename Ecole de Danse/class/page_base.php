<?php
class page_base {
private $titre;
private $style=array('menu', 'style','slide','form' );
private $js = array('jquery','jquery.min', 'slide', 'jquery.easing', 'menu', 'fonctions','FancyZoom','FancyZoomHTML');
private $corps;
private $page;
private $footer;

public function __construct($p) {
$this->page = $p;
}
/******** Gestion des setters *******************/
public function __set($propriete, $valeur) {
switch ($propriete) {
case 'style' : {
	$this->style[count($this->style)+1] = $valeur;
break;
}
case 'corps' : {
	$this->corps = $valeur;
break;
}
case 'page' :{
	$this->page = $valeur;
break;
}
case 'footer' :{
	$this->page = $valeur;
break;
}
case 'titre' : {
	$this->titre = $valeur;
}
case 'style' : {
	$this->js[count($this->js)+1] = $valeur;
break;
}
}
}
/******** Gestion du titre *******************/
private function affiche_titre() {
echo $this->titre;
}

private function affiche_corps() {
echo $this->corps;
}
/*************Gestion des styles *********************/
private function affiche_style() {
foreach ($this->style as $s) {
echo "<link rel='stylesheet' href='styles/".$s.".css' />\n";
}
}


private function affiche_js() {
foreach ($this->js as $j) {
echo "<script type='text/javascript' src='js/".$j.".js'></script>\n";
}
}



private function login_panel(){
?>
<!-- Login -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Bienvenue sur le site de l'école de danse de Beaucouzé</h1>		
				<p class="grey">Identifiez-vous pour accéder a votre section privé</p>
			</div>
			<div class="left">
				<?php
				if(isset($_SESSION['loged']) && $_SESSION['loged'] =='loged')
				{
					echo"<h1 class='padlock'>Acceder à mon compte</h1>";
					echo "<a href ='moncompte/'><button class='bt_register'>Mon compte</button></a>";
				}
				else
				{
					echo'
				<form class="clearfix" action="action/action_connexion.php" method="post">
					<h1 class="padlock">Connexion</h1>
					<label class="grey" for="log">Email:</label>
					<input type="email" class="field" name="email" id="log" value="" size="23" />';
					if(isset($_SESSION['loged']) && $_SESSION['loged'] == 'errorid')
					{echo '<br/>L\'email saisit n\'existe pas';$_SESSION['loged']=null;}
					echo'
					<label class="grey" for="pwd">Mot de passe:</label>
					<input class="field" type="password" name="mdp" id="pwd" size="23" />';
					if(isset($_SESSION['loged']) && $_SESSION['loged'] == 'errormdp')
					{echo '<br/>Mauvais mot de passe';$_SESSION['loged']=null;}
					echo'
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Se souvenir de moi</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Connexion" class="bt_login" />
					<a class="lost-pwd" href="#">Mot de passe perdu ?</a>
				</form>';
			}
			?>
			</div>
			<?php
			if(isset($_SESSION['loged']) && $_SESSION['loged'] =='loged')
				{
				echo"
			<div class='left right'>
					<h1>Se déconnecter</h1>
					<a  href='action/action_deco.php'>				
					<button class='bt_register'>Se déconnecter</button>
					</a>
			</div>";
					
		}
		else{
			echo"
			<div class='left right'>
					<h1>Pas encore inscrit?</h1>
					<a  href='inscription.php'>				
					<button class='bt_register'>S'enregistrer</button>
					</a>
			</div>";
		}
			?>
		</div>
	</div> 
</div>
<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<?php
				if(isset($_SESSION['loged']) && $_SESSION['loged'] == 'loged')
				{
					echo "<li>Bonjour ".$_SESSION['prenom']."</li>";
				}
				else{
					echo "<li>Bienvenue !</li>";
				}?>
			<li class="sep">|</li>
			<li id="toggle">
				<?php
				if(isset($_SESSION['loged']) && $_SESSION['loged'] =='loged')
				{
					echo "<a id='open' class='open href='#'>Mon compte</a>";
				}
				else
				{
					echo "<a id='open' class='open href='#'>Connexion</a>";
				}
				?>
				<a id="close" style="display: none;" class="close" href="#">Fermer</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->
<!-- /login -->
	<?php
}


/************** Affichage du pied de la page ***************************/
private function affiche_footer() {
?>
<footer>

</footer>
			
<?php
}

/************** Affichage du header ***************************/
private function afficher_header(){
?>
<img id='logo' src="images/titre.png" alt=""/>
<?php
}

/************** Affichage du Menu ***************************/

private function afficher_menu() {

?>
<nav>
		<ul id="sdt_menu" class="sdt_menu">
			<li>
				<a href="index.php">
					<img src="images/1.jpg" alt=""/>
					<span class="sdt_active"></span>
					<span class="sdt_wrap">
						<span class="sdt_link">Accueil</span>
						<span class="sdt_descr"></span>
					</span>
				</a>
			</li>
			<li>
				<a href="articles.php">
					<img src="images/2.jpg" alt=""/>
					<span class="sdt_active"></span>
					<span class="sdt_wrap">
						<span class="sdt_link">Articles</span>
						<span class="sdt_descr">Toutes les news</span>
					</span>
				</a>
			</li>
			<li>
				<a href="equipe.php">
					<img src="images/3.jpg" alt=""/>
					<span class="sdt_active"></span>
					<span class="sdt_wrap">
						<span class="sdt_link">L'équipe</span>
						<span class="sdt_descr">Présentation de l'équipe</span>
					</span>
				</a>
			</li>
			<li>
				<a href="galerie.php">
					<img src="images/4.jpg" alt=""/>
					<span class="sdt_active"></span>
					<span class="sdt_wrap">
						<span class="sdt_link">Galerie</span>
						<span class="sdt_descr">Toutes les photos</span>
					</span>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="images/1.jpg" alt=""/>
					<span class="sdt_active"></span>
					<span class="sdt_wrap">
						<span class="sdt_link">Tarifs</span>
						<span class="sdt_descr">Infos tarifs</span>
					</span>
				</a>
			</li>
		</ul>
	</nav>


<?php

}

/******************** Fonction permettant l'affichage de la page **************/
public function affiche() {
	// session_start();
?>
   
   <!DOCCTYPE html>
<html lang='fr'>
<html>
	<head>
		<title>
		<?php $this->affiche_titre(); ?>
		</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->affiche_style();
$this->affiche_js();
?>
		</head>
		<body onload="setupZoom()">
<?php
$this->login_panel();
$this->afficher_header();
?>
<div id = 'content'>
<?php
$this->afficher_menu();
?>
<div id = 'corps'>

<?php
$this->affiche_corps();
?>
</div>
</div>

<?php

$this->affiche_footer();
?>
	</body>
</html>
   
   
 


<?php
}
}
?>
