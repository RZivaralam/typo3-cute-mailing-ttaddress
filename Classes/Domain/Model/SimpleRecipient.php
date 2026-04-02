<?php

namespace Undkonsorten\CuteMailingTtAddress\Domain\Model;
/**
 * Description of RecipientInterface
 *
 * 
 */
interface RecipientInterface extends \Undkonsorten\CuteMailing\Domain\Model\RecipientInterface {
    
    
    /**
     * @return string
     */
    public function getSubscriptionHash(): string;


    /**
     * @param string $subscriptionHash
     */
    public function setSubscriptionHash(string $subscriptionHash): void;
    
    
}

