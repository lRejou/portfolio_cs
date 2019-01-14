<?php
namespace CS\PortfolioCs\Controller;

/***
 *
 * This file is part of the "PortfolioCasa" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Julien VITTE <vitte.julien@gmail.com>
 *           Louis Réjou <lrejou@u-bordeaux.fr>
 *           Arthur Cargnelli <arthur.cargnelli@etu.u-bordeaux.fr>
 *           Arthur Derichard <aderichard@u-bordeaux.fr>
 *           Sophie Candau <scandau@u-bordeaux.fr>
 *
 ***/

/**
 * ProjetController
 */
class ProjetController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * projetRepository
     * 
     * @var \CS\PortfolioCs\Domain\Repository\ProjetRepository
     * @inject
     */
    protected $projetRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $projets = $this->projetRepository->findAll();
        $this->view->assign('projets', $projets);
    }

    /**
     * action show
     * 
     * @param \CS\PortfolioCs\Domain\Model\Projet $projet
     * @return void
     */
    public function showAction(\CS\PortfolioCs\Domain\Model\Projet $projet)
    {
        $this->view->assign('projet', $projet);
    }

    /**
     * action highlight
     * 
     * @return void
     */
    public function highlightAction()
    {

    }

    /**
     * action skills
     * 
     * @return void
     */
    public function skillsAction()
    {

    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {

    }
}
