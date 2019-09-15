<?php

class House {

    /**
     * long of House object
     * @var float
     */
    public $long;

    /**
     * width of House object
     * @var float
     */
    public $width;

    /**
     * floors of House object
     * @var integer
     */
    public $floors;

    /**
     * color of House object
     * @var string
     */
    public $color;

    /**
     * address of House object
     * @var string
     */
    public $address;

    public function __construct($long, $width, $floors, $color, $address) {
        $this->long = $long;
        $this->width = $width;
        $this->floors = $floors;
        $this->color = $color;
        $this->address = $address;
    }

//    public function showDescription() {
//        echo '<p>long: ' . $this->long . '<br/>width: ' . $this->width . '<br/>floors: ' . $this->floors . '<br/>color: ' . $this->color . '<br/>address: ' . $this->address . '</p>';
//    }

    public function __toString() {
        return '<p>long: ' . $this->long . '<br/>width: ' . $this->width . '<br/>floors: ' . $this->floors . '<br/>color: ' . $this->color . '<br/>address: ' . $this->address . '<br/>area: ' . $this->long * $this->width . '</p>';
    }

}
