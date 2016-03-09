<?php

namespace Bz2Tuleap\Tuleap;

class IdMapper {
    private $id_counter = 0;
    private $map        = array();
    private $prefix;

    public function __construct($prefix) {
        $this->prefix = $prefix;
    }

    public function getId($value) {
        return $this->map[$value];
    }

    public function map($value) {
        $this->map[$value] = $this->id_counter++;
        return $this->prefix.$this->getId($value);
    }
}
