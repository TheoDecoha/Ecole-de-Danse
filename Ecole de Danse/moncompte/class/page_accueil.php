<?php

	include_once('base.class.php');
	class menu extends base {
		public function __construct($p) {
			parent::__construct($p);
		}
		
		private function affiche_corps() {
		}
		
		private function connect_bdd(){
			$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'sapphireradeon');
		}
		
	}
