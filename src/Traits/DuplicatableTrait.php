<?php

namespace FikriMastor\Recoverable\Traits;

trait DuplicatableTrait
{
    public function duplicate()
    {
        return clone $this;
    }
}