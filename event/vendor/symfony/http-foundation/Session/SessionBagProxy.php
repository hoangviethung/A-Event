<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class SessionBagProxy implements SessionBagInterface
{
    private $bag;
    private $data;
    private $usageIndex;

<<<<<<< HEAD
    public function __construct(SessionBagInterface $bag, array &$data, &$usageIndex)
=======
    public function __construct(SessionBagInterface $bag, array &$data, ?int &$usageIndex)
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        $this->bag = $bag;
        $this->data = &$data;
        $this->usageIndex = &$usageIndex;
    }

<<<<<<< HEAD
    /**
     * @return SessionBagInterface
     */
    public function getBag()
=======
    public function getBag(): SessionBagInterface
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        ++$this->usageIndex;

        return $this->bag;
    }

<<<<<<< HEAD
    /**
     * @return bool
     */
    public function isEmpty()
=======
    public function isEmpty(): bool
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        if (!isset($this->data[$this->bag->getStorageKey()])) {
            return true;
        }
        ++$this->usageIndex;

        return empty($this->data[$this->bag->getStorageKey()]);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function getName()
=======
    public function getName(): string
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return $this->bag->getName();
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function initialize(array &$array)
=======
    public function initialize(array &$array): void
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        ++$this->usageIndex;
        $this->data[$this->bag->getStorageKey()] = &$array;

        $this->bag->initialize($array);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function getStorageKey()
=======
    public function getStorageKey(): string
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return $this->bag->getStorageKey();
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return $this->bag->clear();
    }
}
