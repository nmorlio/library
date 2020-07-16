<?php

use PHPUnit\Framework\TestCase;
use App\bookCopies;

class bookCopiesTest extends TestCase
{

     public function test_at_leat_one_copy_at_the_library()
    {
        $copy= new bookCopies();
        
        $expected = 'There is at least one copy at the library';

        $response = $copy->inStore(1);

       $this->assertEquals($expected, $response);

    }

    public function test_one_copy_of_book_by_user()
    {
        $copy= new bookCopies();
                
        $expected = 'One copy of book by User';

        $response = $copy->limitOfCopiesbyUser(1);

        $this->assertEquals($expected, $response);
        
    }
}
