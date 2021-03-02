<?php

/**
 * Utilisez la base de données que vous avez utilisé dans l'exo 194.
 * Utilisez aussi le CSS que vous avez écris ( div contenant l'utilisateur ).
 * Pour chaque sélection, vous utiliserez un div par utilisateur:
 * ex:  <div class="classe-css-utilisateur">
 *          utilisateur 1, données ( nom, prenom, etc ... )
 *      </div>
 *      <div class="classe-css-utilisateur">
 *          utilisateur 2, données ( nom, prenom, etc ... )
 *      </div>
 *
 * -- Sélections complexes --
 * Une seule requête est permise pour chaque point de l'exo.
 */

// TODO Commencez par créer votre objet de connexion à la base de données, vous pouvez aussi utiliser l'objet statique ou autre qu'on a créé ensemble.

try {
    $server ='localhost';
    $user = 'root';
    $password = '';
    $db = 'exo_194';

    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    echo 'conection ok <br>';

    echo  "1. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor'<br>";
// TODO votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE nom ='Conor'");
    $result = $search->execute();
    if($result){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['nom'] . "<br>";
            echo "</div><br>";
        }
    }
    else {
        echo "une erreur est survenue !! <br> ";
    }
    echo "2. Sélectionnez et affichez tous les utilisateurs dont le prénom est différent de 'John'<br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE prenom !='John'");
    $result1 = $search->execute();
    if($result1){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['prenom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";

    echo "3. Sélectionnez et affichez tous les utilisateurs dont l'id est plus petit ou égal à 2<br>" ;
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE id <= 2");
    $result2 = $search->execute();
    if($result2){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['id'] ." ". $user['nom'] ." ". $user['prenom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";

    echo "4. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand ou égal à 2<br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE id >= 2");
    $result3 = $search->execute();
    if($result3){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['id'] ." ". $user['nom'] ." ". $user['prenom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";

    echo "5. Sélectionnez et affichez tous les utilisateurs dont l'id est égal à 1<br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE id = 1");
    $result4 = $search->execute();
    if($result4){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['id'] ." ". $user['nom'] ." ". $user['prenom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";

    echo "6. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand que 1 ET le nom est égal à 'Doe' <br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE id > 1 AND nom='Doe'");
    $result5 = $search->execute();
    if($result5){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['id'] ." ". $user['nom'] ." ". $user['prenom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";

    echo "7. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Doe' ET le prénom est 'John'<br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE nom = 'Doe' AND prenom = 'John'");
    $result6 = $search->execute();
    if($result6){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['nom'] ." ". $user['prenom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";

    echo "8. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' OU le prénom est 'Jane'<br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE nom = 'Conor' OR prenom = 'Jane'");
    $result7 = $search->execute();
    if($result7){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['nom'] ." ". $user['prenom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";


    echo "9. Sélectionnez et affichez tous les utilisateurs en limitant les résultats à 2 résultats <br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user LIMIT 2");
    $result8 = $search->execute();
    if($result8){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['nom'] ." ". $user['prenom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";


    echo "10. Sélectionnez et affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul enregistrement <br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user ORDER BY id ASC LIMIT 1");
    $result9 = $search->execute();
    if($result9){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' .$user['id'] ." ". $user['nom'] ." ". $user['prenom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";


    echo "11. Sélectionnez et affichez tous les utilisateurs dont le nom commence par C, fini par r et contient 5 caractères ( voir LIKE )<br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE nom LIKE 'C___r'");
    $result10 = $search->execute();
    if($result10){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['nom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";


    echo "12. Sélectionnez et affichez tous les utilisateurs dont le nom contient au moins un 'e' <br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE nom LIKE '%e%'");
    $result11 = $search->execute();
    if($result11){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['nom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";


    echo "13. Sélectionnez et affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah) ... voir IN , pas OR '' <br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE prenom IN ('Jane','John')");
    $result12 = $search->execute();
    if($result12){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['prenom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";


    echo "14. Sélectionnez et affichez tous les utilisateurs dont l'id est situé entre 2 et 4 <br>";
// TODO Votre code ici.

    $search =$conn->prepare("SELECT * FROM user WHERE id BETWEEN 2 AND 4");
    $result13 = $search->execute();
    if($result13){
        foreach($search->fetchAll() as $user){
            echo "<div class='classe-css-utilisateur'>";
            echo 'utilisateur: ' . $user['id'] ." ". $user['prenom'] . "<br>";
            echo "</div>";
        }
    }
    else {
        echo "une erreur est survenue !! <br>";
    }
    echo "<br>";

}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}






























