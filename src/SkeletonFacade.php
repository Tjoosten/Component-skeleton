<?php 

namespace B61\Skeleton; 

use Illuminate\Support\Facades\Facade; 

/**
 * Class SkeletonFacade 
 * 
 * @see     \B61\Skeleton\SkeletonClass
 * @package B61\Skeleton
 */
class SkeletonFacade extends Facade 
{
    /**
     * Het the registered name of the component. 
     * 
     * @return string 
     */
    protected static function getFacadeAccessor(): string 
    {
        return 'skeleton';
    }
}