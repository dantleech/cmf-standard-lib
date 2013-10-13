<?php

namespace Symfony\Cmf\Standard\Node;

/**
 * Vertical Node
 *
 * Trait for vertical nodes.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
trait VerticalNodeTrait 
{
    private $parent = null;

    private $children = array();

    /**
     * @see VerticalNodeInterface::getParent
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @see VerticalNodeInterface::getChildren
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @see VerticalNodeInterface::hasChildren
     */
    public function hasChildren()
    {
        return count($this->children) ? true : false;
    }

    /**
     * @see VerticalNodeInterface::setParent
     */
    public function setParent(VerticalNodeInterface $node)
    {
        $this->parent = $node;
    }

    /**
     * @see VerticalNodeInterface::setChildren
     */
    public function setChildren($children)
    {
        $this->children = $children;
    }

    /**
     * @see VerticalNodeInterface::addChild
     */
    public function addChild(VerticalNodeInterface $node)
    {
        $this->children[] = $node;
    }
}
