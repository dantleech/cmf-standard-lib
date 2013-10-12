<?php

namespace Symfony\Cmf\Standard\Tests\Slugifier;

class SlugifierImplementationTest extends \PHPUnit_Framework_TestCase
{
    public function testImplementation()
    {
        $imp = new SlugifierImplementation();
        $res = $imp->slugify('slugify-this');
        $this->assertEquals('slugify-this', $res);
    }
}
