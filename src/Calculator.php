<?php

class Calculator {

    function __construct() {
        
    }

    /**
     * 
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
     * 
     * @param int $a
     * @param int $b
     * @return int
     */
    function add($a, $b) {
        return $a + $b;
    }

}

?>
