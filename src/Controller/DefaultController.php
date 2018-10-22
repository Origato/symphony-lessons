<?php
/**
 * Created by PhpStorm.
 * User: shiro
 * Date: 22.10.18
 * Time: 14:46
 */

namespace App\Controller;

use App\Service\PageServiceInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends AbstractController
{
    private $service;

    public function __construct(PageServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * @Route("/")
     */

    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'page' => $this->service->getData(),
        ]);
    }

    /**
     * @Route("/contacts/")
     */

    public function show()
    {
        return $this->render("default/contacts.html.twig", [
            'page' => $this->service->getContacts(),
        ]);
    }
}