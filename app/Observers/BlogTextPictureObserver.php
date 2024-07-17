<?php

namespace App\Observers;

use App\Models\BlogTextPicture;

class BlogTextPictureObserver
{
    /**
     * Handle the BlogTextPicture "created" event.
     */
    public function created(BlogTextPicture $blogTextPicture): void
    {
        App::make(App\Actions\Feeder::class)->save($blogTextPicture, 'BlogTextPicture', 'created');
    }

    /**
     * Handle the BlogTextPicture "updated" event.
     */
    public function updated(BlogTextPicture $blogTextPicture): void
    {
        App::make(App\Actions\Feeder::class)->save($blogTextPicture, 'BlogTextPicture', 'updated');
    }

    /**
     * Handle the BlogTextPicture "deleted" event.
     */
    public function deleted(BlogTextPicture $blogTextPicture): void
    {
        //
    }

    /**
     * Handle the BlogTextPicture "restored" event.
     */
    public function restored(BlogTextPicture $blogTextPicture): void
    {
        //
    }

    /**
     * Handle the BlogTextPicture "force deleted" event.
     */
    public function forceDeleted(BlogTextPicture $blogTextPicture): void
    {
        //
    }
}
