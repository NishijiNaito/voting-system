<?php
function checksess(){
    $time = $_SERVER['REQUEST_TIME'];
    $timeout_duration = 600; // 10 Mins (600 Seconds) To Log Out Auto 

    if (isset($_SESSION['LAST_ACTIVITY']) && 
    ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
        session_unset();
        session_destroy();
        session_start();
    }else{
        
        $_SESSION['LAST_ACTIVITY'] = $time;
    }

}
    
?>