<?php
    function generar_pagina($titulo, $descripcion) {
        echo <<<PHP
        <h1 class="title">$titulo</h1>
        <p class="description">$descripcion</p>
        <ul>
            <li><a href="intranet.php">intranet</a></li>
            <li><a href="blog.php">blog</a></li>
        </ul>
        <footer>
            <p>Miriam Molina Sorroche, 2nd year Web Applications Development, 
                CesurFormacion Academy</p>
        </footer> 
        PHP;
    }
?>