<?php

namespace Tipddy\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionType
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class QuestionType
{   
    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etiqueta;     
}
