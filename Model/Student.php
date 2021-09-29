<?php

require_once('Connection.php');
require_once('IModel.php');

class Student extends Connection implements  IModel
{


private $conn;
private $id,
$name,
$email,
$password,
$phone,
$course,
$status,
$createdAt,
$updatedAt;

private $table;

public function __construct()
{
    $this->conn = $this->getConnection(); 
    #$this->$conn = $this->getConnection();
    $this->table = "student";
}

    
    public function fill($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->phone = $data['phone'];
        $this->course = $data['course'];
        $this->status = $data['status'];
        $this->createdAt = $data['createdAt'];
        $this->updatedAt = $data['updatedAt'];

    }  

    public function findAll()
    {
        $sql = "SELECT * FROM ".$this->table." ORDER BY name ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }  
    public function find($id)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE id=:ID";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array(':ID' => $id));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($result) > 0)
        {
            $this->fill($result[0]);
        }
        return $result;
#print_r($stmt);
        
    }


#print_r($stmt);
    public function search($data)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE course = :COURSE and name LIKE :NAME";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        #print_r($stmt);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function save()
    {
        if($this->id > 0)
        #if(!is_null($this->id > 0)
        {
            //update
            $this->update();
        }else{
            //insert

            $this->insert();

        }
    }

    private function insert()
    {
        $sql = "INSERT INTO ".$this->table." (name,email, password, phone, course, status) 
        VALUES (:NAME, :EMAIL, :PASSWORD, :PHONE, :COURSE, :STATUS)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array(
            ':NAME' => $this->name,
            ':EMAIL' => $this->email,
            ':PASSWORD' => $this->password,
            ':PHONE' => $this->phone,
            ':COURSE' => $this->course,
            ':STATUS' => $this->status
        ));

        if($stmt->rowCount()>0)
            
               return true;
            
            else
            
                return false;
     }

    private function update()
    {
        
                $sql = "UPDATE ".$this->table.
                " SET name = :NAME,
                email = :EMAIL,
                password = :PASSWORD,
                phone = :PHONE,
                course = :COURSE,
                status = :STATUS
                WHERE id = :ID";
print_r($stmt);
                $stmt = $this->conn->prepare($sql);
                $stmt->execute(array(
                ':NAME' => $this->name,
                ':EMAIL' => $this->email,
                ':PASSWORD' => $this->password,
                ':PHONE' => $this->phone,
                ':COURSE' => $this->course,
                ':STATUS' => $this->status,
               ':ID' => $this->id
            ));

                if($stmt->rowCount()>0)
            
               return true;
            
            else
            
                return false;
            
     }




    public function delete($id)
    {
    	$sql = "DELETE FROM ".$this->table." WHERE id = :ID";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array(":ID" => $id));
    
         if($stmt->rowCount()>0)
            
               return true;
            
            else
            
                return false;
       
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId($id)
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt= $updatedAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

}

?>