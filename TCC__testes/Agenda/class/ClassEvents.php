<?php

namespace Classes;

use Models\ModelConect;

class ClassEvents extends ModelConect
{
    #trazer os dados de eventos do banco
    public function getEvents()
    {
        $b = $this->conectDB()->prepare("select * from events_agenda");
        $b->execute();
        $f = $b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }

    #Criação da consulta no banco
    public function createEvent($id=0,$title,$description,$color='blue',$start,$end)
    {
        $b = $this->conectDB()->prepare("insert into events_agenda values (?,?,?,?,?,?)");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->bindParam(2, $title, \PDO::PARAM_STR);
        $b->bindParam(3, $description, \PDO::PARAM_STR);
        $b->bindParam(4, $color, \PDO::PARAM_STR);
        $b->bindParam(5, $start, \PDO::PARAM_STR);
        $b->bindParam(6, $end, \PDO::PARAM_STR);
        $b->execute();
    }

    #Buscar eventos pelo id
    public function getEventsById($id)
    {
        $b = $this->conectDB()->prepare("select * from events_agenda where id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->execute();
        return $f=$b->fetch(\PDO::FETCH_ASSOC);
    }

    #Update no banco de dados
    public function updateEvent($id,$title,$description,$start)
    {
        $b = $this->conectDB()->prepare("update events_agenda set title=?, description=?, start=? where id=?");
        $b->bindParam(1, $title, \PDO::PARAM_STR);
        $b->bindParam(2, $description, \PDO::PARAM_STR);
        $b->bindParam(3, $start, \PDO::PARAM_STR);
        $b->bindParam(4, $id, \PDO::PARAM_INT);
        $b->execute();
    }

    #Deletar no banco de dados
    public function deleteEvent($id)
    {
        $b = $this->conectDB()->prepare("delete from events_agenda where id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->execute();
    }
}
