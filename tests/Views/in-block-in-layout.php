<?php
/*
 * This file is part of Webisters MVC Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * @var Framework\MVC\View $view
 * @var PHPUnit\Framework\TestCase $testCase
 */
$view->extends('default');
$view->block('contents');
$testCase::assertTrue($view->inLayout('_layouts/default'));
$testCase::assertTrue($view->inBlock('contents'));
$view->endBlock();
