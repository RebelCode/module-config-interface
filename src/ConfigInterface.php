<?php

namespace RebelCode\Modular\Config;

/**
 * Defines basic characteristics of a module config.
 *
 * @since [*next-version*]
 */
interface ConfigInterface
{
    /* The K_* constants below define keys that can be used in a module
     * configuration.
     */

    /**
     * The module code.
     *
     * @since [*next-version*]
     */
    const K_CODE = 'name';

    /**
     * What should happen when the module loads.
     *
     * @since [*next-version*]
     */
    const K_ON_LOAD = 'on-load';

    /**
     * What should happen when all modules load.
     *
     * @since [*next-version*]
     */
    const K_ON_LOAD_ALL = 'on-load-all';
}
