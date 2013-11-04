<?php

namespace Tipddy\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Answer
{       /**
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\Id()
 * @ORM\GeneratedValue(strategy="IDENTITY")
 */
       protected $id;
       /**
        * @ORM\Column(type="string", length=255)
        */
       protected $answer;        
       /**
        * @ORM\Column(type="string", length=255)
        */
       protected $photo;
       /**
        * @ORM\Column(type="string", length=255)
        */
       protected $video;
       /**
        * @ORM\Column(type="string", length=255)
        */
       protected $question;  
}
