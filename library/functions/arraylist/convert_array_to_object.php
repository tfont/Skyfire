<?php

/**
 * @param array $array
 *
 * @return object
 */
function convert_array_to_object(array $array)
{
    return (object) json_decode(json_encode($array), FALSE);
}
