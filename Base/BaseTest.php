<?php

namespace Litmus\Base;

/**
 * BaseTest class
 *
 * @author    Benjamin Laugueux <benjamin@yzalis.com>
 * @package   LitmusAPI
 * @version   1.1
 * @access    public
 * @copyright Copyright (c) 2011, Yzalis
 */
class BaseTest
{
    /**
     * Construct a LitmusTest object with an array of values if it's provided.
     *
     * @param $values array
     */
    function __construct($values = array())
    {
        if (!empty($values)) {
            foreach ($values as $key => $value) {
                $this->{'set' . $key}($value);
            }
        }
    }
}