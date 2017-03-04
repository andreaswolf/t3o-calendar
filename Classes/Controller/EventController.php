<?php
namespace T3o\Calendar\Controller;

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

use T3o\Calendar\Domain\Model\Event;
use T3o\Calendar\Domain\Repository\EventRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class EventController extends ActionController
{

    /** @var EventRepository */
    private $eventRepository;

    public function injectEventRepository(\T3o\Calendar\Domain\Repository\EventRepository $repository)
    {
        $this->eventRepository = $repository;
    }

    /**
     *
     */
    public function listAction()
    {
        $events = $this->eventRepository->findAll();

        $this->view->assign('events', $events);
    }

    /**
     * @param Event $event
     */
    public function showAction(\T3o\Calendar\Domain\Model\Event $event)
    {
        $this->view->assign('event', $event);
    }
}
