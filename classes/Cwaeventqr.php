<?php

class Cwaeventqr{

    private $cwaurl = "https://e.coronawarn.app?v=1#";
    private $pubkey = 'gwLMzE153tQwAOf2MZoUXXfzWTdlSpfS99iZffmcmxOG9njSK4RTimFOFwDh6t0Tyw8XR01ugDYjtuKwjjuK49Oh83FWct6XpefPi9Skjxvvz53i9gaMmUEc96pbtoaA';
    private $seed;
    private $payload;
    public $TraceLocation;
    public $CWALocationData;

    public function __construct(){
        $this->seed = random_bytes(16);
        $this->TraceLocation = new \TraceLocation();
        $this->TraceLocation->setVersion(1);
        $this->CWALocationData = new \CWALocationData();
        $this->CWALocationData->setVersion(1);
        
    }

    public function setSeed(String $seed){
        $this->seed = base64_decode($seed);
    }

    public function getSeed(){
        return base64_encode($this->seed);
    }

    public function createPayload(){
        $CrowdNotifierData = new \CrowdNotifierData();
        $QRCodePayload = new \QRCodePayload();
        $CrowdNotifierData->setVersion(1);
        $CrowdNotifierData->setPublicKey($this->pubkey);
        $CrowdNotifierData->setCryptographicSeed($this->seed);
        $QRCodePayload->setVersion(1);
        $QRCodePayload->setLocationData($this->TraceLocation);
        $QRCodePayload->setCrowdNotifierData($CrowdNotifierData);
        $QRCodePayload->setCountryData($this->CWALocationData->serializeToString());
        $this->payload = $QRCodePayload->serializeToString();
    }
    public function getPayload(){
        return base64_encode($this->payload);
    }

    public function getCwaLink(){
        return $this->cwaurl.$this->getPayload();
    }


}