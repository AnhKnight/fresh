<?php

namespace Modules\Post\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Post\Entities\Post;

class PostViewed
{
    use SerializesModels;


    public $post;

    /**
     * Create a new event instance.
     *
     * @param $post
     */
    public function __construct($post)
    {
        $this->post = $post;
    }
}
