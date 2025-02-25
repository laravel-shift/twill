<?php

namespace A17\Twill\Services\Forms\Fields\Traits;

trait Inlineable
{
    protected bool $inline = false;

    /**
     * Shows the option inline.
     */
    public function inline(bool $inline = true): self
    {
        $this->inline = $inline;

        return $this;
    }
}
