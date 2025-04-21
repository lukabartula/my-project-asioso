<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\News;
use Pimcore\Model\DataObject;
use Pimcore\Twig\Extension\Templating\HeadTitle;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends FrontendController
{
    /**
     * Handles the News detail view by object ID
     *
     * @Route("/news/{id}", name="news_detail", requirements={"id"="\d+"})
     */
    public function showAction(Request $request, HeadTitle $headTitle, int $id): Response
    {
        $newsItem = News::getById($id);

        if (!$this->isAccessible($newsItem, $request)) {
            throw new NotFoundHttpException('The requested news item was not found or is unpublished.');
        }

        // Set the <title> in the HTML head dynamically
        $headTitle($newsItem->getTitle());

        return $this->render('news/news-details.html.twig', [
            'news' => $newsItem
        ]);
    }

    /**
     * Checks if the News object is valid and accessible
     */
    private function isAccessible(?DataObject\Concrete $object, Request $request): bool
    {
        if (!$object instanceof News) {
            return false;
        }

        if ($object->isPublished()) {
            return true;
        }

        // Allow access if it's a Pimcore admin preview
        return $request->get('pimcore_preview') === 'true';
    }
}
