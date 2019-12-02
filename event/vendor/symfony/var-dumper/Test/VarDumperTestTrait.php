<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Test;

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait VarDumperTestTrait
{
<<<<<<< HEAD
=======
    /**
     * @internal
     */
    private $varDumperConfig = [
        'casters' => [],
        'flags' => null,
    ];

    protected function setUpVarDumper(array $casters, int $flags = null): void
    {
        $this->varDumperConfig['casters'] = $casters;
        $this->varDumperConfig['flags'] = $flags;
    }

    /**
     * @after
     */
    protected function tearDownVarDumper(): void
    {
        $this->varDumperConfig['casters'] = [];
        $this->varDumperConfig['flags'] = null;
    }

>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    public function assertDumpEquals($expected, $data, $filter = 0, $message = '')
    {
        $this->assertSame($this->prepareExpectation($expected, $filter), $this->getDump($data, null, $filter), $message);
    }

    public function assertDumpMatchesFormat($expected, $data, $filter = 0, $message = '')
    {
        $this->assertStringMatchesFormat($this->prepareExpectation($expected, $filter), $this->getDump($data, null, $filter), $message);
    }

    /**
     * @return string|null
     */
    protected function getDump($data, $key = null, $filter = 0)
    {
<<<<<<< HEAD
        $flags = getenv('DUMP_LIGHT_ARRAY') ? CliDumper::DUMP_LIGHT_ARRAY : 0;
        $flags |= getenv('DUMP_STRING_LENGTH') ? CliDumper::DUMP_STRING_LENGTH : 0;
        $flags |= getenv('DUMP_COMMA_SEPARATOR') ? CliDumper::DUMP_COMMA_SEPARATOR : 0;

        $cloner = new VarCloner();
=======
        if (null === $flags = $this->varDumperConfig['flags']) {
            $flags = getenv('DUMP_LIGHT_ARRAY') ? CliDumper::DUMP_LIGHT_ARRAY : 0;
            $flags |= getenv('DUMP_STRING_LENGTH') ? CliDumper::DUMP_STRING_LENGTH : 0;
            $flags |= getenv('DUMP_COMMA_SEPARATOR') ? CliDumper::DUMP_COMMA_SEPARATOR : 0;
        }

        $cloner = new VarCloner();
        $cloner->addCasters($this->varDumperConfig['casters']);
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
        $cloner->setMaxItems(-1);
        $dumper = new CliDumper(null, null, $flags);
        $dumper->setColors(false);
        $data = $cloner->cloneVar($data, $filter)->withRefHandles(false);
        if (null !== $key && null === $data = $data->seek($key)) {
            return null;
        }

        return rtrim($dumper->dump($data, true));
    }

<<<<<<< HEAD
    private function prepareExpectation($expected, $filter)
=======
    private function prepareExpectation($expected, int $filter): string
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        if (!\is_string($expected)) {
            $expected = $this->getDump($expected, null, $filter);
        }

        return rtrim($expected);
    }
}
