<?php

namespace Symfony\Cmf\Standard\Meta;

/**
 * Title trait to accompany TitleInterface
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
trait TitleTrait
{
    protected $title;

    /**
     * @see TitleInterface
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @see TitleReadInterface
     */
    public function getTitle()
    {
        return $this->title;
    }
}
