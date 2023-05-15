<?php
class Fila
{
    private $itens;

    public function __construct()
    {
        $this->itens = [];
    }

    public function enfileirar($item)
    {
        array_push($this->itens, $item);
    }

    public function desenfileirar()
    {
        return array_shift($this->itens);
    }

    public function tamanho()
    {
        return count($this->itens);
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function setItens($itens)
    {
        $this->itens = $itens;
    }

    public function serializeItens() {
        return serialize($this->itens);
    }

    public function unserializeItens($data) {
        $this->itens = unserialize($data);
    }
}
