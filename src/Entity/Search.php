<?php

namespace App\Entity;


class Search
{


    /**
     * @ORM\Column(type="string", length=255)
     * @var string|null
     */
    private $searchTitre;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string|null
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string|null
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
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

    public function getPrixMax(): ?int
    {
        return $this->prix;
    }

    public function setPrixMax(int $search): self
    {
        $this->PrixMax = $prix;

        return $this;
    }

   
}

    
 
    

     


     

    








