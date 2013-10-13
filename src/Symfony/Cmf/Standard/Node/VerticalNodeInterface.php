<?php

namespace Symfony\Cmf\Standard\Node;

/**
 * Vertical Node
 *
 * Interface for vertical nodes.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
interface VerticalNodeInterface
{
    /**
     * Returns the parent of this node.
     *
     * @return VerticalNodeInterface
     */
    public function getParent();

    /**
     * Return the children of this node.
     *
     * @return array
     */
    public function getChildren();

    /**
     * Return true if this node has children
     *
     * @return boolean
     */
    public function hasChildren();

    /**
     * Set the parent of this node.
     *
     * @param VerticalNodeInterface
     */
    public function setParent(VerticalNodeInterface $node);

    /**
     * Set the children of this node.
     *
     * @param array
     */
    public function setChildren($children);

    /**
     * Add a child to this node.
     *
     * @param VerticalNodeInterface
     */
    public function addChild(VerticalNodeInterface $node);
}
