<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

include 'config.php';

session_start();
error_reporting (E_ALL ^ E_NOTICE);

$post = true;

if($post) {
    include 'functions.php';

    $subject = "Vicehub Inquiry";
    $message = "Message:"
    ."\n\nProject Name: ".$_POST['input1']
    ."\n\nSupply: ".$_POST['input2']
    ."\n\nMint Price (SOL): ".$_POST['input3']
    ."\n\nEstimated Mint Date: ".$_POST['input4']
    ."\n\nProject Description: ".$_POST['input5']
    ."\n\nSample Artwork: ".$_POST['input6']
    ."\n\nMain Contact Email: ".$_POST['input7']
    ."\n\nDiscord Link: ".$_POST['input8']
    ."\n\nMain Discord ID: ".$_POST['input9']
    ."\n\nTwitter Link: ".$_POST['input10']
    ."\n\nTeam Overview / Roles: ".$_POST['input11']
    ."\n\nProject Whitepaper / Roadmap: ".$_POST['input12']
    ."\n\nMarketing Plan Description: ".$_POST['input13']
    ."\n\nHow do you plan to spend mint funds: ".$_POST['input14']
    ."\n\nHas anyone on the team worked on previous projects? Provide details: ".$_POST['input15'];

    error_log($message);

    $error = '';

    $supply=$_POST['input2'];
    $price=$_POST['input3'];
    $mail=$_POST['input7'];

    if ($supply && !is_numeric($_POST['input2'])) $error .= 'Please enter a valid Supply.<br />';

    if ($price && !is_numeric($_POST['input3'])) $error .= 'Please enter a valid Mint Price in SOL.<br />';

    if($mail && !ValidateEmail($_POST['input7'])) $error .= 'Please enter a valid e-mail address.<br />';

    if (!$error) {
        $mail = mail(WEBMASTER_EMAIL, $subject, $message,
        "X-Mailer: PHP/".phpversion());
        if($mail) $url =  "../04_retro-author.php?status=ok";
    } else {
        $url = $url =  "../04_retro-author.php?status=".$error;
    }

    header('Location:'.$url);
    exit();
}
?>
