<?php
/**
 * OptTargetingStruct
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
 * OptTargetingStruct Class Doc Comment
 *
 * @category Class
 * @description 定向优化
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OptTargetingStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'opt_targeting_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'openAutoExpandFlag' => 'bool',
        'expandTargetingRule' => 'string[]',
        'openExpandSeedPopulationFlag' => 'bool',
        'openExpandSeedPopulationSelectedFlag' => 'bool',
        'expandSeedPopulations' => 'int[]',
        'addMoreLocardLabelsFlag' => 'bool',
        'locardBehaviors' => '\TencentAds\Model\LocardBehaviorsListItem[]',
        'locardInterests' => '\TencentAds\Model\LocardInterestsListItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'openAutoExpandFlag' => null,
        'expandTargetingRule' => null,
        'openExpandSeedPopulationFlag' => null,
        'openExpandSeedPopulationSelectedFlag' => null,
        'expandSeedPopulations' => 'int64',
        'addMoreLocardLabelsFlag' => null,
        'locardBehaviors' => null,
        'locardInterests' => null
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
        'openAutoExpandFlag' => 'open_auto_expand_flag',
        'expandTargetingRule' => 'expand_targeting_rule',
        'openExpandSeedPopulationFlag' => 'open_expand_seed_population_flag',
        'openExpandSeedPopulationSelectedFlag' => 'open_expand_seed_population_selected_flag',
        'expandSeedPopulations' => 'expand_seed_populations',
        'addMoreLocardLabelsFlag' => 'add_more_locard_labels_flag',
        'locardBehaviors' => 'locard_behaviors',
        'locardInterests' => 'locard_interests'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'openAutoExpandFlag' => 'setOpenAutoExpandFlag',
        'expandTargetingRule' => 'setExpandTargetingRule',
        'openExpandSeedPopulationFlag' => 'setOpenExpandSeedPopulationFlag',
        'openExpandSeedPopulationSelectedFlag' => 'setOpenExpandSeedPopulationSelectedFlag',
        'expandSeedPopulations' => 'setExpandSeedPopulations',
        'addMoreLocardLabelsFlag' => 'setAddMoreLocardLabelsFlag',
        'locardBehaviors' => 'setLocardBehaviors',
        'locardInterests' => 'setLocardInterests'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'openAutoExpandFlag' => 'getOpenAutoExpandFlag',
        'expandTargetingRule' => 'getExpandTargetingRule',
        'openExpandSeedPopulationFlag' => 'getOpenExpandSeedPopulationFlag',
        'openExpandSeedPopulationSelectedFlag' => 'getOpenExpandSeedPopulationSelectedFlag',
        'expandSeedPopulations' => 'getExpandSeedPopulations',
        'addMoreLocardLabelsFlag' => 'getAddMoreLocardLabelsFlag',
        'locardBehaviors' => 'getLocardBehaviors',
        'locardInterests' => 'getLocardInterests'
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
        $this->container['openAutoExpandFlag'] = isset($data['openAutoExpandFlag']) ? $data['openAutoExpandFlag'] : null;
        $this->container['expandTargetingRule'] = isset($data['expandTargetingRule']) ? $data['expandTargetingRule'] : null;
        $this->container['openExpandSeedPopulationFlag'] = isset($data['openExpandSeedPopulationFlag']) ? $data['openExpandSeedPopulationFlag'] : null;
        $this->container['openExpandSeedPopulationSelectedFlag'] = isset($data['openExpandSeedPopulationSelectedFlag']) ? $data['openExpandSeedPopulationSelectedFlag'] : null;
        $this->container['expandSeedPopulations'] = isset($data['expandSeedPopulations']) ? $data['expandSeedPopulations'] : null;
        $this->container['addMoreLocardLabelsFlag'] = isset($data['addMoreLocardLabelsFlag']) ? $data['addMoreLocardLabelsFlag'] : null;
        $this->container['locardBehaviors'] = isset($data['locardBehaviors']) ? $data['locardBehaviors'] : null;
        $this->container['locardInterests'] = isset($data['locardInterests']) ? $data['locardInterests'] : null;
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
     * Gets openAutoExpandFlag
     *
     * @return bool|mixed
     */
    public function getOpenAutoExpandFlag()
    {
        return $this->container['openAutoExpandFlag'];
    }

    /**
     * Sets openAutoExpandFlag
     *
     * @param bool|mixed $openAutoExpandFlag openAutoExpandFlag
     *
     * @return $this
     */
    public function setOpenAutoExpandFlag($openAutoExpandFlag)
    {
        $this->container['openAutoExpandFlag'] = $openAutoExpandFlag;

        return $this;
    }

    /**
     * Gets expandTargetingRule
     *
     * @return string[]|mixed
     */
    public function getExpandTargetingRule()
    {
        return $this->container['expandTargetingRule'];
    }

    /**
     * Sets expandTargetingRule
     *
     * @param string[]|mixed $expandTargetingRule expandTargetingRule
     *
     * @return $this
     */
    public function setExpandTargetingRule($expandTargetingRule)
    {
        $this->container['expandTargetingRule'] = $expandTargetingRule;

        return $this;
    }

    /**
     * Gets openExpandSeedPopulationFlag
     *
     * @return bool|mixed
     */
    public function getOpenExpandSeedPopulationFlag()
    {
        return $this->container['openExpandSeedPopulationFlag'];
    }

    /**
     * Sets openExpandSeedPopulationFlag
     *
     * @param bool|mixed $openExpandSeedPopulationFlag openExpandSeedPopulationFlag
     *
     * @return $this
     */
    public function setOpenExpandSeedPopulationFlag($openExpandSeedPopulationFlag)
    {
        $this->container['openExpandSeedPopulationFlag'] = $openExpandSeedPopulationFlag;

        return $this;
    }

    /**
     * Gets openExpandSeedPopulationSelectedFlag
     *
     * @return bool|mixed
     */
    public function getOpenExpandSeedPopulationSelectedFlag()
    {
        return $this->container['openExpandSeedPopulationSelectedFlag'];
    }

    /**
     * Sets openExpandSeedPopulationSelectedFlag
     *
     * @param bool|mixed $openExpandSeedPopulationSelectedFlag openExpandSeedPopulationSelectedFlag
     *
     * @return $this
     */
    public function setOpenExpandSeedPopulationSelectedFlag($openExpandSeedPopulationSelectedFlag)
    {
        $this->container['openExpandSeedPopulationSelectedFlag'] = $openExpandSeedPopulationSelectedFlag;

        return $this;
    }

    /**
     * Gets expandSeedPopulations
     *
     * @return int[]|mixed
     */
    public function getExpandSeedPopulations()
    {
        return $this->container['expandSeedPopulations'];
    }

    /**
     * Sets expandSeedPopulations
     *
     * @param int[]|mixed $expandSeedPopulations expandSeedPopulations
     *
     * @return $this
     */
    public function setExpandSeedPopulations($expandSeedPopulations)
    {
        $this->container['expandSeedPopulations'] = $expandSeedPopulations;

        return $this;
    }

    /**
     * Gets addMoreLocardLabelsFlag
     *
     * @return bool|mixed
     */
    public function getAddMoreLocardLabelsFlag()
    {
        return $this->container['addMoreLocardLabelsFlag'];
    }

    /**
     * Sets addMoreLocardLabelsFlag
     *
     * @param bool|mixed $addMoreLocardLabelsFlag addMoreLocardLabelsFlag
     *
     * @return $this
     */
    public function setAddMoreLocardLabelsFlag($addMoreLocardLabelsFlag)
    {
        $this->container['addMoreLocardLabelsFlag'] = $addMoreLocardLabelsFlag;

        return $this;
    }

    /**
     * Gets locardBehaviors
     *
     * @return \TencentAds\Model\LocardBehaviorsListItem[]|mixed
     */
    public function getLocardBehaviors()
    {
        return $this->container['locardBehaviors'];
    }

    /**
     * Sets locardBehaviors
     *
     * @param \TencentAds\Model\LocardBehaviorsListItem[]|mixed $locardBehaviors locardBehaviors
     *
     * @return $this
     */
    public function setLocardBehaviors($locardBehaviors)
    {
        $this->container['locardBehaviors'] = $locardBehaviors;

        return $this;
    }

    /**
     * Gets locardInterests
     *
     * @return \TencentAds\Model\LocardInterestsListItem[]|mixed
     */
    public function getLocardInterests()
    {
        return $this->container['locardInterests'];
    }

    /**
     * Sets locardInterests
     *
     * @param \TencentAds\Model\LocardInterestsListItem[]|mixed $locardInterests locardInterests
     *
     * @return $this
     */
    public function setLocardInterests($locardInterests)
    {
        $this->container['locardInterests'] = $locardInterests;

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


