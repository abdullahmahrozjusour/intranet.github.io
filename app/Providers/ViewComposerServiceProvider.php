<?php

namespace App\Providers;

use App\Constants\Type;
use App\Models\Modal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    public $request = null;
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Request $request): void
    {
        $this->request = $request;
        $this->getPoliciesAndProceduresForLayout();
    }

    private function getPoliciesAndProceduresForLayout(){

        View::composer(['layouts.master_layout'], function ($view){

            $modalType = [Type::TYPE_POLICIES, Type::TYPE_PROCEDURES];
            $columnType = 'type';
            foreach ($modalType as $key => $value) {
                $data[$value] = Modal::where($columnType,$value)->first();
            }

            $view->with('policyAndProcedure', $data);
        });

    }
}
