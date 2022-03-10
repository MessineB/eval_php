
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style.css" rel="stylesheet">
    <title>Affichage d'un post </title>
</head>
<body>
         <a href="?page=post"> </a>
        <h1><?= $post_find->getTitle() ?></h1>
        <h2> <?= $post_find->getContent() ?> </h2>
        <h3> Ajouté le : <?= $post_find->getDate_ajout() ?> </h3>
        <h3> <u> Espace commentaire : </u></h3>
        <?php for ($comment_number=0 ;  $comment_number < count($post_responses) ; $comment_number++ ) { ?>
        <p>  <?=  $post_responses[$comment_number]->getMessage();  ?>
        <p>Commentaire ajouté le : <?=  $post_responses[$comment_number]->getDate_ajout();  ?> </p>
        <br>
        <?php } ?>
        <form method="post">
        <input type="text" name="message" placeholder="Message du commentaire"> 
        <input type="submit" name="submit" placeholder ="Envoyé commentaire">
        </form>
</body>
</html>