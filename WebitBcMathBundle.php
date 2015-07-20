<?php

namespace Webit\Bundle\BcMathBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Webit\Wrapper\BcMath\BcMathNumber;

class WebitBcMathBundle extends Bundle
{
    /**
     * Boots the Bundle.
     */
    public function boot()
    {
        $scale = $this->container->getParameter('webit_bc_math.scale');
        BcMathNumber::setDefaultScale($scale);
    }
}
