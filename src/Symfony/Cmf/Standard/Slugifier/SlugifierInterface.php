<?php

namespace Symfony\Cmf\Standard\Slugifier;

/**
 * Slugifier interface
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
interface SlugifierInterface
{
    /**
     * Return a slugified (or urlized) reperesentation of a given string
     *
     * @param string
     *
     * @return string
     */
    public function slugify($string);
}

