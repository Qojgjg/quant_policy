<?php

namespace app\common\service\tencent;
use app\common\service\BaseService;

class TxadService extends BaseService
{
    /**
     * 发送转化归因上报
     * @date: 2022/07/15  16:37
     */
    public function sendZhgyReport($click_time, $callback)
    {
        $callback=str_replace("amp;", "", $callback);
        //提交转化
        $postArr = '{
                    "actions": [
                        {
                            "action_time": '.$click_time.',
                            "user_id": {},
                            "action_type": "RESERVATION",
                            "action_param": {}
                        }
                    ]
                }';
        $options = [
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json; charset=utf-8',
                    'cache-control:no-cache'
                )
            ];
        $result = \fast\Http::sendRequest($callback, $postArr, 'POST', $options);
        if (is_array($result)) {
            $result=json_encode($result, 512);
        }
        return $result;
    }
}
