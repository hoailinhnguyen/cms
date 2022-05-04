<?php

namespace App\Repositories\Customers;

use App\Models\Customer;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class CustomerRepositoryEloquent.
 *
 * @package namespace App\Repositories\Customers;
 */
class CustomerRepositoryEloquent extends BaseRepository implements CustomerRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Customer::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
