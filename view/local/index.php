<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
    <div class="box-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 20px;">
                <a href="<?php echo URL; ?>/local/adicionar" class="btn btn-primary pull-right"><i
                            class="fa fa-plus"></i> Adicionar</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="retorno_sucesso" style="display: none;" class="alert alert-success">
                    <strong>Sucesso!</strong> Ação realizada com sucesso.
                </div>
                <div id="retorno_erro" style="display: none;" class="alert alert-danger">
                    <strong>Ops!</strong> Ocorreu um erro nesta ação.
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-datatables" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Estado</th>
                            <th class="text-center">Cidade</th>
                            <th class="text-center">Bairro</th>
                            <th width="250px" class="text-center">Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($local as $key => $value) { ?>
                            <tr>
                                <td style="vertical-align: middle;"><?php echo $value['id']; ?></td>
                                <td style="vertical-align: middle;"><?php echo $value['estado']; ?></td>
                                <td style="vertical-align: middle;"><?php echo $value['cidade']; ?></td>
                                <td style="vertical-align: middle;"><?php echo $value['bairro']; ?></td>
                                <td class="text-center">
                                    <a href="<?php echo URL; ?>/local/consultar/<?php echo $value['id']; ?>"
                                       class="btn btn-success">
                                        Consultar Imóveis
                                    </a>
                                    <a href="<?php echo URL; ?>/local/editar/<?php echo $value['id']; ?>"
                                       class="btn btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <a href="<?php echo URL; ?>/local/apagar/<?php echo $value['id']; ?>"
                                       onclick="return confirm('Você deseja remover este item?');"
                                       class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>