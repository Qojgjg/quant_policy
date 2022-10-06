<?php

namespace app\common\service\tencent;
use app\common\service\BaseService;
use Icharle\Wxtool\Wxtool;
use think\Exception;
use think\Log;

class WxmpService extends BaseService
{
    /**
     * 获取微信小程序用户信息
     * @date: 2022/07/09  15:15
     */
    public function getWxmpInfo($appid, $secret, $code, $field = 'unionid')
    {
        try {
            if (!$code) {
                throw new Exception('小程序用户code必填');
            }
            $res = (new Wxtool($appid, $secret))->GetSessionKey($code);
            if (empty($field)) {
                $data=$res;
            } else {
                $data=$res[$field]??'';
            }
            if (!$data) {
                Log::write('小程序用户信息获取失败数据参数');
                Log::write([
                    'appid'=>$appid,
                    'secret'=>$secret,
                    'code'=>$code,
                    'field'=>$field,
                    'res'=>$res,
                ]);
                throw new Exception('小程序用户信息获取失败');
            }
            return alert_info(0, 'success', $data);
        } catch (Exception $e) {
            return alert_info(1, $e->getMessage());
        }
    }
}
