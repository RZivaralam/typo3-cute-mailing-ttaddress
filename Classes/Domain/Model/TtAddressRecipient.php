<?php

namespace Undkonsorten\CuteMailingTtAddress\Domain\Model;




use Undkonsorten\CuteMailingTtAddress\Domain\Model\Address;
use Undkonsorten\CuteMailing\Domain\Model\RecipientInterface;

class TtAddressRecipient extends Address implements RecipientInterface
{

    public function getUid(): int
    {
        return parent::getUid();
    }
    /**
     * @return string
     */
    public function getSubscriptionHash(): string
    {
        return parent::getSubscriptionHash();
    }

                                             
    /**
     * @param string $subscriptionHash
     */
    public function setSubscriptionHash($subscriptionHash): void
    {
        parent::setSubscriptionHash($subscriptionHash);
    }
}
