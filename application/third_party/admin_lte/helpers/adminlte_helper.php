<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('content_header_title'))
{
	function content_header_title($title = '', $subtitle = '')
	{
		if ( ! empty($title))
		{
			$out  = '<h1>';
			$out .= $title;

			if ( ! empty($subtitle))
			{
				$out .= '<small>' . $subtitle . '</small>';
			}

			$out .= '</h1>';

			return $out;
		}
	}
}


if ( ! function_exists('wg_info_box'))
{
	function wg_info_box($bg_color = '', $icon = '', $text = '', $number = '')
	{
		$out  = '<div class="info-box">';
		$out .= '<span class="info-box-icon ' . $bg_color . '">' . $icon . '</span>';
		$out .= '<div class="info-box-content">';
		$out .= '<span class="info-box-text">' . $text . '</span>';
		$out .= '<span class="info-box-number">' . $number . '</span>';
		$out .= '</div>';
		$out .= '</div>';

		return $out;
	}
}


if ( ! function_exists('wg_info_box_progress'))
{
	function wg_info_box_progress($bg_color = '', $icon = '', $text = '', $number = '', $pourcent = '', $description = '')
	{
		$out  = '<div class="info-box ' . $bg_color . '">';
		$out .= '<span class="info-box-icon">' . $icon . '</span>';
		$out .= '<div class="info-box-content">';
		$out .= '<span class="info-box-text">' . $text . '</span>';
		$out .= '<span class="info-box-number">' . $number . '</span>';
		$out .= '<div class="progress">';
		$out .= '<div class="progress-bar" style="width:' . $pourcent . '%"></div>';
		$out .= '</div>';
		$out .= '<span class="progress-description">' . $description . '</span>';
		$out .= '</div>';
		$out .= '</div>';

		return $out;
	}
}


if ( ! function_exists('wg_small_box'))
{
	function wg_small_box($bg_color = '', $icon = '', $title = '', $text = '', $href = '', $footer = 'lang_more_info', $footer_icon = '<i class="fa fa-arrow-circle-right"></i>')
	{
		$out  = '<div class="small-box ' . $bg_color . '">';
		$out .= '<div class="inner">';
		$out .= '<h3>' . $title . '</h3>';
		$out .= '<p>' . $text . '</p>';
		$out .= '</div>';
		$out .= '<div class="icon">' . $icon . '</div>';
		$out .= '<a href="' . $href . '" class="small-box-footer">' . $footer . ' ' . $footer_icon . '</a>';
		$out .= '</div>';

		return $out;
	}
}


if ( ! function_exists('ui_alert'))
{
	function ui_alert($type = 'alert-danger', $icon = '', $title = '', $text = '')
	{
		$out  = '<div class="alert ' . $type . ' alert-dismissible">';
		$out .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
		$out .= '<h4>' . $icon . ' ' . $title . '</h4>';
		$out .= $text;
		$out .= '</div>';

		return $out;
	}
}


if ( ! function_exists('ui_callout'))
{
	function ui_callout($type = 'callout-danger', $title = '', $text = '')
	{
		$out  = '<div class="callout ' . $type . '">';
		$out .= '<h4>' . $title . '</h4>';
		$out .= $text;
		$out .= '</div>';

		return $out;
	}
}
