<?php

use PHPUnit\Framework\TestCase;
use App\returnedBook;

class returnedBookTest extends TestCase
{
    public function test_user_return_one_book()
    {       
        $list= new returnedBook();

        $expected = 'Borrowed list has One Book';

        $response = $list->update(1);

        $this->assertEquals($expected, $response);

    }

    public function test_user_return_two_books()
    {
        $list= new returnedBook();

        $expected= 'Borrowed list is Empy';

        $response = $list->update(2);

       $this->assertEquals($expected, $response);
    }

}   