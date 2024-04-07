<?php
namespace App\Controller\API;

use App\BLL\ImagenBLL;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class ImagenApiController extends BaseApiController 
{
    #[Route('/prueba', name: 'api_prueba', methods: ["GET"])]
    public function pruebaApi(): JsonResponse
    {
        return $this->json([
            'message' => 'Bienvenido al nuevo controlador!',
        ]);
    }

    #[Route('/imagenesapi', name: 'api_post_imagenes', methods: ['POST'])]
    public function post(Request $request, ImagenBLL $imagenBLL)
    {
        $data = $this->getContent($request);

        $imagen = $imagenBLL->nueva($data);

        return $this->getResponse($imagen, Response::HTTP_CREATED);
    }
}