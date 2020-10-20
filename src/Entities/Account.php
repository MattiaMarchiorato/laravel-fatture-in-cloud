<?php

namespace InsologyStudio\FattureInCloud\Entities;

use InsologyStudio\FattureInCloud\FattureInCloud;
use InsologyStudio\FattureInCloud\Requests\Account as Request;

class Account extends FattureInCloud
{
    /**
     * @param array $data
     *
     * @return mixed|string
     */
    public function getInfo($data = ['nome'])
    {
        Request::info($data);

        return $this->auth->post('info/account', $data);
    }
}
