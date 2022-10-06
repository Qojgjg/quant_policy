<?php
/**
 * DynamicAdTemplateOwnershipType
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
 * DynamicAdTemplateOwnershipType Class Doc Comment
 *
 * @category Class
 * @description 动态商品模板所属类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicAdTemplateOwnershipType
{
    /**
     * Possible values of this enum
     */
    const PRIVATE_TEMPLATE = 'PRIVATE_TEMPLATE';
    const PUBLIC_TEMPLATE = 'PUBLIC_TEMPLATE';
    const SELF_OWNED_TEMPLATE = 'SELF_OWNED_TEMPLATE';
    const GRANTED_TEMPLATE = 'GRANTED_TEMPLATE';
    const ALL = 'ALL';
    const SELF_OWNED = 'SELF_OWNED';
    const GRANTED = 'GRANTED';
    const PRODUCT_CATALOG_OWNED = 'PRODUCT_CATALOG_OWNED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRIVATE_TEMPLATE,
            self::PUBLIC_TEMPLATE,
            self::SELF_OWNED_TEMPLATE,
            self::GRANTED_TEMPLATE,
            self::ALL,
            self::SELF_OWNED,
            self::GRANTED,
            self::PRODUCT_CATALOG_OWNED,
        ];
    }
}


