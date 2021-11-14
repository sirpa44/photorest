<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\PinRepository;

class PhotosController extends AbstractController
{
    /**
     * @var PinRepository $pinRepository
     */
    protected $pinRepository; 
    
    public function __construct(PinRepository $pinRepository)
    {
        $this->pinRepository = $pinRepository;
    }
    
    public function home(): Response
    {
        $pins = $this->pinRepository->findAll();
        
        return $this->render('photos/index.html.twig', compact('pins'));
    }
}
