<?php

require 'vendor/autoload.php';

use Google\Cloud\RecaptchaEnterprise\V1\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\TokenProperties\InvalidReason;

function ValidateEmail($email) {
    $regex = '/([a-z0-9_.-]+)'. # name
    '@'. # at
    '([a-z0-9.-]+){2,255}'. # domain & possibly subdomains
    '.'. # period
    '([a-z]+){2,10}/i'; # domain extension

    if($email == '') return false;
    else $eregi = preg_replace($regex, '', $email);

    return empty($eregi) ? true : false;
}
function ValidateZipCode($zipCode) {
    return (preg_match('/^[0-9]{5}(-[0-9]{4})?$/', $zipCode)) ? true : false;
}
function ValidatePhone($phone){
    return (preg_match('/^[\+\(\s.\-\/\d\)]{5,30}$/', $phone)) ? true : false;
}


function validateRecaptcha(
  string $siteKey,
  string $token,
  string $project
) {

  putenv('GOOGLE_APPLICATION_CREDENTIALS=hip-fuze-304917-9b3d833fe53a.json');

  $client = new RecaptchaEnterpriseServiceClient();

  $projectName = $client->projectName($project);

  $event = (new Event())
	  ->setSiteKey($siteKey)
	  ->setToken($token);

  $assessment = (new Assessment())
	  ->setEvent($event);

  try {
	  $response = $client->createAssessment(
		  $projectName,
		  $assessment
	  );
/*
	  if ($response->getTokenProperties()->getValid() == false) {
		 printf('The validateRecaptcha() call failed because the token was invalid for the following reason: ');
		  printf(InvalidReason::name($response->getTokenProperties()->getInvalidReason()));


	  } else {
		  printf('The score for the protection action is:');
		  printf($response->getRiskAnalysis()->getScore());

	  }*/

    return $response->getTokenProperties()->getValid();

  } catch (exception $e) {
	//  printf('validateRecaptcha() call failed with the following error: ');
	 // printf($e);
   return false;
  }
}


?>
