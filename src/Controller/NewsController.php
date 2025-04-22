<?php

namespace App\Controller;

use App\Website\LinkGenerator\NewsLinkGenerator;
use Pimcore\Model\DataObject\News;
use Pimcore\Model\DataObject;
use Pimcore\Twig\Extension\Templating\HeadTitle;
use Pimcore\Twig\Extension\Templating\Placeholder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Controller\FrontendController;

class NewsController extends FrontendController
{
    #[Route('/news', name: 'news_list')]
    public function listAction(): Response
    {
        return $this->render('news/list.html.twig');
    }

    #[Route('/news/{id}', name: 'news_details')]
    public function detailsAction(Request $request, int $id): Response
    {
        // Debug the ID
        \Pimcore\Logger::debug('News ID: ' . $id);
        
        $news = News::getById($id);
        
        // Debug the news object
        \Pimcore\Logger::debug('News object: ' . ($news ? 'found' : 'not found'));
        if ($news) {
            \Pimcore\Logger::debug('News title: ' . $news->getTitle());
        }
        
        if (!$news) {
            throw $this->createNotFoundException('News article not found');
        }

        return $this->render('news/details.html.twig', [
            'news' => $news
        ]);
    }

    /**
     * @Route("news/{id}", name="news-detail")
     */
    public function detailAction(Request $request, HeadTitle $headTitleHelper,$id): Response
    {
        $news = News::getById($id);

        if (!($news instanceof News && ($news->isPublished() || $this->verifyPreviewRequest($request, $news)))) {
            throw new NotFoundHttpException('News not found.');
        }
        $headTitleHelper($news->getTitle());
   
        return $this->render('news/detail.html.twig', [
            'news' => $news
        ]);
    }

    /**
     * @param Request $request
     * @param DataObject $object
     *
     * @return bool
     */
    protected function verifyPreviewRequest(Request $request, DataObject $object): bool
    {
        if (Tool::isElementRequestByAdmin($request, $object)) {
            return true;
        }

        return false;
    }

    /**
     * @param Request $request
     *
     * @return array
     */
    protected function getAllParameters(Request $request): array
    {
        return array_merge($request->request->all(), $request->query->all());
    }
}
