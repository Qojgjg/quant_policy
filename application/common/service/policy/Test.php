<?php

namespace app\common\service\policy;

use think\Exception;
use Lin\Binance\Binance;
use think\Db;
use app\common\service\BaseService;

class Test extends BaseService
{
    protected $params;
    public function __construct()
    {
    }

    public function setParams(array $val)
    {
        $this->params=$val;
        return $this;
    }


    public function run()
    {
        // return alert_info(1, 'error');
        return alert_info(0, 'success');
    }
}
