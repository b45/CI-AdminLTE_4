<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('insert_link_tag'))
{
	function insert_link_tag($stylesheet = array(), $source = 'external', $rel = '')
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
						if (isset($k['url']))
						{
							$el_src = isset($k['src']) ? '/' . $k['src'] : NULL;
							$el_href = $k['url'] . $el_src;
							$integrity = isset($k['integrity']) ? ' integrity="' . $k['integrity'] . '"' : NULL;
							$crossorigin = isset($k['crossorigin']) ? ' crossorigin="' . $k['crossorigin'] . '"' : NULL;

							$out .= '<link rel="' . $rel . '" href="' . $el_href . '"' . $integrity . $crossorigin . '>'."\n";
						}
					}
				}
			}
		}
		return $out;
	}
}


if ( ! function_exists('insert_javascript'))
{
	function insert_javascript($javascript = array(), $source = 'external', $async = FALSE, $defer = FALSE)
	{
		$out = NULL;

		$async = $async ? ' async' : NULL;
		$defer = $defer ? ' defer' : NULL;

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

						$out .= '<script' . $async . $defer . ' src="' . $k['url'] . '/' . $k['src'] . '"' . $integrity . $crossorigin . '></script>'."\n";
					}
				}
			}
		}
		return $out;
	}
}
