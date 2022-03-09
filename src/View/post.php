<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des postes Twitter </title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="Nom du post"> 
        <input type="text" placeholder="Contenu du post"> 
        <input type="text" placeholder="#Hashtag"> 
        <input type="submit" value="Ajouter un post"> 
    </form>
    <?php foreach($posts as $post) : ?>
        <? var_dump($post); ?>
        <div class="post">
        <a href="?page=status&post_id=<?= $post->getId() ?>" ?>
    <h1><?= $post->getTitle() ?></h1> 
       <p> <?= $post->getContent() ?> </p> </a>
       <h5>Ajouté le : <?= $post->getDate_ajout() ?> </h5>
    </div>
    <?php endforeach ?>
        
</body>
</html>