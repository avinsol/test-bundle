<?php

/*
 * This file is part of the AvinsolTestBundle package.
 *
 * (c) Avinsol <avinsol.net@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Avinsol\TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Avinsol <avinsol.net@gmail.com>
 */
class AvinsolTestBundle extends Bundle
{
    public function boot()
    {
        if ('prod' === $this->container->getParameter('kernel.environment')) {
            @trigger_error('Using AvinsolTestBundle in production is not supported, disable it.', E_USER_WARNING);
        }
    }
}
