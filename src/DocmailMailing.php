<?php namespace Hpolthof\Docmail;

/**
 * Class DocmailMailing
 * @package Hpolthof\Docmail
 * @author Paul Olthof <hpolthof@gmail.com>
 */
class DocmailMailing implements \ArrayAccess
{
    use DocmailArrayAccessTrait;

    protected $CustomerApplication = '';
    protected $ProductType = 'A4Letter'; /* A4Letter, A3FoldedSheet, GreetingCard, Postcard */
    protected $DocumentType = 'A4Letter'; /* A4Letter, BusinessCard, GreetingCardA5, PostcardA5, PostcardA6, PostcardA5Right or PostcardA6Right */
    protected $MailingName = '';
    protected $MailingDescription = '';
    protected $IsMono = true;
    protected $IsDuplex = true;
    protected $DeliveryType = 'Standard'; /* Standard or First, addition Returns and Dotpost */
    protected $CourierDeliveryToSelf = false;
    protected $DespatchASAP = true;
    protected $DespatchDate = '';
    protected $AddressNamePrefix = '';
    protected $AddressNameFormat = '';
    protected $DiscountCode = '';
    protected $MinEnvelopeSize = '';

    public function __construct()
    {
        $this->setMono(!config('docmail.defaults.colour'));
        $this->setDuplex(config('docmail.defaults.duplex'));
        $this->setDeliveryType(config('docmail.defaults.delivery'));
    }

    /**
     * @return string
     */
    public function getCustomerApplication()
    {
        return $this->CustomerApplication;
    }

    /**
     * @param string $CustomerApplication
     * @return DocmailMailing
     */
    public function setCustomerApplication($CustomerApplication)
    {
        $this->CustomerApplication = $CustomerApplication;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->ProductType;
    }

    /**
     * Specify as A4Letter, A3FoldedSheet, GreetingCard, or Postcard. If not supplied then uses
     * the Default product selected on the account details screen in the Docmail website. The product type must
     * be available for your account, please see the Docmail website to confirm the products available.
     *
     * @param string $ProductType
     * @return DocmailMailing
     */
    public function setProductType($ProductType)
    {
        $this->ProductType = $ProductType;
        return $this;
    }

    /**
     * Get DocumentType.
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }

    /**
     * Specify as A4Letter, BusinessCard, GreetingCardA5, PostcardA5, PostcardA6, PostcardA5Right or PostcardA6Right.
     *
     * @param string $DocumentType
     * @return DocmailMailing
     */
    public function setDocumentType($DocumentType)
    {
        $this->DocumentType = $DocumentType;
        return $this;
    }


    /**
     * @return string
     */
    public function getMailingName()
    {
        return $this->MailingName;
    }

    /**
     * @param string $MailingName
     * @return DocmailMailing
     */
    public function setMailingName($MailingName)
    {
        $this->MailingName = $MailingName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailingDescription()
    {
        return $this->MailingDescription;
    }

    /**
     * @param string $MailingDescription
     * @return DocmailMailing
     */
    public function setMailingDescription($MailingDescription)
    {
        $this->MailingDescription = $MailingDescription;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isMono()
    {
        return $this->IsMono;
    }

    /**
     * Set this to true for black and white and to false for colour print.
     *
     * See your default settings in the docmail.php config file.
     *
     * @param boolean $IsMono
     * @return DocmailMailing
     */
    public function setMono($IsMono)
    {
        $this->IsMono = $IsMono;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDuplex()
    {
        return $this->IsDuplex;
    }

    /**
     * Set duplex printing to true or false.
     *
     * See your default settings in the docmail.php config file.
     *
     * @param boolean $IsDuplex
     * @return DocmailMailing
     */
    public function setDuplex($IsDuplex)
    {
        $this->IsDuplex = $IsDuplex;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryType()
    {
        return $this->DeliveryType;
    }

    /**
     * Specify the postal option as First or Standard, plus add Returns to enable returns management and add
     * Dotpost to enable Dotpost, e.g. StandardReturnsDotpost. If not supplied then the postal option specified
     * in default mailing options is used.
     *
     * @param string $DeliveryType
     * @return DocmailMailing
     */
    public function setDeliveryType($DeliveryType)
    {
        $this->DeliveryType = $DeliveryType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCourierDeliveryToSelf()
    {
        return $this->CourierDeliveryToSelf;
    }

    /**
     * @param boolean $CourierDeliveryToSelf
     * @return DocmailMailing
     */
    public function setCourierDeliveryToSelf($CourierDeliveryToSelf)
    {
        $this->CourierDeliveryToSelf = $CourierDeliveryToSelf;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDespatchASAP()
    {
        return $this->DespatchASAP;
    }

    /**
     * @param boolean $DespatchASAP
     * @return DocmailMailing
     */
    public function setDespatchASAP($DespatchASAP)
    {
        $this->DespatchASAP = $DespatchASAP;
        return $this;
    }

    /**
     * @return string
     */
    public function getDespatchDate()
    {
        return $this->DespatchDate;
    }

    /**
     * @param string $DespatchDate
     * @return DocmailMailing
     */
    public function setDespatchDate($DespatchDate)
    {
        $this->DespatchDate = $DespatchDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressNamePrefix()
    {
        return $this->AddressNamePrefix;
    }

    /**
     * A prefix for the address name, e.g. To the parent of.
     *
     * @param string $AddressNamePrefix
     * @return DocmailMailing
     */
    public function setAddressNamePrefix($AddressNamePrefix)
    {
        $this->AddressNamePrefix = $AddressNamePrefix;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressNameFormat()
    {
        return $this->AddressNameFormat;
    }

    /**
     * Specify as Full Name, Firstname Surname, Title Initial Surname, Title Surname,
     * or Title Firstname Surname. If not supplied then defaults as specified in default mailing options.
     *
     * @param string $AddressNameFormat
     * @return DocmailMailing
     */
    public function setAddressNameFormat($AddressNameFormat)
    {
        $this->AddressNameFormat = $AddressNameFormat;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->DiscountCode;
    }

    /**
     * @param string $DiscountCode
     * @return DocmailMailing
     */
    public function setDiscountCode($DiscountCode)
    {
        $this->DiscountCode = $DiscountCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getMinEnvelopeSize()
    {
        return $this->MinEnvelopeSize;
    }

    /**
     * Specify as C4, C5 or leave blank. If not supplied then defaults as specified in default mailing options.
     *
     * @param string $MinEnvelopeSize
     * @return DocmailMailing
     */
    public function setMinEnvelopeSize($MinEnvelopeSize)
    {
        $this->MinEnvelopeSize = $MinEnvelopeSize;
        return $this;
    }

}