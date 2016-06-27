<?php
// src/AppBundle/Entity/User.php

namespace BDE\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FR3D\LdapBundle\Model\LdapUserInterface;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User extends BaseUser implements LdapUserInterface
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $name;        
    
    /**
    * Ldap Object Distinguished Name
    * @ORM\Column(type="string", length=128)
    * @var string $dn
     */
    private $dn;

    public function __construct()
    {
       parent::__construct();
       if (empty($this->roles)) {
         $this->roles[] = 'ROLE_USER';
       }
    }

    public function setName($name) {
        $this->name = $name;
    }

    /**
     * {@inheritDoc}
     */
    public function setDn($dn)
    {
        $this->dn = $dn;
    }

    /**
     * {@inheritDoc}
     */
    public function getDn()
    {
        return $this->dn;
    }
}