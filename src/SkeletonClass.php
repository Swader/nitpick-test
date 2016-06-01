<?php

namespace League\Skeleton;

class SkeletonClass
{
    $someProp = "foo";
    public $someOtherProp = "bar";
    
    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
        // constructor body
    }
    
    public final function thisIsNotPsr2() { echo "Hello!"; }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        $phrase .= "- and here is a suffix!! But it doesn't end there - we have here a very, very long line that's actually a bunch of text. Technically, it should be broken up or something I guess.";
        return $phrase;
    }
}
