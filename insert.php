<?php
    $conn = new mysqli("localhost", "root", "","contactez-nous");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $Nom = $_POST['Nom'];
    $Email = $_POST['Email'];
    $Num = $_POST['Num'];
    $Adresse = $_POST['Adresse'];
    $Sujet = $_POST['Sujet'];
    $Texte = $_POST['Texte'];

    $sql = "INSERT INTO enregistrement (Nom, Email, Num, Adresse, Sujet, Texte) VALUES ('$Nom', '$Email', '0', '$Adresse', '$Sujet', '$Texte')";
         
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
          
    $conn->close();
?>

<!--  VALUES ('$Nom', '$Email', '$Num', '$Adresse', '$Sujet', '$Texte') -->