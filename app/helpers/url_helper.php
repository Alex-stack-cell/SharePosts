<?php
    //Page redirection
    function redirect($page){
        header('location: '.URLROOT.'/'.$page);
    }