<?php

function is_associative_array($array)
{
    if (!is_array($array))
    {
        return FALSE;
    }
    $keys = array_keys($array);
    foreach($keys as $key)
    {
        if (is_string($key))
        {
            return TRUE;
        }
    }
    return FALSE;
}

//$arr = array(1 => 'test1', 'b' => 'test2', 'c', );
//var_dump(is_associative_array($arr));