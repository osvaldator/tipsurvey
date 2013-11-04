<?php

namespace Tipddy\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Survey
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Survey 
 {
     protected $id;
         protected $title;
     protected $description;
 }
