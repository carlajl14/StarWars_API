<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Star Wars</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <h1>Star Wars API</h1>
        <form method="POST" class="form">
            <?php
            include './models/StarwarsModel.php';
            include './controllers/StarwarsController.php';
            include './views/StarwarsView.php';
            
            $starwarscontroller = new StarwarsController();
            
            //Mostrar el select con los personajes
            $starwarscontroller->allCharacters();
            ?>
            <button type="submit" class="btn btn-primary" name="details">Ver detalles</button>
        </form>
        <?php
        if (isset($_POST['details'])) {
            $starwarscontroller->detailsCharacter($_POST['character']);
        }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
