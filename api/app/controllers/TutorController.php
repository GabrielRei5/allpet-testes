<?php
require_once('../autoload.php');
require_once('../UseCases/CreateTutor.php');
require_once('../UseCases/ListAllTutor.php');

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\HttpNotFoundException;
use Slim\Psr7\Factory\StreamFactory;



// require_once('../config/DB.php');

class TutorController {
    private DB $db;
    private CreateTutor $createTutor;
    private ListAllTutor $tutors;
    private UpdateTutor $upTutor;
    
    public function __construct() {
        $this->db = new DB();
        $this->createTutor = new CreateTutor(new TutorRepository($this->db->getConnection()), new PeopleRepository($this->db->getConnection()), new AddressRepository($this->db->getConnection()));
        $this->tutors = new ListAllTutor(new TutorRepository($this->db->getConnection()), new PeopleRepository($this->db->getConnection()), new AddressRepository($this->db->getConnection()));
        $this->upTutor = new UpdateTutor(new TutorRepository($this->db->getConnection()), new PeopleRepository($this->db->getConnection()), new AddressRepository($this->db->getConnection()));
    }

    public function createTutor(Request $request, Response $response) {
        // Validate and process the request data
    
        $data = json_decode($request->getBody(), true);
        // Call the use case to create a new user
        if($data)
        {
        $test = $this->createTutor->execute($data);

         // Create a JSON response
         $responseData = [
            "message" => "Data received successfully",
            "data" => $test
        ];

        
         // Set the response status code to 201 (Created)
         $response = $response->withStatus(201);

         // Set the response content type to JSON
         $response = $response->withHeader('Content-Type', 'application/json');
 
         // Write the JSON-encoded data to the response body
         $response->getBody()->write(json_encode($responseData));
        
        return $response;
        
        }
        else{
            // Create a JSON response for invalid data
        $responseData = [
            "message" => "Invalid user data"
        ];

        // Set the response status code to 400 (Bad Request)
        $response = $response->withStatus(400);

        // Set the response content type to JSON
        $response = $response->withHeader('Content-Type', 'application/json');

        // Write the JSON-encoded data to the response body
        $response->getBody()->write(json_encode($responseData));

        return $response;
        }
        // Return a response
        
    }

    public function getAllTutor(Request $request, Response $response): Response
    {
        
        $tutors = $this->tutors->execute();
        $response->getBody()->write(json_encode($tutors));
        return $response->withHeader('Content-Type', 'application/json');

    }

    public function updateTutor(Request $request, Response $response, $args): Response {
        // Call the use case to update a tutor
        $tutorId = $args['id'];
        $tutor = $this->upTutor->execute($request->getParsedBody(), $tutorId);

        // Return a response
        if ($tutor !== null) {
            $response->getBody()->write(json_encode($tutor));
            $response->withStatus(200);
            return $response;
        } else {
            $response->withStatus(500);
            $response->getBody()->write(json_encode(["message" => "Tutor not found"]));
            return $response;
        }
    }
}
