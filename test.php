<?php

class Nani
{
    public function save ()
    {
        $db = new Dataset ('tmp.db');
        $db->set (1, 2);
        $db->save ();
        $db->close ();
    }

    public function savent ()
    {
        $db = new Dataset ('tmp.db');
        $db->remove (1);
        $db->save ();
        $db->close ();
    }
}

?>
