<?php

namespace Profnadir\Employeespackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Profnadir\Employeespackage\Skeleton\SkeletonClass
 */
class EmployeespackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'employeespackage';
    }
}
