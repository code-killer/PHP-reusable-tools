<?php


function transferFile ($RootDirectory,$OldFileName, $DestinationDirectory, $NewFileName ) {

$root = $RootDirectory.'/'.$OldFileName;
$destination= $DestinationDirectory.'/'.$NewFileName;

rename($root , $destination);

}


//above is a simple function is to transfer content of one folder to another, the funtion needs 4 parameters as the meaning of the name declared. the following sample code can be used to understand it better. in there '22.mp3' file in the 'files' directory will be transfered to the 'files1' directory with the name '23.mp3'

			// $RootDirectory = "files";
			// $OldFileName = "22.mp3";
			// $DestinationDirectory = "files1";
			// $NewFileName = "23.mp3";

			// transferFile ($RootDirectory,$OldFileName, $DestinationDirectory, $NewFileName ) ;

 // author: https://github.com/code-killer/
?>