<?php

namespace Symfony\Cmf\Standard\Node;

/**
 * Horizontal Node
 *
 * Interface for horizontal nodes.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
interface HorizontalNodeInterface
{
    /**
     * Return the left sibling node
     *
     * @return HorizontalNodeInterface
     */
    public function getLeft();

    /**
     * Return true if the left node exists
     *
     * @return boolean
     */
    public function hasLeft();

    /**
     * Return the right sibling node
     *
     * @return HorizontalNodeInterface
     */
    public function getRight();

    /**
     * Return true if the right node exists.
     *
     * @return boolean
     */
    public function hasRight();

    /**
     * Set the left node
     *
     * @param HorizontalNodeInterface
     */
    public function setLeft(HorizontalNodeInterface $node);

    /**
     * Set the right node
     *
     * @param HorizontalNodeInterface
     */
    public function setRight(HorizontalNodeInterface $node);
}

