<?php

namespace ErbiumTech\OpenPayroll\Processors\Earning;

use ErbiumTech\OpenPayroll\Contracts\CalculateContract;
use ErbiumTech\OpenPayroll\Traits\MakeInstance;

class BaseEarningProcessor implements CalculateContract
{
    use MakeInstance;

    public function getModel()
    {
        return config('open-payroll.models.earning');
    }

    public function earning($earning)
    {
        return $this->instance($earning);
    }

    public function calculate()
    {
    }
}
