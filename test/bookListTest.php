<?php

use PHPUnit\Framework\TestCase;
use App\bookList;

class bookListTest extends TestCase
{

    public function test_User_see_empty_library_when_no_books()
    {
        $bookList= new bookList();

        $expected = 'User see no books in the library';

        $response = $bookList->showList(0);

        $this->assertEquals($expected, $response);

    }

    public function test_User_see_list_of_books_in_the_library()
    {
        $bookList= new bookList();

        $expected = 'User see a list of books in the library';

        $response = $bookList->showList(10);

        $this->assertEquals($expected, $response);

    }

}
