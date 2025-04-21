<?php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AsAreaBrick;

#[AsAreaBrick(id: 'hero-image')]
class HeroImage extends AbstractAreabrick
{
    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {
        return 'Hero Image';
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): string
    {
        return 'A hero section with an image and editable text.';
    }

}
