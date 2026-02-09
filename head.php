<?php
    // Si on est sur le serveur de l'école, on ajoute le dossier /portfolio/
    if ($_SERVER['HTTP_HOST'] == 'mmi23a08.mmi-troyes.fr') {
        $root = "/portfolio/";
    } else {
        $root = "/portfolio/"; // Dossier MAMP
    }
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $title; ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="<?php echo $root; ?>images/code-xml.png">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <link rel="stylesheet" href="<?php echo $root; ?>/styles.css">
    
</head>