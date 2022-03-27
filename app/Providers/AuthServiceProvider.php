<?php

namespace App\Providers;

use App\Models\Baby;
use App\Models\BabyRecord;
use App\Models\Partner;
use App\Policies\babiesPolicy;
use App\Policies\BabyRecordPolicy;
use App\Policies\PartnerPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Baby::class => babiesPolicy::class,
        BabyRecord::class => BabyRecordPolicy::class,
        Partner::class => PartnerPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
