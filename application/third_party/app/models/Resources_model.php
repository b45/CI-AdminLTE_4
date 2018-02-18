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
	public function get_disk_total($directory = DIRECTORY_SEPARATOR)
	{
		return disk_total_space($directory);
	}

	public function get_disk_use($directory = DIRECTORY_SEPARATOR)
	{
		return $this->get_disk_total($directory) - $this->get_disk_free($directory);
	}

	public function get_disk_free($directory = DIRECTORY_SEPARATOR)
	{
		return disk_free_space($directory);
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

		return round(($this->get_disk_use($directory) * 100) / $this->get_disk_total($directory), 0) . $unit;
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

		return round(($this->get_disk_free($directory) * 100) / $this->get_disk_total($directory), 0) . $unit;
	}


	/**
	 * Memory informations
	 */
	public function get_memory_total($real = FALSE)
	{
		return memory_get_peak_usage($real);
	}

	public function get_memory_use($real = FALSE)
	{
		return memory_get_usage($real);
	}

	public function get_memory_free($real = FALSE)
	{
		return $this->get_memory_total($real) - $this->get_memory_use($real);
	}

	public function get_memory_use_percent($real = FALSE, $display_unit = FALSE)
	{
		if ($display_unit === FALSE)
		{
			$unit = NULL;
		}
		else
		{
			$unit = ' %';
		}

		return round(($this->get_memory_use($real) * 100) / $this->get_memory_total($real)) . $unit;
	}

	public function get_memory_free_percent($real = FALSE, $display_unit = FALSE)
	{
		if ($display_unit === FALSE)
		{
			$unit = NULL;
		}
		else
		{
			$unit = ' %';
		}

		return round(($this->get_memory_free($real) * 100) / $this->get_memory_total($real), 0) . $unit;
	}
}
