<?php

class UsersModel extends Model {

    public function getUsers() {
        $sql = "SELECT * FROM users";
        $result = array();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id =:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return true;
    }


}