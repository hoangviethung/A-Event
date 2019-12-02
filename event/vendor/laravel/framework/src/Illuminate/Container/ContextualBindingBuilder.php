<?php

namespace Illuminate\Container;

use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Container\ContextualBindingBuilder as ContextualBindingBuilderContract;
<<<<<<< HEAD
use Illuminate\Support\Arr;
=======
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045

class ContextualBindingBuilder implements ContextualBindingBuilderContract
{
    /**
     * The underlying container instance.
     *
     * @var \Illuminate\Contracts\Container\Container
     */
    protected $container;

    /**
     * The concrete instance.
     *
     * @var string|array
     */
    protected $concrete;

    /**
     * The abstract target.
     *
     * @var string
     */
    protected $needs;

    /**
     * Create a new contextual binding builder.
     *
     * @param  \Illuminate\Contracts\Container\Container  $container
     * @param  string|array  $concrete
     * @return void
     */
    public function __construct(Container $container, $concrete)
    {
        $this->concrete = $concrete;
        $this->container = $container;
    }

    /**
     * Define the abstract target that depends on the context.
     *
     * @param  string  $abstract
     * @return $this
     */
    public function needs($abstract)
    {
        $this->needs = $abstract;

        return $this;
    }

    /**
     * Define the implementation for the contextual binding.
     *
     * @param  \Closure|string  $implementation
     * @return void
     */
    public function give($implementation)
    {
<<<<<<< HEAD
        foreach (Arr::wrap($this->concrete) as $concrete) {
=======
        foreach (Util::arrayWrap($this->concrete) as $concrete) {
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
            $this->container->addContextualBinding($concrete, $this->needs, $implementation);
        }
    }
}
