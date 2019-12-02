<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Helper;

/**
 * @internal
 */
class TableRows implements \IteratorAggregate
{
    private $generator;

    public function __construct(callable $generator)
    {
        $this->generator = $generator;
    }

<<<<<<< HEAD
    public function getIterator()
=======
    public function getIterator(): \Traversable
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        $g = $this->generator;

        return $g();
    }
}
