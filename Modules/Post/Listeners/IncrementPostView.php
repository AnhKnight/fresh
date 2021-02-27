<?php

namespace Modules\Post\Listeners;


class IncrementPostView
{
    /**
     * Handle the event.
     *
     * @param \Modules\Post\Events\PostViewed $event
     * @return void
     */
    public function handle(\Modules\Post\Events\PostViewed $event)
    {
        $event->post->increment('viewed');
    }
}
