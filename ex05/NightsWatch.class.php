<?php

Class NightsWatch {
    public function recruit($obj)
    {
        if ($obj instanceof IFighter)
            print($obj->fight());
    }
    public function fight()
    {
        return true;
    }
}

?>