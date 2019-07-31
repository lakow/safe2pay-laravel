<?php 

namespace Lakow\Safe2Pay;

use Safe2Pay\Safe2Pay as Api;

class Safe2Pay
{
    /**
     * @var Safe2Pay\Safe2Pay
     */
    private $safe2pay;

    public function __construct(Api $api)
    {
        $this->safe2pay = $api;
        return $this;
    }

    /**
     * Return a instance of package
     * 
     * @return Safe2Pay\Safe2Pay
     */
    public function getApi()
    {
        return $this->safe2pay;
    }

    /**
     * Create a new Customer instance
     * 
     * @return Safe2Pay\Resource\Customer
     */
    public function customer()
    {
        return $this->safe2pay->customer();
    }

    /**
     * Create a new Orders instance.
     *
     * @return \Safe2Pay\Resource\Orders
     */
    public function orders()
    {
        return $this->safe2pay->orders();
    }

    /**
     * Create a new Notification Prefences instance.
     *
     * @return \Safe2Pay\Resource\Orders
     */
    public function notifications()
    {
        return $this->safe2pay->notifications();
    }

    public function isSandbox(bool $sandbox = true)
    {
        return $this->safe2pay->isSandbox($sandbox);
    }
}
