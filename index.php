<?php
    $title = 'Aula 02 de PHP';
    $tituloTutorial1 = 'Aplicando conceitos de Herança';
    $textoTurorial1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $imgMarmitas = 'img/marmita1.png';
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <href rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Marmitas</title>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
   <img src= img/logo.png width="100" height="100" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>
</nav>
</nav>
<div class="container-fluid">
  

    <main> 
        <section>
            <h1><?php echo $title; ?></h1>
            <h2><?php echo $tituloTutorial1; ?></h2>
            <p><?php echo $textoTurorial1; ?></p>
            <img src="<?php echo $imgMarmitas; ?>" alt="Marmita">
        </section>
    </main>    
    </div>   
</body>
</html>