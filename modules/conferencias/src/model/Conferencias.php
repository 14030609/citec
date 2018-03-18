<?php
/**
 * Created by PhpStorm.
 * User: niluxer
 * Date: 3/7/18
 * Time: 20:35
 */

class Conferencias
{
    private $id;
    private $titulo;
    private $resumen;
    private $fecha;
    private $lugar;
    private $hora;
    private $nombre;
    private $curriculum;

    /**
     * FaqDao constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $question
     */
    public function setTitulo($titulo)
    {
        $this->question = $titulo;
    }

    /**
     * @return mixed
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * @param mixed $question
     */
    public function setResumen($resumen)
    {
        $this->question = $resumen;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $question
     */
    public function setFecha($fecha)
    {
        $this->question = $fecha;
    }

    /**
     * @return mixed
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * @param mixed $question
     */
    public function setLugar($lugar)
    {
        $this->question = $lugar;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $question
     */
    public function setHora($hora)
    {
        $this->question = $hora;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $question
     */
    public function setNombre($nombre)
    {
        $this->question = $nombre;
    }

    /**
     * @return mixed
     */
    public function getCurriculum()
    {
        return $this->curriculum;
    }

    /**
     * @param mixed $question
     */
    public function setCurriculum($curriculum)
    {
        $this->question = $curriculum;
    }





}