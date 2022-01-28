<header>
 
  <ul class="nav container">
    <li class="nav-item">
      <a class="nav-link @if (Route::currentRouteName() === 'home') 'active' @endif " aria-current="page" href=" {{ route('home') }} ">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  @if (Route::currentRouteName() === 'comics.index') 'active' @endif" href=" {{route('comics.index') }} ">Lista fumetti</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  @if (Route::currentRouteName() === 'comics.create') 'active' @endif" href=" {{ route('comics.create') }} ">Aggiungi fumetti</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  @if (Route::currentRouteName() === 'contacts') 'active' @endif" href=" {{ route('contacts') }} ">Contacts</a>
    </li>
  </ul>

</header>