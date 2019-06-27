<?php


namespace AppBundle\Dto;


class UserDto
{
    /**
     * @var int
     */
    private $idDto;

    /**
     * @var int
     */
    private $identificationDto;

    /**
     * @var string
     */
    private $nameDto;

    /**
     * @var string
     */
    private $lastNameDto;

    /**
     * @var int
     */
    private $phoneDto;

    /**
     * @var string
     */
    private $emailDto;

    /**
     * @var string
     */
    private $addressDto;

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
     * @return int
     */
    public function getIdentificationDto()
    {
        return $this->identificationDto;
    }

    /**
     * @param int $identificationDto
     */
    public function setIdentificationDto($identificationDto)
    {
        $this->identificationDto = $identificationDto;
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
     * @return string
     */
    public function getLastNameDto()
    {
        return $this->lastNameDto;
    }

    /**
     * @param string $lastNameDto
     */
    public function setLastNameDto($lastNameDto)
    {
        $this->lastNameDto = $lastNameDto;
    }

    /**
     * @return int
     */
    public function getPhoneDto()
    {
        return $this->phoneDto;
    }

    /**
     * @param int $phoneDto
     */
    public function setPhoneDto($phoneDto)
    {
        $this->phoneDto = $phoneDto;
    }

    /**
     * @return string
     */
    public function getEmailDto()
    {
        return $this->emailDto;
    }

    /**
     * @param string $emailDto
     */
    public function setEmailDto($emailDto)
    {
        $this->emailDto = $emailDto;
    }

    /**
     * @return string
     */
    public function getAddressDto()
    {
        return $this->addressDto;
    }

    /**
     * @param string $addressDto
     */
    public function setAddressDto($addressDto)
    {
        $this->addressDto = $addressDto;
    }


}