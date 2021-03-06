<?php

/**
 * Class HTML - Skyfire PHP
 *
 * HTML interface and function into object inherence
 */
class HTML extends Controller
{
    protected function append_missing_tag() {}

    /**
     * @param $input
     *
     * @return string
     */
    protected function br2nl($input)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'input' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($input)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) br2nl($input);
        }
    }

    /**
     * @param $buffer
     *
     * @return string
     */
    protected function compress_css($buffer)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'buffer' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($buffer)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) compress_css($buffer);
        }
    }

    /**
     * @param $content
     *
     * @return string
     */
    protected function compress_html($content)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'content' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($content)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) compress_html($content);
        }
    }

    protected function count_html_output_lines() {}
    protected function create_div_table() {}

    /**
     * @param $tag_name
     * @param $html
     * @param string $encoding
     *
     * @return array
     */
    protected function get_element_all_attributes($tag_name, $html, $encoding = 'UTF-8')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'tag_name' => DT::STRING,
                'html'     => DT::TEXT,
                'encoding' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($tag_name, $html, $encoding)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) get_element_all_attributes($tag_name, $html, $encoding);
        }
    }

    protected function get_page_title() {}

    /**
     * @param $html
     * @param string $encoding
     *
     * @return bool
     */
    protected function is_input($html, $encoding = 'UTF-8')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'html'     => DT::TEXT,
                'encoding' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($html, $encoding)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_input($html, $encoding);
        }
    }

    /**
     * @param $html
     * @param string $encoding
     *
     * @return bool
     */
    protected function is_select($html, $encoding = 'UTF-8')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'html'     => DT::TEXT,
                'encoding' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($html, $encoding)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_select($html, $encoding);
        }
    }

    /**
     * @param $string
     *
     * @return string
     */
    protected function left_trim_br_tag($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::TEXT);
        }
        else
        {
            return left_trim_br_tag($string);
        }
    }

    /**
     * @param $css
     *
     * @return string
     */
    protected function minify_css($css)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'css' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($css)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) minify_css($css);
        }
    }

    /**
     * @param $content
     *
     * @return string
     */
    protected function minify_html($content)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'content' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($content)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) minify_html($content);
        }
    }

    /**
     * @param $javascript
     *
     * @return string
     */
    protected function minify_js($javascript)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'javascript' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($javascript)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) minify_js($javascript);
        }
    }

    /**
     * @param $selector_html
     * @param string $encoding
     *
     * @return array
     */
    protected function parse_selector_values($selector_html, $encoding = 'UTF-8')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'selector_html' => DT::TEXT,
                'encoding'      => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($selector_html, $encoding)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) parse_selector_values($selector_html, $encoding);
        }
    }

    /**
     * @param $name
     * @param $selector_html
     * @param string $encoding
     *
     * @return array
     */
    protected function parse_selector_values_by_name($name, $selector_html, $encoding = 'UTF-8')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'name'          => DT::STRING,
                'selector_html' => DT::TEXT,
                'encoding'      => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($name, $selector_html, $encoding)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) parse_selector_values_by_name($name, $selector_html, $encoding);
        }
    }

    /**
     * @param $string
     * @param $tag
     * @param string $replace
     *
     * @return string
     */
    protected function replace_html_tag($string, $tag, $replace = '')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string'  => DT::TEXT,
                'tag'     => DT::STRING,
                'replace' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string, $tag, $replace)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) replace_html_tag($string, $tag, $replace);
        }
    }

    /**
     * @param $string
     *
     * @return string
     */
    protected function replace_multi_br_to_single($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) replace_multi_br_to_single($string);
        }
    }

    /**
     * @param $string
     *
     * @return string
     */
    protected function replace_p_to_br($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) replace_p_to_br($string);
        }
    }

    /**
     * @param $input
     * @param string $break
     * @param string $end_text
     * @param int $limit
     * @param bool $tidy_html
     * @param bool $strip_html
     *
     * @return string
     */
    protected function safe_truncate($input, $break = ' ', $end_text = '...', $limit = 255, $tidy_html = TRUE, $strip_html = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'input'      => DT::TEXT,
                'break'      => DT::STRING,
                'end_text'   => DT::STRING,
                'limit'      => DT::UINT32,
                'tidy_html'  => DT::BOOL,
                'strip_html' => DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($input, $break, $end_text, $limit, $tidy_html, $strip_html)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) safe_truncate($input, $break, $end_text, $limit, $tidy_html, $strip_html);
        }
    }

    /**
     * @param $string
     *
     * @return string
     */
    protected function strip_html_table($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) strip_html_table($string);
        }
    }

    /**
     * @param $string
     * @param $tag
     *
     * @return string
     */
    protected function strip_html_tag($string, $tag)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::TEXT,
                'tag'    => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string, $tag)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) strip_html_tag($string, $tag);
        }
    }

    /**
     * @param $string
     *
     * @return string
     */
    protected function strip_html_tag_styles($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) strip_html_tag_styles($string);
        }
    }

    /**
     * @param string $text String to truncate
     * @param int $length Length of returned string, including ellipsis.
     * @param string $ending Ending to be appended to the trimmed string.
     * @param bool $exact If false, $text will not be cut mid-word
     * @param bool $consider_html If true, HTML tags would be handled correctly
     *
     * @return string Trimmed string
     */
    protected function truncate_html($text, $length = 100, $ending = '...', $exact = FALSE, $consider_html = TRUE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'text'          => DT::TEXT,
                'length'        => DT::UINT32,
                'ending'        => DT::STRING,
                'exact'         => DT::BOOL,
                'consider_html' => DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($text, $length, $ending, $exact, $consider_html)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) truncate_html($text, $length, $ending, $exact, $consider_html);
        }
    }
}
