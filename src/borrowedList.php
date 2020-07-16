<?php

namespace App;

class borrowedList
{

    public $borrowCondition;


    public function add()
    {
        return 'Book is add to borrowed list';
    }

    public function remove()
    {
        return 'Book is remove from library';
    }

    public function condition($borrowCondition)
    {   
        $this->borrowCondition = $borrowCondition;

        if ($borrowCondition<=2)

        return $this->add();
    }
}
