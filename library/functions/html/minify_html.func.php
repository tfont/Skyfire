<?php

/**
 * HTML Minifier
 *
 * @param $html
 *
 * @return string
 */
function minify_html($html)
{
    if (trim($html) === '')
    {
        return (string) $html;
    }

    // Remove extra white-space(s) between HTML attribute(s)
    $html = preg_replace_callback('#<([^\/\s<>!]+)(?:\s+([^<>]*?)\s*|\s*)(\/?)>#s', function ($matches)
    {
        return (string) '<'.$matches[1].preg_replace('#([^\s=]+)(\=([\'"]?)(.*?)\3)?(\s+|$)#s', ' $1$2', $matches[2]).$matches[3].'>';
    },
    str_replace("\r", "", $html));

    // Minify inline CSS declaration(s)
    if (strpos($html, ' style=') !== FALSE)
    {
        $html = preg_replace_callback('#<([^<]+?)\s+style=([\'"])(.*?)\2(?=[\/\s>])#s', function ($matches)
        {
            return (string) '<'.$matches[1].' style='.$matches[2].minify_css($matches[3]).$matches[2];
        },
        $html);
    }

    return (string) trim(preg_replace(array
    (
        // t = text
        // o = tag open
        // c = tag close
        // Keep important white-space(s) after self-closing HTML tag(s)
        '#<(img|input)(>| .*?>)#s',
        // Remove a line break and two or more white-space(s) between tag(s)
        '#(<!--.*?-->)|(>)(?:\n*|\s{2,})(<)|^\s*|\s*$#s',
        '#(<!--.*?-->)|(?<!\>)\s+(<\/.*?>)|(<[^\/]*?>)\s+(?!\<)#s', // t+c || o+t
        '#(<!--.*?-->)|(<[^\/]*?>)\s+(<[^\/]*?>)|(<\/.*?>)\s+(<\/.*?>)#s', // o+o || c+c
        '#(<!--.*?-->)|(<\/.*?>)\s+(\s)(?!\<)|(?<!\>)\s+(\s)(<[^\/]*?\/?>)|(<[^\/]*?\/?>)\s+(\s)(?!\<)#s', // c+t || t+o || o+t -- separated by long white-space(s)
        '#(<!--.*?-->)|(<[^\/]*?>)\s+(<\/.*?>)#s', // empty tag
        '#<(img|input)(>| .*?>)<\/\1>#s', // reset previous fix
        '#(&nbsp;)&nbsp;(?![<\s])#', // clean up ...
        '#(?<=\>)(&nbsp;)(?=\<)#', // --ibid
        // Remove HTML comment(s) except IE comment(s)
        '#\s*<!--(?!\[if\s).*?-->\s*|(?<!\>)\n+(?=\<[^!])#s'
    ),
    array
    (
        '<$1$2</$1>',
        '$1$2$3',
        '$1$2$3',
        '$1$2$3$4$5',
        '$1$2$3$4$5$6$7',
        '$1$2$3',
        '<$1$2',
        '$1 ',
        '$1',
        ""
    ),
    $html));
}
