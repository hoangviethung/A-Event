<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\CssSelector\XPath\Extension;

/**
 * XPath expression translator abstract extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
abstract class AbstractExtension implements ExtensionInterface
{
    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function getNodeTranslators()
=======
    public function getNodeTranslators(): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function getCombinationTranslators()
=======
    public function getCombinationTranslators(): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function getFunctionTranslators()
=======
    public function getFunctionTranslators(): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function getPseudoClassTranslators()
=======
    public function getPseudoClassTranslators(): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function getAttributeMatchingTranslators()
=======
    public function getAttributeMatchingTranslators(): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return [];
    }
}
