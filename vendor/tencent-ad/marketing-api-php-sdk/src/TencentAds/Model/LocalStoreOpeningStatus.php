<?php
/**
 * LocalStoreOpeningStatus
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
use \TencentAds\ObjectSerializer;

/**
 * LocalStoreOpeningStatus Class Doc Comment
 *
 * @category Class
 * @description 门店经营状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocalStoreOpeningStatus
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'OPENING_STATUS_UNKNOWN';
    const OPENING = 'OPENING_STATUS_OPENING';
    const TEMPORARILY_CLOSED = 'OPENING_STATUS_TEMPORARILY_CLOSED';
    const PERMANENTLY_CLOSED = 'OPENING_STATUS_PERMANENTLY_CLOSED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::OPENING,
            self::TEMPORARILY_CLOSED,
            self::PERMANENTLY_CLOSED,
        ];
    }
}

