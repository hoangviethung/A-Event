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
 * XPath expression translator extension interface.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
interface ExtensionInterface
{
    /**
     * Returns node translators.
     *
     * These callables will receive the node as first argument and the translator as second argument.
     *
     * @return callable[]
     */
<<<<<<< HEAD
    public function getNodeTranslators();
=======
    public function getNodeTranslators(): array;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

    /**
     * Returns combination translators.
     *
     * @return callable[]
     */
<<<<<<< HEAD
    public function getCombinationTranslators();
=======
    public function getCombinationTranslators(): array;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

    /**
     * Returns function translators.
     *
     * @return callable[]
     */
<<<<<<< HEAD
    public function getFunctionTranslators();
=======
    public function getFunctionTranslators(): array;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

    /**
     * Returns pseudo-class translators.
     *
     * @return callable[]
     */
<<<<<<< HEAD
    public function getPseudoClassTranslators();
=======
    public function getPseudoClassTranslators(): array;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

    /**
     * Returns attribute operation translators.
     *
     * @return callable[]
     */
<<<<<<< HEAD
    public function getAttributeMatchingTranslators();

    /**
     * Returns extension name.
     *
     * @return string
     */
    public function getName();
=======
    public function getAttributeMatchingTranslators(): array;

    /**
     * Returns extension name.
     */
    public function getName(): string;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
}
