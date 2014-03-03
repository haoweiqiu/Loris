<?php

require_once "Database.class.inc";
require_once 'NDB_Config.class.inc';
require_once 'NDB_Client.class.inc';
$config =& NDB_Config::singleton();
$client = new NDB_Client();
$client->makeCommandLine();
$client->initialize();

$DB = Database::singleton();

$result = $DB->pselectOne(
    "SELECT DefaultEmail FROM participant_emails WHERE Test_name=:TN",
    array('TN' => $_REQUEST['test_name'])
);
if (Utility::isErrorX($result) || empty($result)) {
    print "";
} else {
    print $result;

}
?>
