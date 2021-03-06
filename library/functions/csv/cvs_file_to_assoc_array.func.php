<?php

/**
 * @param $filename
 * @param string $delimiter
 *
 * @return array|bool
 */
function cvs_file_to_assoc_array($filename, $delimiter = ',')
{
    if (!file_exists($filename) || !is_readable($filename))
    {
        return FALSE;
    }
        
    $header = NULL;
    $data   = array();

    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            if (!$header)
            {
                $header = $row;
            }
            else
            {
                $data[] = array_combine($header, $row);
            }
        }

        fclose($handle);
    }

    return (array) $data;
}
