<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
    <div class="box-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-datatables" width="100%">
                        <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Código</th>
                            <th>Categoria</th>
                            <th class="text-center">Bairro</th>
                            <th class="text-center">Cidade</th>
                            <th class="text-center">Valor</th>
                            <th class="text-center">Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (isset($imovel['status']) && $imovel['status'] == 200) { ?>
                            <tr>
                                <td colspan="7" class="text-center" style="vertical-align: middle;">
                                    Não há imóveis cadastros neste local.
                                </td>
                            </tr>
                        <?php } else {
                            foreach ($imovel as $key => $value) { ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;">
                                        <a class="fresco" href="<?php echo $value['FotoDestaque'] ? $value['FotoDestaque'] : URL . '/img/sem_foto.jpg'; ?>">
                                            <img src="<?php echo $value['FotoDestaque'] ? $value['FotoDestaque'] : URL . '/img/sem_foto.jpg'; ?>"
                                                 width="120px"/>
                                        </a>
                                    </td>
                                    <td class="text-center"
                                        style="vertical-align: middle;"><?php echo $value['Codigo']; ?></td>
                                    <td class="text-center"
                                        style="vertical-align: middle;"><?php echo $value['Categoria']; ?></td>
                                    <td class="text-center"
                                        style="vertical-align: middle;"><?php echo $value['Bairro']; ?></td>
                                    <td class="text-center"
                                        style="vertical-align: middle;"><?php echo $value['Cidade']; ?></td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        R$ <?php echo $value['ValorVenda'] ? number_format($value['ValorVenda'], 2, ',', '.') : '-'; ?></td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        <a data-codigo="<?php echo $value['Codigo']; ?>" href="#"
                                           class="btn btn-success modalDetalhes">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php }
                        } ?>
                        </tbody>
                    </table>
                </div>
                <div style="display: none" id="modalDetalhes" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Detalhes do imóvel</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <a class="fresco" id="imagem_a_href">
                                            <img id="imagem_src" width="100%">
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div><span style="font-weight: bold;">Código: </span><span id="codigo"></span>
                                        </div>
                                        <div><span style="font-weight: bold;">Categoria: </span><span
                                                    id="categoria"></span></div>
                                        <div><span style="font-weight: bold;">Bairro: </span><span id="bairro"></span>
                                        </div>
                                        <div><span style="font-weight: bold;">Cidade: </span><span id="cidade"></span>
                                        </div>
                                        <div><span style="font-weight: bold;">Valor: </span><span id="valor"></span>
                                        </div>
                                        <div><span style="font-weight: bold;">Status: </span><span id="status"></span>
                                        </div>

                                        <div><span style="font-weight: bold;">TV a cabo: </span><span
                                                    id="carac_tv"></span></div>
                                        <div><span style="font-weight: bold;">Mobiliado: </span><span
                                                    id="carac_mobiliado"></span></div>
                                        <div><span style="font-weight: bold;">Hidromassagem: </span><span
                                                    id="carac_hidro"></span></div>
                                        <div><span style="font-weight: bold;">Sacada: </span><span
                                                    id="carac_sacada"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
