<?php
/**
 * SearchBrandAreaStruct
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
 * SearchBrandAreaStruct Class Doc Comment
 *
 * @category Class
 * @description 搜索广告品牌官方区数据
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchBrandAreaStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'search_brand_area_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'searchBrandAreaType' => '\TencentAds\Model\SearchBrandAreaType',
        'searchBrandAreaTemplateId' => 'int',
        'searchBrandAreaOriginData' => '\TencentAds\Model\SearchBrandAreaOriginData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'searchBrandAreaType' => null,
        'searchBrandAreaTemplateId' => 'int64',
        'searchBrandAreaOriginData' => null
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
        'searchBrandAreaType' => 'search_brand_area_type',
        'searchBrandAreaTemplateId' => 'search_brand_area_template_id',
        'searchBrandAreaOriginData' => 'search_brand_area_origin_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'searchBrandAreaType' => 'setSearchBrandAreaType',
        'searchBrandAreaTemplateId' => 'setSearchBrandAreaTemplateId',
        'searchBrandAreaOriginData' => 'setSearchBrandAreaOriginData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'searchBrandAreaType' => 'getSearchBrandAreaType',
        'searchBrandAreaTemplateId' => 'getSearchBrandAreaTemplateId',
        'searchBrandAreaOriginData' => 'getSearchBrandAreaOriginData'
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
        $this->container['searchBrandAreaType'] = isset($data['searchBrandAreaType']) ? $data['searchBrandAreaType'] : null;
        $this->container['searchBrandAreaTemplateId'] = isset($data['searchBrandAreaTemplateId']) ? $data['searchBrandAreaTemplateId'] : null;
        $this->container['searchBrandAreaOriginData'] = isset($data['searchBrandAreaOriginData']) ? $data['searchBrandAreaOriginData'] : null;
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
     * Gets searchBrandAreaType
     *
     * @return \TencentAds\Model\SearchBrandAreaType|mixed
     */
    public function getSearchBrandAreaType()
    {
        return $this->container['searchBrandAreaType'];
    }

    /**
     * Sets searchBrandAreaType
     *
     * @param \TencentAds\Model\SearchBrandAreaType|mixed $searchBrandAreaType searchBrandAreaType
     *
     * @return $this
     */
    public function setSearchBrandAreaType($searchBrandAreaType)
    {
        $this->container['searchBrandAreaType'] = $searchBrandAreaType;

        return $this;
    }

    /**
     * Gets searchBrandAreaTemplateId
     *
     * @return int|mixed
     */
    public function getSearchBrandAreaTemplateId()
    {
        return $this->container['searchBrandAreaTemplateId'];
    }

    /**
     * Sets searchBrandAreaTemplateId
     *
     * @param int|mixed $searchBrandAreaTemplateId searchBrandAreaTemplateId
     *
     * @return $this
     */
    public function setSearchBrandAreaTemplateId($searchBrandAreaTemplateId)
    {
        $this->container['searchBrandAreaTemplateId'] = $searchBrandAreaTemplateId;

        return $this;
    }

    /**
     * Gets searchBrandAreaOriginData
     *
     * @return \TencentAds\Model\SearchBrandAreaOriginData|mixed
     */
    public function getSearchBrandAreaOriginData()
    {
        return $this->container['searchBrandAreaOriginData'];
    }

    /**
     * Sets searchBrandAreaOriginData
     *
     * @param \TencentAds\Model\SearchBrandAreaOriginData|mixed $searchBrandAreaOriginData searchBrandAreaOriginData
     *
     * @return $this
     */
    public function setSearchBrandAreaOriginData($searchBrandAreaOriginData)
    {
        $this->container['searchBrandAreaOriginData'] = $searchBrandAreaOriginData;

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


