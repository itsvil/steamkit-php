<?php

namespace SteamKit\Base\Enums;

class EChatInfoType
{
	const StateChange = 1;
	const InfoUpdate = 2;
	const MemberLimitChange = 3;

	public static function getAllEnums()
	{
		$class = new ReflectionClass('EChatInfoType');
		return $class->getConstants();
	}

	public static function getByName($name)
	{
		$constants = self::getAllEnums();
		if (array_key_exists($name, $constants)) {
			return $constants[$name];
		}

		return false;
	}

	public static function getByValue($value)
	{
		$constants = self::getAllEnums();
		$key = array_search($value, $constants);
		if ($key !== null || $key !== false) {
			return $key;
		}

		return false;
	}
}
?>