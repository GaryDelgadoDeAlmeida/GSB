<?php

/* 1) Connexion */

/** 
 * Se connecte au serveur de données MySql.                      
 * Se connecte au serveur de données MySql à partir de valeurs
 * prédéfinies de connexion (hôte, compte utilisateur et mot de passe). 
 * Retourne l'identifiant de connexion si succès obtenu, le booléen false 
 * si problème de connexion.
 * @return resource identifiant de connexion
 */
function connecterServeurBD() {
    $connexion = mysqli_connect("localhost", "root", "root", "gsb");
    return $connexion;
}

/* 2) déconnexion */

/** 
 * Ferme la connexion au serveur de données.
 * Ferme la connexion au serveur de données identifiée par l'identifiant de 
 * connexion $idCnx.
 * @param resource $idCnx identifiant de connexion
 * @return void  
 */
function deconnecterServeurBD($connexion) {
    mysqli_close($connexion);
}


/* 3) Obtenir plusieurs lignes à partir d’une requête */

/** 
 * Fournit les informations sur un visiteur demandé. 
 * Retourne les informations du visiteur d'id $unId sous la forme d'un tableau
 * associatif dont les clés sont les noms des colonnes(id, nom, prenom).
 * @param resource $idCnx identifiant de connexion
 * @param string $unId id de l'utilisateur
 * @return array  tableau associatif du visiteur
 */
function obtenirLignes($connexion, $num) {
    $req = "SELECT * FROM fichefrais WHERE idVisiteur = '$num'";
    $res = mysqli_query($connexion , $req);
    $lesLignes = mysqli_fetch_all($res, MYSQLI_ASSOC);
    foreach ($lesLignes as $uneLigne) {
        # code...
        $arrayName = array(
            'idVisiteur' => $uneLigne['idVisiteur'], 
            'mois' => $uneLigne['mois'], 
            'nbJustificatifs' => $uneLigne['nbJustificatifs'], 
            'montantValide' => $uneLigne['montantValide'], 
            'dateModif' => $uneLigne['dateModif'], 
            'idEtat' => $uneLigne['idEtat'],
            );
        echo $arrayName['idVisiteur']."  |  ".$arrayName['mois']."  |  ".$arrayName['nbJustificatifs']."  |  ".$arrayName['montantValide']."  |  ".$arrayName['dateModif']."  |  ".$arrayName['idEtat']."<br>";
    }
}


?>