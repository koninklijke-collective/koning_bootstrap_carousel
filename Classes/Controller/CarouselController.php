<?php

namespace Keizer\KoningBootstrapCarousel\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller: Carousel
 */
class CarouselController extends ActionController
{
    /**
     * @var \Keizer\KoningBootstrapCarousel\Domain\Repository\SlideRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $slideRepository;

    /**
     * Shows the carousel slides
     *
     * @return void
     */
    public function showAction(): void
    {
        $currentId = (int)$this->configurationManager->getContentObject()->getFieldVal('uid');
        $this->view->assignMultiple([
            'identifier' => 'koning-bootstrap-carousel-id-' . $currentId,
            'slides' => $this->slideRepository->findAttachedToContent($currentId),
        ]);
    }
}
