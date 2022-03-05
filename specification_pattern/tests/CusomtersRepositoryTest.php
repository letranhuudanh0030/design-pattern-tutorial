<?php
require "vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as DB;

class CusomtersRepositoryTest extends PHPUnit_Framework_TestCase{

    protected $customers;

    public function setUp()
    {

        $this->setUpDatabase();

        $this->migrateTable();

        $this->customers = new CustomerRepository;
    }

    protected function setUpDatabase()
    {
        $database = new DB;

        $database->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:',
        ]);

        $database->bootEloquent();

        $database->setAsGlobal();
    }

    protected function migrateTable()
    {

        DB::schema()->create('customers', function($table){
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });

        Customer::create(['name' => 'joe', 'type' => 'gold']);
        Customer::create(['name' => 'jane', 'type' => 'silver']);
    }

    /** @test */
    public function it_fetches_all_customers()
    {
        $result = $this->customers->all();
        $this->assertCount(2, $result);
    }


    /** @test */
    function it_fetched_all_customers_who_match_a_given_specification()
    {
        $result =$this->customers->whoMatch(new CustomerIsGold);
        $this->assertCount(1, $result);
    }
}