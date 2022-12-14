<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取创意规格(Adcreative template)列表的简单示例
 */
class GetAdcreativeTemplateList
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID             = 'YOUR ACCOUNT ID';
    public static $ADCREATIVE_TEMPLATE_ID = '720'; // 创意形式ID

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

            $fields = [
                'adcreative_template_id', 'adcreative_template_style', 'adcreative_template_appellation',
                'site_set', 'support_billing_spec_list', 'support_bid_mode_list',
            ]; // 需要返回的字段
            $response = $tads->adcreativeTemplateList()
                             ->get([
                                 'account_id'             => static::$ACCOUNT_ID,
                                 'adcreative_template_id' => static::$ADCREATIVE_TEMPLATE_ID,
                                 'fields'                 => $fields,
                             ]);

            // 从返回里获得Adcreative template信息
            foreach ($response->getList() as $templateInfo) {
                // echo $templateInfo . PHP_EOL;
            }

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
        $example = new GetAdcreativeTemplateList();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
