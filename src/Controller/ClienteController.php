<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Cliente;

class ClienteController extends AbstractController
{
   

    /**
     * @Route("/clientes", name="listar_clientes")
     */

    public function listarClientes(): Response
    {
       
    $clientes = $this->getDoctrine()
    ->getRepository(Cliente::class)
    ->listAll();

    return $this->render('cliente/index.html.twig', ['clientes' => $clientes]);
    }

    /**
     * @Route("/clientes/servidor", name="listar_clientes_servidor")
     */

    public function listarClientesServidor(): Response
    {

    $servidor = '192.168.1.0';
    $clientes = $this->getDoctrine()
    ->getRepository(Cliente::class)
    ->findByServidor($servidor);

    return $this->render('cliente/index.html.twig', ['clientes' => $clientes]);
    }

    public function listarClientesEmpresa(): Response
    {

    $empresa = 'Sicom';
    $clientes = $this->getDoctrine()
    ->getRepository(Cliente::class)
    ->findByServidor($empresa);

    return $this->render('cliente/index.html.twig', ['clientes' => $clientes]);
    }



    /**
     * @Route("/cliente/crear", name="crear_cliente")
     */

    public function crearCliente(EntityManagerInterface $entityManager): Response
    {
         // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        //$entityManager = $this->getDoctrine()->getManager();
        

        $cliente = new Cliente();
        $cliente->setNombre('Pepe');
        $cliente->setMail("bbb@gmail.com");
        $cliente->setTelefono(321654987);
        $cliente->setNotas('Ergonomic and stylish!');
        $cliente->setServidor('192.168.1.1');
        $cliente->setEmpresa('Sicom');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($cliente);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new user with id '.$cliente->getId());
    }

    /**
     * @Route("/cliente/{id}", name="ver_cliente")
     */

    public function verCliente(Cliente $cliente): Response
    {
        $id = $cliente->getId();


            if (!$cliente) {
                throw $this->createNotFoundException(
                    'No hay cliente con id '.$id
                );
            }

        return $this->render('cliente/detalle.html.twig', ['cliente' => $cliente]);
    }


    /**
     * @Route("/cliente/editar/{id}")
     */
    public function editarCliente(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $cliente = $entityManager->getRepository(Cliente::class)->find($id);

        if (!$cliente) {
            throw $this->createNotFoundException(
                'No hay cliente con id '.$id
            );
        }

        $cliente->setNombre('Manolo');
        $entityManager->flush();

        return $this->redirectToRoute('ver_cliente', [
            'id' => $cliente->getId()
        ]);
    }

    /**
     * @Route("/cliente/borrar/{id}")
     */
    public function borrarCliente(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $cliente = $entityManager->getRepository(Cliente::class)->find($id);

        if (!$cliente) {
            throw $this->createNotFoundException(
                'No hay cliente con id '.$id
            );
        }

        $entityManager->remove($cliente);
        $entityManager->flush();

        return new Response('Se ha eliminado el cliente '.$cliente->getId());
    }





}
