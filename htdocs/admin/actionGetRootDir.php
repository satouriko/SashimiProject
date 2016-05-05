<?php
	if(!file_exists("../../admin/config.php")){
		$fileConfigPhp = fopen("../../admin/config.php","w");
		fwrite($fileConfigPhp, "<?php\n	\$configRootDir = \"".addslashes(substr($_SERVER['DOCUMENT_ROOT'],0,-7))."/\";");
		fclose($fileConfigPhp);
	}
	header("Location: /admin/init.php");
