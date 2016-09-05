<?php

namespace Apollo16\Core\Database\Enhancements;

/**
 * Sortable attributes trait.
 *
 * @author      mohammad.anang  <m.anangnur@gmail.com>
 */

trait SortableAttribute
{
    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        $attributes = parent::toArray();

        return array_merge(array_flip($this->getSortedAttributes()), $attributes);
    }

    /**
     * Get sorted attributes.
     *
     * @return array
     */
    public function getSortedAttributes()
    {
        return property_exists($this, 'sortedAttributes') ? $this->{'sortedAttributes'} : [];
    }
}