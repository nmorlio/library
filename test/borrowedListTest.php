<?php

use PHPUnit\Framework\TestCase;
use App\borrowedList;

class borrowedListTest extends TestCase
{
    public function test_book_is_add_to_borrowed_list()
    {
        $borrowedBook= new borrowedList();

        $expected = 'Book is add to borrowed list';

        $response = $borrowedBook->add();

        $this->assertEquals($expected, $response);

    }
    public function test_book_is_remove_from_library()
    {
        $borrowedBook= new borrowedList();

        $expected = 'Book is remove from library';

        $response = $borrowedBook->remove();

        $this->assertEquals($expected, $response);

    }

    public function test_borrowed_limit_of_two_books()
    {
        $borrowedBook= new borrowedList();

        $expected = 'Book is add to borrowed list';

        $response = $borrowedBook->condition(2);

        $this->assertEquals($expected, $response);


    }







}