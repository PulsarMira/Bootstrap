<?php foreach($articles as $id => $article): ?>
    <a href="?id=<?= $id ?>"><?= $article['title'] ?></a>
<?php endforeach; ?>

    <!-- Показываем страницу, либо ошибку -->
<?php if($current_article): ?>
    <h1><?= $current_article['title'] ?></h1>
    <div><?= $current_article['content'] ?></div>
<?php else: ?>
    <h1>Ошибка 404: страница не найдена</h1>
<?php endif; ?>