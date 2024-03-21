<?php
$titulo_creativo = "Hola porfe";
$imagen_url = "https://images.contentstack.io/v3/assets/blt370612131b6e0756/blt9fda376fea7bdb7d/62269cfa4ac0160305159b8d/Shen_TurnTable_img.jpg"; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_creativo; ?></title> 
</head>
<body>
    <header>
        <h1><?php echo $titulo_creativo; ?></h1> 
    </header>
    <main>
        <img src="<?php echo $imagen_url; ?>" alt="Descripción de la imagen">
    </main>
    <footer>
     
    </footer>
</body>
</html>
