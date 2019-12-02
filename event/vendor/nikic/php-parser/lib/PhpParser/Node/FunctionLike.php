<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\Node;

interface FunctionLike extends Node
{
    /**
     * Whether to return by reference
     *
     * @return bool
     */
    public function returnsByRef() : bool;

    /**
     * List of parameters
     *
     * @return Node\Param[]
     */
    public function getParams() : array;

    /**
     * Get the declared return type or null
     *
<<<<<<< HEAD
     * @return null|Identifier|Node\Name|Node\NullableType
=======
     * @return null|Identifier|Node\Name|Node\NullableType|Node\UnionType
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
     */
    public function getReturnType();

    /**
     * The function body
     *
     * @return Node\Stmt[]|null
     */
    public function getStmts();
}
