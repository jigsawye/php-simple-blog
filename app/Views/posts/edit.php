<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="<?=URL . 'posts/' . $post['id'] . '/update'?>" method="Post">
        <label for="titlefield">Title:</label>
        <input id="titlefield" type="text" name="title" value="<?=$post['title']?>">
        <br>
        <label for="bodyfield">Body:</label>
        <br>
        <textarea id="bodyfield" type="text" name="body" cols="30" rows="8"><?=$post['body']?></textarea>
        <br>
        <button type="submit">Update</button>
    </form>

    <form action="<?=URL . 'posts/' . $post['id'] . '/delete'?>" method="Post">
        <button type="submit">Delete</button>
    </form>
    <a href="<?=URL . 'posts'?>">Show All Posts</a>
</body>
</html>