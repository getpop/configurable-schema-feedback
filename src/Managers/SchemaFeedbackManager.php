<?php

declare(strict_types=1);

namespace PoP\ConfigurableSchemaFeedback\Managers;

use PoP\ConfigurableSchemaFeedback\Managers\SchemaFeedbackManagerInterface;

class SchemaFeedbackManager implements SchemaFeedbackManagerInterface
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
