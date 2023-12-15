<?php 
  function nav_item (string $lien, string $titre): string {
    $classe = 'nav-item';
    if($_SERVER['SCRIPT_NAME'] === $lien){
      $classe = $classe.'active';
    }
      return '<li class="nav-item ">
      <a class="nav-link" href="'.$lien.'">'.$titre.'</a>
    </li>';  
    

  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>
        <?php if (isset($title)) : ?>
            <?= $title; ?>
             <?php  else : ?>
                Mon site 
            <?php endif ?>
    </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Mon site</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <?= nav_item('/index.php', 'Accueil'); ?>
          <?= nav_item('/contact.php', 'Contact'); ?>
          <li class="nav-item <?php if($_SERVER['SCRIPT_NAME'] === '/index.php') : ?>active <?php endif ?>">
            <a class="nav-link" href="/index.php">Accueil</a>
          </li>
          <li class="nav-item <?php if($_SERVER['SCRIPT_NAME'] === '/contact.php') : ?>active <?php endif ?>">
            <a class="nav-link" href="/contact.php">Contact</a>
          </li>
        </ul>
     </div>
    </nav>

    <main role="main" class="container">