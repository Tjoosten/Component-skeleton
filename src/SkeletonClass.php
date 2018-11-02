<?php 

namespace B61\Skeleton; 

/**
 * Class SkeletonClass 
 * 
 * @package B61\Skeleton 
 */
class SkeletonClass 
{
    /**
     * SkeletonClass constructor
     * 
     * @return void
     */
    public function __construct()
    {
        // constructor body can be removed if you dont have any global on the class.
    }

    /**
     * Friendly welcome function. 
     * 
     * @param  string $phrase Phrase to return. 
     * @return string Returns the phrase passed in
     */
    public function echoPhrase(string $phrase): string 
    {
        return $phrase;
    }
}