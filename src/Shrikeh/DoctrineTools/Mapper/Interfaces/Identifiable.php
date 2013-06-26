<?php
namespace Shrikeh\DoctrineTools\Mapper\Interfaces;

interface Identifiable
{
    public function getId();

    public function setId($id);
}
