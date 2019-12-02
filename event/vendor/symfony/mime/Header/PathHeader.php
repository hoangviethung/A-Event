<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Header;

use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Exception\RfcComplianceException;

/**
 * A Path Header, such a Return-Path (one address).
 *
 * @author Chris Corbyn
<<<<<<< HEAD
 *
 * @experimental in 4.3
=======
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
 */
final class PathHeader extends AbstractHeader
{
    private $address;

    public function __construct(string $name, Address $address)
    {
        parent::__construct($name);

        $this->setAddress($address);
    }

    /**
     * @param Address $body
     *
     * @throws RfcComplianceException
     */
    public function setBody($body)
    {
        $this->setAddress($body);
    }

<<<<<<< HEAD
    /**
     * @return Address
     */
    public function getBody()
=======
    public function getBody(): Address
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return $this->getAddress();
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getBodyAsString(): string
    {
        return '<'.$this->address->toString().'>';
    }
}
