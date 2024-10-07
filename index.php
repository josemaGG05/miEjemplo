<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MiBlog</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <h1>Mi Blog</h1>
  </header>

  <aside>
    <a href="?id=inicio">Inicio</a>
    <a href="?id=blog">Blog</a>
    <a href="?id=sobre-mi">Sobre mí</a>
    <a href="?id=contacto">Contacto</a>
  </aside>

  <main>
    <?php
    require_once("estructura.php");

    $post = $_GET['id'];
    $listado = obtenerPostPorSeccion($post);

    echo "<section>";
    foreach ($listado as $elemento) {
      echo "<article>";
      echo '<h2>' . $elemento->getTitulo() . '</h2>';
      echo '<p>' . $elemento->getContenido() . '</p>';
      echo '<p class="hastag" > <b>Tags: ' . $elemento->getHastag() . '</b></p>';
      echo '<p><b>Likes: ' . $elemento->getLike() . '</b><a> Me gusta</a></p>';
      echo "</article>";
    }
    echo "</section>";
    ?>
  </main>



</body>

</html>