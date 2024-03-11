<?php
  if(isset($_GET['id']) && !empty($_GET['id'])) {
    $articlesByCategorie = [];

    foreach($dataArticlesList as $index => $value) {
      // $object->property(object)
      if($value->category->name === $dataCategoriesList[$_GET['id']]->name) {
        $articlesByCategorie[$index] = $value;
      }
    }

    ?>
    <h1>Articles rangés dans la catégorie <?= $dataCategoriesList[$_GET['id']]->name; ?></h1>
<?php
      foreach($articlesByCategorie as $index => $articleToDisplay):
?>
        <article class="card">
        <div class="card-body">
            <h2 class="card-title"><a href="index.php?page=article&id=<?= $index; ?>"><?= $articleToDisplay->title ?></a></h2>
            <p class="infos">
            Posté par <a href="index.php?page=author&id=<?= $articleToDisplay->author->id ?>" class="card-link"><?= $articleToDisplay->author->name ?></a> le <time datetime="<?= $articleToDisplay->date ?>"><?= $articleToDisplay->getDateFr() ?></time> dans <a href="index.php?page=category&id=<?= $_GET['id']; ?>"
                class="card-link">#<?= $articleToDisplay->category->name ?></a>
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
    <h1>Aucune catégorie sélectionnées, vous n'auriez pas du arriver là...</h1>
<?php
  }
?>

