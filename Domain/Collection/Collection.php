<?php

namespace Zelenin\Ddd\Core\Domain\Collection;

use ArrayAccess;
use Countable;
use IteratorAggregate;

interface Collection extends Countable, IteratorAggregate, ArrayAccess
{
    /**
     * @param $item
     */
    public function add($item);

    /**
     * @param $key
     * @param $value
     */
    public function set($key, $value);

    /**
     * @param $key
     *
     * @return mixed
     */
    public function remove($key);

    /**
     * @param $item
     *
     * @return bool
     */
    public function removeItem($item);

    /**
     * @param $key
     *
     * @return mixed
     */
    public function get($key);

    public function clear();

    /**
     * @return bool
     */
    public function isEmpty();

    /**
     * @return array
     */
    public function getKeys();

    /**
     * @return array
     */
    public function getValues();

    /**
     * @return int
     */
    public function count();

    /**
     * @param $key
     *
     * @return bool
     */
    public function containsKey($key);

    /**
     * @return array
     */
    public function toArray();

    /**
     * @param callable $callback
     *
     * @return static
     */
    public function filter(callable $callback);

    /**
     * @param callable $callback
     *
     * @return static
     */
    public function map(callable $callback);
}
