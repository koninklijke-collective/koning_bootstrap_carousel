<?php

namespace Keizer\KoningBootstrapCarousel\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Repository: Carousel Slides
 */
class SlideRepository extends Repository
{

    /**
     * @param  int  $uid
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface|array
     */
    public function findAttachedToContent(int $uid)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        $query->matching($query->equals('contentId', $uid));
        $query->setOrderings(['sorting' => QueryInterface::ORDER_ASCENDING]);

        return $query->execute();
    }
}
