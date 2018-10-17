<?php

namespace App\Observers;

use App\Customer;
use App\NaturalCustomer;

class NaturalCustomerObserver
{
    /**
     * Handle the natural customer "created" event.
     *
     * @param  \App\NaturalCustomer $naturalCustomer
     * @return void
     */
    public function created(NaturalCustomer $naturalCustomer)
    {
        $name = $naturalCustomer->firstName . " " . $naturalCustomer->lastName;
        Customer::create(['identification' => $naturalCustomer->cedula, 'name' => $name, 'type' => 'Natural']);
    }

    /**
     * Handle the natural customer "updated" event.
     *
     * @param  \App\NaturalCustomer $naturalCustomer
     * @return void
     */
    public function updated(NaturalCustomer $naturalCustomer)
    {
        //
    }

    /**
     * Handle the natural customer "deleted" event.
     *
     * @param  \App\NaturalCustomer $naturalCustomer
     * @return void
     */
    public function deleted(NaturalCustomer $naturalCustomer)
    {
        //
    }

    /**
     * Handle the natural customer "restored" event.
     *
     * @param  \App\NaturalCustomer $naturalCustomer
     * @return void
     */
    public function restored(NaturalCustomer $naturalCustomer)
    {
        //
    }

    /**
     * Handle the natural customer "force deleted" event.
     *
     * @param  \App\NaturalCustomer $naturalCustomer
     * @return void
     */
    public function forceDeleted(NaturalCustomer $naturalCustomer)
    {
        //
    }
}
