<?php
namespace App\IEntity;

class Asociado implements IEntity {
    const RUTA_LOGOS_ASOCIADOS = 'images/asociados/';

    private $id;
    private $nombre;
    private $logo;
    private $descripcion;

    public function __construct(string $nombre = '', string $logo = '', string $descripcion = '') {
        $this->id = null;
        $this->nombre = $nombre;
        $this->logo = $logo;
        $this->descripcion = $descripcion;
    }

    public function getId() : ?int {
        return $this->id;
    }

    public function getNombre() : string {
        return $this->nombre;
    }

    public function getLogo() : string {
        return $this->logo;
    }

    public function getDescripcion() : string {
        return $this->descripcion;
    }

    public function setNombre(string $nombre) : Asociado {
        $this->nombre = $nombre;
        return $this;
    }

    public function setLogo(string $logo) : Asociado {
        $this->logo = $logo;
        return $this;
    }

    public function setDescripcion(string $descripcion) : Asociado {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function getUrlLogo() : string {
        return self::RUTA_LOGOS_ASOCIADOS . $this->getLogo();
    }

    public function __toString() : string {
        return $this->getDescripcion();
    }

    public function toArray() : array {
        return [
            'id'=>$this->getId(),
            'nombre'=>$this->getNombre(),
            'logo'=>$this->getLogo(),
            'descripcion'=>$this->getDescripcion(),
        ];
    }
}