<?php

namespace Undkonsorten\CuteMailingTtAddress\Domain\Model;


/**
 * Description of address
 *
 * 
 */
class Address extends \FriendsOfTYPO3\TtAddress\Domain\Model\Address{
    
    /**
     * @var string
    */
    protected $subscriptionHash = '';

    public function getSubscriptionHash(): string
    {
        return $this->subscriptionHash;
    }

    public function setSubscriptionHash($subscriptionHash): void
    {
        $this->subscriptionHash=$subscriptionHash;
    }

}