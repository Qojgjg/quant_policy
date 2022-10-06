<?php
/**
 * ChannelTaskError
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
 * ChannelTaskError Class Doc Comment
 *
 * @category Class
 * @description 渠道包任务错误码
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelTaskError
{
    /**
     * Possible values of this enum
     */
    const NORMAL = 'TASK_ERROR_NORMAL';
    const UNABLE_DOWNLOAD = 'TASK_ERROR_UNABLE_DOWNLOAD';
    const MISMATCH_PACKAGENAME = 'TASK_ERROR_MISMATCH_PACKAGENAME';
    const ILLEGAL_VERSION = 'TASK_ERROR_ILLEGAL_VERSION';
    const DUPLICATE_PACKAGE = 'TASK_ERROR_DUPLICATE_PACKAGE';
    const PARSE_FAIL = 'TASK_ERROR_PARSE_FAIL';
    const MISS_YSDK = 'TASK_ERROR_MISS_YSDK';
    const UPLOAD_FAIL = 'TASK_ERROR_UPLOAD_FAIL';
    const SUBMIT_FAIL = 'TASK_ERROR_SUBMIT_FAIL';
    const SERVER_ERROR = 'TASK_ERROR_SERVER_ERROR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::UNABLE_DOWNLOAD,
            self::MISMATCH_PACKAGENAME,
            self::ILLEGAL_VERSION,
            self::DUPLICATE_PACKAGE,
            self::PARSE_FAIL,
            self::MISS_YSDK,
            self::UPLOAD_FAIL,
            self::SUBMIT_FAIL,
            self::SERVER_ERROR,
        ];
    }
}


