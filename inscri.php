<?php

if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['telEmail']) && !empty($_POST['telEmail2']) && !empty($_POST['pwd'])
 && !empty($_POST['dateNaissance']) && !empty($_POST['customRadioInline1'])){


    if ($_POST['telEmail'] == $_POST['telEmail2']){

        if($_POST['customRadioInline1'] == 'Femme'){
            $sexe = 'F';
        }
        else{
            $sexe = 'M';
        }

        

        try {
            $dbh = new PDO('mysql:host=localhost;dbname=inscri', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $e) {
            echo "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }

        if(strpos($_POST['telEmail'], '@')!== false) {

            $query = $dbh->prepare('INSERT INTO utilisateur(prenom, nom, email, pwd, dateNaissance, sexe) VALUES(:prenom, :nom, :email, :pwd,
            :dateNaissance, :sexe);');
   
           $query->bindValue(':prenom',$_POST['prenom']);
           $query->bindValue(':nom',$_POST['nom']);
           $query->bindValue(':email',$_POST['telEmail']);
           $query->bindValue(':pwd',$_POST['pwd']);
           $query->bindValue(':dateNaissance',$_POST['dateNaissance']); 
           $query->bindValue(':sexe',$sexe);
   
           $query->execute();


        header("Location: index.php");
        }
        elseif(strlen($_POST['telEmail']) <=10) {

            $query = $dbh->prepare('INSERT INTO utilisateur(prenom, nom, tel, pwd, dateNaissance, sexe) VALUES(:prenom, :nom, :tel, :pwd,
            :dateNaissance, :sexe);');
   
           $query->bindValue(':prenom',$_POST['prenom']);
           $query->bindValue(':nom',$_POST['nom']);
           $query->bindValue(':tel',$_POST['telEmail']);
           $query->bindValue(':pwd',$_POST['pwd']);
           $query->bindValue(':dateNaissance',$_POST['dateNaissance']); 
           $query->bindValue(':sexe',$sexe);
   
           $query->execute();

        header("Location: index.php");

        }

        else{
            header("Location: index.php?erreur=1");
        }

    }


else{

    header("Location: index.php?erreur=2");

}
    
 }

 else{
    header("Location: index.php?erreur=3");
 }

?>