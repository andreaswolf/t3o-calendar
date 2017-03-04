<?php
/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace T3o\Calendar\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Event extends AbstractEntity
{

    /** @var string */
    protected $title;

    /** @var string */
    protected $description;

    /** @var \DateTime */
    protected $start;

    /** @var \DateTime */
    protected $end;

    /** @var string */
    protected $timezone;

    /** @var string */
    protected $locationName;

    /** @var string */
    protected $locationAddress;

    /** @var string */
    protected $locationCity;

    /** @var string */
    protected $locationZip;

    /** @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> */
    protected $categories;

    /** @var string */
    protected $hashtags;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return \DateTime
     */
    public function getStart(): \DateTime
    {
        return $this->start;
    }

    /**
     * @return \DateTime
     */
    public function getEnd(): \DateTime
    {
        return $this->end;
    }

    /**
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * @return string
     */
    public function getLocationName(): string
    {
        return $this->locationName;
    }

    /**
     * @return string
     */
    public function getLocationAddress(): string
    {
        return $this->locationAddress;
    }

    /**
     * @return string
     */
    public function getLocationCity(): string
    {
        return $this->locationCity;
    }

    /**
     * @return string
     */
    public function getLocationZip(): string
    {
        return $this->locationZip;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getCategories(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage
    {
        return $this->categories;
    }

    /**
     * @return string
     */
    public function getHashtags(): string
    {
        return $this->hashtags;
    }

}
