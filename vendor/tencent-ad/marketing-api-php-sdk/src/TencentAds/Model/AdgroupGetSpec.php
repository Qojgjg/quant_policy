<?php
/**
 * AdgroupGetSpec
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model;

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * AdgroupGetSpec Class Doc Comment
 *
 * @category Class
 * @description 广告结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdgroupGetSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'adgroup_get_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adgroupId' => 'int',
        'configuredStatus' => '\TencentAds\Model\AdStatus',
        'adgroupName' => 'string',
        'beginDate' => 'string',
        'endDate' => 'string',
        'optimizationGoal' => '\TencentAds\Model\OptimizationGoal',
        'totalBudget' => 'int',
        'targeting' => '\TencentAds\Model\DpWriteTargetingSetting',
        'calcStatus' => '\TencentAds\Model\CalculateStatus',
        'metricDetail' => '\TencentAds\Model\MetricDetailData',
        'rejectMessage' => 'string',
        'poiList' => 'string[]',
        'coldStartAudience' => 'int[]',
        'poiRadius' => 'int',
        'localBusinessMode' => '\TencentAds\Model\EcoLocalBusinessMode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adgroupId' => 'int64',
        'configuredStatus' => null,
        'adgroupName' => null,
        'beginDate' => null,
        'endDate' => null,
        'optimizationGoal' => null,
        'totalBudget' => 'int64',
        'targeting' => null,
        'calcStatus' => null,
        'metricDetail' => null,
        'rejectMessage' => null,
        'poiList' => null,
        'coldStartAudience' => 'int64',
        'poiRadius' => 'int64',
        'localBusinessMode' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'adgroupId' => 'adgroup_id',
        'configuredStatus' => 'configured_status',
        'adgroupName' => 'adgroup_name',
        'beginDate' => 'begin_date',
        'endDate' => 'end_date',
        'optimizationGoal' => 'optimization_goal',
        'totalBudget' => 'total_budget',
        'targeting' => 'targeting',
        'calcStatus' => 'calc_status',
        'metricDetail' => 'metric_detail',
        'rejectMessage' => 'reject_message',
        'poiList' => 'poi_list',
        'coldStartAudience' => 'cold_start_audience',
        'poiRadius' => 'poi_radius',
        'localBusinessMode' => 'local_business_mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adgroupId' => 'setAdgroupId',
        'configuredStatus' => 'setConfiguredStatus',
        'adgroupName' => 'setAdgroupName',
        'beginDate' => 'setBeginDate',
        'endDate' => 'setEndDate',
        'optimizationGoal' => 'setOptimizationGoal',
        'totalBudget' => 'setTotalBudget',
        'targeting' => 'setTargeting',
        'calcStatus' => 'setCalcStatus',
        'metricDetail' => 'setMetricDetail',
        'rejectMessage' => 'setRejectMessage',
        'poiList' => 'setPoiList',
        'coldStartAudience' => 'setColdStartAudience',
        'poiRadius' => 'setPoiRadius',
        'localBusinessMode' => 'setLocalBusinessMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adgroupId' => 'getAdgroupId',
        'configuredStatus' => 'getConfiguredStatus',
        'adgroupName' => 'getAdgroupName',
        'beginDate' => 'getBeginDate',
        'endDate' => 'getEndDate',
        'optimizationGoal' => 'getOptimizationGoal',
        'totalBudget' => 'getTotalBudget',
        'targeting' => 'getTargeting',
        'calcStatus' => 'getCalcStatus',
        'metricDetail' => 'getMetricDetail',
        'rejectMessage' => 'getRejectMessage',
        'poiList' => 'getPoiList',
        'coldStartAudience' => 'getColdStartAudience',
        'poiRadius' => 'getPoiRadius',
        'localBusinessMode' => 'getLocalBusinessMode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['configuredStatus'] = isset($data['configuredStatus']) ? $data['configuredStatus'] : null;
        $this->container['adgroupName'] = isset($data['adgroupName']) ? $data['adgroupName'] : null;
        $this->container['beginDate'] = isset($data['beginDate']) ? $data['beginDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['optimizationGoal'] = isset($data['optimizationGoal']) ? $data['optimizationGoal'] : null;
        $this->container['totalBudget'] = isset($data['totalBudget']) ? $data['totalBudget'] : null;
        $this->container['targeting'] = isset($data['targeting']) ? $data['targeting'] : null;
        $this->container['calcStatus'] = isset($data['calcStatus']) ? $data['calcStatus'] : null;
        $this->container['metricDetail'] = isset($data['metricDetail']) ? $data['metricDetail'] : null;
        $this->container['rejectMessage'] = isset($data['rejectMessage']) ? $data['rejectMessage'] : null;
        $this->container['poiList'] = isset($data['poiList']) ? $data['poiList'] : null;
        $this->container['coldStartAudience'] = isset($data['coldStartAudience']) ? $data['coldStartAudience'] : null;
        $this->container['poiRadius'] = isset($data['poiRadius']) ? $data['poiRadius'] : null;
        $this->container['localBusinessMode'] = isset($data['localBusinessMode']) ? $data['localBusinessMode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets adgroupId
     *
     * @return int|mixed
     */
    public function getAdgroupId()
    {
        return $this->container['adgroupId'];
    }

    /**
     * Sets adgroupId
     *
     * @param int|mixed $adgroupId adgroupId
     *
     * @return $this
     */
    public function setAdgroupId($adgroupId)
    {
        $this->container['adgroupId'] = $adgroupId;

        return $this;
    }

    /**
     * Gets configuredStatus
     *
     * @return \TencentAds\Model\AdStatus|mixed
     */
    public function getConfiguredStatus()
    {
        return $this->container['configuredStatus'];
    }

    /**
     * Sets configuredStatus
     *
     * @param \TencentAds\Model\AdStatus|mixed $configuredStatus configuredStatus
     *
     * @return $this
     */
    public function setConfiguredStatus($configuredStatus)
    {
        $this->container['configuredStatus'] = $configuredStatus;

        return $this;
    }

    /**
     * Gets adgroupName
     *
     * @return string|mixed
     */
    public function getAdgroupName()
    {
        return $this->container['adgroupName'];
    }

    /**
     * Sets adgroupName
     *
     * @param string|mixed $adgroupName adgroupName
     *
     * @return $this
     */
    public function setAdgroupName($adgroupName)
    {
        $this->container['adgroupName'] = $adgroupName;

        return $this;
    }

    /**
     * Gets beginDate
     *
     * @return string|mixed
     */
    public function getBeginDate()
    {
        return $this->container['beginDate'];
    }

    /**
     * Sets beginDate
     *
     * @param string|mixed $beginDate beginDate
     *
     * @return $this
     */
    public function setBeginDate($beginDate)
    {
        $this->container['beginDate'] = $beginDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return string|mixed
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param string|mixed $endDate endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets optimizationGoal
     *
     * @return \TencentAds\Model\OptimizationGoal|mixed
     */
    public function getOptimizationGoal()
    {
        return $this->container['optimizationGoal'];
    }

    /**
     * Sets optimizationGoal
     *
     * @param \TencentAds\Model\OptimizationGoal|mixed $optimizationGoal optimizationGoal
     *
     * @return $this
     */
    public function setOptimizationGoal($optimizationGoal)
    {
        $this->container['optimizationGoal'] = $optimizationGoal;

        return $this;
    }

    /**
     * Gets totalBudget
     *
     * @return int|mixed
     */
    public function getTotalBudget()
    {
        return $this->container['totalBudget'];
    }

    /**
     * Sets totalBudget
     *
     * @param int|mixed $totalBudget totalBudget
     *
     * @return $this
     */
    public function setTotalBudget($totalBudget)
    {
        $this->container['totalBudget'] = $totalBudget;

        return $this;
    }

    /**
     * Gets targeting
     *
     * @return \TencentAds\Model\DpWriteTargetingSetting|mixed
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     *
     * @param \TencentAds\Model\DpWriteTargetingSetting|mixed $targeting targeting
     *
     * @return $this
     */
    public function setTargeting($targeting)
    {
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets calcStatus
     *
     * @return \TencentAds\Model\CalculateStatus|mixed
     */
    public function getCalcStatus()
    {
        return $this->container['calcStatus'];
    }

    /**
     * Sets calcStatus
     *
     * @param \TencentAds\Model\CalculateStatus|mixed $calcStatus calcStatus
     *
     * @return $this
     */
    public function setCalcStatus($calcStatus)
    {
        $this->container['calcStatus'] = $calcStatus;

        return $this;
    }

    /**
     * Gets metricDetail
     *
     * @return \TencentAds\Model\MetricDetailData|mixed
     */
    public function getMetricDetail()
    {
        return $this->container['metricDetail'];
    }

    /**
     * Sets metricDetail
     *
     * @param \TencentAds\Model\MetricDetailData|mixed $metricDetail metricDetail
     *
     * @return $this
     */
    public function setMetricDetail($metricDetail)
    {
        $this->container['metricDetail'] = $metricDetail;

        return $this;
    }

    /**
     * Gets rejectMessage
     *
     * @return string|mixed
     */
    public function getRejectMessage()
    {
        return $this->container['rejectMessage'];
    }

    /**
     * Sets rejectMessage
     *
     * @param string|mixed $rejectMessage rejectMessage
     *
     * @return $this
     */
    public function setRejectMessage($rejectMessage)
    {
        $this->container['rejectMessage'] = $rejectMessage;

        return $this;
    }

    /**
     * Gets poiList
     *
     * @return string[]|mixed
     */
    public function getPoiList()
    {
        return $this->container['poiList'];
    }

    /**
     * Sets poiList
     *
     * @param string[]|mixed $poiList poiList
     *
     * @return $this
     */
    public function setPoiList($poiList)
    {
        $this->container['poiList'] = $poiList;

        return $this;
    }

    /**
     * Gets coldStartAudience
     *
     * @return int[]|mixed
     */
    public function getColdStartAudience()
    {
        return $this->container['coldStartAudience'];
    }

    /**
     * Sets coldStartAudience
     *
     * @param int[]|mixed $coldStartAudience coldStartAudience
     *
     * @return $this
     */
    public function setColdStartAudience($coldStartAudience)
    {
        $this->container['coldStartAudience'] = $coldStartAudience;

        return $this;
    }

    /**
     * Gets poiRadius
     *
     * @return int|mixed
     */
    public function getPoiRadius()
    {
        return $this->container['poiRadius'];
    }

    /**
     * Sets poiRadius
     *
     * @param int|mixed $poiRadius poiRadius
     *
     * @return $this
     */
    public function setPoiRadius($poiRadius)
    {
        $this->container['poiRadius'] = $poiRadius;

        return $this;
    }

    /**
     * Gets localBusinessMode
     *
     * @return \TencentAds\Model\EcoLocalBusinessMode|mixed
     */
    public function getLocalBusinessMode()
    {
        return $this->container['localBusinessMode'];
    }

    /**
     * Sets localBusinessMode
     *
     * @param \TencentAds\Model\EcoLocalBusinessMode|mixed $localBusinessMode localBusinessMode
     *
     * @return $this
     */
    public function setLocalBusinessMode($localBusinessMode)
    {
        $this->container['localBusinessMode'] = $localBusinessMode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


