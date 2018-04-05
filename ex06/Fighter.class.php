<?php
abstract Class Fighter {
    private $name;

    public function __construct($name_entry)
    {
        $this->name = $name_entry;
    }
    public function get_name()
    {
        return $this->name;
    }
    abstract public function fight($target);
}
?>