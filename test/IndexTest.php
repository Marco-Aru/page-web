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

    public function testTagContent()
    {

        $selector = 'h1.title';
        $content  = 'Test title text';

        $this->assertSelectEquals($selector, $content, true, $this->html);
    }

    public function testClassContent()
    {
        $selector = 'div.foo';
        $content  = 'Test class text';

        $this->assertSelectEquals($selector, $content, true, $this->html);
    }

    public function testCountList()
    {
        $selector = 'ul > li';
        $count    = 2;
        $this->assertSelectCount($selector, $count, $this->html);
    }

    public function testRegExpContent()
    {
        $selector = 'div.bar';
        $regexp   = '/Pierro/';
        $this->assertSelectRegExp($selector, $regexp, true, $this->html);
    }
}
