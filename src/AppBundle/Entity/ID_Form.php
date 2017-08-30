<?php

// src/AppBundle/Entity/ID_Form.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="id_form")
 */
class ID_Form
{
    /**
	 * @ORM\Id
	 * @ORM\Column(name="id_form_id", type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id_form_id;
	
	/**
	 * @ORM\Column(name="referred", type="string")
	 */
	protected $referred;

    /**
     * Get idFormId
     *
     * @return integer
     */
    public function getIdFormId()
    {
        return $this->id_form_id;
    }

    /**
     * Set referred
     *
     * @param string $referred
     *
     * @return ID_Form
     */
    public function setReferred($referred)
    {
        $this->referred = $referred;

        return $this;
    }

    /**
     * Get referred
     *
     * @return string
     */
    public function getReferred()
    {
        return $this->referred;
    }
}
