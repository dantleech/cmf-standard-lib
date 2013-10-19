<?php

namespace Symfony\Cmf\Standard\Meta;

/**
 * Description trait to accompany DescriptionInterface
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
trait DescriptionTrait
{
    protected $title;

    /**
     * @see DescriptionInterface
     */
    public function setDescription($title)
    {
        $this->title = $title;
    }

    /**
     * @see DescriptionReadInterface
     */
    public function getDescription()
    {
        return $this->title;
    }
}
