<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Loader\Configurator;

use Symfony\Component\Routing\Loader\PhpFileLoader;
use Symfony\Component\Routing\RouteCollection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RoutingConfigurator
{
    use Traits\AddTrait;

    private $loader;
    private $path;
    private $file;

    public function __construct(RouteCollection $collection, PhpFileLoader $loader, string $path, string $file)
    {
        $this->collection = $collection;
        $this->loader = $loader;
        $this->path = $path;
        $this->file = $file;
    }

    /**
<<<<<<< HEAD
     * @return ImportConfigurator
     */
    final public function import($resource, $type = null, $ignoreErrors = false)
    {
        $this->loader->setCurrentDir(\dirname($this->path));
        $imported = $this->loader->import($resource, $type, $ignoreErrors, $this->file) ?: [];

=======
     * @param string|string[]|null $exclude Glob patterns to exclude from the import
     */
    final public function import($resource, string $type = null, bool $ignoreErrors = false, $exclude = null): ImportConfigurator
    {
        $this->loader->setCurrentDir(\dirname($this->path));

        $imported = $this->loader->import($resource, $type, $ignoreErrors, $this->file, $exclude) ?: [];
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
        if (!\is_array($imported)) {
            return new ImportConfigurator($this->collection, $imported);
        }

        $mergedCollection = new RouteCollection();
        foreach ($imported as $subCollection) {
            $mergedCollection->addCollection($subCollection);
        }

        return new ImportConfigurator($this->collection, $mergedCollection);
    }

<<<<<<< HEAD
    /**
     * @return CollectionConfigurator
     */
    final public function collection($name = '')
=======
    final public function collection(string $name = ''): CollectionConfigurator
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return new CollectionConfigurator($this->collection, $name);
    }
}
