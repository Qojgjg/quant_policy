<?php
/**
 * LeadsImportInfoStruct
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
 * LeadsImportInfoStruct Class Doc Comment
 *
 * @category Class
 * @description 导入的线索信息结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeadsImportInfoStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'leads_import_info_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'outerLeadsId' => 'string',
        'leadsId' => 'int',
        'leadsTel' => 'string',
        'leadsQq' => 'int',
        'leadsWechat' => 'string',
        'clickId' => 'string',
        'leadsType' => '\TencentAds\Model\LeadCluesLeadsType',
        'leadsUserId' => 'string',
        'leadsUserType' => '\TencentAds\Model\LeadsUserType',
        'leadsUserWechatAppid' => 'string',
        'leadsName' => 'string',
        'leadsGender' => '\TencentAds\Model\LeadCluesGenderType',
        'leadsEmail' => 'string',
        'leadsArea' => 'string',
        'bundle' => 'string',
        'outerLeadsConvertType' => 'string',
        'outerLeadsIneffectReason' => 'string',
        'outerLeadsComefrom' => '\TencentAds\Model\ActionChannelType',
        'memo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'outerLeadsId' => null,
        'leadsId' => 'int64',
        'leadsTel' => null,
        'leadsQq' => 'int64',
        'leadsWechat' => null,
        'clickId' => null,
        'leadsType' => null,
        'leadsUserId' => null,
        'leadsUserType' => null,
        'leadsUserWechatAppid' => null,
        'leadsName' => null,
        'leadsGender' => null,
        'leadsEmail' => null,
        'leadsArea' => null,
        'bundle' => null,
        'outerLeadsConvertType' => null,
        'outerLeadsIneffectReason' => null,
        'outerLeadsComefrom' => null,
        'memo' => null
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
        'outerLeadsId' => 'outer_leads_id',
        'leadsId' => 'leads_id',
        'leadsTel' => 'leads_tel',
        'leadsQq' => 'leads_qq',
        'leadsWechat' => 'leads_wechat',
        'clickId' => 'click_id',
        'leadsType' => 'leads_type',
        'leadsUserId' => 'leads_user_id',
        'leadsUserType' => 'leads_user_type',
        'leadsUserWechatAppid' => 'leads_user_wechat_appid',
        'leadsName' => 'leads_name',
        'leadsGender' => 'leads_gender',
        'leadsEmail' => 'leads_email',
        'leadsArea' => 'leads_area',
        'bundle' => 'bundle',
        'outerLeadsConvertType' => 'outer_leads_convert_type',
        'outerLeadsIneffectReason' => 'outer_leads_ineffect_reason',
        'outerLeadsComefrom' => 'outer_leads_comefrom',
        'memo' => 'memo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'outerLeadsId' => 'setOuterLeadsId',
        'leadsId' => 'setLeadsId',
        'leadsTel' => 'setLeadsTel',
        'leadsQq' => 'setLeadsQq',
        'leadsWechat' => 'setLeadsWechat',
        'clickId' => 'setClickId',
        'leadsType' => 'setLeadsType',
        'leadsUserId' => 'setLeadsUserId',
        'leadsUserType' => 'setLeadsUserType',
        'leadsUserWechatAppid' => 'setLeadsUserWechatAppid',
        'leadsName' => 'setLeadsName',
        'leadsGender' => 'setLeadsGender',
        'leadsEmail' => 'setLeadsEmail',
        'leadsArea' => 'setLeadsArea',
        'bundle' => 'setBundle',
        'outerLeadsConvertType' => 'setOuterLeadsConvertType',
        'outerLeadsIneffectReason' => 'setOuterLeadsIneffectReason',
        'outerLeadsComefrom' => 'setOuterLeadsComefrom',
        'memo' => 'setMemo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'outerLeadsId' => 'getOuterLeadsId',
        'leadsId' => 'getLeadsId',
        'leadsTel' => 'getLeadsTel',
        'leadsQq' => 'getLeadsQq',
        'leadsWechat' => 'getLeadsWechat',
        'clickId' => 'getClickId',
        'leadsType' => 'getLeadsType',
        'leadsUserId' => 'getLeadsUserId',
        'leadsUserType' => 'getLeadsUserType',
        'leadsUserWechatAppid' => 'getLeadsUserWechatAppid',
        'leadsName' => 'getLeadsName',
        'leadsGender' => 'getLeadsGender',
        'leadsEmail' => 'getLeadsEmail',
        'leadsArea' => 'getLeadsArea',
        'bundle' => 'getBundle',
        'outerLeadsConvertType' => 'getOuterLeadsConvertType',
        'outerLeadsIneffectReason' => 'getOuterLeadsIneffectReason',
        'outerLeadsComefrom' => 'getOuterLeadsComefrom',
        'memo' => 'getMemo'
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
        $this->container['outerLeadsId'] = isset($data['outerLeadsId']) ? $data['outerLeadsId'] : null;
        $this->container['leadsId'] = isset($data['leadsId']) ? $data['leadsId'] : null;
        $this->container['leadsTel'] = isset($data['leadsTel']) ? $data['leadsTel'] : null;
        $this->container['leadsQq'] = isset($data['leadsQq']) ? $data['leadsQq'] : null;
        $this->container['leadsWechat'] = isset($data['leadsWechat']) ? $data['leadsWechat'] : null;
        $this->container['clickId'] = isset($data['clickId']) ? $data['clickId'] : null;
        $this->container['leadsType'] = isset($data['leadsType']) ? $data['leadsType'] : null;
        $this->container['leadsUserId'] = isset($data['leadsUserId']) ? $data['leadsUserId'] : null;
        $this->container['leadsUserType'] = isset($data['leadsUserType']) ? $data['leadsUserType'] : null;
        $this->container['leadsUserWechatAppid'] = isset($data['leadsUserWechatAppid']) ? $data['leadsUserWechatAppid'] : null;
        $this->container['leadsName'] = isset($data['leadsName']) ? $data['leadsName'] : null;
        $this->container['leadsGender'] = isset($data['leadsGender']) ? $data['leadsGender'] : null;
        $this->container['leadsEmail'] = isset($data['leadsEmail']) ? $data['leadsEmail'] : null;
        $this->container['leadsArea'] = isset($data['leadsArea']) ? $data['leadsArea'] : null;
        $this->container['bundle'] = isset($data['bundle']) ? $data['bundle'] : null;
        $this->container['outerLeadsConvertType'] = isset($data['outerLeadsConvertType']) ? $data['outerLeadsConvertType'] : null;
        $this->container['outerLeadsIneffectReason'] = isset($data['outerLeadsIneffectReason']) ? $data['outerLeadsIneffectReason'] : null;
        $this->container['outerLeadsComefrom'] = isset($data['outerLeadsComefrom']) ? $data['outerLeadsComefrom'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
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
     * Gets outerLeadsId
     *
     * @return string|mixed
     */
    public function getOuterLeadsId()
    {
        return $this->container['outerLeadsId'];
    }

    /**
     * Sets outerLeadsId
     *
     * @param string|mixed $outerLeadsId outerLeadsId
     *
     * @return $this
     */
    public function setOuterLeadsId($outerLeadsId)
    {
        $this->container['outerLeadsId'] = $outerLeadsId;

        return $this;
    }

    /**
     * Gets leadsId
     *
     * @return int|mixed
     */
    public function getLeadsId()
    {
        return $this->container['leadsId'];
    }

    /**
     * Sets leadsId
     *
     * @param int|mixed $leadsId leadsId
     *
     * @return $this
     */
    public function setLeadsId($leadsId)
    {
        $this->container['leadsId'] = $leadsId;

        return $this;
    }

    /**
     * Gets leadsTel
     *
     * @return string|mixed
     */
    public function getLeadsTel()
    {
        return $this->container['leadsTel'];
    }

    /**
     * Sets leadsTel
     *
     * @param string|mixed $leadsTel leadsTel
     *
     * @return $this
     */
    public function setLeadsTel($leadsTel)
    {
        $this->container['leadsTel'] = $leadsTel;

        return $this;
    }

    /**
     * Gets leadsQq
     *
     * @return int|mixed
     */
    public function getLeadsQq()
    {
        return $this->container['leadsQq'];
    }

    /**
     * Sets leadsQq
     *
     * @param int|mixed $leadsQq leadsQq
     *
     * @return $this
     */
    public function setLeadsQq($leadsQq)
    {
        $this->container['leadsQq'] = $leadsQq;

        return $this;
    }

    /**
     * Gets leadsWechat
     *
     * @return string|mixed
     */
    public function getLeadsWechat()
    {
        return $this->container['leadsWechat'];
    }

    /**
     * Sets leadsWechat
     *
     * @param string|mixed $leadsWechat leadsWechat
     *
     * @return $this
     */
    public function setLeadsWechat($leadsWechat)
    {
        $this->container['leadsWechat'] = $leadsWechat;

        return $this;
    }

    /**
     * Gets clickId
     *
     * @return string|mixed
     */
    public function getClickId()
    {
        return $this->container['clickId'];
    }

    /**
     * Sets clickId
     *
     * @param string|mixed $clickId clickId
     *
     * @return $this
     */
    public function setClickId($clickId)
    {
        $this->container['clickId'] = $clickId;

        return $this;
    }

    /**
     * Gets leadsType
     *
     * @return \TencentAds\Model\LeadCluesLeadsType|mixed
     */
    public function getLeadsType()
    {
        return $this->container['leadsType'];
    }

    /**
     * Sets leadsType
     *
     * @param \TencentAds\Model\LeadCluesLeadsType|mixed $leadsType leadsType
     *
     * @return $this
     */
    public function setLeadsType($leadsType)
    {
        $this->container['leadsType'] = $leadsType;

        return $this;
    }

    /**
     * Gets leadsUserId
     *
     * @return string|mixed
     */
    public function getLeadsUserId()
    {
        return $this->container['leadsUserId'];
    }

    /**
     * Sets leadsUserId
     *
     * @param string|mixed $leadsUserId leadsUserId
     *
     * @return $this
     */
    public function setLeadsUserId($leadsUserId)
    {
        $this->container['leadsUserId'] = $leadsUserId;

        return $this;
    }

    /**
     * Gets leadsUserType
     *
     * @return \TencentAds\Model\LeadsUserType|mixed
     */
    public function getLeadsUserType()
    {
        return $this->container['leadsUserType'];
    }

    /**
     * Sets leadsUserType
     *
     * @param \TencentAds\Model\LeadsUserType|mixed $leadsUserType leadsUserType
     *
     * @return $this
     */
    public function setLeadsUserType($leadsUserType)
    {
        $this->container['leadsUserType'] = $leadsUserType;

        return $this;
    }

    /**
     * Gets leadsUserWechatAppid
     *
     * @return string|mixed
     */
    public function getLeadsUserWechatAppid()
    {
        return $this->container['leadsUserWechatAppid'];
    }

    /**
     * Sets leadsUserWechatAppid
     *
     * @param string|mixed $leadsUserWechatAppid leadsUserWechatAppid
     *
     * @return $this
     */
    public function setLeadsUserWechatAppid($leadsUserWechatAppid)
    {
        $this->container['leadsUserWechatAppid'] = $leadsUserWechatAppid;

        return $this;
    }

    /**
     * Gets leadsName
     *
     * @return string|mixed
     */
    public function getLeadsName()
    {
        return $this->container['leadsName'];
    }

    /**
     * Sets leadsName
     *
     * @param string|mixed $leadsName leadsName
     *
     * @return $this
     */
    public function setLeadsName($leadsName)
    {
        $this->container['leadsName'] = $leadsName;

        return $this;
    }

    /**
     * Gets leadsGender
     *
     * @return \TencentAds\Model\LeadCluesGenderType|mixed
     */
    public function getLeadsGender()
    {
        return $this->container['leadsGender'];
    }

    /**
     * Sets leadsGender
     *
     * @param \TencentAds\Model\LeadCluesGenderType|mixed $leadsGender leadsGender
     *
     * @return $this
     */
    public function setLeadsGender($leadsGender)
    {
        $this->container['leadsGender'] = $leadsGender;

        return $this;
    }

    /**
     * Gets leadsEmail
     *
     * @return string|mixed
     */
    public function getLeadsEmail()
    {
        return $this->container['leadsEmail'];
    }

    /**
     * Sets leadsEmail
     *
     * @param string|mixed $leadsEmail leadsEmail
     *
     * @return $this
     */
    public function setLeadsEmail($leadsEmail)
    {
        $this->container['leadsEmail'] = $leadsEmail;

        return $this;
    }

    /**
     * Gets leadsArea
     *
     * @return string|mixed
     */
    public function getLeadsArea()
    {
        return $this->container['leadsArea'];
    }

    /**
     * Sets leadsArea
     *
     * @param string|mixed $leadsArea leadsArea
     *
     * @return $this
     */
    public function setLeadsArea($leadsArea)
    {
        $this->container['leadsArea'] = $leadsArea;

        return $this;
    }

    /**
     * Gets bundle
     *
     * @return string|mixed
     */
    public function getBundle()
    {
        return $this->container['bundle'];
    }

    /**
     * Sets bundle
     *
     * @param string|mixed $bundle bundle
     *
     * @return $this
     */
    public function setBundle($bundle)
    {
        $this->container['bundle'] = $bundle;

        return $this;
    }

    /**
     * Gets outerLeadsConvertType
     *
     * @return string|mixed
     */
    public function getOuterLeadsConvertType()
    {
        return $this->container['outerLeadsConvertType'];
    }

    /**
     * Sets outerLeadsConvertType
     *
     * @param string|mixed $outerLeadsConvertType outerLeadsConvertType
     *
     * @return $this
     */
    public function setOuterLeadsConvertType($outerLeadsConvertType)
    {
        $this->container['outerLeadsConvertType'] = $outerLeadsConvertType;

        return $this;
    }

    /**
     * Gets outerLeadsIneffectReason
     *
     * @return string|mixed
     */
    public function getOuterLeadsIneffectReason()
    {
        return $this->container['outerLeadsIneffectReason'];
    }

    /**
     * Sets outerLeadsIneffectReason
     *
     * @param string|mixed $outerLeadsIneffectReason outerLeadsIneffectReason
     *
     * @return $this
     */
    public function setOuterLeadsIneffectReason($outerLeadsIneffectReason)
    {
        $this->container['outerLeadsIneffectReason'] = $outerLeadsIneffectReason;

        return $this;
    }

    /**
     * Gets outerLeadsComefrom
     *
     * @return \TencentAds\Model\ActionChannelType|mixed
     */
    public function getOuterLeadsComefrom()
    {
        return $this->container['outerLeadsComefrom'];
    }

    /**
     * Sets outerLeadsComefrom
     *
     * @param \TencentAds\Model\ActionChannelType|mixed $outerLeadsComefrom outerLeadsComefrom
     *
     * @return $this
     */
    public function setOuterLeadsComefrom($outerLeadsComefrom)
    {
        $this->container['outerLeadsComefrom'] = $outerLeadsComefrom;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|mixed
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|mixed $memo memo
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

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


