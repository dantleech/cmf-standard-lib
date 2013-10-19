<?php

namespace Symfony\Cmf\Standard\Tests\Meta;

class DescriptionImplementationTest extends \PHPUnit_Framework_TestCase
{
    public function testImplementation()
    {
        $imp = new DescriptionImplementation();
        $imp->setDescription('This is a title');
        $res = $imp->getDescription();

        $this->assertEquals('This is a title', $res);
    }
}
