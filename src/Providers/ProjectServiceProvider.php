<?php

namespace AceLords\Generators\Providers;

use Illuminate\Support\ServiceProvider;


// generators
use AceLords\Generators\Console\Generators\ChannelMakeCommand;
use AceLords\Generators\Console\Generators\ConsoleMakeCommand;
use AceLords\Generators\Console\Generators\EventMakeCommand;
use AceLords\Generators\Console\Generators\JobMakeCommand;
use AceLords\Generators\Console\Generators\ListenerMakeCommand;
use AceLords\Generators\Console\Generators\MailMakeCommand;
use AceLords\Generators\Console\Generators\ModelMakeCommand;
use AceLords\Generators\Console\Generators\NotificationMakeCommand;
use AceLords\Generators\Console\Generators\PolicyMakeCommand;
use AceLords\Generators\Console\Generators\ProviderMakeCommand;
use AceLords\Generators\Console\Generators\RepositoryMakeCommand;
use AceLords\Generators\Console\Generators\RequestMakeCommand;
use AceLords\Generators\Console\Generators\ResourceMakeCommand;
use AceLords\Generators\Console\Generators\RuleMakeCommand;
use AceLords\Generators\Console\Generators\ProjectMakeCommand;
use AceLords\Generators\Console\Generators\MiddlewareMakeCommand;
use AceLords\Generators\Console\Generators\ControllerMakeCommand;
use AceLords\Generators\Console\Generators\FilterMakeCommand;
use AceLords\Generators\Console\Generators\WidgetMakeCommand;

class ProjectServiceProvider extends ServiceProvider
{
    
    /**
     * the available acelords generators
     *
     * @var array
     */
    protected $generators = [
        ConsoleMakeCommand::class,
        ChannelMakeCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        ModelMakeCommand::class,
        NotificationMakeCommand::class,
        PolicyMakeCommand::class,
        ProviderMakeCommand::class,
        RepositoryMakeCommand::class,
        RequestMakeCommand::class,
        ResourceMakeCommand::class,
        RuleMakeCommand::class,
        ProjectMakeCommand::class,
        MiddlewareMakeCommand::class,
        ControllerMakeCommand::class,
        FilterMakeCommand::class,
        WidgetMakeCommand::class,
    ];
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->generators);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
