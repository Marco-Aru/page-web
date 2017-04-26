<?php

namespace PHPUnit\Framework\Tests;

use \PHPUnit\Framework\DOMTestCase;

class IndexTest extends DOMTestCase
{

    private $html;

    protected function setUp()
    {
        $this->html = file_get_contents('index.html');
    }

    public function testTagContent()
    {

        $selector = 'div.intro-heading';
        $content  = 'DIE ANTWOORD';

        $this->assertSelectEquals($selector, $content, true, $this->html);
    }



    public function testRegExpContent()
    {
        $selector = 'div.intro-lead-in';
        $regexp   = '/Welcome/';
        $this->assertSelectRegExp($selector, $regexp, true, $this->html);
    }
}
