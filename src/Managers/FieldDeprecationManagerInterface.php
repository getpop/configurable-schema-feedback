<?php

declare(strict_types=1);

namespace PoP\FieldDeprecationByDirective\Managers;

interface FieldDeprecationManagerInterface
{
    public function getEntriesForFields(): array;
    public function addEntriesForFields(array $fieldEntries): void;
}
