<?php
require_once "VideoData.php";
require_once "Notifiers/EmailNotifier.php";
require_once "Notifiers/PhoneNotifier.php";
require_once "Notifiers/YoutubeNotifier.php";
require_once "Notifiers/FacebookNotifier.php";

$videoData = new VideoData();

new EmailNotifier($videoData);
new PhoneNotifier($videoData);
new YoutubeNotifier($videoData);
new FacebookNotifier($videoData);

$videoData->setTitle("Title...");
$videoData->setDescription("Description...");
$videoData->setFileName("File name...");

$videoData->fire();

print "\n--------------------------\n";

$videoData->detach(new PhoneNotifier);

$videoData->fire();