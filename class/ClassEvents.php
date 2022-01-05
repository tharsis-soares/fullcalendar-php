<?php
namespace Classes;

use Models\ModelConect;

class ClassEvents extends ModelConect {

    public function getEventos() {
        $b=$this->conectDB()->prepare("select * from events");
        $b->execute();
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }

    public function createEvent($id=0, $title, $description, $color='blue', $start, $end) {
        $b=$this->conectDB()->prepare("insert into events (?,?,?,?,?,?)");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->bindParam(2, $title, \PDO::PARAM_STR);
        $b->bindParam(3, $description, \PDO::PARAM_STR);
        $b->bindParam(4, $color, \PDO::PARAM_STR);
        $b->bindParam(5, $start, \PDO::PARAM_STR);
        $b->bindParam(6, $end, \PDO::PARAM_STR); 
        $b->execute(); 
    }

    public function getEventsById($id) {
        $b=$this->conectDB()->prepare("select * from events where id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->execute();
        return $f=$b->fetch(\PDO::FETCH_ASSOC);
    }

    public function updateEvent($id, $title, $description, $start) {
        $b=$this->conectDB()->prepare("update events set title=?, description=?, start=? where id=?");
        $b->bindParam(1, $title, \PDO::PARAM_STR);
        $b->bindParam(2, $description, \PDO::PARAM_STR);
        $b->bindParam(3, $start, \PDO::PARAM_STR);
        $b->bindParam(4, $id, \PDO::PARAM_INT);
        $b->execute(); 
    }

        public function deleteEvent($id) {
        $b=$this->conectDB()->prepare("delete from events where id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->execute(); 
    }
}
