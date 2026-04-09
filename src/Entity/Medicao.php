php
&lt;?php
namespace App\Entity;
use ApiPlatform\Metadata\ApiResource; use ApiPlatform\Metadata\Get; use
ApiPlatform\Metadata\GetCollection; use ApiPlatform\Metadata\Post; use
ApiPlatform\Metadata\Put; use ApiPlatform\Metadata\Delete; use Doctrine\ORM\Mapping as
ORM; use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity] #[ApiResource( operations: [ new GetCollection(), new Post(), new Get(), new
Put(), new Delete() ], normalizationContext: [&#39;groups&#39; =&gt;
[&#39;medicao:read&#39;]], denormalizationContext: [&#39;groups&#39; =&gt;
[&#39;medicao:write&#39;]] )] class Medicao { #[ORM\Id] #[ORM\GeneratedValue]
#[ORM\Column] #[Groups([&#39;medicao:read&#39;])] private ?int $id = null;
#[ORM\Column(type: 'datetime')]<br/>
#[Groups(['medicao:read', 'medicao:write'])]
private ?\DateTimeInterface $data = null;
#[ORM\Column(length: 255)]<br/>
#[Groups(['medicao:read', 'medicao:write'])]
private ?string $nomeDaMaquina = null;
#[ORM\Column(type: 'float')]<br/>
#[Groups(['medicao:read', 'medicao:write'])]
private ?float $horasUsadas = null;
#[ORM\Column(type: 'float')]<br/>
#[Groups(['medicao:read', 'medicao:write'])]
private ?float $valorPorHora = null;
// Getters e Setters
public function getId(): ?int { return $this->id; }<br/>
public function getData(): ?\DateTimeInterface { return $this->data; }<br/>
public function setData(\DateTimeInterface $data): self { $this->data = $data; return $this; }<br/>
public function getNomeDaMaquina(): ?string { return $this->nomeDaMaquina; }<br/>
public function setNomeDaMaquina(string $nomeDaMaquina): self { $this->nomeDaMaquina =
$nomeDaMaquina; return $this; }<br/>
public function getHorasUsadas(): ?float { return $this->horasUsadas; }<br/>
public function setHorasUsadas(float $horasUsadas): self { $this->horasUsadas = $horasUsadas;
return $this; }<br/>
public function getValorPorHora(): ?float { return $this->valorPorHora; }<br/>
public function setValorPorHora(float $valorPorHora): self { $this->valorPorHora = $valorPorHora;
return $this; }
}
