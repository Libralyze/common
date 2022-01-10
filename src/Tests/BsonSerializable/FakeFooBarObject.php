<?php

/*
 * This file is part of the Libralyze\Common.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Libralyze\Common\Tests\BsonSerializable;

use Libralyze\Common\BsonSerializable\AbstractBsonSerializableObject;

class FakeFooBarObject extends AbstractBsonSerializableObject
{
    /** @var mixed */
    public $Foo;

    /** @var mixed */
    public $Bar;

    public function getSerializableProperties()
    {
        return [
            'Foo',
            'Bar',
        ];
    }
}
