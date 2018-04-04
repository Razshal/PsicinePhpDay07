<?php

Class Lannister {

    public function is_consanguine()
    {
        return true;
    }
    public function sleepWith($obj)
    {
        if (is_subclass_of($obj, 'Lannister')
            && ($obj->is_consanguine() === true && $this->is_consanguine() === true))
        {
            print "With pleasure, but only in a tower in Winterfell, then.\n";
        }
        else if (is_subclass_of($obj, 'Lannister'))
        {
            print "Not even if I'm drunk !\n";
        }
        else
            print "Let's do this.\n";
    }
}

?>