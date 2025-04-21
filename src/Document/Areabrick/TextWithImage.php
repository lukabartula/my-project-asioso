<?php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AsAreaBrick;

#[AsAreaBrick(id: 'text-with-image')]
class TextWithImage extends AbstractAreabrick
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Text with Image';
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(): string
    {
        return 'Text content with an image that can be positioned left or right';
    }

}