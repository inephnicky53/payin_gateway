<?php
namespace PayIN\Api;

use PayIN\Common\PayINModel;

/**
 * Class Amount
 * @property double totalAmount
 * @property string currency
 *
 */
class Amount extends PayINModel
{

    /**
     * @param  double  $amount
     * @return $this
     */
    public function setTotal($amount)
    {
        $this->totalAmount = $amount;
        return $this;
    }

    public function getTotal()
    {
        return $this->totalAmount;
    }

    /**
     * @param  string  $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

}
