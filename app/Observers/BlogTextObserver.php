<?php

namespace App\Observers;

use App\Models\BlogText;
use App;

class BlogTextObserver
{
    /**
     * Handle the BlogText "created" event.
     */
    public function created(BlogText $blogText): void
    {
        App::make(App\Actions\Feeder::class)->save($blogText, 'BlogText', 'created');
    }

    /**
     * Handle the BlogText "updated" event.
     */
    public function updated(BlogText $blogText): void
    {
        App::make(App\Actions\Feeder::class)->save($blogText, 'BlogText', 'updated');
    }

    /**
     * Handle the BlogText "deleted" event.
     */
    public function deleted(BlogText $blogText): void
    {
        //
    }

    /**
     * Handle the BlogText "restored" event.
     */
    public function restored(BlogText $blogText): void
    {
        //
    }

    /**
     * Handle the BlogText "force deleted" event.
     */
    public function forceDeleted(BlogText $blogText): void
    {
        //
    }
}
