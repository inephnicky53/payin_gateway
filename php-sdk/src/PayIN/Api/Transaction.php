<?php

namespace PayIN\Api;

use PayIN\Common\PayINModel;

/**
 * Class Transaction
 * @property \PayIN\Api\Amount amount
 *
 */

class Transaction extends PayINModel
{

    /**
     * @param \PayIN\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}