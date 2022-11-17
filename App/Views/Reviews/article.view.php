<?php

use App\Models\Review;
/** @var Review $data */
$review = $data;
?>

<div class="articles">
    <article>
        <h2><?=$review->getTitle()?></h2>
        <p class="review_text"><?=$review->getParagraph1()?></p>
        <p class="review_text"><?=$review->getParagraph2()?></p>
        <p class="review_text"><?=$review->getParagraph3()?></p>
        <img src="<?=$review->getImage()?>" alt="<?=$review->getImagealt()?>" class="review_img">
        <p class="review_text"><?=$review->getParagraph4()?></p>
        <div class="articlebtns">
            <a href="?c=reviews&a=editArticle&id=<?=$review->getId()?>" class="btn btn-primary articlebtn">E</a>
            <a href="?c=reviews&a=deleteArticle&id=<?=$review->getId()?>" class="btn btn-danger articlebtn">X</a>
        </div>

    </article>
</div>