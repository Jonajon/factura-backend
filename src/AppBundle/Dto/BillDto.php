<?php


namespace AppBundle\Dto;


class BillDto
{
    /**
     * @var int
     */
    private $idDto;

    /**
     * @var User
     */
    private $userDto;

    /**
     * @var Article
     */
    private $articlesDto;

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
     * @return User
     */
    public function getUserDto()
    {
        return $this->userDto;
    }

    /**
     * @param User $userDto
     */
    public function setUserDto($userDto)
    {
        $this->userDto = $userDto;
    }

    /**
     * @return Article
     */
    public function getArticlesDto()
    {
        return $this->articlesDto;
    }

    /**
     * @param Article $articlesDto
     */
    public function setArticlesDto($articlesDto)
    {
        $this->articlesDto = $articlesDto;
    }


}