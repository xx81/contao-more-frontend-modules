<?php

declare(strict_types=1);

/*
 * This file is part of [xx81/contao-more-frontend-modules-bundle].
 *
 * (c) Benjamin Geiger
 *
 * @license LGPL-3.0-or-later
 */

namespace Xx81\Contao\MoreFrontendModulesBundle\Controller;

use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\File\Metadata;
use Contao\CoreBundle\ServiceAnnotation\FrontendModule;
use Contao\FilesModel;
use Contao\ModuleModel;
use Contao\System;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @FrontendModule(category="moreFrontendModules",type="mfmselnav")
 */
class SelectedNavigationModuleController extends AbstractFrontendModuleController
{
    public const TYPE = 'mfmselnav';

    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        return $template->getResponse();
    }
}
