<?php

class TutorRepository implements TutorRepositoryInterface{
    private PDO $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        
    }

    public function checkTable(): bool
    {
        try {
            
                $query = "CREATE TABLE IF NOT EXISTS tutores (
                    id_tutor int(9) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    status tinyint(1) NOT NULL,
                    cpf_pessoa varchar(11) NOT NULL,
                    dtregistro date NOT NULL,
                    FOREIGN KEY (cpf_pessoa) REFERENCES pessoas(cpf)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    
                )";
                    
                 
                $stmt = $this->pdo->prepare($query);
                $stmt->execute();
                
            

             return true;
         } catch (PDOException $e) {
             echo 'something is wrong';
             return false;
         }
    }

    public function save(Tutor $tutor): array
    {
        
        $json = [];
        
        
        try {
            $query = 'INSERT INTO tutores (status, cpf_pessoa, dtregistro) VALUES (?,?,?)';
            $stmt = $this->pdo->prepare($query);
        
            // Check if the prepare statement was successful
            $stmt->execute([
                $tutor->get_status(),
                $tutor->get_cpf(),
                $tutor->get_dtregistro()
            ]);
                // Define and return the message
                    $json['id_tutor'] = $this->pdo->lastInsertId();
                    $json['status'] = $tutor->get_status();
                    $json['cpf_pessoa'] = $tutor->get_cpf();
                    $json['dtregistro'] = $tutor->get_dtregistro();
                    
                 
            
        } catch (PDOException $e) {
            $errorCode = $stmt->errorCode();
                    if ($errorCode === '23000') {
                        $json['message'] = 'Duplicate entry: This record already exists.';
                    } else {
                        $json['message'] = 'Erro: ' . $e->getMessage();
                    }
            
        }
        
        return $json;
        
    }

    public function search(string $query, string $type): array
    {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM tutores t1 INNER JOIN pessoas t2 ON t1.cpf_pessoa = t2.cpf INNER JOIN enderecos t3 ON t2.fkendereco = t3.id_endereco WHERE t2.? LIKE ?');
            $stmt->execute(["%$query%", "%$type%"]);
            $tutoresData = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $tutores = [];
            foreach($tutoresData as $tutorData){
                $tutores[] = new Tutor(
                $tutorData['id_tutor'],
                $tutorData['status'],
                $tutorData['cpf_pessoa'],
                $tutorData['dtregistro'],);
            }
            return $tutores;
        } catch (PDOException $e) {
            // Handle the database error
            echo 'Error: ' . $e->getMessage();
            return [];
        }
    }

    public function delete(Tutor $tutor): bool
    {
        // $this->pdo->beginTransaction();

        $stmtUpdate = $this->pdo->prepare("SET FOREIGN_KEY_CHECKS = 0");
        $stmtUpdate->execute();


        $stmtDelete = $this->pdo->prepare("DELETE FROM tutores WHERE id_tutor = ?");
        if($stmtDelete->execute([$tutor->get_idTutor()]))
        {
            return true;
        }
        else return false;
        $stmtUpdate = $this->pdo->prepare("SET FOREIGN_KEY_CHECKS = 1");
        $stmtUpdate->execute();
        // $this->pdo->commit();
        
    }

    public function update(Tutor $tutor): array
    {
        $json = [];
        $stmt = $this->pdo->prepare("UPDATE tutores SET  
        status = ?, 
        cpf_pessoa = ?, 
        dtregistro = ? WHERE id_tutor = ?");

        $stmt->execute([
            $tutor->get_status(),
            $tutor->get_cpf(),
            $tutor->get_dtregistro(),
            $tutor->get_idTutor()]);

            $json['id_tutor'] = $tutor->get_idTutor();
            $json['status'] = $tutor->get_status();
            $json['cpf_pessoa'] = $tutor->get_cpf();
            $json['dtregistro'] = $tutor->get_dtregistro();

        return $json;
    }
    
    

    public function getByid(int $id): ?Tutor
    {
        $stmt = $this->pdo->prepare('SELECT * FROM tutores WHERE id_tutor = ?');
        $stmt->execute([$id]);

        $tutorData = $stmt->fetch(PDO::FETCH_ASSOC);

        if($tutorData)
        {
            $tutor = new Tutor(
                $tutorData['status'],
                $tutorData['dtregistro'],
                $tutorData['cpf_pessoa']);
                $tutor->set_idTutor($tutorData['id_tutor']);
            return $tutor;
        }else {return null;}
        
    }
    
    public function getAll(): array{
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM tutores');
            $stmt->execute();
            $tutoresData = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $tutores = [];
            foreach($tutoresData as $tutorData){
                $tutor = new Tutor(
                    $tutorData['status'],
                    $tutorData['dtregistro'],
                    $tutorData['cpf_pessoa']);
                    $tutor->set_idTutor($tutorData['id_tutor']);
                $tutores[] = $tutor;
            }
            return $tutores;
        } catch (PDOException $e) {
            // Handle the database error
            echo 'Error: ' . $e->getMessage();
            return [];
        }
    }
}
