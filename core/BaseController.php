<?php 
    session_start();

    class BaseController
    {
        public function __construct()
        {
            require_once 'Connection.php';
            require_once 'BaseModal.php';

        }
    }
?>