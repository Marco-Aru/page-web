<?php
namespace PHPUnit\Framework\Tests;
use \PHPUnit\Framework\DOMTestCase;
class IndexTest extends DOMTestCase
{
    private $html;
    protected function setUp()
    {
        $this->html = file_get_contents('index.php');
    }
 }
?>
