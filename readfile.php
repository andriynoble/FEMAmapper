<?php
function readfile() {
	$handle = @fopen("inputfile.txt", "r");
	if ($handle) {
	    while (($buffer = fgets($handle, 4096)) !== false) {
	        echo $buffer . "\n";
	    }
	    if (!feof($handle)) {
	        echo "Error: unexpected fgets() fail\n";
	    }
	    fclose($handle);
	}	
}
?>