<?php

namespace Zelenin\Ddd\Core\Domain\Collection;

use ArrayIterator;

class ArrayCollection implements Collection
{
    /**
     * @var array
     */
    private $items = [];

    /**
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * @param $item
     */
    public function add($item)
    {
        $this->items[] = $item;
    }

    /**
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        $this->items[$key] = $value;
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function remove($key)
    {
        if (!$this->containsKey($key)) {
            return null;
        }

        $item = $this->items[$key];
        unset($this->items[$key]);

        return $item;
    }

    /**
     * @param $item
     *
     * @return bool
     */
    public function removeItem($item)
    {
        $key = array_search($item, $this->items, true);

        if ($key === false) {
            return false;
        }

        unset($this->items[$key]);

        return true;
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function get($key)
    {
        return $this->containsKey($key) ? $this->items[$key] : null;
    }

    public function clear()
    {
        $this->items = [];
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->count() === 0;
    }

    /**
     * @return array
     */
    public function getKeys()
    {
        return array_keys($this->items);
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return array_values($this->items);
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * @param $key
     *
     * @return bool
     */
    public function containsKey($key)
    {
        return array_key_exists($key, $this->items);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->items;
    }

    /**
     * @param callable $callback
     *
     * @return static
     */
    public function filter(callable $callback)
    {
        return new static(array_filter($this->items, $callback));
    }

    /**
     * @param callable $callback
     *
     * @return static
     */
    public function map(callable $callback)
    {
        return new static(array_map($callback, $this->items));
    }

    /**
     * @param callable $keyCallback
     * @param callable $valueCallback
     *
     * @return static
     */
    public function mapWithKeys(callable $keyCallback, callable $valueCallback)
    {
        $keys = array_map($keyCallback, $this->getKeys());
        $values = array_map($valueCallback, $this->getValues());
        return new static(array_combine($keys, $values));
    }

    /**
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return $this->containsKey($offset);
    }

    /**
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        if ($offset === null) {
            $this->add($value);
        } else {
            $this->set($offset, $value);
        }
    }

    /**
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetUnset($offset)
    {
        return $this->remove($offset);
    }
}
