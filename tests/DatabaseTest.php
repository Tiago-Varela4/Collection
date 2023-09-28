<?php



 require('../processform.php');
 use PHPUnit\Framework\TestCase;



class DatabaseTest extends TestCase
{


    public function testinvalidYear()
    {
        $testdata = array ('genre'=>1, 'name'=>'Loki', 'releaseYear'=>'hello');
        $result = validateForm($testdata);
        $this->assertFalse($result);
    }
}