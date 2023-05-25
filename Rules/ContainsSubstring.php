<?php

namespace Illuminate\Validation\Rules;

class ContainsSubstring extends Rule
{
    /**
     * @var 
     */
    protected $substring;

    /**
     * @param $substring
     */
    public function __construct($substring)
    {
        $this->substring = $substring;
    }

    /**
     * @param $attribute
     * @param $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return str_contains($value, $this->substring);
    }

    /**
     * @return string
     */
    public function message(): string
    {
        return "The :attribute must contain the substring '{$this->substring}'.";
    }
}
