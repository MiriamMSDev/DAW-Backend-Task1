<?php
include_once "generar_pagina.php";
$titulo = "Intranet";
?>
<html>
    <head>
        <title><?php echo "$titulo" ?></title>
    </head>
    <body>
        <?php 
            generar_pagina($titulo, "We have to create a page called intranet.php and, 
            within this, create a menu with 2 links, one of them is to this page and 
            the other to the blog page; a title of the page, and a descriptive paragraph."); 
        ?>
    </body>
</html>