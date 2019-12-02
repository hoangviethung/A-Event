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
 * A Mailbox list MIME Header for something like From, To, Cc, and Bcc (one or more named addresses).
 *
 * @author Chris Corbyn
<<<<<<< HEAD
 *
 * @experimental in 4.3
=======
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
 */
final class MailboxListHeader extends AbstractHeader
{
    private $addresses = [];

    /**
<<<<<<< HEAD
     * @param (NamedAddress|Address)[] $addresses
=======
     * @param Address[] $addresses
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function __construct(string $name, array $addresses)
    {
        parent::__construct($name);

        $this->setAddresses($addresses);
    }

    /**
<<<<<<< HEAD
     * @param (NamedAddress|Address)[] $body
=======
     * @param Address[] $body
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     *
     * @throws RfcComplianceException
     */
    public function setBody($body)
    {
        $this->setAddresses($body);
    }

    /**
     * @throws RfcComplianceException
     *
<<<<<<< HEAD
     * @return (NamedAddress|Address)[]
     */
    public function getBody()
=======
     * @return Address[]
     */
    public function getBody(): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return $this->getAddresses();
    }

    /**
     * Sets a list of addresses to be shown in this Header.
     *
<<<<<<< HEAD
     * @param (NamedAddress|Address)[] $addresses
=======
     * @param Address[] $addresses
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     *
     * @throws RfcComplianceException
     */
    public function setAddresses(array $addresses)
    {
        $this->addresses = [];
        $this->addAddresses($addresses);
    }

    /**
     * Sets a list of addresses to be shown in this Header.
     *
<<<<<<< HEAD
     * @param (NamedAddress|Address)[] $addresses
=======
     * @param Address[] $addresses
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     *
     * @throws RfcComplianceException
     */
    public function addAddresses(array $addresses)
    {
        foreach ($addresses as $address) {
            $this->addAddress($address);
        }
    }

    /**
     * @throws RfcComplianceException
     */
    public function addAddress(Address $address)
    {
        $this->addresses[] = $address;
    }

    /**
<<<<<<< HEAD
     * @return (NamedAddress|Address)[]
=======
     * @return Address[]
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * Gets the full mailbox list of this Header as an array of valid RFC 2822 strings.
     *
     * @throws RfcComplianceException
     *
     * @return string[]
     */
    public function getAddressStrings(): array
    {
        $strings = [];
        foreach ($this->addresses as $address) {
            $str = $address->getEncodedAddress();
<<<<<<< HEAD
            if ($address instanceof NamedAddress && $name = $address->getName()) {
                $str = $this->createPhrase($this, $name, $this->getCharset(), empty($strings)).' <'.$str.'>';
=======
            if ($name = $address->getName()) {
                $str = $this->createPhrase($this, $name, $this->getCharset(), !$strings).' <'.$str.'>';
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
            }
            $strings[] = $str;
        }

        return $strings;
    }

    public function getBodyAsString(): string
    {
        return implode(', ', $this->getAddressStrings());
    }

    /**
     * Redefine the encoding requirements for addresses.
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
