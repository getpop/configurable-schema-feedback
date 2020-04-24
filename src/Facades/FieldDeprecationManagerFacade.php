<?php

declare(strict_types=1);

namespace PoP\FieldDeprecationByDirective\Facades;

use PoP\FieldDeprecationByDirective\Managers\FieldDeprecationManagerInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class FieldDeprecationManagerFacade
{
    public static function getInstance(): FieldDeprecationManagerInterface
    {
        return ContainerBuilderFactory::getInstance()->get('field_deprecation_manager');
    }
}
