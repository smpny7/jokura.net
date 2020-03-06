<?php
    function maintenanceCheck(){
        require __DIR__ . '/../state.php';
        if ($maintenanceMode && !isset($_GET['root'])) {
            header('Location: /maintenance');
            exit;
        }
    }
    function maintenanceFinishCheck(){
        require __DIR__ . '/../state.php';
        if (!$maintenanceMode) {
            if(!isset($_GET['root'])) {
                header('Location: /');
                exit;
            }
        }
    }
?>