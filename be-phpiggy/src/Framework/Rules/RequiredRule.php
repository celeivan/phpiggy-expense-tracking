<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class RequiredRule implements RuleInterface
{
    public function validate(array $data, string $field, array $params): bool
    {
        return !empty($data[$field]); //TODO this can be improved to handle empty or whitespace strings

    }

    public function getMessage(array $data, string $field, array $params): string
    {
        return "This field is required";
    }
}