
           <?php
                require 'conexao.php';
                if ($_SESSION['pro_nivel'] == '1'):
                    echo'<li class="dropdown">
        <a class="nav-link" href="Alunos.php">Alunos
        <span class="sr-only">(Current)</span></a>
        <ul class="dropdown-menu">
            <li><a href="CadAluno.php">Aluno</a></li>
            
        
        </ul>
      </li>', '<li></li>'

                    ;
                endif;
                ?>