<?php 
    require_once 'db.php';

    $sql = 'SELECT * FROM news';
    $result = $pdo->prepare($sql);
    $result->execute();

    $result->bindColumn(1, $id);
    $result->bindColumn(2, $date);
    $result->bindColumn(3, $title);
    $result->bindColumn(4, $descr);
    $result->bindColumn(5, $img, PDO::PARAM_LOB);

    while ($result->fetch()): ?>

            <a href="#" class="news_blog">
                <?php file_put_contents($id.".jpg",$img); ?>
                <div class="news_images"><img src="images/blog/<?= $id ?>.jpg" height="150px" width="200px">
                    <div class="news_date"><?= date("d.m", strtotime($date)) ?></div>
                </div>
                <div class="news_blog-title"><?= $title ?></div>
                <div class="news_blog-text"><?= $descr ?></div>
            </a>

    <?php endwhile; ?>