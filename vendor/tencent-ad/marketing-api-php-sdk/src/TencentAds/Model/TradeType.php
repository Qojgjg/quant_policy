<?php
/**
 * TradeType
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
 * TradeType Class Doc Comment
 *
 * @category Class
 * @description 交易类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TradeType
{
    /**
     * Possible values of this enum
     */
    const CHARGE = 'CHARGE';
    const PAY = 'PAY';
    const TRANSFER_BACK = 'TRANSFER_BACK';
    const EXPIRE = 'EXPIRE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CHARGE,
            self::PAY,
            self::TRANSFER_BACK,
            self::EXPIRE,
        ];
    }
}


