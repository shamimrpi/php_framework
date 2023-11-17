<?php 
namespace Foundation;

class SessionManager
{
    protected $sessionData = [];

    public function __toString()
    {
        return 'String representation of the session manager';
    }

    public function put($key, $value)
    {
        $this->sessionData[$key] = $value;
    }

    public function get($key)
    {
        return $this->sessionData[$key] ?? null;
    }

    public function getSessionDataAsString()
    {
        // Convert session data to a string representation
        return json_encode($this->sessionData);
    }
}
