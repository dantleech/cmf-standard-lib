<?php

namespace Symfony\Cmf\Standard\Meta;

/**
 * Description interface provides both get and set title methods.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
interface DescriptionInterface extends DescriptionReadInterface
{
    /**
     * Set title
     *
     * @param string $title
     */
    public function setDescription($title);
}
