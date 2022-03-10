<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style.css" rel="stylesheet">
    <title>Page Admin</title>
</head>
<body>
    <form method="post">
        <input type="text" name="title" placeholder="Nom du post"> 
        <input class="content" type="text" name="content" placeholder="Contenu du post"> 
        <input type="text" name="hashtag" placeholder="#Hashtag"> 
        <input type="submit" value="Ajouter un post"> 
    </form>

    <?php foreach($posts as $post) : ?>
        <div class="post">
        <a href="?page=status&post_id=<?= $post->getId() ?>" ?>
    <h1><?= $post->getTitle() ?></h1> 
       <p> <?= $post->getContent() ?> </p> </a>
       <h5>Ajouté le : <?= $post->getDate_ajout() ?> </h5>
       <br>
       <a href="?page=delete&post_id= <?= $post->getId() ?>"> Delete </a>
    </div>
    <?php endforeach ?>
        
</body>
</html>