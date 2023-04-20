<?php

declare(strict_types=1);

/*
 * This file is part of [xx81/contao-more-frontend-modules-bundle].
 *
 * (c) Benjamin Geiger
 *
 * @license LGPL-3.0-or-later
 */

namespace Xx81\Contao\tests;

use PHPUnit\Framework\TestCase;
use Xx81\Contao\MoreFrontendModulesBundle\MoreFrontendModulesBundle;

class MoreFrontendModulesBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new MoreFrontendModulesBundle();

        $this->assertInstanceOf('Xx81\Contao\MoreFrontendModulesBundle\MoreFrontendModulesBundle', $bundle);
    }
}
