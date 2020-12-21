  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 999;">
  <a class="navbar-brand" href="../section.php"><img src="../img/healthcare-and-medical.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../parts/list.php">Список <img src="../img/document.png" alt="list"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../parts/list_ware.php">Cклад <img src="../img/document.png" alt="list"></span></a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="../parts/list_farm.php">Фарм.группы <img src="../img/document.png" alt="list"></a>
      </li>       
      <li class="nav-item">
        <a class="nav-link" href="search.php">Поиск <img src="../img/search.png" alt=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../parts/add_page.php">Добавить <img src="../img/add.png" alt="add"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../parts/delet_page.php">Удалить <img src="../img/delet.png" alt="delete"></a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="../parts/report.php">Отчет <img src="../img/edit.png" alt="edit"></a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="../parts/add_user.php">Новый сотрудник <img src="../img/add.png" alt="add"></a>
      </li>                
    </ul>
    <span class="navbar-text">
      <span class="user_name"><?php echo $_SESSION['login'][0]['name']?></span>
      <a href="../action/aut.php">Выход <img src="../img/exit.png" alt="exit"></a>
    </span>
  </div>
</nav>