<?php

namespace App\Providers;

use App\Constants\Type;
use App\Models\Modal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        $this->getServicesFromJusourService();
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

    private function getServicesFromJusourService(){
        View::composer(['pages.index'], function ($view){
            $service = [];
            try {
                $request = Http::get('https://services.jusour.qa/api/en/highlight-services');
                $response = $request->json();
                if(isset($response['response'])){
                    $service = $response['response'];
                }
            } catch (\Throwable $th) {
                //throw $th;
            }

            $view->with('services',$service);
        });
    }
}
