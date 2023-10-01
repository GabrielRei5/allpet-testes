<?php
require_once('../Infrastructure/TutorRepository.php');
require_once('../Infrastructure/PeopleRepository.php');
require_once('../Infrastructure/AddressRepository.php');

require_once '../vendor/autoload.php';





class DeleteTutor
{
    public function __construct(private TutorRepositoryInterface $tutorRepository, private PeopleRepositoryInterface $peopleRepository, private AddressRepositoryInterface $addressRepository) {

    }

    public function execute(int $id): ?array {
        try {
            $tutor = $this->tutorRepository->getById($id);
            
        
        if($tutor !== null)
        {
            $people = $this->peopleRepository->getByCpf($tutor->get_cpf());
            if($people->get_endereco() !== null)
            $address = $this->addressRepository->getById($people->get_endereco()->getId());
        

            $json = [];
            if($this->tutorRepository->delete($tutor) === true){
                $json['Tutor'] = 'Deleted';
                if($this->peopleRepository->delete($people)){
                    $json['People'] = 'Deleted';
                    if($address !== null)
                    {
                        $this->addressRepository->delete($address);
                        $json['Address'] = 'Deleted';

                    }
                    
                }
            }
                
            
            
            
            
            return $json; 
            // ['message' => 'Tutor deleted'];
            
        }else return ['message' => 'Id isnt exist'];
            
        } catch (PDOException $e) {
            // Handle any exceptions and roll back the transaction on failure
            
            return ['error' => 'Failed to delete tutor'];
        }

        // else return ['Id incorrect'];
        
    // }else return ['null'];
}

 }

?>