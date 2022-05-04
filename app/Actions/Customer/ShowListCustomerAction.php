<?php

namespace App\Actions\Customer;

use App\Repositories\Customers\CustomerRepository;
use App\Supports\Traits\HasTransformer;
use App\Transformers\Customer\CustomerTransformer;
use Illuminate\Http\JsonResponse;

/**
 * Class
 * @package App\Actions\User
 */
class ShowListCustomerAction
{
    use HasTransformer;


    /**
     * @var CustomerRepository
     */
    protected CustomerRepository $customerRepository;
    protected $per_page;


    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->per_page = request()->has('per_page') ? request()->get('per_page') : null;

    }


    /**
     * @return JsonResponse
     */
    public function __invoke()
    {
        $response = $this->customerRepository->paginate(5);

        return $this->httpOK($response, CustomerTransformer::class);
    }
}
