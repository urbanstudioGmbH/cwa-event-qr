<?php

require "classes/cwaproto/GPBMetadata/Cwa/Cwa.php";
require "classes/cwaproto/TraceLocation.php";
require "classes/cwaproto/CWALocationData.php";
require "classes/cwaproto/CrowdNotifierData.php";
require "classes/cwaproto/QRCodePayload.php";
require "classes/Cwaeventqr.php";

$cwa = new Cwaeventqr();

// optional to generate payload for same location with no changes!
$cwa->setSeed("vsInOk7pHigPO4K8juZLPg==");

// Mandatory
$cwa->TraceLocation->setDescription("Test Restaurant"); // max 100 characters
$cwa->TraceLocation->setAddress("Potsdamer Platz 1, 10785 Berlin, Deutschland"); // max 100 characters

// optional for Events
// $cwa->TraceLocation->setStartTimestamp(1638486000); // unix time stamp
// $cwa->TraceLocation->setEndTimestamp(1638572399); // unix time stamp

// mandatory
$cwa->CWALocationData->setType(4); // use ID that fits, see "CWA types" list below
$cwa->CWALocationData->setDefaultCheckInLengthInMinutes(2*60); // average checkin length in minutes

// create the payload
$cwa->createPayload(); // just creation of the payload

// get the payload
$cwa->getPayload(); // base64 encoded payload

// get seed for later payload generation
$seed = $cwa->getSeed();
echo "Seed: $seed<br><br>";
// get CWA link
$link = $cwa->getCwaLink(); // link to CWA with payload for Location Event

echo '<a href="'.$link.'">Test Link</a>';