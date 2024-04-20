<?php

namespace App\Providers;

use App\Models\Role;
use BezhanSalleh\PanelSwitch\PanelSwitch;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        PanelSwitch::configureUsing(function (PanelSwitch $panelSwitch) {
            $panelSwitch->simple();
            $panelSwitch
                ->visible(fn (): bool => auth()->user()?->hasRole(Role::SUPER_ADMIN));
            $panelSwitch->canSwitchPanels(fn (): bool => auth()->user()?->hasRole(Role::SUPER_ADMIN));
        });
    }
}
