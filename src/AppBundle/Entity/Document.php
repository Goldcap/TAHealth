<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity
 */
class Document
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_event_id", type="integer", nullable=true)
     */
    private $fkEventId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_presenter_id", type="integer", nullable=true)
     */
    private $fkPresenterId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_presentation_id", type="integer", nullable=true)
     */
    private $fkPresentationId;

    /**
     * @var string
     *
     * @ORM\Column(name="document_name", type="string", length=255, nullable=true)
     */
    private $documentName;

    /**
     * @var string
     *
     * @ORM\Column(name="document_hash", type="string", length=255, nullable=true)
     */
    private $documentHash;

    /**
     * @var integer
     *
     * @ORM\Column(name="document_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $documentId;



    /**
     * Set fkEventId
     *
     * @param integer $fkEventId
     * @return Document
     */
    public function setFkEventId($fkEventId)
    {
        $this->fkEventId = $fkEventId;

        return $this;
    }

    /**
     * Get fkEventId
     *
     * @return integer 
     */
    public function getFkEventId()
    {
        return $this->fkEventId;
    }

    /**
     * Set fkPresenterId
     *
     * @param integer $fkPresenterId
     * @return Document
     */
    public function setFkPresenterId($fkPresenterId)
    {
        $this->fkPresenterId = $fkPresenterId;

        return $this;
    }

    /**
     * Get fkPresenterId
     *
     * @return integer 
     */
    public function getFkPresenterId()
    {
        return $this->fkPresenterId;
    }

    /**
     * Set fkPresentationId
     *
     * @param integer $fkPresentationId
     * @return Document
     */
    public function setFkPresentationId($fkPresentationId)
    {
        $this->fkPresentationId = $fkPresentationId;

        return $this;
    }

    /**
     * Get fkPresentationId
     *
     * @return integer 
     */
    public function getFkPresentationId()
    {
        return $this->fkPresentationId;
    }

    /**
     * Set documentName
     *
     * @param string $documentName
     * @return Document
     */
    public function setDocumentName($documentName)
    {
        $this->documentName = $documentName;

        return $this;
    }

    /**
     * Get documentName
     *
     * @return string 
     */
    public function getDocumentName()
    {
        return $this->documentName;
    }

    /**
     * Set documentHash
     *
     * @param string $documentHash
     * @return Document
     */
    public function setDocumentHash($documentHash)
    {
        $this->documentHash = $documentHash;

        return $this;
    }

    /**
     * Get documentHash
     *
     * @return string 
     */
    public function getDocumentHash()
    {
        return $this->documentHash;
    }

    /**
     * Get documentId
     *
     * @return integer 
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }
}
