<?php

class RoadTrip
{
	private static $instance;
	public $db;
	public $singular;
	public $path;
	public $plural;
	public $customFields;
	public $nameSpace;
	public $icon;

	public function __construct($singular, $plural, $path, $customFields)
	{
		$this->singular = $singular;
		$this->plural = $plural;
		$this->db = 'bs-roadtrip';
		$this->nameSpace = 'bs_roadtrip';
		$this->path = $path;
		$this->icon = 'dashicons-chart-line';
		$this->customFields = $customFields;
	}

	public static function getInstance($singular, $plural, $path, $customFields)
	{
		if (!self::$instance instanceof self) {
			self::$instance = new self($singular, $plural, $path, $customFields);
		}
		return self::$instance;
	}

}




