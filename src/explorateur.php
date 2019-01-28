<?php

$files = scandir("../storage/");
$is_file = [];
$names = [];
foreach ($files as $key => $value)
{
	if ($key == 1)
	{
		array_push($is_file, "parent");
		array_push($names, basename("../storage/"));
	} else if ($key > 2)
	{
		$path = "../storage/" . $value;
		if (is_dir($path))
		{
			array_push($is_file, "dir");
			array_push($names, $value);
		} else
		{
			array_push($is_file, "file");
			array_push($names, $value);
		}	
	}	
}
array_push($is_file, $names);
return $is_file;

?>