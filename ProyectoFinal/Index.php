<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="">
    <div class="form-container">
        <h2>Gestionar la búsqueda por:</h2>
        <div class="form-group">
            <div class="form-content">
                <div class="ribbon">
                    <div class="ribbon-group">
                    <?php
                    $buttonGroups = ['Archivo' => './Archivo/Archivo.php','Autor' => './Autor/Autor.php','Ficha' => './Ficha/Ficha.php','Global' => './Global/Global.php', 'Idioma' => './Idioma/Idioma.php','Palabras' => './Palabras/Palabras.php','Publicaciones' => './Publicaciones/Publicaciones.php'
                    ];
                    
                    foreach ($buttonGroups as $button => $url) {
                        
                        echo '<button class="ribbon-button" type="submit" formaction="' . htmlspecialchars($url) . '">' . htmlspecialchars($button) . '</button>';
                        
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </form>
</body>
</html>