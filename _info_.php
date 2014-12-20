<?
$mod_name="meterpreter";
$mod_version="1.1";
$mod_path="/usr/share/fruitywifi/www/modules/$mod_name";
$mod_logs="$log_path/$mod_name.log"; 
$mod_logs_history="$mod_path/includes/logs/";
$mod_logs_panel="disabled";
$mod_panel="show";
$meterpreter_host = "10.0.0.1";
$meterpreter_port = "6666";
$mod_isup="netstat -anp|grep -iEe '".$meterpreter_port.".+ESTABLISHED'";
$mod_alias="Meterpreter";

# EXEC
$bin_danger = "/usr/share/fruitywifi/bin/danger";
$bin_sudo = "/usr/bin/sudo";
$bin_sh = "/bin/sh";
$bin_echo = "/bin_echo";
$bin_tcpdump = "/usr/sbin/tcpdump";
$bin_killall = "/usr/bin/killall";
$bin_cp = "/bin/cp";
$bin_chmod = "/bin/chmod";
$bin_sed = "/bin/sed";
$bin_rm = "/bin/rm";
$bin_php = "/usr/bin/php";
$bin_kill = "/bin/kill";
?>
