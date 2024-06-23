<?php

namespace FikriMastor\Recoverable\Traits;

trait CascadableTrait
{
    public function cascade($method, $arguments = [])
    {
        $this->$method(...$arguments);

        return $this;
    }
}