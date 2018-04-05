<?php
include "Fighter.class.php";

Class UnholyFactory {
    private $absorbed = array();

    private function is_in_array($name)
    {
        foreach ($this->absorbed as $soldier) {
            if ($soldier->get_name() === $name)
                return true;
        }
        return false;
    }

    private function get_from_array($name)
    {
        foreach ($this->absorbed as $soldier) {
            if ($soldier->get_name() === $name)
                return $soldier;
        }
        return NULL;
    }

    public function absorb($obj)
    {
        if (is_subclass_of($obj, 'Fighter'))
        {
            if ($this->is_in_array($obj->get_name()) === false) {
                array_push($this->absorbed, $obj);
                print ("(Factory absorbed a fighter of type " . $obj->get_name() . ")\n");
            }
            else if ($this->is_in_array($obj->get_name()) === true) {
                print ("(Factory already absorbed a fighter of type " . $obj->get_name() . ")\n");
            }
        }
        else
            print ("(Factory can't absorb this, it's not a fighter)\n");
    }

    public function fabricate ($name)
    {
        if ($this->is_in_array($name) && $this->get_from_array($name)) {
            print ("(Factory fabricates a fighter of type " . $name . ")\n");
            return clone $this->get_from_array($name);
        }
        else {
            print ("(Factory hasn't absorbed any fighter of type " . $name . ")\n");
            return NULL;
        }
    }
}
?>