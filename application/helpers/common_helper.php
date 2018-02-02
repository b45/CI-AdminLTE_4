<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('insert_stylesheet'))
{
	function insert_stylesheet($stylesheet = array(), $source = 'external')
	{
		$out = NULL;

		foreach ($stylesheet as $elem => $elem_val)
		{
			foreach ($elem_val as $src => $src_val[$source])
			{
				if ($src === $source)
				{
					foreach ($src_val as $k)
					{
						$integrity   = ! empty($k['integrity']) ? ' integrity="' . $k['integrity'] . '"' : NULL;
						$crossorigin = ! empty($k['crossorigin']) ? ' crossorigin="' . $k['crossorigin'] . '"' : NULL;

						$out .= '<link rel="stylesheet" href="' . $k['url'] . '/' . $k['src'] . '"' . $integrity . $crossorigin . '>';
					}
				}
			}
		}

		return $out;
	}
}


if ( ! function_exists('insert_javascript'))
{
	function insert_javascript($javascript = array(), $source = 'external')
	{
		$out = NULL;

		foreach ($javascript as $elem => $elem_val)
		{
			foreach ($elem_val as $src => $src_val[$source])
			{
				if ($src === $source)
				{
					foreach ($src_val as $k)
					{
						$integrity   = ! empty($k['integrity']) ? ' integrity="' . $k['integrity'] . '"' : NULL;
						$crossorigin = ! empty($k['crossorigin']) ? ' crossorigin="' . $k['crossorigin'] . '"' : NULL;

						$out .= '<script src="' . $k['url'] . '/' . $k['src'] . '"' . $integrity . $crossorigin . '></script>';
					}
				}
			}
		}

		return $out;
	}
}
