<?php

namespace Henri\Model;

use Henri\core\Model;

class Local extends Model
{
    public function get($id)
    {
        $sql =
            "SELECT 
              id, 
              estado,
              cidade,
              bairro
            FROM 
              local 
            WHERE 
              id = :id";

        $query = $this->db->prepare($sql);

        $parameters =
            array(
                ':id' => $id
            );

        $query->execute($parameters);

        return $query->fetch();
    }

    public function getDetalhesImovel($codigo)
    {
        $dados = array(
            'fields' => array("Codigo", "Categoria", "Bairro", "Cidade", "ValorVenda", "FotoDestaquePequena", "FotoDestaque", "Status", "Caracteristicas", "InfraEstrutura", "Dormitorios", "Vagas", "ValorLocacao", "AreaTotal", "AreaPrivativa", "Latitude", "Longitude")
        );

        $postFields = json_encode($dados);

        $key = 'c9fdd79584fb8d369a6a579af1a8f681';
        $url = 'http://sandbox-rest.vistahost.com.br/imoveis/detalhes?key=' . $key . '&imovel=' . $codigo;

        $url .= '&pesquisa=' . $postFields;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        $result = curl_exec($ch);

        $result = json_decode($result, true);

        return $result;
    }

    public function getImovel($cidade, $bairro)
    {
        $dados = array(
            'fields' => array("Codigo", "Categoria", "Bairro", "Cidade", "ValorVenda", "FotoDestaquePequena", "FotoDestaque", "Status", "Caracteristicas", "InfraEstrutura", "Dormitorios", "Vagas", "ValorLocacao", "AreaTotal", "AreaPrivativa", "Latitude", "Longitude"),
            'filter' => array("Cidade" => array(str_replace(' ', '+', $cidade)), "Bairro" => array(str_replace(' ', '+', $bairro)))
        );

        $postFields = json_encode($dados);

        $key = 'c9fdd79584fb8d369a6a579af1a8f681';
        $url = 'http://sandbox-rest.vistahost.com.br/imoveis/listar?key=' . $key;

        $url .= '&pesquisa=' . $postFields;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        $result = curl_exec($ch);

        $result = json_decode($result, true);

        return $result;
    }

    public function getAll()
    {
        $sql =
            "SELECT 
              id, 
              estado,
              cidade,
              bairro
            FROM 
              local
            ORDER BY
              id DESC";

        $query = $this->db->prepare($sql);

        $query->execute();

        return $query->fetchAll();
    }

    public function insert($estado, $cidade, $bairro)
    {
        $sql =
            "INSERT INTO 
              local (
                estado,
                cidade,
                bairro
              ) 
            VALUES (
              :estado,
              :cidade,
              :bairro
            )";

        $query = $this->db->prepare($sql);

        $parameters =
            array(
                ':estado' => $estado,
                ':cidade' => $cidade,
                ':bairro' => $bairro
            );

        $query->execute($parameters);

        return $this->db->lastInsertId();
    }

    public function update($id, $estado, $cidade, $bairro)
    {
        $sql =
            "UPDATE 
              local 
            SET 
              estado = :estado,
              cidade = :cidade,
              bairro = :bairro
            WHERE 
              id = :id";

        $query = $this->db->prepare($sql);

        $parameters =
            array(
                ':estado' => $estado,
                ':cidade' => $cidade,
                ':bairro' => $bairro,
                ':id' => $id
            );

        return $query->execute($parameters);
    }

    public function delete($id)
    {
        $sql =
            "DELETE FROM 
              local 
            WHERE 
              id = :id";

        $query = $this->db->prepare($sql);

        $parameters =
            array(
                ':id' => $id
            );

        return $query->execute($parameters);
    }
}