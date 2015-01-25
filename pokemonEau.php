<?php
class PokemonEau extends Personnage
{
  public function recevoirDegats()
  {
    if ($this->peutPasAttaquer())
    {
       return self::PERSONNAGE_ATTENTE;
    }

    $this->degats -= mt_rand(10,20);
    
    if ($this->degats <= 0)
    {
      return self::PERSONNAGE_TUE;
    }
    
    return self::PERSONNAGE_FRAPPE;
    return self::PERSONNAGE_ATTENTE;
  }

  public function recevoirDegatsMultiplie()
  {
    
    if ($this->peutPasAttaquer())
    {
       return self::PERSONNAGE_ATTENTE;
    }

    $this->degats -= mt_rand(15,30);
    
    if ($this->degats <= 0)
    {
      return self::PERSONNAGE_TUE;
    }

    $this->timeAttente = time() * 3600;

    return self::PERSONNAGE_FRAPPE;
    return self::PERSONNAGE_ATTENTE;
  }

  public function recevoirDegatsDivise()
  {
    
    if ($this->peutPasAttaquer())
    {
       return self::PERSONNAGE_ATTENTE;
    }

    $this->degats -= mt_rand(5,10);
    
    if ($this->degats <= 0)
    {
      return self::PERSONNAGE_TUE;
    }

    $this->timeAttente = time() * 3600;

    return self::PERSONNAGE_FRAPPE;
    return self::PERSONNAGE_ATTENTE;
  }
}