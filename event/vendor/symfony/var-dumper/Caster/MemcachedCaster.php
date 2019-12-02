<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Caster;

use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
<<<<<<< HEAD
=======
 *
 * @final since Symfony 4.4
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
 */
class MemcachedCaster
{
    private static $optionConstants;
    private static $defaultOptions;

    public static function castMemcached(\Memcached $c, array $a, Stub $stub, $isNested)
    {
        $a += [
            Caster::PREFIX_VIRTUAL.'servers' => $c->getServerList(),
            Caster::PREFIX_VIRTUAL.'options' => new EnumStub(
                self::getNonDefaultOptions($c)
            ),
        ];

        return $a;
    }

<<<<<<< HEAD
    private static function getNonDefaultOptions(\Memcached $c)
=======
    private static function getNonDefaultOptions(\Memcached $c): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        self::$defaultOptions = self::$defaultOptions ?? self::discoverDefaultOptions();
        self::$optionConstants = self::$optionConstants ?? self::getOptionConstants();

        $nonDefaultOptions = [];
        foreach (self::$optionConstants as $constantKey => $value) {
            if (self::$defaultOptions[$constantKey] !== $option = $c->getOption($value)) {
                $nonDefaultOptions[$constantKey] = $option;
            }
        }

        return $nonDefaultOptions;
    }

<<<<<<< HEAD
    private static function discoverDefaultOptions()
=======
    private static function discoverDefaultOptions(): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        $defaultMemcached = new \Memcached();
        $defaultMemcached->addServer('127.0.0.1', 11211);

        $defaultOptions = [];
        self::$optionConstants = self::$optionConstants ?? self::getOptionConstants();

        foreach (self::$optionConstants as $constantKey => $value) {
            $defaultOptions[$constantKey] = $defaultMemcached->getOption($value);
        }

        return $defaultOptions;
    }

<<<<<<< HEAD
    private static function getOptionConstants()
=======
    private static function getOptionConstants(): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        $reflectedMemcached = new \ReflectionClass(\Memcached::class);

        $optionConstants = [];
        foreach ($reflectedMemcached->getConstants() as $constantKey => $value) {
            if (0 === strpos($constantKey, 'OPT_')) {
                $optionConstants[$constantKey] = $value;
            }
        }

        return $optionConstants;
    }
}
