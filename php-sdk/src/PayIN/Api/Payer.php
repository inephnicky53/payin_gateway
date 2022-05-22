<?php
namespace PayIN\Api;

use PayIN\Common\PayINModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends PayINModel
{

    /**
     * Valid Values: ["PayIN"]
     * method will be like payin, mpesa, paypal, stripe etc
     * @param  string  $method
     * @return $this
     */
    public function setPaymentMethod($method)
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

}
