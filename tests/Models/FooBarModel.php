<?php
/*
 * This file is part of Webisters MVC Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\MVC\Models;

use Framework\MVC\Model;

class FooBarModel extends Model
{
    public function getTable() : string
    {
        return parent::getTable();
    }
}
