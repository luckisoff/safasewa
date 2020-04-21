<?php
include(dirname(dirname(dirname(__FILE__)))."/objects/class_connection.php");
include(dirname(dirname(dirname(__FILE__)))."/objects/class_setting.php");

$con = new cleanto_db();
$conn = $con->connect();

$setting = new cleanto_setting();
$setting->conn = $conn;

require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_CalendarService.php';

function delete_google_cal_event($calendarId,$provider_access_token,$eventid,$GcclientID,$GcclientSecret,$GcEDvalue,$ct_gc_admin_url){
	$clientP = new Google_Client();
	$clientP->setApplicationName("Cleanto Google Calender");
	$clientP->setClientId($GcclientID);
	$clientP->setClientSecret($GcclientSecret);
	$clientP->setRedirectUri($ct_gc_admin_url);
	$clientP->setDeveloperKey($GcclientID);
	$clientP->setScopes('https://www.googleapis.com/auth/calendar');
	$clientP->setAccessType('offline');
	$calP = new Google_CalendarService($clientP);	
	
	$clientP->setAccessToken($provider_access_token);
	$accesstoken = json_decode($provider_access_token);
	
	if($provider_access_token){
		if ($clientP->isAccessTokenExpired()) {
			$clientP->refreshToken($accesstoken->refresh_token);
		}
	}
	if ($clientP->getAccessToken()){
		$allevents_provider = $calP->events->delete($calendarId,$eventid);
	}
	
}
/* Trigger Delete Event Function - Google Calender */
if(isset($_REQUEST['eid'],$_REQUEST['pid']) && $_REQUEST['eid']!='' && $_REQUEST['pid']!=''){	
	$provider_gc_id = $setting->get_option('ct_gc_id');
	$provider_gc_data = $setting->get_option('ct_gc_token');
	$GcclientID = $setting->get_option('ct_gc_client_id');
	$GcclientSecret = $setting->get_option('ct_gc_client_secret');
	$GcEDvalue = $setting->get_option('ct_gc_status_configure');
	$ct_gc_admin_url = $setting->get_option('ct_gc_admin_url');
	
	if($provider_gc_id!='' && $provider_gc_data!=''){
		$provider_events = delete_google_cal_event($provider_gc_id,$provider_gc_data,$_REQUEST['eid'],$GcclientID,$GcclientSecret,$GcEDvalue,$ct_gc_admin_url);	
	}	
} ?>