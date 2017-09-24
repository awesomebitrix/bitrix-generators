<?php

namespace Arrilot\BitrixGenerators\Commands;

use Arrilot\BitrixGenerators\Collections\ComponentsCollection;
use Symfony\Component\Console\Command\Command;

class MakeComponentCommand extends Command
{
    /**
     * @var ComponentsCollection
     */
    protected $collection;
    
    /**
     * MakeComponentCommand constructor.
     * @param ComponentsCollection $collection
     */
    public function __construct(ComponentsCollection $collection)
    {
        $this->collection = $collection;
        parent::__construct();
    }
}
