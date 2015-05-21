<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show</title>
</head>
<body>
    <h1>Show Post</h1>
    <h1>Title:<?=htmlspecialchars($post['title'])?></h1>
    <p><?=nl2br(htmlspecialchars($post['body']))?></p>
    <a href="<?=URL . 'posts/' . $post['id'] . '/edit' ?>">Edit & Delete</a>
    <a href="<?=URL . 'posts'?>">Show All Posts</a>
</body>
</html>