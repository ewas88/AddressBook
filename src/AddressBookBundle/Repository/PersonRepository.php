<?php

namespace AddressBookBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PersonRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 *
 * @ORM\OrderBy("name" = "ASC")
 */
class PersonRepository extends EntityRepository
{
    public function getAllPeople()
    {
        $query = $this->_em->createQuery(
            'SELECT p FROM AddressBookBundle:Person p ORDER BY p.name ASC ');

        return $query->getResult();
    }
}
