<?php 
	if (!function_exists('profile')) {
		function profile($p) {
			if ($p == "admin") {
				return "Admistrateur";
			} elseif ($p == "coordinnateur") {
				return "Coordonnateur";
			} elseif ($p == "commanditaire") {
				return "Commanditaire";
			} elseif ($p == "enqueteur") {
				return "Enqueteur";
			}
		}
			
	}
	if (!function_exists('statut')) {
		function statut($s) {
			if ($s == 0) {
				return "<font color = 'red'>Innactif</font>";
			} else {
				return "<font color = 'green'>Actif</font>";
			}
		}
	}
	if (!function_exists('qualite')) {
		function qualite($q) {
			if($q == 0 ) {
				return "<option value='0'>Admin</option>
				<option value='1'>Coordonnateur</option>
				<option value='2'>commanditaire</option>";
			}elseif($q == 1 ) { 
				return "<option value='3'>Enquéteur</option>";
			}else{
				return "ok";
			}
		}
	}
 ?>