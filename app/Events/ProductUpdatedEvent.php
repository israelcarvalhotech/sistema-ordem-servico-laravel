<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class ProductUpdatedEvent
{
    use SerializesModels;

    public $product;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
    }
}
