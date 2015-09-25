<?php

namespace urmaul\yii2\FactoryMuffin;

/**
 * @property-read string $validationErrors
 */
trait Model
{
    /**
     * Getter used by FactoryMuffin in unit tests.
     * @return string|null
     */
    public function getValidationErrors()
    {
        if (!$this->hasErrors())
            return null;
        
        $result = '';
        foreach ($this->errors as $lines) {
            $result .= implode("\n", $lines) . "\n";
        }
        return $result;
    }
}
