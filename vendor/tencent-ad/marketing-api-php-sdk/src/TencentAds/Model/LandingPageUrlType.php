<?php
/**
 * LandingPageUrlType
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
 * LandingPageUrlType Class Doc Comment
 *
 * @category Class
 * @description MDPA落地页类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LandingPageUrlType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'LANDING_PAGE_URL_TYPE_UNKNOWN';
    const _STATIC = 'LANDING_PAGE_URL_TYPE_STATIC';
    const DYNAMIC = 'LANDING_PAGE_URL_TYPE_DYNAMIC';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::_STATIC,
            self::DYNAMIC,
        ];
    }
}

