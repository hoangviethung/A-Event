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

use Symfony\Component\CssSelector\Exception\ExpressionErrorException;
use Symfony\Component\CssSelector\XPath\XPathExpr;

/**
 * XPath expression translator pseudo-class extension.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class PseudoClassExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function getPseudoClassTranslators()
=======
    public function getPseudoClassTranslators(): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return [
            'root' => [$this, 'translateRoot'],
            'first-child' => [$this, 'translateFirstChild'],
            'last-child' => [$this, 'translateLastChild'],
            'first-of-type' => [$this, 'translateFirstOfType'],
            'last-of-type' => [$this, 'translateLastOfType'],
            'only-child' => [$this, 'translateOnlyChild'],
            'only-of-type' => [$this, 'translateOnlyOfType'],
            'empty' => [$this, 'translateEmpty'],
        ];
    }

<<<<<<< HEAD
    /**
     * @return XPathExpr
     */
    public function translateRoot(XPathExpr $xpath)
=======
    public function translateRoot(XPathExpr $xpath): XPathExpr
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return $xpath->addCondition('not(parent::*)');
    }

<<<<<<< HEAD
    /**
     * @return XPathExpr
     */
    public function translateFirstChild(XPathExpr $xpath)
=======
    public function translateFirstChild(XPathExpr $xpath): XPathExpr
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return $xpath
            ->addStarPrefix()
            ->addNameTest()
            ->addCondition('position() = 1');
    }

<<<<<<< HEAD
    /**
     * @return XPathExpr
     */
    public function translateLastChild(XPathExpr $xpath)
=======
    public function translateLastChild(XPathExpr $xpath): XPathExpr
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return $xpath
            ->addStarPrefix()
            ->addNameTest()
            ->addCondition('position() = last()');
    }

    /**
<<<<<<< HEAD
     * @return XPathExpr
     *
     * @throws ExpressionErrorException
     */
    public function translateFirstOfType(XPathExpr $xpath)
=======
     * @throws ExpressionErrorException
     */
    public function translateFirstOfType(XPathExpr $xpath): XPathExpr
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        if ('*' === $xpath->getElement()) {
            throw new ExpressionErrorException('"*:first-of-type" is not implemented.');
        }

        return $xpath
            ->addStarPrefix()
            ->addCondition('position() = 1');
    }

    /**
<<<<<<< HEAD
     * @return XPathExpr
     *
     * @throws ExpressionErrorException
     */
    public function translateLastOfType(XPathExpr $xpath)
=======
     * @throws ExpressionErrorException
     */
    public function translateLastOfType(XPathExpr $xpath): XPathExpr
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        if ('*' === $xpath->getElement()) {
            throw new ExpressionErrorException('"*:last-of-type" is not implemented.');
        }

        return $xpath
            ->addStarPrefix()
            ->addCondition('position() = last()');
    }

<<<<<<< HEAD
    /**
     * @return XPathExpr
     */
    public function translateOnlyChild(XPathExpr $xpath)
=======
    public function translateOnlyChild(XPathExpr $xpath): XPathExpr
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return $xpath
            ->addStarPrefix()
            ->addNameTest()
            ->addCondition('last() = 1');
    }

<<<<<<< HEAD
    /**
     * @return XPathExpr
     *
     * @throws ExpressionErrorException
     */
    public function translateOnlyOfType(XPathExpr $xpath)
    {
        $element = $xpath->getElement();

        if ('*' === $element) {
            throw new ExpressionErrorException('"*:only-of-type" is not implemented.');
        }

        return $xpath->addCondition(sprintf('count(preceding-sibling::%s)=0 and count(following-sibling::%s)=0', $element, $element));
    }

    /**
     * @return XPathExpr
     */
    public function translateEmpty(XPathExpr $xpath)
=======
    public function translateOnlyOfType(XPathExpr $xpath): XPathExpr
    {
        $element = $xpath->getElement();

        return $xpath->addCondition(sprintf('count(preceding-sibling::%s)=0 and count(following-sibling::%s)=0', $element, $element));
    }

    public function translateEmpty(XPathExpr $xpath): XPathExpr
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        return $xpath->addCondition('not(*) and not(string-length())');
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
        return 'pseudo-class';
    }
}
