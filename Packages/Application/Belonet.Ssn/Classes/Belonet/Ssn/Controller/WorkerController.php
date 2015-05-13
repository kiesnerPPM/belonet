<?php
namespace Bachelorarbeit\Tests\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Bachelorarbeit.Tests".  *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

class WorkerController extends \TYPO3\Flow\Mvc\Controller\ActionController {

    /**
     * @Flow\Inject
     * @var \TYPO3\Flow\Persistence\PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * @Flow\Inject
     * @var \Bachelorarbeit\Tests\Domain\Repository\WorkerRepository
     */
    protected $workerRepository;




	/**
 * @param \Bachelorarbeit\Tests\Domain\Model\Worker $worker
 * @return void
 */
    public function showWorkerDataAction() {
        $allWorkers = $this->workerRepository->findAll()->toArray();
        $this->persistenceManager->persistAll();
        $this->view->assign("allWorkers",$allWorkers);
    }

    /**
     * Redirection to showWorkerData
     * @return void
     */
 /**   public function redirectionAction() {
 *       $this->redirect("showWorkerData", null, null, array("worker"=> $worker));
*    }
*/


    /**
     *
     */
    public function viewWorkerCreationAction(){

    }

    /**
     * @param \Bachelorarbeit\Tests\Domain\Model\Worker $worker
     */
    public function createNewWorkerAction(\Bachelorarbeit\Tests\Domain\Model\Worker $worker){
        /**
         * 1. Version, worker wird statisch angelegt
        *$worker = new \Bachelorarbeit\Tests\Domain\Model\Worker();
        *$worker->setWorkerId("abcd");
        *$this->workerRepository->add($worker);
        *$this->persistenceManager->persistAll();
        *$this->redirect("showWorkerData", null, null, array("worker"=> $worker));
         */
        //2. Version: worker wird durch Form angelegt
        $this->workerRepository->add($worker);
        $this->redirect("showWorkerData", null, null, array());
    }


}