<?php

namespace Symfony\Cmf\Standard\Tests\Meta;

class TitleImplementationTest extends \PHPUnit_Framework_TestCase
{
    public function testImplementation()
    {
        $imp = new TitleImplementation();
        $imp->setTitle('This is a title');
        $res = $imp->getTitle();

        $this->assertEquals('This is a title', $res);
    }
}
