<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cwa/cwa.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>QRCodePayload</code>
 */
class QRCodePayload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 version = 1;</code>
     */
    protected $version = 0;
    /**
     * Generated from protobuf field <code>.TraceLocation locationData = 2;</code>
     */
    protected $locationData = null;
    /**
     * Generated from protobuf field <code>.CrowdNotifierData crowdNotifierData = 3;</code>
     */
    protected $crowdNotifierData = null;
    /**
     * byte sequence of CWALocationData
     *
     * Generated from protobuf field <code>bytes countryData = 4;</code>
     */
    protected $countryData = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $version
     *     @type \TraceLocation $locationData
     *     @type \CrowdNotifierData $crowdNotifierData
     *     @type string $countryData
     *           byte sequence of CWALocationData
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cwa\Cwa::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 version = 1;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>uint32 version = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TraceLocation locationData = 2;</code>
     * @return \TraceLocation|null
     */
    public function getLocationData()
    {
        return isset($this->locationData) ? $this->locationData : null;
    }

    public function hasLocationData()
    {
        return isset($this->locationData);
    }

    public function clearLocationData()
    {
        unset($this->locationData);
    }

    /**
     * Generated from protobuf field <code>.TraceLocation locationData = 2;</code>
     * @param \TraceLocation $var
     * @return $this
     */
    public function setLocationData($var)
    {
        GPBUtil::checkMessage($var, \TraceLocation::class);
        $this->locationData = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CrowdNotifierData crowdNotifierData = 3;</code>
     * @return \CrowdNotifierData|null
     */
    public function getCrowdNotifierData()
    {
        return isset($this->crowdNotifierData) ? $this->crowdNotifierData : null;
    }

    public function hasCrowdNotifierData()
    {
        return isset($this->crowdNotifierData);
    }

    public function clearCrowdNotifierData()
    {
        unset($this->crowdNotifierData);
    }

    /**
     * Generated from protobuf field <code>.CrowdNotifierData crowdNotifierData = 3;</code>
     * @param \CrowdNotifierData $var
     * @return $this
     */
    public function setCrowdNotifierData($var)
    {
        GPBUtil::checkMessage($var, \CrowdNotifierData::class);
        $this->crowdNotifierData = $var;

        return $this;
    }

    /**
     * byte sequence of CWALocationData
     *
     * Generated from protobuf field <code>bytes countryData = 4;</code>
     * @return string
     */
    public function getCountryData()
    {
        return $this->countryData;
    }

    /**
     * byte sequence of CWALocationData
     *
     * Generated from protobuf field <code>bytes countryData = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryData($var)
    {
        GPBUtil::checkString($var, False);
        $this->countryData = $var;

        return $this;
    }

}

