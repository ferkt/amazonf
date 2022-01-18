<nav class="navbar navbar-expand-lg  navbar-light">
    <a class="navbar-brand logo" href="#">Everything Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('fornecedores.lista')}}">Fornecedores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tansportadora</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorias
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Eletronicos</a>
            <a class="dropdown-item" href="#">Livros</a>
            <a class="dropdown-item" href="#">Roupas</a>
            <a class="dropdown-item" href="#">Casa e Banho</a>
            <a class="dropdown-item" href="#">Outros</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>