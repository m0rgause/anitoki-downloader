<?php

$get = file_get_contents(url."?id=".$id);
$down = json_decode($get,true);
if ($down['error_code'] == "200") {
    echo "\n1. 360p\n2. 480p\n3. 720p\n4. 1080p\n\n";
		$option = fwrite(STDOUT, "Quality : ");
		$option = trim(fgets(STDIN));
		if ($option == "1" || $option == 1) {
			echo "\n1. Google Drive\n2. ZippyShare\n";
			$option = fwrite(STDOUT, "Server : ");
			$option = trim(fgets(STDIN));
			if ($option == "1" || $option == 1) {
				echo "Copy This Link And Paste On Your Browser\n";
				echo $redbg.$down['result']['360p']['h264']['gd'].$tp."\n";		
				sleep(2);
				
			}elseif ($option == "2" || $option == 2) {
				echo "Copy This Link And Paste On Your Browser\n";
				echo $redbg.$down['result']['360p']['h264']['zippy'].$tp."\n";
				sleep(2);
				
			}
		}
		if ($option == "2" || $option == 2) {
			echo "\n1. Google Drive\n2. ZippyShare\n";
			$option = fwrite(STDOUT, "Server : ");
			$option = trim(fgets(STDIN));
			if ($option == "1" || $option == 1) {
				echo "Copy This Link And Paste On Your Browser\n";
				echo $redbg.$down['result']['480p']['h264']['gd'].$tp."\n";		
				sleep(2);
				
			}elseif ($option == "2" || $option == 2) {
				echo "Copy This Link And Paste On Your Browser\n";
				echo $redbg.$down['result']['480p']['h264']['zippy'].$tp."\n";
				sleep(2);
				
			}
		}
		if ($option == "3" || $option == 3) {
			echo "\n1. Google Drive\n2. ZippyShare\n";
			$option = fwrite(STDOUT, "Server : ");
			$option = trim(fgets(STDIN));
			if ($option == "1" || $option == 1) {
				echo "Copy This Link And Paste On Your Browser\n";
				echo $redbg.$down['result']['720p']['h264']['gd'].$tp."\n";		
				sleep(2);
				
			}elseif ($option == "2" || $option == 2) {
				echo "Copy This Link And Paste On Your Browser\n";
				echo $redbg.$down['result']['720p']['h264']['zippy'].$tp."\n";
				sleep(2);
				
			}
		}
		if ($option == "4" || $option == 4) {
			echo "\n1. Google Drive\n2. ZippyShare\n";
			$option = fwrite(STDOUT, "Server : ");
			$option = trim(fgets(STDIN));
			if ($option == "1" || $option == 1) {
				echo "Copy This Link And Paste On Your Browser\n";
				echo $redbg.$down['result']['1080p']['h264']['gd'].$tp."\n";		
				sleep(2);
				
			}elseif ($option == "2" || $option == 2) {
				echo "Copy This Link And Paste On Your Browser\n";
				echo $redbg.$down['result']['1080p']['h264']['zippy'].$tp."\n";
				sleep(2);
				
			}
		}
	
}
?>