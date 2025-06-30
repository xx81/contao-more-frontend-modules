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
use Contao\CoreBundle\DependencyInjection\Attribute\AsFrontendModule;
use Contao\ModuleModel;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsFrontendModule(type: "mfmtext", category: "moreFrontendModules", template: "mod_mfmtext.html.twig")]
class TextModuleController extends AbstractFrontendModuleController
{
    public const TYPE = 'mfmtext';

    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        return $template->getResponse();
    }
}
