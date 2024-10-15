<?php

namespace App\Providers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use App\Repositories\IOperatingOrderRepository;
use App\Repositories\Eloquent\OperatingOrderRepository;
use App\Repositories\ICustomerRepository;
use App\Repositories\Eloquent\CustomerRepository;
use App\Repositories\IAttachmentRepository;
use App\Repositories\Eloquent\AttachmentRepository;
use App\Repositories\IFinancialDetailRepository;
use App\Repositories\Eloquent\FinancialDetailRepository;
use App\Repositories\IItemOrderRepository;
use App\Repositories\Eloquent\ItemOrderRepository;
use App\Repositories\IItemRepository;
use App\Repositories\Eloquent\ItemRepository;
use App\Repositories\IPaymentRepository;
use App\Repositories\Eloquent\PaymentRepository;
use App\Repositories\IPurchaseOrderRepository;
use App\Repositories\Eloquent\PurchaseOrderRepository;
use App\Repositories\IRepresentativeRepository;
use App\Repositories\Eloquent\RepresentativeRepository;
use App\Repositories\IInvoiceRepository;
use App\Repositories\Eloquent\InvoiceRepository;
use App\Repositories\IUpdateRepository;  //Collector
use App\Repositories\Eloquent\UpdateRepository;
use App\Repositories\ICollectorRepository;  //Collector
use App\Repositories\Eloquent\CollectorRepository;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // foreach($this->getModels() as $model){
        //     $this->app->bind(
        //         "App\Repositories\I{$model}Repository",
        //         "App\Repositories\Eloquent\\{$model}Repository");
        // }
        $this->app->bind(IOperatingOrderRepository::class, OperatingOrderRepository::class);
        $this->app->bind(IAttachmentRepository::class, AttachmentRepository::class);
        $this->app->bind(ICustomerRepository::class, CustomerRepository::class);
        $this->app->bind(IAttachmentRepository::class, AttachmentRepository::class);
        $this->app->bind(IFinancialDetailRepository::class, FinancialDetailRepository::class);
        $this->app->bind(IItemOrderRepository::class, ItemOrderRepository::class);
        $this->app->bind(IItemRepository::class, ItemRepository::class);
        $this->app->bind(IPaymentRepository::class, PaymentRepository::class);
        $this->app->bind(IPurchaseOrderRepository::class, PurchaseOrderRepository::class);
        $this->app->bind(IRepresentativeRepository::class, RepresentativeRepository::class);
        $this->app->bind(IUpdateRepository::class, UpdateRepository::class);
        $this->app->bind(IInvoiceRepository::class, InvoiceRepository::class);
        $this->app->bind(ICollectorRepository::class, CollectorRepository::class);
 
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

    // public function getModels(){
    //     $files = Storage::disk('app')->files('Models');
    //     return collect($files)->map(function($file){
    //         return basename($file, '.php');
    //     });
    // }
}