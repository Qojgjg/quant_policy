<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个从模板创建蹊径互动落地页(Xijing interactive page)的简单示例
 */
class AddXijingPageInteractive
{
    public static $tads;
    public static $ACCESS_TOKEN          = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID            = 'YOUR ACCOUNT ID';
    public static $PAGE_TYPE             = 'PAGE_TYPE_XIJING_ANDROID';
    public static $INTERACTIVE_PAGE_TYPE = 'COMPRESSED_PACKAGE';
    public static $PAGE_TITLE            = 'YOUR PAGE TITLE'; // 落地页标题-用于展示
    public static $APP_ID                = 'YOUR APP ID'; // 应用App ID
    public static $PACKAGE_PATH          = 'YOUR PACKAGE PATH'; // 压缩包路径

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

            $pageName = 'SDK 蹊径' . uniqid();

            $response = $tads->xijingPageInteractive()
                             ->add([
                                 'account_id'     => static::$ACCOUNT_ID,
                                 'is_auto_submit' => 0,
                                 'page_type'      => static::$PAGE_TYPE,
                                 'page_name'      => $pageName,
                                 'page_title'     => static::$PAGE_TITLE,
                                 'mobile_app_id'  => static::$APP_ID,
                                 'file'           => static::$PACKAGE_PATH,
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
        $example = new AddXijingPageInteractive();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
