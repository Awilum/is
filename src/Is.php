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

    /**
     * Determine whether the string is IP address.
     *
     * @param mixed $value Value to check.
     * 
     * @param int   $flags Flags:
     *                     FILTER_FLAG_IPV4
     *                     FILTER_FLAG_IPV6
     *                     FILTER_FLAG_NO_PRIV_RANGE
     *                     FILTER_FLAG_NO_RES_RANGE
     *
     * @return bool Returns TRUE on success or FALSE otherwise.
     */
    public static function ip($value, int $flags = FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6): bool
    {
        return (bool) filter_var($value, FILTER_VALIDATE_IP, $flags);
    }

    /**
     * Determine whether the value is email.
     *
     * @param mixed $value Value to check.
     * 
     * @return bool Returns TRUE on success or FALSE otherwise.
     */
    public static function email($value): bool
    {
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Determine whether the value is url.
     *
     * @param mixed $value Value to check.
     * 
     * @return bool Returns TRUE on success or FALSE otherwise.
     */
    public static function url($value): bool
    {
        return (bool) filter_var($value, FILTER_VALIDATE_URL);
    }
}