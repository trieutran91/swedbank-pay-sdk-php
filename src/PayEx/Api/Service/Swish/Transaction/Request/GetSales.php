<?php

namespace PayEx\Api\Service\Swish\Transaction\Request;

use PayEx\Api\Service\Payment\Transaction\Resource\Response\SalesObject;
use PayEx\Api\Service\Request;

class GetSales extends Request
{
    public function setup()
    {
        $this->setRequestMethod('GET');
        $this->setRequestEndpoint('/psp/swish/payments/%s/sales');
        $this->setResponseResourceFQCN(SalesObject::class);
    }
}
