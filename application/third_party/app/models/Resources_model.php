<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Disk informations
	 */
	public function get_disk_total_space($directory = DIRECTORY_SEPARATOR)
	{
		return disk_total_space($directory);
	}


	public function get_disk_free_space($directory = DIRECTORY_SEPARATOR)
	{
		return disk_free_space($directory);
	}


	public function get_disk_use_space($directory = DIRECTORY_SEPARATOR)
	{
		return $this->get_disk_total_space($directory) - $this->get_disk_free_space($directory);
	}


	public function get_disk_free_percent($directory = DIRECTORY_SEPARATOR, $display_unit = FALSE)
	{
		if ($display_unit === FALSE)
		{
			$unit = NULL;
		}
		else
		{
			$unit = ' %';
		}

		return round(($this->get_disk_free_space($directory) * 100) / $this->get_disk_total_space($directory), 0) . $unit;
	}


	public function get_disk_use_percent($directory = DIRECTORY_SEPARATOR, $display_unit = FALSE)
	{
		if ($display_unit === FALSE)
		{
			$unit = NULL;
		}
		else
		{
			$unit = ' %';
		}

		return round(($this->get_disk_use_space($directory) * 100) / $this->get_disk_total_space($directory), 0) . $unit;
	}


	/**
	 * Memory informations
	 */
	public function memory_peak_usage($real = FALSE)
	{
		if ($real)
		{
			return memory_get_peak_usage(TRUE);
		}
		else
		{
			return memory_get_peak_usage(FALSE);
		}
	}


	public function memory_usage($real = FALSE)
	{
		if ($real)
		{
			return memory_get_usage(TRUE);
		}
		else
		{
			return memory_get_usage(FALSE);
		}
	}


	public function memory_usage_percent($real = FALSE, $display_unit = FALSE)
	{
		if ($display_unit === FALSE)
		{
			$unit = NULL;
		}
		else
		{
			$unit = ' %';
		}

		return round(($this->memory_usage($real) * 100) / $this->memory_peak_usage($real)) . $unit;
	}
}
