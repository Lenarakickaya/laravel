<?php

namespace App\Observers;

use App\Models\Service;

class ServiceObserver
{
    /**
     * Handle the Service "created" event.
     */
    public function created(Service $service): void
    {
        App::make(App\Actions\Feeder::class)->save($service, 'Service', 'created');
    }


    /**
     * Handle the Service "updated" event.
     */
    public function updated(Service $service): void
    {
        App::make(App\Actions\Feeder::class)->save($service, 'Service', 'updated');
    }


    /**
     * Handle the Service "deleted" event.
     */
    public function deleted(Service $service): void
    {
        //
    }

    /**
     * Handle the Service "restored" event.
     */
    public function restored(Service $service): void
    {
        //
    }

    /**
     * Handle the Service "force deleted" event.
     */
    public function forceDeleted(Service $service): void
    {
        //
    }
}
