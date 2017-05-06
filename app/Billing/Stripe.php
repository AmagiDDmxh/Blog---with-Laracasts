<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/6/2017
 * Time: 3:09 PM
 */

namespace App\Billing;


class Stripe
{
    protected $key;

    public function __construct($key)
    {
        $this->key = $key;
    }
}