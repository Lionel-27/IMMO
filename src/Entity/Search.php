<?php

namespace App\Entity;


class Search
{


    /**
     * (type="string", length=255)
     * @var string|null
     */
    private $searchTitre;

    /**
     * (type="string", length=255)
     * @var string|null
     */
    private $categorie;

    /**
     * (type="string", length=255)
     * @var string|null
     */
    private $type;

    /**
     * (type="integer")
     * @var string|null
     */
    private $prixMax;


    /**
     * @return string|null
     */
     public function getSearchTitre(): ?string
    {
        return $this->searchTitre;
    }

    /**
     * @param string|null $search
     * @return Search
     */
    public function setSearchTitre(string $search): search
    {
        $this->searchTitre = $search;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    /**
     * @param string|null $search
     * @return Search
     */
    public function setCategorie(string $search): self
    {
        $this->categorie = $search;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $search
     * @return Search
     */
    public function setType(string $search): self
    {
        $this->type = $search;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getPrixMax(): ?int
    {
        return $this->prixMax;
    }
    /**
     * @param integer|null $search
     * @return Search
     */
    public function setPrixMax(int $search): self
    {
        $this->PrixMax = $search;

        return $this;
    }

   
}

    
 
    

     


     

    








