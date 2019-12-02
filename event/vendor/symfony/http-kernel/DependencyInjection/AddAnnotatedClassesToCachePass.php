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

use Composer\Autoload\ClassLoader;
<<<<<<< HEAD
use Symfony\Component\Debug\DebugClassLoader;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
=======
use Symfony\Component\Debug\DebugClassLoader as LegacyDebugClassLoader;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\ErrorHandler\DebugClassLoader;
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
use Symfony\Component\HttpKernel\Kernel;

/**
 * Sets the classes to compile in the cache for the container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AddAnnotatedClassesToCachePass implements CompilerPassInterface
{
    private $kernel;

    public function __construct(Kernel $kernel)
    {
        $this->kernel = $kernel;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $annotatedClasses = $this->kernel->getAnnotatedClassesToCompile();
        foreach ($container->getExtensions() as $extension) {
            if ($extension instanceof Extension) {
                $annotatedClasses = array_merge($annotatedClasses, $extension->getAnnotatedClassesToCompile());
            }
        }

        $existingClasses = $this->getClassesInComposerClassMaps();

        $annotatedClasses = $container->getParameterBag()->resolveValue($annotatedClasses);
        $this->kernel->setAnnotatedClassCache($this->expandClasses($annotatedClasses, $existingClasses));
    }

    /**
     * Expands the given class patterns using a list of existing classes.
     *
     * @param array $patterns The class patterns to expand
     * @param array $classes  The existing classes to match against the patterns
<<<<<<< HEAD
     *
     * @return array A list of classes derived from the patterns
     */
    private function expandClasses(array $patterns, array $classes)
=======
     */
    private function expandClasses(array $patterns, array $classes): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        $expanded = [];

        // Explicit classes declared in the patterns are returned directly
        foreach ($patterns as $key => $pattern) {
            if ('\\' !== substr($pattern, -1) && false === strpos($pattern, '*')) {
                unset($patterns[$key]);
                $expanded[] = ltrim($pattern, '\\');
            }
        }

        // Match patterns with the classes list
        $regexps = $this->patternsToRegexps($patterns);

        foreach ($classes as $class) {
            $class = ltrim($class, '\\');

            if ($this->matchAnyRegexps($class, $regexps)) {
                $expanded[] = $class;
            }
        }

        return array_unique($expanded);
    }

<<<<<<< HEAD
    private function getClassesInComposerClassMaps()
=======
    private function getClassesInComposerClassMaps(): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        $classes = [];

        foreach (spl_autoload_functions() as $function) {
            if (!\is_array($function)) {
                continue;
            }

<<<<<<< HEAD
            if ($function[0] instanceof DebugClassLoader) {
=======
            if ($function[0] instanceof DebugClassLoader || $function[0] instanceof LegacyDebugClassLoader) {
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
                $function = $function[0]->getClassLoader();
            }

            if (\is_array($function) && $function[0] instanceof ClassLoader) {
                $classes += array_filter($function[0]->getClassMap());
            }
        }

        return array_keys($classes);
    }

<<<<<<< HEAD
    private function patternsToRegexps($patterns)
=======
    private function patternsToRegexps(array $patterns): array
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        $regexps = [];

        foreach ($patterns as $pattern) {
            // Escape user input
            $regex = preg_quote(ltrim($pattern, '\\'));

            // Wildcards * and **
            $regex = strtr($regex, ['\\*\\*' => '.*?', '\\*' => '[^\\\\]*?']);

            // If this class does not end by a slash, anchor the end
            if ('\\' !== substr($regex, -1)) {
                $regex .= '$';
            }

            $regexps[] = '{^\\\\'.$regex.'}';
        }

        return $regexps;
    }

<<<<<<< HEAD
    private function matchAnyRegexps($class, $regexps)
=======
    private function matchAnyRegexps(string $class, array $regexps): bool
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
    {
        $blacklisted = false !== strpos($class, 'Test');

        foreach ($regexps as $regex) {
            if ($blacklisted && false === strpos($regex, 'Test')) {
                continue;
            }

            if (preg_match($regex, '\\'.$class)) {
                return true;
            }
        }

        return false;
    }
}
