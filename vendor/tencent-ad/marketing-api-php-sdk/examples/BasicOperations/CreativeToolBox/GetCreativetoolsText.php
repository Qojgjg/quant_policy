<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取广告文案(Creativetools Text)的简单示例
 */
class GetCreativetoolsText
{
    public static $tads;
    public static $ACCESS_TOKEN          = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID            = 'YOUR ACCOUNT ID';
    public static $CATEGORY_FIRST_LEVEL  = 'YOUR FIRST LEVEL CATEGORY'; // 一级广告行业
    public static $CATEGORY_SECOND_LEVEL = 'YOUR SECOND LEVEL CATEGORY'; // 二级广告行业
    public static $KEYWORD               = 'YOUR KEYWORD'; // 关键字

    public function init()
    {
        $tads = TencentAds::init([
            'access_token' => static::$ACCESS_TOKEN,
            'is_debug'     => true,
        ]);
        $tads->useSandbox(); // 默认访问沙箱环境，如访问正式环境，请切换为$tads->useProduction()
        static::$tads = $tads;

        return $tads;
    }

    public function main()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $response = $tads->creativetoolsText()
                             ->get([
                                 'account_id'            => static::$ACCOUNT_ID,
                                 'max_text_length'       => 100,
                                 'category_first_level'  => static::$CATEGORY_FIRST_LEVEL,
                                 'category_second_level' => static::$CATEGORY_SECOND_LEVEL,
                                 'keyword'               => static::$KEYWORD,
                             ]);

            return $response;
        } catch (TencentAdsResponseException $e) {
            // When Api returns an error
            echo 'Tencent ads returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (TencentAdsSDKException $e) {
            // When validation fails or other local issues
            echo 'Tencent ads SDK returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (Exception $e) {
            echo 'Other exception: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }
}

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    try {
        $example = new GetCreativetoolsText();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
