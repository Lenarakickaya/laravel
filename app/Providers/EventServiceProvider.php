<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Models\Article;
use App\Models\Blog;

use App\Models\BlogText;
use App\Models\BlogTextPicture;
use App\Models\Service;

use App\Observers\ArticleObserver;
use App\Observers\Blogobserver;

use App\Observers\BlogTextObserver;
use App\Observers\BlogTextPictureObserver;
use App\Observers\ServiceObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Blog::observe(BlogObserver::class);
        BlogText::observe(BlogTextObserver::class);
        BlogTextPicture::observe(BlogTextPictureObserver::class);
        Service::observe(ServiceObserver::class);
        Article::observe( ArticleObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
