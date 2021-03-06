<?php

/**
 * @param $digits
 * @param bool $leading_zeros
 *
 * @return int|string
 */
function random_number($digits, $leading_zeros = FALSE)
{
	if ($leading_zeros === FALSE)
	{
		return (int) rand(pow(10, $digits-1), pow(10, $digits)-1);
	}
	if ($leading_zeros === TRUE)
	{
		return (string) str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
	}
}
