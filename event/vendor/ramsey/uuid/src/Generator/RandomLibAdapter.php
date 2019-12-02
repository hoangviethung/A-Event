<?php
/**
 * This file is part of the ramsey/uuid library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link https://benramsey.com/projects/ramsey-uuid/ Documentation
 * @link https://packagist.org/packages/ramsey/uuid Packagist
 * @link https://github.com/ramsey/uuid GitHub
 */

namespace Ramsey\Uuid\Generator;

use RandomLib\Generator;
use RandomLib\Factory;

/**
 * RandomLibAdapter provides functionality to generate strings of random
<<<<<<< HEAD
 * binary data using the ircmaxell/random-lib library
 *
 * @link https://packagist.org/packages/ircmaxell/random-lib
=======
 * binary data using the paragonie/random-lib library
 *
 * @link https://packagist.org/packages/paragonie/random-lib
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
 */
class RandomLibAdapter implements RandomGeneratorInterface
{
    /**
     * @var Generator
     */
    private $generator;

    /**
     * Constructs a `RandomLibAdapter` using a `RandomLib\Generator`
     *
<<<<<<< HEAD
     * By default, if no `Generator` is passed in, this creates a medium-strength
     * generator to use when generating random binary data.
     *
     * @param Generator $generator An ircmaxell/random-lib `Generator`
=======
     * By default, if no `Generator` is passed in, this creates a high-strength
     * generator to use when generating random binary data.
     *
     * @param Generator $generator An paragonie/random-lib `Generator`
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function __construct(Generator $generator = null)
    {
        $this->generator = $generator;

        if ($this->generator === null) {
            $factory = new Factory();

<<<<<<< HEAD
            $this->generator = $factory->getMediumStrengthGenerator();
=======
            $this->generator = $factory->getHighStrengthGenerator();
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
        }
    }

    /**
     * Generates a string of random binary data of the specified length
     *
     * @param integer $length The number of bytes of random binary data to generate
     * @return string A binary string
     */
    public function generate($length)
    {
        return $this->generator->generate($length);
    }
}
