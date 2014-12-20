<?

//include "../login_check.php";
include "../../../config/config.php";
include "../_info_.php";
include "../../../functions.php";

include "options_config.php";

// Checking POST & GET variables...
if ($regex == 1) {
	regex_standard($_POST['type'], "../../../msg.php", $regex_extra);
	regex_standard($_POST['action'], "../../../msg.php", $regex_extra);
	regex_standard($_GET['mod_action'], "../../../msg.php", $regex_extra);
	regex_standard($_GET['mod_service'], "../../../msg.php", $regex_extra);
	regex_standard($_GET['meterpreter_host'], "../../../msg.php", $regex_extra);
	regex_standard($_GET['meterpreter_port'], "../../../msg.php", $regex_extra);
}

$type = $_POST['type'];
$action = $_POST['action'];
$mod_action = $_GET['mod_action'];
$mod_service = $_GET['mod_service'];
$meterpreter_host = $_POST["meterpreter_host"];
$meterpreter_port = $_POST["meterpreter_port"];

// meterpreter settings
if ($type == "settings") {

    $exec = "/bin/sed -i 's/^\\\$meterpreter_host.*/\\\$meterpreter_host = \\\"".$meterpreter_host."\\\";/g' ../_info_.php";
    //exec("$bin_danger \"" . $exec . "\"", $output); //DEPRECATED
    $output = exec_fruitywifi($exec);

    $exec = "/bin/sed -i 's/^\\\$meterpreter_port.*/\\\$meterpreter_port = \\\"".$meterpreter_port."\\\";/g' ../_info_.php";
    //exec("$bin_danger \"" . $exec . "\"", $output); //DEPRECATED
	exec_fruitywifi($exec);
    
    header('Location: ../index.php?tab=0');
    exit;

}

header('Location: ../index.php');

?>