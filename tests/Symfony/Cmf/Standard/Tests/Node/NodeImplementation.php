<?php

namespace Symfony\Cmf\Standard\Tests\Node;

use Symfony\Cmf\Standard\Node\VerticalNodeInterface;
use Symfony\Cmf\Standard\Node\HorizontalNodeInterface;
use Symfony\Cmf\Standard\Node\VerticalNodeTrait;
use Symfony\Cmf\Standard\Node\HorizontalNodeTrait;

class NodeImplementation implements VerticalNodeInterface, HorizontalNodeInterface
{
    use VerticalNodeTrait;
    use HorizontalNodeTrait;
}
