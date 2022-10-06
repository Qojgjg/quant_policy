<?php

namespace app\common\service\tencent;
use app\common\service\BaseService;
use think\WeWork;
use think\Log;

class WxworkService extends BaseService
{
    public function getWxworkApp($corp_id, $secret)
    {
        $app= (new WeWork('', $corp_id, $secret));
        Log::write($app);
        return $app->getApp();
    }
    public function getUnionid($corp_id, $secret, $external_user_id)
    {
        $app=$this->getWxworkApp($corp_id, $secret);
        $crm = $app->get('crm');
        $crm_one=$crm->getExternalContact($external_user_id);//客户详情
        $unionid=$crm_one['external_contact']['unionid'];
        return $unionid;
    }
}
