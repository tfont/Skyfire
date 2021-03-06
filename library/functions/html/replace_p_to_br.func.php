<?php

/**
 * replaces any p tag (paragraphs) with a br tag (new line)
 *
 * @param $string
 *
 * @return string
 */
function replace_p_to_br($string)
{
    $string = preg_replace("/<p[^>]*?>/", "", $string);
    $string = str_replace("</p>", "<br />", $string);
    
    return (string) $string;
}
