# crud_api

CRUD de locais (estado, cidade e bairro) com consulta a API de imóveis.

## Configuração

1. Crie um banco de dados MySQL e importe o arquivo .sql que está em ./sql/henri.sql
2. Altere as informações do banco de dados que está em ./core/Model.php

## Informações

- Utilizei o plugin JavaScript "DataTables" nas tabelas;
- Para as cidades e estados usei outro plugin (https://gist.github.com/ografael/2037135), porém fiz umas alterações no mesmo para me atender;
- Na página com os imóveis, utilizei o plugin "Fresco.js" para que ao clicar nas imagens, a mesma seja expandida;
- No modal que contém os detalhes do imóvel eu usei Ajax para buscar e atualizar os dados na view.
