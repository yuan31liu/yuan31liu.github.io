<?php

/**
 * @package    Grav\Common\Data
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Data;

use Exception;
use RocketTheme\Toolbox\File\FileInterface;

/**
 * Interface DataInterface
 * @package Grav\Common\Data
 */
interface DataInterface
{
    /**
     * Get value by using dot notation for nested arrays/objects.
     *
     * @example $value = $data->value('this.is.my.nested.variable');
     *
     * @param string  $name       Dot separated path to the requested value.
     * @param mixed   $default    Default value (or null).
     * @param string  $separator  Separator, defaults to '.'
     * @return mixed  Value.
     */
    public function value($name, $default = null, $separator = '.');

    /**
     * Merge external data.
     *
     * @param array $data
     * @return mixed
     */
    public function merge(array $data);

    /**
     * Return blueprints.
     */
    public function blueprints();

    /**
     * Validate by blueprints.
     *
     * @throws Exception
     */
    public function validate();

    /**
     * Filter all items by using blueprints.
     */
    public function filter();

    /**
     * Get extra items which haven't been defined in blueprints.
     */
    public function extra();

    /**
     * Save data into the file.
     */
    public function save();

    /**
     * Set or get the data storage.
     *
     * @param FileInterface|null $storage Optionally enter a new storage.
     * @return FileInterface
     */
    public function file(FileInterface $storage = null);
}