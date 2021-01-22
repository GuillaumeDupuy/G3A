@extends('layout')

@section('contenu')
<h1>Welcome {{$user->name}}</h1>

<p>Nombre de membres</p>

<p>Nombre de ventes</p>
<p>Nombre de nouvelles ventes sur les 7 derniers jours</p>

<p>Les revenus du site totaux</p>
<p>Les revenus du site sur les 7 derniers jours</p>

<?php

if (!empty($_POST)) {


    //***************************************** */
    //Modification Base de données
    //***************************************** */
    if (!empty($_GET['modification'])) {
        $id = $_GET['modification'];
        $pdo->exec("UPDATE produits SET nom = \"$_POST[nom]\" WHERE id_produit= $id");
        $pdo->exec("UPDATE produits SET date_sortie = \"$_POST[date_sortie]\"  WHERE id_produit= $id");
        $pdo->exec("UPDATE produits SET description = \"$_POST[description]\" WHERE id_produit= $id");
        $pdo->exec("UPDATE produits SET quantité = \"$_POST[quantité]\" WHERE id_produit= $id");
        $pdo->exec("UPDATE produits SET catégorie = \"$_POST[catégorie]\" WHERE id_produit= $id");
        $pdo->exec("UPDATE produits SET prix = \"$_POST[prix]\" WHERE id_produit= $id");
        $pdo->exec("UPDATE produits SET plateformes = \"$_POST[plateformes]\"  WHERE id_produit= $id");
        $pdo->exec("UPDATE produits SET note = \"$_POST[note]\" WHERE id_produit= $id");

        //***************************************** */
        //Ajout à la Base de données
        //***************************************** */      
    } else {
        $requeteSQL = "INSERT INTO produits (nom, date_sortie, description, quantité, catégorie, prix, plateformes, note ) VALUE ('$_POST[nom]', '$_POST[date_sortie]', '$_POST[description]','$_POST[quantité]','$_POST[catégorie]','$_POST[prix]','$_POST[plateformes]','$_POST[note]')";
        $result = $pdo->exec($requeteSQL);
    }

    //***************************************** */
    //Suppression Base de données
    //***************************************** */    
} else if (!empty($_GET)) {
    if (!empty($_GET['delete'])) {
        $to_suppr = $_GET['delete'];
        $pdo->exec("DELETE FROM produits WHERE id_produit = $to_suppr ");
    }
    if (!empty($_GET['modification'])) {

        echo "en cours de modification de l'experience numero " . $_GET['modification'];
    }
}

?>

<form method="POST" action="" enctype='multipart/form-data'>

    <div class="form-group">
        <label for="nom">Nom jeu</label>
        <input type="texte" class="form-control" id="nom" name="nom">
    </div>

    <div class="resume-item d-flex flex-column  ">
        <label for="date_sortie">Date de sortie</label>
        <textarea rows="1" class="form-control" id="date_sortie" name="date_sortie"></textarea>
    </div>

    <div class="resume-item d-flex flex-column  ">
        <label for="description">Description</label>
        <textarea rows="2" class="form-control" id="description" name="description"></textarea>
    </div>

    <div class="form-group">
        <label for="quantité">Quantité</label>
        <textarea rows="1" class="form-control" id="quantité" name="quantité"></textarea>
    </div>

    <div class="form-group">
        <label for="catégorie">Catégorie</label>
        <textarea rows="1" class="form-control" id="catégorie" name="catégorie"></textarea>
    </div>

    <div class="form-group">
        <label for="prix">Prix</label>
        <textarea rows="1" class="form-control" id="prix" name="prix"></textarea>
    </div>

    <div class="form-group">
        <label for="plateformes">Plateformes</label>
        <textarea rows="1" class="form-control" id="plateformes" name="plateformes"></textarea>
    </div>

    <div class="form-group">
        <label for="note">Notes</label>
        <textarea rows="1" class="form-control" id="note" name="note"></textarea>
    </div>

    <div class="ml-2 col-sm-6">
        <div id="msg"></div>
        <form method="post" id="image-form">
            <input type="file" name="img[]" class="file" accept="image/*">
        </form>
    </div>
    <br><br>

    <button type="submit" class="btn btn-primary">Enregistrer</button>

</form>

<script>
    $(document).ready(function() {
        $('input[type="file"]').on("change", function() {
            let filenames = [];
            let files = document.getElementById("customFile").files;
            if (files.length > 1) {
                filenames.push("Total Files (" + files.length + ")");
            } else {
                for (let i in files) {
                    if (files.hasOwnProperty(i)) {
                        filenames.push(files[i].name);
                    }
                }
            }
            $(this)
                .next(".custom-file-label")
                .html(filenames.join(","));
        });
    });
</script>

@endsection