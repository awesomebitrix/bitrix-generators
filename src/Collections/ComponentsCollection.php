<?php

namespace Arrilot\BitrixGenerators\Collections;

class ComponentsCollection extends BaseCollection
{
    public function addGreensightStandardComponents()
    {
        $components = [
            'default',
        ];
        $dir = realpath(__DIR__ . '/../../collections/components');

        foreach ($components as $name) {
            $this->add($name, $dir.'/'.$name);
        }

        return $this;
    }
}
