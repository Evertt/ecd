<?php

namespace HsBundle\Service;

use HsBundle\Entity\Registratie;
use Knp\Component\Pager\Pagination\PaginationInterface;
use AppBundle\Filter\FilterInterface;

interface RegistratieDaoInterface
{
    /**
     * @param int $page
     *
     * @return PaginationInterface
     */
    public function findAll($page = 1, FilterInterface $filter = null);

    /**
     * @param int $id
     *
     * @return Registratie
     */
    public function find($id);

    /**
     * @param Registratie $registratie
     */
    public function create(Registratie $registratie);

    /**
     * @param Registratie $registratie
     */
    public function update(Registratie $registratie);

    /**
     * @param Registratie $registratie
     */
    public function delete(Registratie $registratie);
}
