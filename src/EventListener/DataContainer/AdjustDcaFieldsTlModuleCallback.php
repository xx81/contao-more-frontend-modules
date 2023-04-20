<?php

declare(strict_types=1);

/*
 * This file is part of [xx81/contao-more-frontend-modules-bundle].
 *
 * (c) Benjamin Geiger
 *
 * @license LGPL-3.0-or-later
 */

namespace Xx81\Contao\MoreFrontendModulesBundle\EventListener\DataContainer;

use Contao\CoreBundle\ServiceAnnotation\Callback;
use Contao\DataContainer;
use Contao\ModuleModel;
use Symfony\Component\HttpFoundation\RequestStack;
use Xx81\Contao\MoreFrontendModulesBundle\Controller\ImageModuleController;

/**
 * @Callback(table="tl_module", target="config.onload")
 */
class AdjustDcaFieldsTlModuleCallback
{
    public function __construct(private readonly RequestStack $requestStack)
    {
    }

    public function __invoke(DataContainer $dc = null): void
    {
        if (null === $dc || !$dc->id || 'edit' !== $this->requestStack->getCurrentRequest()->query->get('act')) {
            return;
        }

        $element = ModuleModel::findById($dc->id);

        if (null === $element) {
            return;
        }

        switch ($element->type) {
            case ImageModuleController::TYPE:
                    $GLOBALS['TL_DCA']['tl_module']['fields']['SingleSRC']['eval']['extensions'] = '%contao.image.valid_extensions%';
                break;
        }
    }
}
