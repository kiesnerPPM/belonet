<?php
/**
 * Created by PhpStorm.
 * User: Veronika
 * Date: 10.03.2015
 * Time: 13:11
 */

namespace Belonet\Ssn\Domain\Model;
use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Worker{

    /**
     * @var string
     */
    protected $workerId;

    /**
     * @return string
     */
    public function getWorkerId()
    {
        return $this->workerId;
    }

    /**
     * @param string $workerId
     */
    public function setWorkerId($workerId)
    {
        $this->workerId = $workerId;
    }


}