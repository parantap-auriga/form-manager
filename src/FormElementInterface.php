<?php
namespace FormManager;

/**
 * Interface used by all elements (forms, inputs, etc) to keep the basic behaviour.
 */
interface FormElementInterface
{
    /**
     * Loads a value sent by the client.
     *
     * @param mixed $value The GET/POST value
     * @param mixed $file  The FILES value (used in input[type="file"])
     *
     * @return $this
     */
    public function load($value = null, $file = null);

    /**
     * Set/Get the value.
     *
     * @param mixed $value null to getter, mixed to setter
     *
     * @return mixed
     */
    public function val($value = null);

    /**
     * Checks if the value is valid.
     *
     * @return boolean
     */
    public function isValid();

    /**
     * Set/Get the error message.
     *
     * @param null|string $error null to getter, string to setter
     *
     * @return mixed
     */
    public function error($error = null);
}