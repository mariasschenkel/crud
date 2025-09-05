<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

?>
  <main>

    <div class="container">
        <h1>Lista de Cargos</h1>
        <a href="./salvar-cargos.php" class="btn btn-add">Incluir</a>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Teto Salárial</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $sql = 'SELECT * FROM cargos;';
          $resultado = mysqli_query($conexao,$sql);
          
          if (mysqli_num_rows($resultado) > 0) {

            while($linha = mysqli_fetch_assoc($resultado)) {
          ?>
            <tr>
              <td><?php echo $linha['CargoID'];?></td>
              <td><?php echo $linha['Nome'];?></td>
              <td>R$ <?php echo $linha['TetoSalarial']?></td>
              <td>
                <a href="salvar-cargos.php?id=<?php echo $linha['CargoID'];?>" class="btn btn-edit">Editar</a>
                <a href="#" class="btn btn-delete">Excluir</a>
              </td>b
            </tr>
            <?php 
              }
            }
            ?>
            
          </tbody>
        </table>
      </div> 
  </main>
  
  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>