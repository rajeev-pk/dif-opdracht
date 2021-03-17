<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewProductsController extends AbstractController
{
    /**
     * @Route("/view/products", name="view_products_index")
     * @IsGranted("ROLE_ADMIN")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('view_products/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }
    /**
     * @Route("/{id}", name="view_products_show", methods={"GET"})
     */
    public function show(ProductRepository $productRepository, $id): Response
    {
        return $this->render('view_products/show.html.twig', [
            'product' => $productRepository->findBy(["id"=>$id])[0],
        ]);
    }
}
