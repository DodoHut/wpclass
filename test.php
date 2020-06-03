<?php

/*if (isset($_GET ['name'])) {
    $name = $_GET ['name'];
} else
    
    $name = null;*/

$name = $_GET ['name'] ?? 'no name';

echo $name;