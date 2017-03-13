<?php

namespace HsBundle\Service;

use HsBundle\Entity\Vrijwilliger;
use Knp\Component\Pager\Pagination\PaginationInterface;
use AppBundle\Filter\FilterInterface;

interface VrijwilligerDaoInterface
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
     * @return Vrijwilliger
     */
    public function find($id);

    /**
     * @param Vrijwilliger $vrijwilliger
     */
    public function create(Vrijwilliger $vrijwilliger);

    /**
     * @param Vrijwilliger $vrijwilliger
     */
    public function update(Vrijwilliger $vrijwilliger);

    /**
     * @param Vrijwilliger $vrijwilliger
     */
    public function delete(Vrijwilliger $vrijwilliger);
}
