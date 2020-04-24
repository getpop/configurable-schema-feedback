<?php

declare(strict_types=1);

namespace PoP\FieldDeprecationByDirective\Managers;

use PoP\FieldDeprecationByDirective\Managers\FieldDeprecationManagerInterface;

class FieldDeprecationManager implements FieldDeprecationManagerInterface
{
    protected $fieldEntries = [];

    public function getEntriesForFields(): array
    {
        return $this->fieldEntries ?? [];
    }

    public function addEntriesForFields(array $fieldEntries): void
    {
        $this->fieldEntries = array_merge(
            $this->fieldEntries ?? [],
            $fieldEntries
        );
    }
}
