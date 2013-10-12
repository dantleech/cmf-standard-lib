<?php

namespace Symfony\Cmf\Standard\Tests\Slugifier;

use Symfony\Cmf\Standard\Slugifier\SlugifierInterface;

class SlugifierImplementation implements SlugifierInterface
{
    public function slugify($string)
    {
        return $string;
    }
}
