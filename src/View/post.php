<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style.css" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Liste des postes Twitter </title>
</head>
<body style="background-color: lightgray;">
<nav class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="?page=admin">Admin</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="?page=post">Articles</a>
      </nav>
</nav>
    <form method="post">
        <div class="card mb-4 rounded-3 shadow-sm post">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" placeholder="Nom du post" class="form-control">
            <label for="content" class="form-label">Contenu de l'article</label> 
            <input id="content" type="text" name="content" placeholder="Contenu du post" class="form-control form"> 
            <label for="Hashtag" class="form-label">Hashtag</label>
            <input id="Hashtag" type="text" name="hashtag" placeholder="#Hashtag" class="form-control">
            <input type="submit" value="Ajouter un post"> 
            </div> 
    </form>
    <?php foreach($posts as $post) :?> 
        <div class="d-flex post">
  <aside class="flex-shrink-0 image">
    <h3> Image de l'utilisateur </h3>
    <img class="avatar rounded" src="https://avatars.dicebear.com/api/avataaars/<?=$random = random_int( 1 , 99999)?>.svg?background=%230000ff" alt="avatar de l'utilisateur">
    </aside>
  <div class="flex-grow-1 ms-3">
  <a href="?page=status&post_id=<?= $post->getId() ?>" ?> 
  <h1 class="display-5 fw-bold"><?= $post->getTitle() ?></h1></a>
  <p class="lead mb-4"><?= $post->getContent() ?>
  <h5>Ajouté le : <?= $post->getDate_ajout() ?> </h5>
  </div>
</div>
    <?php endforeach ?>
   
        
</body>
</html>