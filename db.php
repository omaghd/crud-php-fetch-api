<?php

require_once "config.php";

class Database extends Config{
    // Insert User into DB
    public function insert($fname, $lname, $email, $phone){
        try{
            $sql = "INSERT INTO oo_users(first_name, last_name, email, phone) VALUES(?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$fname, $lname, $email, $phone]);
            return true;
        }catch(PDOException $e){
            die("Error: " . $e->getMessage());
        }
    }

    // Fetch All Users from DB
    public function retrieve(){
        try{
            $sql = "SELECT * FROM oo_users ORDER BY id DESC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $e){
            die("Error: " . $e->getMessage());
        }
    }

    // Fetch one User from DB
    public function fetchOne($id){
        try{
            $sql = "SELECT * FROM oo_users WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch();
        }catch(PDOException $e){
            die("Error: " . $e->getMessage());
        }
    }

    // Edit a User in DB
    public function update($id, $fname, $lname, $email, $phone){
        try{
            $sql = "UPDATE 
                        oo_users 
                    SET
                        first_name = ?,
                        last_name = ?,
                        email = ?,
                        phone = ?
                    WHERE 
                        id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$fname, $lname, $email, $phone, $id]);
            return true;
        }catch(PDOException $e){
            die("Error: " . $e->getMessage());
        }
    }

    // Delete a User from DB
    public function delete($id){
        try{
            $sql = "DELETE FROM 
                        oo_users 
                    WHERE 
                        id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return true;
        }catch(PDOException $e){
            die("Error: " . $e->getMessage());
        }
    }
}