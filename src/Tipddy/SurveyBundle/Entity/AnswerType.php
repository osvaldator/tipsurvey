<?php

namespace Tipddy\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnswerType
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AnswerType
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
