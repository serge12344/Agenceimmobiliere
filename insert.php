<?php

	if (isset($_POST['submit']))  {

		      //CODE PROCEDURABLE,CODE MACRONIE

	    /* redirection sur une autre page 
 		header("Location: contact.html") ; */

 		 //recuperation de donées du formulaire avec php en appliquant la method POST
 		$nomprenom=$_POST['nom_prenom'];
 		$email=$_POST['email'];
 		$contact=$_POST['contact'];
 		$poste=$_POST['poste'];
 		$adresse=$_POST['adresse'];
 		$description=$_POST['description'];
 		$date=date('y-m-d');
 		// echo $date; 
 		// connection a la base de données ,soit par mysql_connect(),mysqli() ou PDO()
 		//$Nom_de_la_variable = new mysqli("nom_du_serveur_", "nom_utlisateur: root par defaut ","mot_de_passe vide si y'a pas","nom_de_la_base_de_données")
 		 $database=new mysqli("localhost","root","","agenceimmob");
 		 

 		 $sql="INSERT INTO employe(id_employe,nompremom_employe,poste_employe,contact_employe,date_enregistrement,adresse_employe,email_employe,description_employe)  VALUES (NULL,'$nomprenom','$poste','$contact','$date','$adresse','$email','$description')"; 
 		 var_dump($sql); 
 		 $executer=$database->query($sql); 
 		 
 		  if ($executer==true){
 		   	header("Location: index.php");
 		   } 




 	} 
?>