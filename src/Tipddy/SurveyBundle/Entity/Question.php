<?php

namespace Tipddy\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Question
{
       protected $id;
       protected $question;
       protected $description;
       protected $randomOrder;  //respuestas en orden randomico.
       protected $questionRequired; //Si la pregunta es obligatoria   
       protected $survey;
       protected $questionType;
       protected $answerType;
       protected $answers;
}
