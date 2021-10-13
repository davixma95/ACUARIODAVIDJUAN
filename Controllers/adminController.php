<?php
    
    if(session_status()==1){
        session_start();
    }
    $arrayUser = $_SESSION['arrayUser'];
    
    $name = $arrayUser->name;
    $surname = $arrayUser->surname;
    
    
    if(isset($_POST['btn_anadir'])){
       
       require_once 'anadirController.php';
       die();
    }
    
    require_once 'Views/adminView.php';

