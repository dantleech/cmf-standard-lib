<?php

namespace Symfony\Cmf\Standard\Tests\Node;

class NodeImplementationTest extends \PHPUnit_Framework_TestCase
{
    public function testImplementation()
    {
        $p = new NodeImplementation();
        $l = new NodeImplementation();
        $r = new NodeImplementation();

        $c1 = new NodeImplementation();
        $c2 = new NodeImplementation();
        $c3 = new NodeImplementation();

        $p->setLeft($l);
        $p->setRIght($r);
        $p->setChildren(array($c1, $c2));
        $p->addChild($c3);

        $this->assertEquals($l, $p->getLeft());
        $this->assertEquals($r, $p->getRight());
        $this->assertEquals(array($c1, $c2, $c3), $p->getChildren());
        $this->assertTrue($p->hasChildren());
        $this->assertTrue($p->hasLeft());
        $this->assertTrue($p->hasRight());

        $this->assertFalse($c1->hasChildren());
        $this->assertFalse($c1->hasLeft());
        $this->assertFalse($c1->hasRight());
    }
}
