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

        $tutor = $this->tutorRepository->getById($id);
        $people = $this->peopleRepository->getByCpf($tutor->get_cpf());
        $address = $this->addressRepository->getById($people->get_endereco()->getId());
        if($tutorData !== null)
        {
        if ($tutor) {
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