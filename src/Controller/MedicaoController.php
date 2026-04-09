<?php
namespace App\Controller;
use App\Entity\Medicao;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
class MedicaoController extends AbstractController
{
#[Route('/medicaos/relatorio/{id}', name: 'medicao_relatorio', methods: ['GET'])]<br/>
public function relatorio(int $id, ManagerRegistry $doctrine): JsonResponse
{
$entityManager = $doctrine->getManager();
$medicao = $entityManager->getRepository(Medicao::class)->find($id);
if (!$medicao) {
return $this->json(['error' => 'Medição não encontrada'], 404);
