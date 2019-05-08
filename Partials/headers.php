<?php
    switch ($_SESSION['rol']) {
            case 1:
                require '../Partials/headerAdmin.php';
                break;
            
            case 2:
                require '../Partials/headerVentas.php';
                break;

            case 3:
                require '../Partials/headerRefaccionaria.php';
                break;
                
            case 4:
                require '../Partials/headerTaller.php';
                break;
        }
?>