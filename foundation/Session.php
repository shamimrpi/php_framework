<?php 
// SessionFacade.php
namespace Foundation;

use Foundation\SessionManager;

class Session
{
    protected static $sessionManager;

    public static function setSessionManager(SessionManager $sessionManager)
    {
        static::$sessionManager = $sessionManager;
    }

    public static function put($key, $value)
    {
        // echo static::$sessionManager;
        static::$sessionManager->put($key, $value);
    }

    public static function get($key)
    {
        return static::$sessionManager->get($key);
         echo $key;
    }

    // You can add more methods here to expose other session functionalities
}
