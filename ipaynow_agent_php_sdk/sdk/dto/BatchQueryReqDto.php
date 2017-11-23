<?php
/**
 * Created by PhpStorm.
 * User: liuyu
 * Date: 10/13/17
 * Time: 10:47 AM
 */

class BatchQueryReqDto extends QueryReqDto
{
    private $nowPage;

    private $pageSize;

    private $refundDate;

    /**
     * @return mixed
     */
    public function getNowPage()
    {
        return $this->nowPage;
    }

    /**
     * @param mixed $nowPage
     */
    public function setNowPage($nowPage)
    {
        $this->nowPage = $nowPage;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getRefundDate()
    {
        return $this->refundDate;
    }

    /**
     * @param mixed $refundDate
     */
    public function setRefundDate($refundDate)
    {
        $this->refundDate = $refundDate;
    }









}