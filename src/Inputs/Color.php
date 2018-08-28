<?php
declare(strict_types = 1);

namespace FormManager\Inputs;

/**
 * Class representing a HTML input[type="color"] element
 */
class Color extends Input
{
    const INTR_VALIDATORS = [
        'color',
    ];

    public function __construct(string $label = null, array $attributes = [])
    {
        parent::__construct('input', $attributes);
        $this->setAttribute('type', 'color');

        if (isset($label)) {
            $this->setLabel($label);
        }
    }
}
