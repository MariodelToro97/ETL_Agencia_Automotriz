<?php
    switch ($_SESSION['rol']) {            
            case 2:                
                header('Location: ../Views/Ventas.php');
                break;

            case 3:                
                header('Location: ../Views/Refaccionaria.php');
                break;
                
            case 4:
                header('Location: ../Views/Taller.php');
                break;
        }
?>