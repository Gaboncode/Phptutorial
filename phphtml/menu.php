<?php
  if(!function_exists('nav_item')){

    function nav_item(string $lien, string $titre, string $linkClasse = ''): string {
      $classe = 'nav-item';
      if($_SERVER['SCRIPT_NAME'] === $lien){
        $classe.='active';
      }
    return<<<HTML
    <li class="$classe">
      <a class="$linkClasse" href="$lien">$titre</a></li>
HTML;   
    }
}
 
?>

<?= nav_item('/index.php', 'Accueil', $linkClasse) ?>
<?= nav_item('/contact.php', 'Contact', $linkClasse) ?>