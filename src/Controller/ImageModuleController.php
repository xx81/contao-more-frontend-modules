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
use Contao\CoreBundle\File\Metadata;
use Contao\FilesModel;
use Contao\ModuleModel;
use Contao\System;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsFrontendModule(type: "mfmimage", category: "moreFrontendModules", template: "mod_mfmimage")]
class ImageModuleController extends AbstractFrontendModuleController
{
    public const TYPE = 'mfmimage';

    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        $template->figure = System::getContainer()
            ->get('contao.image.studio')
            ->createFigureBuilder()
            ->from($model->singleSRC)
            ->setSize($model->imgSize)
            ->setMetadata($this->getOverwriteMetadata($model))
            ->enableLightbox($model->fullsize != '' ? true : false)
            ->buildIfResourceExists()
        ;

        return $template->getResponse();
    }

    /**
     * Get the default metadata or null if not applicable.
     *
     * (c) Leo Feyer
     */
    private function getOverwriteMetadata(ModuleModel $model): Metadata|null
    {
        // Ignore if "overwriteMeta" is not set
        if (!$model->overwriteMeta) {
            return null;
        }

        $data = $model->row();

        // Normalize keys
        if (isset($data['imageTitle'])) {
            $data[Metadata::VALUE_TITLE] = $data['imageTitle'];
        }

        if (isset($data['imageUrl'])) {
            $data[Metadata::VALUE_URL] = $data['imageUrl'];
        }

        unset($data['imageTitle'], $data['imageUrl']);

        // Make sure we resolve to insert tags pointing to files
        if (isset($data[Metadata::VALUE_URL])) {
            $data[Metadata::VALUE_URL] = System::getContainer()->get('contao.insert_tag.parser')->replaceInline($data[Metadata::VALUE_URL] ?? '');
        }

        // Strip superfluous fields by intersecting with tl_files.meta.eval.metaFields
        return new Metadata(array_intersect_key($data, array_flip(FilesModel::getMetaFields())));
    }
}
