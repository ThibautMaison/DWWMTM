<?php
interface IFormatage{
    public function formatageChaine($chaine);
    public function formatageNombre($nombre);
    public function formatageDate($date);
}

interface Iformatage2{
    public function formatageNom($nom);
    public function formatageCp($Cp);
}
?>