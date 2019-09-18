<?php

namespace Keizer\KoningBootstrapCarousel\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\Generic\LazyLoadingProxy;

/**
 * Slide model
 */
class Slide extends AbstractEntity
{
    public const TABLE = 'tx_koningbootstrapcarousel_domain_model_slide';

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $linkText;

    /**
     * @var string
     */
    protected $link;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $visual;

    /**
     * @var string
     */
    protected $visualSize;

    /**
     * @var string
     */
    protected $visualPosition;

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param  string  $title
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getLinkText(): ?string
    {
        return $this->linkText;
    }

    /**
     * @param  string  $linkText
     * @return $this
     */
    public function setLinkText(string $linkText): self
    {
        $this->linkText = $linkText;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param  string  $link
     * @return $this
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param  string  $description
     * @return $this
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getVisual(): FileReference
    {
        if ($this->visual instanceof LazyLoadingProxy) {
            $this->visual->_loadRealInstance();
        }

        return $this->visual;
    }

    /**
     * @param  \TYPO3\CMS\Extbase\Domain\Model\FileReference  $visual
     * @return $this
     */
    public function setVisual(FileReference $visual): self
    {
        $this->visual = $visual;

        return $this;
    }

    /**
     * @return string
     */
    public function getVisualSize(): ?string
    {
        return $this->visualSize;
    }

    /**
     * @param  string  $visualSize
     * @return $this
     */
    public function setVisualSize(string $visualSize): self
    {
        $this->visualSize = $visualSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getVisualPosition(): ?string
    {
        return $this->visualPosition;
    }

    /**
     * @param  string  $visualPosition
     * @return $this
     */
    public function setVisualPosition(string $visualPosition): self
    {
        $this->visualPosition = $visualPosition;

        return $this;
    }
}
