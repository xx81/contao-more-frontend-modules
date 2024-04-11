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
use Contao\CoreBundle\ServiceAnnotation\FrontendModule;
use Contao\ModuleModel;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @FrontendModule(category="moreFrontendModules",type="mfmenvbeg")
 */
class EnvelopeBeginModuleController extends AbstractFrontendModuleController
{
    public const TYPE = 'mfmenvbeg';

    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        $template->cssID = '';

        if (\is_array($cssID = unserialize($model->cssID)) && '' !== $cssID[0]) {
            $template->cssID = ' id="'.$cssID[0].'"';
        }

        return $template->getResponse();
    }
}
