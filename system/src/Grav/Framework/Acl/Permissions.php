<?php

/**
 * @package    Grav\Framework\Acl
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Framework\Acl;

class Permissions implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /** @var Action[] */
    protected $instances = [];
    /** @var Action[] */
    protected $actions = [];
    /** @var array */
    protected $nested = [];
    /** @var array */
    protected $types = [];

    /**
     * @return array
     */
    public function getInstances(): array
    {
        $iterator = new RecursiveActionIterator($this->actions);
        $recursive = new \RecursiveIteratorIterator($iterator, \RecursiveIteratorIterator::SELF_FIRST);

        return iterator_to_array($recursive);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasAction(string $name): bool
    {
        return isset($this->instances[$name]);
    }

    /**
     * @param string $name
     * @return Action|null
     */
    public function getAction(string $name): ?Action
    {
        return $this->instances[$name] ?? null;
    }

    /**
     * @param Action $action
     */
    public function addAction(Action $action): void
    {
        $name = $action->name;
        $parent = $this->getParent($name);
        if ($parent) {
            $parent->addChild($action);
        } else {
            $this->actions[$name] = $action;
        }

        $this->instances[$name] = $action;

        // If Action has children, add those, too.
        foreach ($action->getChildren() as $child) {
            $this->instances[$child->name] = $child;
        }
    }

    /**
     * @return array
     */
    public function getActions(): array
    {
        return $this->actions;
    }

    /**
     * @param Action[] $actions
     */
    public function addActions(array $actions): void
    {
        foreach ($actions as $action) {
            $this->addAction($action);
        }
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasType(string $name): bool
    {
        return isset($this->types[$name]);
    }

    /**
     * @param string $name
     * @return Action|null
     */
    public function getType(string $name): ?Action
    {
        return $this->types[$name] ?? null;
    }

    /**
     * @param array $type
     */
    public function addType(string $name, array $type): void
    {
        $this->types[$name] = $type;
    }

    /**
     * @return array
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param array $types
     */
    public function addTypes(array $types): void
    {
        $types = array_replace($this->types, $types);
        if (null === $types) {
            throw new \RuntimeException('Internal error');
        }

        $this->types = $types;
    }

    /**
     * @param array|null $access
     * @return Access
     */
    public function getAccess(array $access = null): Access
    {
        return new Access($access ?? []);
    }

    /**
     * @param int|string $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->nested[$offset]);
    }

    /**
     * @param int|string $offset
     * @return Action|null
     */
    public function offsetGet($offset): ?Action
    {
        return $this->nested[$offset] ?? null;
    }

    /**
     * @param int|string $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value): void
    {
        throw new \RuntimeException(__METHOD__ . '(): Not Supported');
    }

    /**
     * @param int|string $offset
     */
    public function offsetUnset($offset): void
    {
        throw new \RuntimeException(__METHOD__ . '(): Not Supported');
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->actions);
    }

    /**
     * @return \ArrayIterator|\Traversable
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->actions);
    }

    /**
     * @return array
     */
    public function __debugInfo()
    {
        return [
            'actions' => $this->actions
        ];
    }

    /**
     * @param string $name
     * @return Action|null
     */
    protected function getParent(string $name): ?Action
    {
        if ($pos = strrpos($name, '.')) {
            $parentName = substr($name, 0, $pos);

            $parent = $this->getAction($parentName);
            if (!$parent) {
                $parent = new Action($parentName);
                $this->addAction($parent);
            }

            return $parent;
        }

        return null;
    }
}
