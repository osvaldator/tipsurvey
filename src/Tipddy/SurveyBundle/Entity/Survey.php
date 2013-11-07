<?php

namespace Tipddy\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Survey
 *
 * @ORM\Table(name="tipsurvey_survey")
 * @ORM\Entity
 */
class Survey 
 {	/**
  * @ORM\Column(name="id", type="bigint", nullable=false)
  * @ORM\Id()
  * @ORM\GeneratedValue(strategy="IDENTITY")
  */
   protected $id;
     /**
      * @ORM\Column(name="title", type="text")
      *
      */
     protected $title;

     /**
      * @ORM\Column(name="descripcion", type="text")
      *
      */
     protected $description;
     
     /**
      * @ORM\OneToMany(targetEntity="Question", mappedBy="survey", cascade={"all"})
      *
      */
     protected $questions;

     /**
     * Get id
     *
     * @return integer 
     */
     public function getId()
     {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Survey
     */
    public function setTitle($title)
    {
        $this->title = $title;
        
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->question = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add question
     *
     * @param \Tipddy\SurveyBundle\Entity\Question $question
     * @return Survey
     */
    public function addQuestion(\Tipddy\SurveyBundle\Entity\Question $question)
    {
        $this->question[] = $question;
        
        return $this;
    }

    /**
     * Remove question
     *
     * @param \Tipddy\SurveyBundle\Entity\Question $question
     */
    public function removeQuestion(\Tipddy\SurveyBundle\Entity\Question $question)
    {
        $this->question->removeElement($question);
    }

    /**
     * Get question
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Survey
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}