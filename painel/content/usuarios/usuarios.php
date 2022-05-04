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
            <div style="margin-bottom: 10px;">
                <input type="button" value="Cadastrar" onclick="content('usuarios/cadastrar.php');" class="btn btn-success">
            </div>
            <!-- <a href="#" onclick="criar_usuarios('criar_usuarios.php');" class="btn btn-success" style="margin: 0px 0px 0px 10px;">Cadastrar </a>

                    <br>
                    <br> -->

            <div class="nav-tabs-custom">

                <div style="clear: both;"></div>


                <div class="tab-pane-active" id="tab_2">

                    <?php
                   $user = $_SESSION['user'];
                    $query = "SELECT * FROM usuarios WHERE nome='$user'";
                    $pedidos = $sqli->query($query)->fetch_array();
                //    foreach ($pedidos as $key => $value) {
                //     print_r($value);
                //    }
                // print_r($pedidos);
                   
                    if($pedidos['adm']==1){
                        $query = "SELECT * FROM usuarios ORDER BY id DESC ";
                        $pedidos = $sqli->query($query);
                    }else{
                        $query = "SELECT * FROM usuarios  WHERE nome='$user' ORDER BY id DESC ";
                        $pedidos = $sqli->query($query);
                    }

                    ?>

                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 40px" class="no-sort">Cod.</th>
                                <th style="width: 130px" class="no-sort">Nome</th>
                                <th class="no-sort">Email</th>
                                <th style="width: 130px" class="no-sort">Telefone</th>


                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($pedidos  as $key => $value) {







                            ?>

                                <tr>
                                    <td>
                                        <?php
                                        if (!empty($value['id'])) {
                                            $valor = $value['id'];
                                            $url="'usuarios/editar.php'";
                                            $a==0;
                                            $a++;
                                            
                                           
                                            // echo '<inpu;t type="hidden" name="">'
                                            echo '<input type="submit" value="' . $valor . '" class="btn btn-success" style="width: 40px" name="user" onclick="content('.$url.')"> ';
                                            $_SESSION['editar'] =  $valor;
                                        //     if ($user==true) {
                                        //          $_SESSION['editar'] = $valor;
                                           
                                        //     // print_r($_SESSION);
                                        //     }
                                        }




                                        ?> 
                                   
                                    </td>
                                    <td> <?php echo $value['nome'] ?> </td>
                                    <td> <?php echo $value['email']; ?> </td>
                                    <td><?php echo $value['telefone']; ?></td>




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