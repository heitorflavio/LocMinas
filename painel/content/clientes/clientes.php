<?php
require('../../config/start.php');

session_start();


if ($_SESSION['autenticado'] != 'Aprovado' || $_SESSION['autenticado'] == 'Reprovado') {

    header('location: /painel/content/login.php ');
}

?>







        <section class="content">
            <div class="row">
                <div class="col-xs-12" style="margin-top: 10px; margin: 50px;">
                        <input type="submit" value="Cadastrar" class="btn btn-success" style="margin-bottom: 10px;" onclick="content('clientes/cadastrar.php')">
                    <br>


                    <div class="nav-tabs-custom">

                        <div style="clear: both;"></div>


                        <div class="tab-pane-active" id="tab_2">

                            <?php
                            $query = "SELECT * FROM clientes ORDER BY id DESC ";
                            $pedidos = $sqli->query($query);


                            ?>

                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 30px" class="no-sort">Cod.</th>
                                        <th style="width: 130px" class="no-sort">Nome</th>
                                        <th class="no-sort">Email</th>
                                        <th style="width: 130px" class="no-sort">Telefone</th>
                                        <th style="width: 200px" class="no-sort">Endereço</th>
                                        <th style="width: 200px" class="no-sort">CPF/CNPJ</th>
                                        <th style="width: 100px" class="no-sort">Editar</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($pedidos  as $key => $value) {



                                    ?>

                                        <tr>
                                            <td> <?php echo $value['id']; ?> </td>
                                            <td> <?php echo $value['nome_nomeF'] ?> </td>
                                            <td> <?php echo $value['email']; ?> </td>
                                            <td><?php echo $value['telefone'],'<br>',$value['celular']; ?></td>
                                            <td><?php echo $value['rua'],'  N⁰ '.$value['numero'],'<br>','Bairro: '.$value['bairro']; ?></td>
                                            <td><?php  if(!empty($value['cpf'])){ echo $value['cpf'];} if(!empty($value['cnpj'])){ echo $value['cnpj'];} if(empty($value['cpf']) && empty($value['cnpj'])){echo 'Não Cadastrado';}?></td>
                                            <td> <input type="submit" value="Editar" class="btn btn-success" onclick="content('clientes/editar.php')"></td>
                                               


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
