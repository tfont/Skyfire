<?php

/**
 * @param $string
 *
 * @return string
 */
function left_trim_br_tag($string)
{
    return (string) preg_replace('/^(?:<br\s*\/?>\s*)+/', '', $string);
}
