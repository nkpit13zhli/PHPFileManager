<?php

class PHPFileManager
{
	function delete($path, $filename)
	{
		$path = substr($path, -1) == "/" or $path != "" ? $path : $path . "/";
		unlink($path . $filename);
	}
}

?>