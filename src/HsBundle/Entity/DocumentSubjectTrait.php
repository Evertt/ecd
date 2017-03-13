<?php

namespace HsBundle\Entity;

trait DocumentSubjectTrait
{
    /**
     * @var Document[]
     *
     * @ORM\ManyToMany(targetEntity="Document", cascade={"persist"})
     * @ORM\JoinTable(inverseJoinColumns={@ORM\JoinColumn(unique=true)})
     */
    private $documenten;

    /**
     * @return Document[]
     */
    public function getDocumenten()
    {
        return $this->documenten;
    }

    /**
     * @param Document $document
     *
     * @return self
     */
    public function addDocument(Document $document)
    {
        $this->documenten[] = $document;

        return $this;
    }
}
