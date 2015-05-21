<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="<?=URL . 'posts/store'?>" method="Post">
        <label for="titlefield">Title:</label>
        <input id="titlefield" type="text" name="title">
        <br>
        <label for="bodyfield">Body:</label>
        <br>
        <textarea id="bodyfield" type="text" name="body" cols="30" rows="8"></textarea>
        <br>
        <button type="submit">Post</button>
    </form>
</body>
</html>