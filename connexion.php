<?php

if(!empty($_POST["telEmail"]) && !empty($_POST["pwd"])){
    
    try {
        $db = new PDO('mysql:host=localhost;dbname=inscri', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (PDOException $e) {
        echo "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    
    $query = $db->prepare("SELECT COUNT(*) as nbuser FROM utilisateur WHERE (tel = :email or email = :email )and pwd = :pwd");
    $query->bindValue(":email", $_POST["telEmail"]);
    $query->bindValue(":pwd", $_POST["pwd"]);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_BOTH);
    
    if(!empty($result['nbuser'])){
        header("Location: sucess.html");
    }
    else{
        header("Location: index.php?erreur=4");
    }
    }
else {
        header("Location: index.php?erreur=5"); }

?>