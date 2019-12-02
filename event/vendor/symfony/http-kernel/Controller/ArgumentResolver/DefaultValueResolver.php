<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

/**
 * Yields the default value defined in the action signature when no value has been given.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class DefaultValueResolver implements ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function supports(Request $request, ArgumentMetadata $argument)
=======
    public function supports(Request $request, ArgumentMetadata $argument): bool
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return $argument->hasDefaultValue() || (null !== $argument->getType() && $argument->isNullable() && !$argument->isVariadic());
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function resolve(Request $request, ArgumentMetadata $argument)
=======
    public function resolve(Request $request, ArgumentMetadata $argument): iterable
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        yield $argument->hasDefaultValue() ? $argument->getDefaultValue() : null;
    }
}
