<?php
$enable_modules = array(
	"views", 
	"views_ui",
	"wysiwyg",
	"ctools",
	"webform",
	"devel",
	"php",
);

$disable_modules = array(
	"toolbar",
	"comment",
	"rdf"
);

foreach($enable_modules as $module) {
	shell_exec("drush pm-enable ".$module." -y");
}

foreach($disable_modules as $module) {
	shell_exec("drush pm-disable ".$module." -y");
}
?>