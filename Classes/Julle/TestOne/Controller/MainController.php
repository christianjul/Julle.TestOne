<?php
namespace Julle\TestOne\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "Julle.TestOne".              *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\Mvc\Controller\ActionController;
use \Julle\TestOne\Domain\Model\Main;

/**
 * Main controller for the Julle.TestOne package 
 *
 * @FLOW3\Scope("singleton")
 */
class MainController extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \Julle\TestOne\Domain\Repository\MainRepository
	 */
	protected $mainRepository;

	/**
	 * Shows a list of mains
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('mains', $this->mainRepository->findAll());
	}

	/**
	 * Shows a single main object
	 *
	 * @param \Julle\TestOne\Domain\Model\Main $main The main to show
	 * @return void
	 */
	public function showAction(Main $main) {
		$this->view->assign('main', $main);
	}

	/**
	 * Shows a form for creating a new main object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new main object to the main repository
	 *
	 * @param \Julle\TestOne\Domain\Model\Main $newMain A new main to add
	 * @return void
	 */
	public function createAction(Main $newMain) {
		$this->mainRepository->add($newMain);
		$this->addFlashMessage('Created a new main.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing main object
	 *
	 * @param \Julle\TestOne\Domain\Model\Main $main The main to edit
	 * @return void
	 */
	public function editAction(Main $main) {
		$this->view->assign('main', $main);
	}

	/**
	 * Updates the given main object
	 *
	 * @param \Julle\TestOne\Domain\Model\Main $main The main to update
	 * @return void
	 */
	public function updateAction(Main $main) {
		$this->mainRepository->update($main);
		$this->addFlashMessage('Updated the main.');
		$this->redirect('index');
	}

	/**
	 * Removes the given main object from the main repository
	 *
	 * @param \Julle\TestOne\Domain\Model\Main $main The main to delete
	 * @return void
	 */
	public function deleteAction(Main $main) {
		$this->mainRepository->remove($main);
		$this->addFlashMessage('Deleted a main.');
		$this->redirect('index');
	}

}

?>