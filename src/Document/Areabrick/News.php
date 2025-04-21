<?php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AsAreaBrick;

#[AsAreaBrick(id: 'news')]
class News extends AbstractAreabrick
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'News Section';
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(): string
    {
        return 'Displays news items with thumbnails and links';
    }

}