<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource-update-request.proto

namespace Cinexpert\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Cinexpert.Messages.ResourceUpdateRequest</code>
 */
class ResourceUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.ResourceUpdateRequest.ResourceType resourceType = 1;</code>
     */
    private $resourceType = 0;
    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.ResourceUpdateRequest.RequestType requestType = 2;</code>
     */
    private $requestType = 0;
    /**
     * Generated from protobuf field <code>string chainId = 3;</code>
     */
    private $chainId = '';
    /**
     * Generated from protobuf field <code>string cinemaId = 4;</code>
     */
    private $cinemaId = '';
    /**
     * Generated from protobuf field <code>string roomId = 5;</code>
     */
    private $roomId = '';
    /**
     * Generated from protobuf field <code>string equipmentId = 6;</code>
     */
    private $equipmentId = '';
    /**
     * Generated from protobuf field <code>string equipmentModelId = 7;</code>
     */
    private $equipmentModelId = '';
    /**
     * Generated from protobuf field <code>string serial = 8;</code>
     */
    private $serial = '';
    /**
     * Generated from protobuf field <code>string ip = 12;</code>
     */
    private $ip = '';
    /**
     * Generated from protobuf field <code>string certificateThumbprint = 13;</code>
     */
    private $certificateThumbprint = '';
    /**
     * Generated from protobuf field <code>string name = 14;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>string countryId = 15;</code>
     */
    private $countryId = '';
    /**
     * Generated from protobuf field <code>string cityId = 16;</code>
     */
    private $cityId = '';
    /**
     * Generated from protobuf field <code>string zipCode = 17;</code>
     */
    private $zipCode = '';
    /**
     * Generated from protobuf field <code>string regionId = 18;</code>
     */
    private $regionId = '';
    /**
     * Generated from protobuf field <code>string cinemaStreetline1 = 19;</code>
     */
    private $cinemaStreetline1 = '';
    /**
     * Generated from protobuf field <code>string cinemaStreetLine2 = 20;</code>
     */
    private $cinemaStreetLine2 = '';
    /**
     * Generated from protobuf field <code>string cinemaStreetNumber = 21;</code>
     */
    private $cinemaStreetNumber = '';
    /**
     * Generated from protobuf field <code>string cinemaTimezone = 22;</code>
     */
    private $cinemaTimezone = '';
    /**
     * Generated from protobuf field <code>int32 cinemaNumber = 23;</code>
     */
    private $cinemaNumber = 0;
    /**
     * Generated from protobuf field <code>int32 roomNumber = 24;</code>
     */
    private $roomNumber = 0;
    /**
     * Generated from protobuf field <code>int32 numberOfSeats = 25;</code>
     */
    private $numberOfSeats = 0;
    /**
     * Generated from protobuf field <code>bool roomSupports3D = 26;</code>
     */
    private $roomSupports3D = false;
    /**
     * Generated from protobuf field <code>bool roomSupports35mm = 27;</code>
     */
    private $roomSupports35mm = false;
    /**
     * Generated from protobuf field <code>float cinemaLongitude = 28;</code>
     */
    private $cinemaLongitude = 0.0;
    /**
     * Generated from protobuf field <code>float cinemaLatitude = 29;</code>
     */
    private $cinemaLatitude = 0.0;
    /**
     * Generated from protobuf field <code>bool cinemaEquipmentMonitoringEnabled = 30;</code>
     */
    private $cinemaEquipmentMonitoringEnabled = false;
    /**
     * Generated from protobuf field <code>bool cinemaContentMonitoringEnabled = 31;</code>
     */
    private $cinemaContentMonitoringEnabled = false;
    /**
     * Generated from protobuf field <code>string copyEquipmentModelFromPlayer = 32;</code>
     */
    private $copyEquipmentModelFromPlayer = '';
    /**
     * Generated from protobuf field <code>string equipmentModelType = 33;</code>
     */
    private $equipmentModelType = '';
    /**
     * Generated from protobuf field <code>string equipmentModelVendorId = 34;</code>
     */
    private $equipmentModelVendorId = '';
    /**
     * Generated from protobuf field <code>string manufacturerPartNumber = 35;</code>
     */
    private $manufacturerPartNumber = '';
    /**
     * Generated from protobuf field <code>string manufacturer = 36;</code>
     */
    private $manufacturer = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $resourceType
     *     @type int $requestType
     *     @type string $chainId
     *     @type string $cinemaId
     *     @type string $roomId
     *     @type string $equipmentId
     *     @type string $equipmentModelId
     *     @type string $serial
     *     @type string $ip
     *     @type string $certificateThumbprint
     *     @type string $name
     *     @type string $countryId
     *     @type string $cityId
     *     @type string $zipCode
     *     @type string $regionId
     *     @type string $cinemaStreetline1
     *     @type string $cinemaStreetLine2
     *     @type string $cinemaStreetNumber
     *     @type string $cinemaTimezone
     *     @type int $cinemaNumber
     *     @type int $roomNumber
     *     @type int $numberOfSeats
     *     @type bool $roomSupports3D
     *     @type bool $roomSupports35mm
     *     @type float $cinemaLongitude
     *     @type float $cinemaLatitude
     *     @type bool $cinemaEquipmentMonitoringEnabled
     *     @type bool $cinemaContentMonitoringEnabled
     *     @type string $copyEquipmentModelFromPlayer
     *     @type string $equipmentModelType
     *     @type string $equipmentModelVendorId
     *     @type string $manufacturerPartNumber
     *     @type string $manufacturer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ResourceUpdateRequest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.ResourceUpdateRequest.ResourceType resourceType = 1;</code>
     * @return int
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.ResourceUpdateRequest.ResourceType resourceType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkEnum($var, \Cinexpert\Messages\ResourceUpdateRequest_ResourceType::class);
        $this->resourceType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.ResourceUpdateRequest.RequestType requestType = 2;</code>
     * @return int
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.ResourceUpdateRequest.RequestType requestType = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRequestType($var)
    {
        GPBUtil::checkEnum($var, \Cinexpert\Messages\ResourceUpdateRequest_RequestType::class);
        $this->requestType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string chainId = 3;</code>
     * @return string
     */
    public function getChainId()
    {
        return $this->chainId;
    }

    /**
     * Generated from protobuf field <code>string chainId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setChainId($var)
    {
        GPBUtil::checkString($var, True);
        $this->chainId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cinemaId = 4;</code>
     * @return string
     */
    public function getCinemaId()
    {
        return $this->cinemaId;
    }

    /**
     * Generated from protobuf field <code>string cinemaId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCinemaId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cinemaId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string roomId = 5;</code>
     * @return string
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * Generated from protobuf field <code>string roomId = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkString($var, True);
        $this->roomId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string equipmentId = 6;</code>
     * @return string
     */
    public function getEquipmentId()
    {
        return $this->equipmentId;
    }

    /**
     * Generated from protobuf field <code>string equipmentId = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEquipmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->equipmentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string equipmentModelId = 7;</code>
     * @return string
     */
    public function getEquipmentModelId()
    {
        return $this->equipmentModelId;
    }

    /**
     * Generated from protobuf field <code>string equipmentModelId = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEquipmentModelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->equipmentModelId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string serial = 8;</code>
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Generated from protobuf field <code>string serial = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSerial($var)
    {
        GPBUtil::checkString($var, True);
        $this->serial = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ip = 12;</code>
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Generated from protobuf field <code>string ip = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string certificateThumbprint = 13;</code>
     * @return string
     */
    public function getCertificateThumbprint()
    {
        return $this->certificateThumbprint;
    }

    /**
     * Generated from protobuf field <code>string certificateThumbprint = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificateThumbprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->certificateThumbprint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 14;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string countryId = 15;</code>
     * @return string
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Generated from protobuf field <code>string countryId = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->countryId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cityId = 16;</code>
     * @return string
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Generated from protobuf field <code>string cityId = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setCityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cityId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string zipCode = 17;</code>
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Generated from protobuf field <code>string zipCode = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setZipCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->zipCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string regionId = 18;</code>
     * @return string
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Generated from protobuf field <code>string regionId = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setRegionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->regionId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cinemaStreetline1 = 19;</code>
     * @return string
     */
    public function getCinemaStreetline1()
    {
        return $this->cinemaStreetline1;
    }

    /**
     * Generated from protobuf field <code>string cinemaStreetline1 = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setCinemaStreetline1($var)
    {
        GPBUtil::checkString($var, True);
        $this->cinemaStreetline1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cinemaStreetLine2 = 20;</code>
     * @return string
     */
    public function getCinemaStreetLine2()
    {
        return $this->cinemaStreetLine2;
    }

    /**
     * Generated from protobuf field <code>string cinemaStreetLine2 = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setCinemaStreetLine2($var)
    {
        GPBUtil::checkString($var, True);
        $this->cinemaStreetLine2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cinemaStreetNumber = 21;</code>
     * @return string
     */
    public function getCinemaStreetNumber()
    {
        return $this->cinemaStreetNumber;
    }

    /**
     * Generated from protobuf field <code>string cinemaStreetNumber = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setCinemaStreetNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->cinemaStreetNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cinemaTimezone = 22;</code>
     * @return string
     */
    public function getCinemaTimezone()
    {
        return $this->cinemaTimezone;
    }

    /**
     * Generated from protobuf field <code>string cinemaTimezone = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setCinemaTimezone($var)
    {
        GPBUtil::checkString($var, True);
        $this->cinemaTimezone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 cinemaNumber = 23;</code>
     * @return int
     */
    public function getCinemaNumber()
    {
        return $this->cinemaNumber;
    }

    /**
     * Generated from protobuf field <code>int32 cinemaNumber = 23;</code>
     * @param int $var
     * @return $this
     */
    public function setCinemaNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->cinemaNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 roomNumber = 24;</code>
     * @return int
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * Generated from protobuf field <code>int32 roomNumber = 24;</code>
     * @param int $var
     * @return $this
     */
    public function setRoomNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->roomNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 numberOfSeats = 25;</code>
     * @return int
     */
    public function getNumberOfSeats()
    {
        return $this->numberOfSeats;
    }

    /**
     * Generated from protobuf field <code>int32 numberOfSeats = 25;</code>
     * @param int $var
     * @return $this
     */
    public function setNumberOfSeats($var)
    {
        GPBUtil::checkInt32($var);
        $this->numberOfSeats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool roomSupports3D = 26;</code>
     * @return bool
     */
    public function getRoomSupports3D()
    {
        return $this->roomSupports3D;
    }

    /**
     * Generated from protobuf field <code>bool roomSupports3D = 26;</code>
     * @param bool $var
     * @return $this
     */
    public function setRoomSupports3D($var)
    {
        GPBUtil::checkBool($var);
        $this->roomSupports3D = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool roomSupports35mm = 27;</code>
     * @return bool
     */
    public function getRoomSupports35Mm()
    {
        return $this->roomSupports35mm;
    }

    /**
     * Generated from protobuf field <code>bool roomSupports35mm = 27;</code>
     * @param bool $var
     * @return $this
     */
    public function setRoomSupports35Mm($var)
    {
        GPBUtil::checkBool($var);
        $this->roomSupports35mm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float cinemaLongitude = 28;</code>
     * @return float
     */
    public function getCinemaLongitude()
    {
        return $this->cinemaLongitude;
    }

    /**
     * Generated from protobuf field <code>float cinemaLongitude = 28;</code>
     * @param float $var
     * @return $this
     */
    public function setCinemaLongitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->cinemaLongitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float cinemaLatitude = 29;</code>
     * @return float
     */
    public function getCinemaLatitude()
    {
        return $this->cinemaLatitude;
    }

    /**
     * Generated from protobuf field <code>float cinemaLatitude = 29;</code>
     * @param float $var
     * @return $this
     */
    public function setCinemaLatitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->cinemaLatitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool cinemaEquipmentMonitoringEnabled = 30;</code>
     * @return bool
     */
    public function getCinemaEquipmentMonitoringEnabled()
    {
        return $this->cinemaEquipmentMonitoringEnabled;
    }

    /**
     * Generated from protobuf field <code>bool cinemaEquipmentMonitoringEnabled = 30;</code>
     * @param bool $var
     * @return $this
     */
    public function setCinemaEquipmentMonitoringEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->cinemaEquipmentMonitoringEnabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool cinemaContentMonitoringEnabled = 31;</code>
     * @return bool
     */
    public function getCinemaContentMonitoringEnabled()
    {
        return $this->cinemaContentMonitoringEnabled;
    }

    /**
     * Generated from protobuf field <code>bool cinemaContentMonitoringEnabled = 31;</code>
     * @param bool $var
     * @return $this
     */
    public function setCinemaContentMonitoringEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->cinemaContentMonitoringEnabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string copyEquipmentModelFromPlayer = 32;</code>
     * @return string
     */
    public function getCopyEquipmentModelFromPlayer()
    {
        return $this->copyEquipmentModelFromPlayer;
    }

    /**
     * Generated from protobuf field <code>string copyEquipmentModelFromPlayer = 32;</code>
     * @param string $var
     * @return $this
     */
    public function setCopyEquipmentModelFromPlayer($var)
    {
        GPBUtil::checkString($var, True);
        $this->copyEquipmentModelFromPlayer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string equipmentModelType = 33;</code>
     * @return string
     */
    public function getEquipmentModelType()
    {
        return $this->equipmentModelType;
    }

    /**
     * Generated from protobuf field <code>string equipmentModelType = 33;</code>
     * @param string $var
     * @return $this
     */
    public function setEquipmentModelType($var)
    {
        GPBUtil::checkString($var, True);
        $this->equipmentModelType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string equipmentModelVendorId = 34;</code>
     * @return string
     */
    public function getEquipmentModelVendorId()
    {
        return $this->equipmentModelVendorId;
    }

    /**
     * Generated from protobuf field <code>string equipmentModelVendorId = 34;</code>
     * @param string $var
     * @return $this
     */
    public function setEquipmentModelVendorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->equipmentModelVendorId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string manufacturerPartNumber = 35;</code>
     * @return string
     */
    public function getManufacturerPartNumber()
    {
        return $this->manufacturerPartNumber;
    }

    /**
     * Generated from protobuf field <code>string manufacturerPartNumber = 35;</code>
     * @param string $var
     * @return $this
     */
    public function setManufacturerPartNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->manufacturerPartNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string manufacturer = 36;</code>
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Generated from protobuf field <code>string manufacturer = 36;</code>
     * @param string $var
     * @return $this
     */
    public function setManufacturer($var)
    {
        GPBUtil::checkString($var, True);
        $this->manufacturer = $var;

        return $this;
    }

}

