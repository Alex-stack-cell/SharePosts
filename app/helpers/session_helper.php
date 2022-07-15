<?php
    session_start();

    /**
     * Flash message displays based on user name
     * @param string $name
     * @param string $message
     * @param string $class
     * @return void
     */
    function flash($name= '', $message = '', $class = 'alert alert-success'){
        if(!empty($name)){
            if(!empty($message) && empty($_SESSION[$name])){
                if(!empty($_SESSION[$name])){
                    unset($_SESSION[$name]);
                }

                if(!empty($_SESSION[$class])){
                    unset($_SESSION[$class]);
                }
                
                $_SESSION[$name] = $message;
                $_SESSION[$name. '_class'] = $class;
            } elseif(empty($message) && !empty($_SESSION[$name])){
                $class = !empty($_SESSION[$class]) ? $_SESSION[$name. '_class'] : '';
                echo '<div class = "'.$class.'" role="alert" id="msg-flash">'.$_SESSION[$name].'</div>';
                unset($_SESSION[$name]);
                unset($_SESSION[$class]);
            }
        }
    }

    function isLoggedIn(){
        if(isset($_SESSION['user_id'])){
          return true;
        } else {
          return false;
        }
    }