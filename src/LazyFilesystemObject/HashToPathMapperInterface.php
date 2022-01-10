<?php

/*
 * This file is part of the Libralyze\Common.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Libralyze\Common\LazyFilesystemObject;

interface HashToPathMapperInterface
{
    /**
     * @param  string $hash
     * @return string file path
     */
    public function hashToPath($hash);

    /**
     * @param  string $filePath
     * @return string hash
     */
    public function pathToHash($filePath);
}
