<?php

namespace App;

class bookList
{
    public $book;

    public function showList($book)   
    {
        $this->book=$book;

        if ($book==0){

            return 'User see no books in the library';
        }

        if ($book!=0)
        {
            return 'User see a list of books in the library';

        }

    }
}