<?php
require('../../config/start.php');

session_start();


if ($_SESSION['autenticado'] != 'Aprovado' || $_SESSION['autenticado'] == 'Reprovado') {

    header('location: /painel/content/login.php ');
}

?>






<div class="wrapper">


    <div class="content-wrapper">



        <section class="content">
            <div class="row">
                <div class="col-xs-12" style="margin-top: 10px; margin: 50px;">
                    <!-- <form action="" method="post">
                        <input type="submit" value="Cadastrar" class="btn btn-success" style="margin: 0px 0px 0px 10px;">
                    </form> -->
                    <br>


                    <div class="nav-tabs-custom">

                        <div style="clear: both;"></div>


                        <div class="tab-pane-active" id="tab_2">

                            <?php
                            $query = "SELECT * FROM produtos ORDER BY id DESC ";
                            $pedidos = $sqli->query($query);


                            ?>

                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 30px" class="no-sort">Cod.</th>
                                        <th style="width: 100px" class="no-sort">Sku</th>
                                        <th style="width: 300px"                    class="no-sort">Descrição</th>
                                        <th style="width: 130px" class="no-sort">Referencia</th>
                                        <th style="width: 130px" class="no-sort">Valor</th>
                                        <th style="width: 150px" class="no-sort">Código de Barras</th>
                                        <th style="width: 100px" class="no-sort">Editar</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($pedidos  as $key => $value) {







                                    ?>

                                        <tr>
                                            <td> <?php echo $value['id']; ?> </td>
                                            <td> <?php echo $value['nome'] ?> </td>
                                            <td> <?php echo $value['email']; ?> </td>
                                            <td><?php echo $value['telefone']; ?></td>
                                            <td> <input type="submit" value="Editar" class="btn btn-success"></td>



                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>





                        </div>




                        </tbody>
                        </table>



                        </form>



                    </div>

                </div>


            </div>
    </div>
    </section>

</div>

</div>