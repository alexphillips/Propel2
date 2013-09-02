<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license MIT License
 */

namespace Propel\Generator\Model;

/**
 * An interface for representing mapping model objects.
 *
 * @author Hugo Hamon <webmaster@apprendre-php.com> (Propel)
 */
interface MappingModelInterface
{
    /**
     * Loads a model definition from an array.
     *
     * @param array $attributes
     */
    public function loadMapping(array $attributes);
}
