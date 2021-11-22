<?php

declare(strict_types=1);

namespace Is;

class Is {
    /**
     * Determine whether the value is boolean.
     *
     * @param mixed $value Value to check.
     *
     * @return bool Returns TRUE on success or FALSE otherwise.
     *
     * @access public
     */
    public static function boolean($value): bool
    {
        return is_bool($value) ?: in_array(mb_strtolower((string) $value), ['true', 'false', '1', '0', 'yes', 'no', 'on', 'off'], true);
    }

    /**
     * Determine whether the value is false.
     *
     * @param mixed $value Value to check.
     *
     * @return bool Returns TRUE on success or FALSE otherwise.
     *
     * @access public
     */
    public static function false($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) === false;
    }

    /**
     * Determine whether the value is true.
     *
     * @param mixed $value Value to check.
     *
     * @return bool Returns TRUE on success or FALSE otherwise.
     *
     * @access public
     */
    public static function true($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) === true;
    }
}