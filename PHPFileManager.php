<?php

class PHPFileManager
{
	function delete($path, $filename)
	{
		$path = substr($path, -1) == "/" ? $path : $path . "/";
		unlink($path . $filename);
	}
}

?>