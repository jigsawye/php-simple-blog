<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
</head>
<body>
    <h1>Posts Index.</h1>
    <?php foreach ($posts as $post): ?>
        <h2><a href="<?=URL . 'posts/' . $post['id'] ?>">
            <?=htmlspecialchars($post['title'])?>
        </a></h2>
    <?php endforeach; ?>
    <a href="<?=URL . 'posts/create'?>">Create a Post.</a>
</body>
</html>