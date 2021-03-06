<?php
namespace TYPO3\Flow\Tests\Functional\Http\Fixtures\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow framework.                       *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Mvc\Controller\ActionController;

class RedirectingController extends ActionController {

	/**
	 * @return void
	 */
	public function fromHereAction() {
		$this->redirect('toHere');
	}

	/**
	 * @return void
	 */
	public function toHereAction() {
		$this->redirect('toThere');
	}

	/**
	 * @return string
	 */
	public function toThereAction() {
		return 'arrived.';
	}
}
