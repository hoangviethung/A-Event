<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DependencyInjection;

use Symfony\Component\DependencyInjection\Argument\IteratorArgument;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @author Alexander M. Turek <me@derrabus.de>
 */
class ResettableServicePass implements CompilerPassInterface
{
    private $tagName;

    public function __construct(string $tagName = 'kernel.reset')
    {
        $this->tagName = $tagName;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->has('services_resetter')) {
            return;
        }

        $services = $methods = [];

        foreach ($container->findTaggedServiceIds($this->tagName, true) as $id => $tags) {
            $services[$id] = new Reference($id, ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE);
<<<<<<< HEAD
            $attributes = $tags[0];

            if (!isset($attributes['method'])) {
                throw new RuntimeException(sprintf('Tag %s requires the "method" attribute to be set.', $this->tagName));
            }

            $methods[$id] = $attributes['method'];
        }

        if (empty($services)) {
=======

            foreach ($tags as $attributes) {
                if (!isset($attributes['method'])) {
                    throw new RuntimeException(sprintf('Tag "%s" requires the "method" attribute to be set.', $this->tagName));
                }

                if (!isset($methods[$id])) {
                    $methods[$id] = [];
                }

                $methods[$id][] = $attributes['method'];
            }
        }

        if (!$services) {
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
            $container->removeAlias('services_resetter');
            $container->removeDefinition('services_resetter');

            return;
        }

        $container->findDefinition('services_resetter')
            ->setArgument(0, new IteratorArgument($services))
            ->setArgument(1, $methods);
    }
}
