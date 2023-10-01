<?php
require_once('../Infrastructure/TutorRepository.php');
require_once('../Infrastructure/PeopleRepository.php');
require_once('../Infrastructure/AddressRepository.php');

require_once '../vendor/autoload.php';





class UpdateTutor
{
    public function __construct(private TutorRepositoryInterface $tutorRepository, private PeopleRepositoryInterface $peopleRepository, private AddressRepositoryInterface $addressRepository) {

    }

    public function execute(?array $tutorData, int $id): ?array {

        
        
        
        if($tutorData !== null)
        {
            $tutor = $this->tutorRepository->getById($id);
            
        if ($tutor) {
            $people = $this->peopleRepository->getByCpf($tutor->get_cpf());
            if($people->get_endereco() !== null){
                $address = $this->addressRepository->getById($people->get_endereco()->getId());
    
                
            }else{
                $address = new Address(
                $tutorData['cep'],
                $tutorData['rua'],
                $tutorData['num_casa'],
                $tutorData['cidade'],
                $tutorData['estado'],
                $tutorData['bairro']);
                $addressIns = $this->addressRepository->save($address);
                $address->setId($addressIns['id']);
            }
            $tutorUp = new Tutor( 
                $tutorData['status'],
                $tutorData['dtregistro'],
                $tutorData['cpf'],
                $tutorData['nome'],
                $tutorData['rg'],
                $tutorData['telefone'],
                $tutorData['email'],
                $tutorData['tipo'],
                $tutorData['dtnasc'],
                new Address(
                    $tutorData['cep'],
                    $tutorData['rua'],
                    $tutorData['num_casa'],
                    $tutorData['cidade'],
                    $tutorData['estado'],
                    $tutorData['bairro'],
                    $address->getId()),
                $id);

            $this->tutorRepository->update($tutorUp);
            $this->peopleRepository->update($tutorUp);
            $this->addressRepository->update($tutorUp->get_endereco());
            return ['message' => 'Tutor changed'];
            
        }else return ['tutor'];
        
    }else return ['null'];
}

}

?>