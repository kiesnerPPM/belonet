<?php
namespace Belonet\Ssn\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Belonet.Ssn".  *
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
   * @var \Belonet\Ssn\Domain\Repository\WorkerRepository
   */
  protected $workerRepository;


  /**
   * @param \Belonet\Ssn\Domain\Model\Worker $worker
   * @return void
   */
  public function showWorkerDataAction() {
    $allWorkers = $this->workerRepository->findAll()->toArray();
    $this->persistenceManager->persistAll();
    $this->view->assign("allWorkers", $allWorkers);
  }

  /**
   * @param \Belonet\Ssn\Domain\Model\Worker $worker
   * @return void
   */
  public function confirmWorkerDeletionAction(\Belonet\Ssn\Domain\Model\Worker $worker) {
    $this->view->assign("worker", $worker);
  }

  /**
   * @param \Belonet\Ssn\Domain\Model\Worker $worker
   * @return void
   */
  public function deleteWorkerAction(\Belonet\Ssn\Domain\Model\Worker $worker) {
    $this->workerRepository->remove($worker);
    $this->persistenceManager->persistAll();
    $this->redirect('showWorkerData');
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
  public function viewWorkerCreationAction() {

  }

  /**
   * @param \Belonet\Ssn\Domain\Model\Worker $worker
   */
  public function createNewWorkerAction(\Belonet\Ssn\Domain\Model\Worker $worker) {
    /**
     * 1. Version, worker wird statisch angelegt
     *$worker = new \Belonet\Ssn\Domain\Model\Worker();
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