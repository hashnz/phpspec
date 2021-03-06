<?php

/*
 * This file is part of PhpSpec, A php toolset to drive emergent
 * design by specification.
 *
 * (c) Marcello Duarte <marcello.duarte@gmail.com>
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpSpec\Process\Context;

interface ExecutionContext
{
    /**
     * @param string $type
     */
    public function addGeneratedType(string $type);

    /**
     * @return array
     */
    public function getGeneratedTypes(): array;

    /**
     * @return array
     */
    public function asEnv(): array;
}
