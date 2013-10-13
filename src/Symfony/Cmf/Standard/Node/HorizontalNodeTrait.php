<?php

namespace Symfony\Cmf\Standard\Node;

/**
 * Horizontal Node
 *
 * Interface for horizontal nodes.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
trait HorizontalNodeTrait
{
    protected $left = null;

    protected $right = null;

    /**
     * @see HorizontalNodeInterface::getLeft
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @see HorizontalNodeInterface::hasLeft
     */
    public function hasLeft()
    {
        return null !== $this->left ? true : false;
    }

    /**
     * @see HorizontalNodeInterface::getRight
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * @see HorizontalNodeInterface::hasRight
     */
    public function hasRight()
    {
        return null !== $this->right ? true : false;
    }

    /**
     * @see HorizontalNodeInterface::setLeft
     */
    public function setLeft(HorizontalNodeInterface $node)
    {
        $this->left = $node;
    }

    /**
     * @see HorizontalNodeInterface::setRight
     */
    public function setRight(HorizontalNodeInterface $node)
    {
        $this->right = $node;
    }
}
