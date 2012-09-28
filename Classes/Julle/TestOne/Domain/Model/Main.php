<?php
namespace Julle\TestOne\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "Julle.TestOne".              *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Main
 *
 * @FLOW3\Entity
 */
class Main {

	/**
	 * The name
	 * @var string
	 */
	protected $name;


	/**
	 * Get the Main's name
	 *
	 * @return string The Main's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Main's name
	 *
	 * @param string $name The Main's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>