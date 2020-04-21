<?php
include(dirname(dirname(dirname(__FILE__))).'/objects/class_connection.php');
include(dirname(dirname(dirname(__FILE__))).'/objects/class_setting.php');
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_CalendarService.php';
		$database=new cleanto_db();
		$setting=new cleanto_setting();
		$conn=$database->connect();
		$database->conn=$conn;
		$setting->conn=$conn;	
		$GcclientID = $setting->get_option('ct_gc_client_id');
		$GcclientSecret = $setting->get_option('ct_gc_client_secret');
		$GcEDvalue = $setting->get_option('ct_gc_status');
		

		$client = new Google_Client();
		$client->setApplicationName("Google Calender");
		$client->setClientId($GcclientID);
		$client->setClientSecret($GcclientSecret);
		$ct_gc_admin_url = $setting->get_option('ct_gc_admin_url');
		/* $client->setRedirectUri(site_url().'/wp-admin/admin.php?page=google_calender_settings_submenu'); */
		$client->setRedirectUri($ct_gc_admin_url);
		$client->setDeveloperKey($GcclientID);
		$client->setScopes(array('https://www.googleapis.com/auth/userinfo.email','https://www.googleapis.com/auth/calendar','https://www.google.com/calendar/feeds/'));
		$client->setAccessType('offline');
		$client->setApprovalPrompt( 'force' );
		
		$service = new Google_CalendarService($client);
		$provider_gc_data = $setting->get_option('ct_gc_token');
		if(sizeof((array)$provider_gc_data) > 0){
			$accesstoken = json_decode($provider_gc_data);
			$client->setAccessToken($provider_gc_data);
			if ($accesstoken) {
				if ($client->isAccessTokenExpired()) {
					$client->refreshToken($accesstoken->refresh_token);				
				}
			}

			/* $client->revokeToken($provider_gc_data[0]); */					
			if ($client->getAccessToken()){
				$calendarList = $service->calendarList->listCalendarList();
				$allCalenders = array();
				foreach($calendarList['items'] as $singleItem){
					if($singleItem['accessRole']=='owner'){
						$allCalenders[]=array($singleItem['id']=>$singleItem['summary'].'##==##'.$singleItem['id']);
					}
				}
			}
		}else{
			$allCalenders = array();
		}
echo json_encode($allCalenders);die();		
?>