<?php namespace Oozman\Docmail;

/**
 * Class DocmailAddress
 * @package Oozman\Docmail
 * @author Omar Usman <hello@omarusman.com>
 */
class DocmailAddress implements \ArrayAccess
{
    use DocmailArrayAccessTrait;

    protected $Address1 = '';
    protected $Address2 = '';
    protected $Address3 = '';
    protected $Address4 = '';
    protected $Address5 = '';
    protected $Address6 = '';
    protected $UseForProof = false;
    protected $Title = '';
    protected $FirstName = '';
    protected $Surname = '';
    protected $Fullname = '';
    protected $JobTitle = '';
    protected $CompanyName = '';
    protected $Email = '';
    protected $Telephone = '';
    protected $DirectLine = '';
    protected $Mobile = '';
    protected $Facsimile = '';
    protected $ExtraInfo = '';
    protected $Notes = '';
    protected $CustomerAddressID = '';
    protected $CustomerImportID = '';
    protected $StreamPages1 = '';
    protected $StreamPages2 = '';
    protected $StreamPages3 = '';
    protected $Custom1 = '';
    protected $Custom2 = '';
    protected $Custom3 = '';
    protected $Custom4 = '';
    protected $Custom5 = '';
    protected $Custom6 = '';
    protected $Custom7 = '';
    protected $Custom8 = '';
    protected $Custom9 = '';
    protected $Custom10 = '';

    /**
     * Create an basic instance of an address.
     *
     * @param string $fullname
     * @param string $address1
     * @param string $address2
     * @param string $address3
     * @param string $address4
     * @return static
     */
    public static function basic($fullname, $address1, $address2, $address3 = '', $address4 = '')
    {
        $address = new static;
        $address->setFullname($fullname);
        for($i = 1; $i <= 4; $i++) $address->{'Address'.$i} = eval('return $address'.$i.';');
        return $address;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return DocmailAddress
     */
    public function setAddress1($Address1)
    {
        $this->Address1 = $Address1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return DocmailAddress
     */
    public function setAddress2($Address2)
    {
        $this->Address2 = $Address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress3()
    {
        return $this->Address3;
    }

    /**
     * @param string $Address3
     * @return DocmailAddress
     */
    public function setAddress3($Address3)
    {
        $this->Address3 = $Address3;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress4()
    {
        return $this->Address4;
    }

    /**
     * @param string $Address4
     * @return DocmailAddress
     */
    public function setAddress4($Address4)
    {
        $this->Address4 = $Address4;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress5()
    {
        return $this->Address5;
    }

    /**
     * @param string $Address5
     * @return DocmailAddress
     */
    public function setAddress5($Address5)
    {
        $this->Address5 = $Address5;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress6()
    {
        return $this->Address6;
    }

    /**
     * @param string $Address6
     * @return DocmailAddress
     */
    public function setAddress6($Address6)
    {
        $this->Address6 = $Address6;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isUseForProof()
    {
        return $this->UseForProof;
    }

    /**
     * Whether to use this address on the proof. Up to 3 addresses can be flagged as use for proof for mailing
     * lists of up to 500 addresses. Mailing lists with 500 or more address can have up to 10 addresses flagged as
     * use for proof.
     *
     * @param boolean $UseForProof
     * @return DocmailAddress
     */
    public function setUseForProof($UseForProof)
    {
        $this->UseForProof = $UseForProof;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return DocmailAddress
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return DocmailAddress
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * @param string $Surname
     * @return DocmailAddress
     */
    public function setSurname($Surname)
    {
        $this->Surname = $Surname;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullname()
    {
        return $this->Fullname;
    }

    /**
     * @param string $Fullname
     * @return DocmailAddress
     */
    public function setFullname($Fullname)
    {
        $this->Fullname = $Fullname;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
        return $this->JobTitle;
    }

    /**
     * @param string $JobTitle
     * @return DocmailAddress
     */
    public function setJobTitle($JobTitle)
    {
        $this->JobTitle = $JobTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return DocmailAddress
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return DocmailAddress
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * @param string $Telephone
     * @return DocmailAddress
     */
    public function setTelephone($Telephone)
    {
        $this->Telephone = $Telephone;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirectLine()
    {
        return $this->DirectLine;
    }

    /**
     * @param string $DirectLine
     * @return DocmailAddress
     */
    public function setDirectLine($DirectLine)
    {
        $this->DirectLine = $DirectLine;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * @param string $Mobile
     * @return DocmailAddress
     */
    public function setMobile($Mobile)
    {
        $this->Mobile = $Mobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getFacsimile()
    {
        return $this->Facsimile;
    }

    /**
     * @param string $Facsimile
     * @return DocmailAddress
     */
    public function setFacsimile($Facsimile)
    {
        $this->Facsimile = $Facsimile;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo()
    {
        return $this->ExtraInfo;
    }

    /**
     * @param string $ExtraInfo
     * @return DocmailAddress
     */
    public function setExtraInfo($ExtraInfo)
    {
        $this->ExtraInfo = $ExtraInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return DocmailAddress
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerAddressID()
    {
        return $this->CustomerAddressID;
    }

    /**
     * @param string $CustomerAddressID
     * @return DocmailAddress
     */
    public function setCustomerAddressID($CustomerAddressID)
    {
        $this->CustomerAddressID = $CustomerAddressID;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerImportID()
    {
        return $this->CustomerImportID;
    }

    /**
     * @param string $CustomerImportID
     * @return DocmailAddress
     */
    public function setCustomerImportID($CustomerImportID)
    {
        $this->CustomerImportID = $CustomerImportID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreamPages1()
    {
        return $this->StreamPages1;
    }

    /**
     * @param string $StreamPages1
     * @return DocmailAddress
     */
    public function setStreamPages1($StreamPages1)
    {
        $this->StreamPages1 = $StreamPages1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreamPages2()
    {
        return $this->StreamPages2;
    }

    /**
     * @param string $StreamPages2
     * @return DocmailAddress
     */
    public function setStreamPages2($StreamPages2)
    {
        $this->StreamPages2 = $StreamPages2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreamPages3()
    {
        return $this->StreamPages3;
    }

    /**
     * @param string $StreamPages3
     * @return DocmailAddress
     */
    public function setStreamPages3($StreamPages3)
    {
        $this->StreamPages3 = $StreamPages3;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustom1()
    {
        return $this->Custom1;
    }

    /**
     * @param string $Custom1
     * @return DocmailAddress
     */
    public function setCustom1($Custom1)
    {
        $this->Custom1 = $Custom1;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustom2()
    {
        return $this->Custom2;
    }

    /**
     * @param string $Custom2
     * @return DocmailAddress
     */
    public function setCustom2($Custom2)
    {
        $this->Custom2 = $Custom2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustom3()
    {
        return $this->Custom3;
    }

    /**
     * @param string $Custom3
     * @return DocmailAddress
     */
    public function setCustom3($Custom3)
    {
        $this->Custom3 = $Custom3;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustom4()
    {
        return $this->Custom4;
    }

    /**
     * @param string $Custom4
     * @return DocmailAddress
     */
    public function setCustom4($Custom4)
    {
        $this->Custom4 = $Custom4;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustom5()
    {
        return $this->Custom5;
    }

    /**
     * @param string $Custom5
     * @return DocmailAddress
     */
    public function setCustom5($Custom5)
    {
        $this->Custom5 = $Custom5;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustom6()
    {
        return $this->Custom6;
    }

    /**
     * @param string $Custom6
     * @return DocmailAddress
     */
    public function setCustom6($Custom6)
    {
        $this->Custom6 = $Custom6;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustom7()
    {
        return $this->Custom7;
    }

    /**
     * @param string $Custom7
     * @return DocmailAddress
     */
    public function setCustom7($Custom7)
    {
        $this->Custom7 = $Custom7;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustom8()
    {
        return $this->Custom8;
    }

    /**
     * @param string $Custom8
     * @return DocmailAddress
     */
    public function setCustom8($Custom8)
    {
        $this->Custom8 = $Custom8;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustom9()
    {
        return $this->Custom9;
    }

    /**
     * @param string $Custom9
     * @return DocmailAddress
     */
    public function setCustom9($Custom9)
    {
        $this->Custom9 = $Custom9;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustom10()
    {
        return $this->Custom10;
    }

    /**
     * @param string $Custom10
     * @return DocmailAddress
     */
    public function setCustom10($Custom10)
    {
        $this->Custom10 = $Custom10;
        return $this;
    }


}