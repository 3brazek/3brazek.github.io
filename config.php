<?php
$db_url = "localhost";
$db_name = "test-bef270"; //database name
$db_username = "test-bef270"; //database account username
$db_password="d8a3"; //database account password
$epg_url = ""; //epg xml url (http://iptvmedia.live:8080/get.php?username=test-bef270&password=d8a3&type=m3u_plus&output=ts)
$epg_valid_hours = "+12 hours"; //if database has epg available for less than 12 hours it will be updated. Alternative values: "+1 day", "+2 days", "+1 week" etc etc

//To avoid wasting server resources, epg update will be triggered when an user login and database has less than 12 hours of programmes.

?>
