<?php

use Illuminate\Database\Seeder;

class NaturalCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\NaturalCustomer::class)->times(150)->create();
    }
}
