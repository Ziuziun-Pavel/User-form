<?php

class IndexModel extends Model {
    public function addNewUser($userFullName, $userEmail, $userGender, $userStatus)
    {
        $sql = "INSERT INTO users (`fullName`, `email`, `gender`, `status`)
				VALUES (:name, :email, :gender, :status)
				";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":name", $userFullName, PDO::PARAM_STR);
        $stmt->bindValue(":email", $userEmail, PDO::PARAM_STR);
        $stmt->bindValue(":gender", $userGender, PDO::PARAM_STR);
        $stmt->bindValue(":status", $userStatus, PDO::PARAM_STR);
        $stmt->execute();
        return true;
    }
}