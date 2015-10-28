<?php

/**
 * Class RequiredRule
 *
 */
class RequiredRule implements RuleInterface
{
    /**
     * this holds the field name
     *
     * @var null
     */
    protected $field   = NULL;

    /**
     * this holds the error message
     *
     * @var null
     */
    protected $message = NULL;

    /**
     * @param $field
     * @param $value
     * @param null $message
     *
     * @return mixed
     */
    public function run($field, $value, $message = NULL)
    {
        $this->field   = $field;
        $this->message = $message;

        $value = preg_replace('/^[\pZ\pC]+|[\pZ\pC]+$/u', '', $value);

        return !empty($value);
    }

    /**
     * Rule error message
     *
     * @return mixed
     */
    public function message()
    {
        if ($this->message)
        {
            return $this->message;
        }
        else
        {
            return $this->field.' is required ';
        }
    }
}