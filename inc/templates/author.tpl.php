<?php

// Vérification de la présence de la variable $_GET['id'] et on vérifie si elle n'est pas vide
if(isset($_GET['id']) && !empty($_GET['id'])) {
    //Création d'un tableau vide pour stocker les articles écrits par l'auteur sélectionné
    $articlesByAuthor = [];
    //On boucle sur le tableau contenant TOUS les articles 
    foreach($dataArticlesList as $index => $value) {
      //On compare le nom de l'auteur de l'article courant (stocké dans $value) avec le nom de l'auteur choisit et récupéré grâce à $dataAuthorsList[$_GET['id']]->name
      if($value->author === $dataAuthorsList[$_GET['id']]->name) {
        //Si c'est le même nom, on ajoute l'article à la fin du tableau créé en ligne 5
        $articlesByAuthor[$index] = $value;
      }
    }

    
    ?>

<h1>Articles écrits par <?= $dataAuthorsList[$_GET['id']]->name; ?></h1>

<?php
//On boucle sur le tableau créé en ligne 5 et rempli en ligne 11
foreach($articlesByAuthor as $index => $articleToDisplay):
  ?>

//On affiche l'article courant de la boucle avec les mêmes balises html que sur les pages article et category
<article class="card">
        <div class="card-body">
            <h2 class="card-title"><a href="index.php?page=article&id=<?= $index; ?>"><?= $articleToDisplay->title ?></a></h2>
            <p class="infos">
            Posté par <a href="#" class="card-link"><?= $articleToDisplay->author ?></a> le <time datetime="<?= $articleToDisplay->date ?>"><?= $articleToDisplay->getDateFr() ?></time> dans <a href="#"
                class="card-link">#<?= $articleToDisplay->category ?></a>
            </p>
            <p class="card-text">
                <?= $articleToDisplay->content ?>
            </p>
        </div>
        </article>
<?php
    endforeach;

    } else {
?>

<h1>Auteur non existant, vous n'auriez pas du arriver là...</h1>

<?php
}
?>