<?php

namespace App;

class bookCopies
{
    public $conditionStore;

    public $conditionUser;


    public function inStore($conditionStore)
    {
        $this->conditionStore = $conditionStore;

        return 'There is at least one copy at the library';
    }

    public function limitOfCopiesbyUser($conditionUser)
    {
        $this->conditionUser = $conditionUser;

        return 'One copy of book by User';
    }
}
