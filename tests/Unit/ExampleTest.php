<?php

namespace Profnadir\Employeespackage\Tests\Unit;

use Orchestra\Testbench\TestCase;
use Profnadir\Employeespackage\EmployeespackageFacade;
use Profnadir\Employeespackage\EmployeespackageServiceProvider;

class ExampleTest extends TestCase
{

    /**
     * Load package service provider.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [EmployeespackageServiceProvider::class];
    }

    /**
     * Load package alias.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Employeespackage' => EmployeespackageFacade::class,
        ];
    }



    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function test_that_Facade_show_hi_dev_message()
    {
        $this->assertEquals('hi dev', EmployeespackageFacade::sayHi());
    }
    
}
