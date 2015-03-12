<?php

namespace urmaul\yii2\FactoryMuffin;

/**
 * @property-read string $validationErrors
 */
trait Model
{
    /**
     * Getter used by FactoryMuffin in unit tests.
     * @return sting
     */
    public function getValidationErrors()
    {
        $result = '';
        foreach ($this->errors as $lines) {
            $result .= implode("\n", $lines) . "\n";
        }
        return $result;
    }
}