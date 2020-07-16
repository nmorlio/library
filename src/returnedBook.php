<?php

namespace App;

class returnedBook
{
    public $return;

    public function update($return)
    {

        if ($return == 1) {
         

            return 'Borrowed list has One Book';
        }

        if ($return == 2) {
            
            
            return 'Borrowed list is Empy';
        }
    }
}
