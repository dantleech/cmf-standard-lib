<?php

namespace Symfony\Cmf\Standard\Meta;

/**
 * Title interface provides both get and set title methods.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
interface TitleInterface extends TitleReadInterface
{
    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title);
}
