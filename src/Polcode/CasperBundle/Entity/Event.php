<?php

namespace Polcode\CasperBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="events")
 * 
 * @UniqueEntity(fields="email", message="Sorry, this email address is already in use.", groups={"registration"})
 * @UniqueEntity(fields="username", message="Sorry, this username is already taken.", groups={"registration"})
 *
 */
class Event {
    
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $sex;
    
    
    /**
     * @ORM\Column(type="date", nullable=true)
     * 
     * @Assert\Date
     */
    private $birthdate;
    
    
    
    public function save($savePath){
        
        
        var_dump( $savePath );
//        
//        $paramsNames = array( 'nick', 'email', 'sex', 'birthdate' );
//        $formData = array();
//        foreach ($paramsNames as $name){
//            $formData[$name] = $this->{$name};
//        }
//
//        $randVal = rand(1000, 9999);
//        $dataFileName = sprintf('data_%d.txt', $randVal);
//
//
//        if(NULL !== $file){
//            $newName = sprintf('file_%d.%s', $randVal, $file->guessExtension());
//            $file->move($savePath, $newName);
//        }
    }

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
     * Set sex
     *
     * @param string $sex
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return User
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

}