<?php

namespace Bz2Tuleap\Tuleap;

use SimpleXMLElement;

class Column  {

    /**
     * @var IdMapper
     */
    private $mapper;
    private $type;

    private $children = array();

    public function __construct(IdMapper $mapper, array $childen) {
        $this->children = $childen;
        $this->type     = 'column';
        $this->mapper   = $mapper;
    }

    public function toXml(SimpleXMLElement $parent, $rank) {
        $field = new StructureField(
            new Field($this->mapper, $this->type, 'struct'.$rank, 'struct'.$rank),
            $this->children
        );
        $field->toXml($parent, $rank);
    }
}