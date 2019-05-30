<?php

class CapitalizeName
{
    public function changeName($bean)
    {
        $bean->first_name = ucfirst($bean->first_name);
        $bean->last_name = ucfirst($bean->last_name);
    }
}
