<?php
namespace App\BLL;

use App\Repository\ImagenRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

abstract class BaseBLL
{
    protected EntityManagerInterface $em;
    protected ImagenRepository $imagenRepository;
    protected ValidatorInterface $validator;
    protected RequestStack $requestStack;
    protected Security $security;

    public function __construct(
        EntityManagerInterface $em,
        ImagenRepository $imagenRepository,
        ValidatorInterface $validator,
        RequestStack $requestStack,
        Security $security
    ) {
        $this->em = $em;
        $this->imagenRepository = $imagenRepository;
        $this->validator = $validator;
        $this->requestStack = $requestStack;
        $this->security = $security;
    }

    private function validate($entity)
    {
        $errors = $this->validator->validate($entity);
        if(count($errors) > 0) {
            $strError = "";
            foreach($errors as $error) {
                if(!empty($strError))
                    $strError .= '\n';
                $strError .= $error->getMessage();
            }
            throw new BadRequestHttpException($strError);
        }
    }

    protected function guardaValidando($entity): array
    {
        $this->validate($entity);
        $this->em->persist($entity);
        $this->em->flush();

        return $this->toArray($entity);
    }
}