<?php


namespace AppBundle\Dto;


class ArticleDto
{
    /**
     * @var int
     */
    private $idDto;

    /**
     * @var string
     */
    private $nameDto;

    /**
     * @var float
     */
    private $priceDto;

    /**
     * @var string
     */
    private $typeArticleDto;

    /**
     * @var int
     */
    private $stockDto;

    /**
     * @var Bill
     */
    private $billsDto;

    /**
     * @return int
     */
    public function getIdDto()
    {
        return $this->idDto;
    }

    /**
     * @param int $idDto
     */
    public function setIdDto($idDto)
    {
        $this->idDto = $idDto;
    }

    /**
     * @return string
     */
    public function getNameDto()
    {
        return $this->nameDto;
    }

    /**
     * @param string $nameDto
     */
    public function setNameDto($nameDto)
    {
        $this->nameDto = $nameDto;
    }

    /**
     * @return float
     */
    public function getPriceDto()
    {
        return $this->priceDto;
    }

    /**
     * @param float $priceDto
     */
    public function setPriceDto($priceDto)
    {
        $this->priceDto = $priceDto;
    }

    /**
     * @return string
     */
    public function getTypeArticleDto()
    {
        return $this->typeArticleDto;
    }

    /**
     * @param string $typeArticleDto
     */
    public function setTypeArticleDto($typeArticleDto)
    {
        $this->typeArticleDto = $typeArticleDto;
    }

    /**
     * @return int
     */
    public function getStockDto()
    {
        return $this->stockDto;
    }

    /**
     * @param int $stockDto
     */
    public function setStockDto($stockDto)
    {
        $this->stockDto = $stockDto;
    }

    /**
     * @return Bill
     */
    public function getBillsDto()
    {
        return $this->billsDto;
    }

    /**
     * @param Bill $billsDto
     */
    public function setBillsDto($billsDto)
    {
        $this->billsDto = $billsDto;
    }


}