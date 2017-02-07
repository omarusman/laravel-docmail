<?php namespace Oozman\Docmail;

/**
 * Class DocmailTemplateFile
 * @package Oozman\Docmail
 * @author Omar Usman <hello@omarusman.com>
 */
class DocmailTemplateFile implements \ArrayAccess
{
    use DocmailArrayAccessTrait;

    protected $TemplateName = '';
    protected $FileName = '';
    protected $FileData = '';
    protected $DocumentType = 'A4Letter';
    protected $AddressedDocument = false;
    protected $AddressFontCode = 'Arial 10';
    protected $TemplateType = 'Document';
    protected $BackgroundName = '';
    protected $CanBeginOnBack = true;
    protected $NextTemplateCanBeginOnBack = true;
    protected $ProtectedAreaPassword = '';
    protected $EncryptionPassword = '';
    protected $BleedSupplied = false;
    protected $Copies = 1;
    protected $Instances = 1;
    protected $InstancePageNumbers = '';
    protected $CycleInstancesOnCopies = false;

    /**
     * Create an DocmailTemplateFile object with an specific file already loaded.
     *
     * @param $filename
     * @return static
     * @throws DocmailException
     */
    public static function loadFromFile($filename)
    {
        if(!file_exists($filename)) {
            throw new DocmailException("File '{$filename}' not found.");
        }

        $instance = new static;
        $instance->setFileName(basename($filename));
        $instance->setFileData(file_get_contents($filename));

        return $instance;
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
        return $this->TemplateName;
    }

    /**
     * @param string $TemplateName
     * @return DocmailTemplateFile
     */
    public function setTemplateName($TemplateName)
    {
        $this->TemplateName = $TemplateName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return DocmailTemplateFile
     */
    public function setFileName($FileName)
    {
        $this->FileName = $FileName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileData()
    {
        return base64_decode($this->FileData);
    }

    /**
     * @param string $FileData
     * @return DocmailTemplateFile
     */
    public function setFileData($FileData)
    {
        $this->FileData = base64_encode($FileData);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }

    /**
     * Specify as �A4Letter�, �A44PageBooklet�, �GreetingCardA5�, �PostcardA5�, �PostcardA6�, �PostcardA5Right� or �PostcardA6Right�.
     * Postcard A5 and A6 have a left side address panel; use the Right variations for a right side address panel. The
     * document type must be valid for the product type supplied when calling Create Mailing. The document type must be
     * available for your account, please see the Docmail website to confirm the document types available.
     * The document type cannot vary between different templates on the same mailing.
     *
     * @param mixed $DocumentType
     * @return DocmailTemplateFile
     */
    public function setDocumentType($DocumentType)
    {
        $this->DocumentType = $DocumentType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressedDocument()
    {
        return $this->AddressedDocument;
    }

    /**
     * Add the address panel to the document. The first template uploaded onto a mail pack will be
     * automatically set as an addressed document.
     *
     * @param mixed $AddressedDocument
     * @return DocmailTemplateFile
     */
    public function setAddressedDocument($AddressedDocument)
    {
        $this->AddressedDocument = $AddressedDocument;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressFontCode()
    {
        return $this->AddressFontCode;
    }

    /**
     * Specify as "Arial 10", "Arial 11", "Arial 12", "Arial 13", "Arial 14", "Courier 10", "Courier 11", "Courier 12",
     * "Courier 13", "Courier 14", "Gotham 9", "Gotham 10", "Gotham 12", "Helvetica 12", "Helvetica 13", "Helvetica 14",
     * "MetaOT 10", "MetaOT 11", "MetaOT 12", "Trebuchet 10", "Trebuchet 11", "Trebuchet 12", "Verdana 10",
     * "Verdana 11", or "Verdana 12".
     * Defaults to �Arial 10�.
     *
     * @param mixed $AddressFontCode
     * @return DocmailTemplateFile
     */
    public function setAddressFontCode($AddressFontCode)
    {
        $this->AddressFontCode = $AddressFontCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateType()
    {
        return $this->TemplateType;
    }

    /**
     * @param string $TemplateType
     * @return DocmailTemplateFile
     */
    public function setTemplateType($TemplateType)
    {
        $this->TemplateType = $TemplateType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundName()
    {
        return $this->BackgroundName;
    }

    /**
     * @param string $BackgroundName
     * @return DocmailTemplateFile
     */
    public function setBackgroundName($BackgroundName)
    {
        $this->BackgroundName = $BackgroundName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanBeginOnBack()
    {
        return $this->CanBeginOnBack;
    }

    /**
     * @param boolean $CanBeginOnBack
     * @return DocmailTemplateFile
     */
    public function setCanBeginOnBack($CanBeginOnBack)
    {
        $this->CanBeginOnBack = $CanBeginOnBack;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isNextTemplateCanBeginOnBack()
    {
        return $this->NextTemplateCanBeginOnBack;
    }

    /**
     * @param boolean $NextTemplateCanBeginOnBack
     * @return DocmailTemplateFile
     */
    public function setNextTemplateCanBeginOnBack($NextTemplateCanBeginOnBack)
    {
        $this->NextTemplateCanBeginOnBack = $NextTemplateCanBeginOnBack;
        return $this;
    }

    /**
     * @return string
     */
    public function getProtectedAreaPassword()
    {
        return $this->ProtectedAreaPassword;
    }

    /**
     * @param string $ProtectedAreaPassword
     * @return DocmailTemplateFile
     */
    public function setProtectedAreaPassword($ProtectedAreaPassword)
    {
        $this->ProtectedAreaPassword = $ProtectedAreaPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getEncryptionPassword()
    {
        return $this->EncryptionPassword;
    }

    /**
     * @param string $EncryptionPassword
     * @return DocmailTemplateFile
     */
    public function setEncryptionPassword($EncryptionPassword)
    {
        $this->EncryptionPassword = $EncryptionPassword;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isBleedSupplied()
    {
        return $this->BleedSupplied;
    }

    /**
     * @param boolean $BleedSupplied
     * @return DocmailTemplateFile
     */
    public function setBleedSupplied($BleedSupplied)
    {
        $this->BleedSupplied = $BleedSupplied;
        return $this;
    }

    /**
     * @return int
     */
    public function getCopies()
    {
        return $this->Copies;
    }

    /**
     * @param int $Copies
     * @return DocmailTemplateFile
     */
    public function setCopies($Copies)
    {
        $this->Copies = $Copies;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstances()
    {
        return $this->Instances;
    }

    /**
     * @param int $Instances
     * @return DocmailTemplateFile
     */
    public function setInstances($Instances)
    {
        $this->Instances = $Instances;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstancePageNumbers()
    {
        return $this->InstancePageNumbers;
    }

    /**
     * @param string $InstancePageNumbers
     * @return DocmailTemplateFile
     */
    public function setInstancePageNumbers($InstancePageNumbers)
    {
        $this->InstancePageNumbers = $InstancePageNumbers;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCycleInstancesOnCopies()
    {
        return $this->CycleInstancesOnCopies;
    }

    /**
     * @param boolean $CycleInstancesOnCopies
     * @return DocmailTemplateFile
     */
    public function setCycleInstancesOnCopies($CycleInstancesOnCopies)
    {
        $this->CycleInstancesOnCopies = $CycleInstancesOnCopies;
        return $this;
    }


}