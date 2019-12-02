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
<<<<<<< HEAD
use Symfony\Component\Mime\NamedAddress;
=======
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

/**
 * A Mailbox MIME Header for something like Sender (one named address).
 *
 * @author Fabien Potencier <fabien@symfony.com>
<<<<<<< HEAD
 *
 * @experimental in 4.3
=======
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
 */
final class MailboxHeader extends AbstractHeader
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

    /**
     * @throws RfcComplianceException
<<<<<<< HEAD
     *
     * @return Address
     */
    public function getBody()
=======
     */
    public function getBody(): Address
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return $this->getAddress();
    }

    /**
     * @throws RfcComplianceException
     */
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
        $str = $this->address->getEncodedAddress();
<<<<<<< HEAD
        if ($this->address instanceof NamedAddress && $name = $this->address->getName()) {
=======
        if ($name = $this->address->getName()) {
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
            $str = $this->createPhrase($this, $name, $this->getCharset(), true).' <'.$str.'>';
        }

        return $str;
    }

    /**
     * Redefine the encoding requirements for an address.
     *
     * All "specials" must be encoded as the full header value will not be quoted
     *
     * @see RFC 2822 3.2.1
     */
    protected function tokenNeedsEncoding(string $token): bool
    {
        return preg_match('/[()<>\[\]:;@\,."]/', $token) || parent::tokenNeedsEncoding($token);
    }
}
