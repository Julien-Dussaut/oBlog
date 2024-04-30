        <?php foreach ($articlesList as $currentId=>$currentArticle) : ?>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="index.php?page=article&id=<?= $currentId ?>"><?= $currentArticle->title ?></a></h2>
            <p class="card-text">
                <?= $currentArticle->content ?>
            </p>
            <p class="infos">
              Posté par <a href="index.php?page=author&id=<?= $currentArticle->author->id; ?>" class="card-link"><?= $currentArticle->author->name; ?></a> le <time datetime="<?= $currentArticle->date ?>"><?= $currentArticle->getDateFr() ?></time> dans <a href="index.php?page=category&id=<?= $currentArticle->category->id; ?>"
                class="card-link">#<?= $currentArticle->category->name; ?></a>
            </p>
          </div>
        </article>
        <?php endforeach ?>

        
        <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i> Précédent</a></li>
            <li class="page-item"><a class="page-link" href="#">Suivant <i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </nav> 