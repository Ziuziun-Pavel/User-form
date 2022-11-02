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

    public function getUSerById($id) {
        $result = array();
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateUserInfo($userId, $userFullName, $userGender, $userEmail, $userStatus) {
        $sql = "UPDATE users
                SET gender = :gender, fullName = :fullName, email = :email, status = :status
                WHERE id = :id    
                ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":gender", $userGender, PDO::PARAM_STR);
        $stmt->bindValue(":fullName", $userFullName, PDO::PARAM_STR);
        $stmt->bindValue(":email", $userEmail, PDO::PARAM_STR);
        $stmt->bindValue(":status", $userStatus, PDO::PARAM_STR);
        $stmt->bindValue(":id", $userId, PDO::PARAM_INT);
        $stmt->execute();
        return true;
    }



}