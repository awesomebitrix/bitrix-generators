<?php

namespace Arrilot\BitrixGenerators\Collections;

abstract class BaseCollection
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * @param string$name
     * @return bool
     */
    public function has($name)
    {
        return array_key_exists($name, $this->items);
    }

    /**
     * @param string $name
     * @param string $path
     * @return $this
     */
    public function add($name, $path)
    {
        $this->items[$name] = $path;

        return $this;
    }
    
    public function all()
    {
        return $this->items;
    }
}
