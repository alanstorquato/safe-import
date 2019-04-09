<!-- <footer class="page-footer">

      <div class="container">
          <div class="row">
              <div class="col l6 s12">
                  <h5 class="white-text">Footer Content</h5>
                  <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
          </div>
      </div>

      <div class="container">
        <div class="row">
          <p class="center">© Safe Import - 2019</p>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>

</footer> -->
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12 l6 m6 ">
          <div class="rede-sociais center">
            <h5 class="white-text">Redes sociais</h5>
            <a class="btn-floating btn-large waves-effect waves-light btn-facebook"><i class="fab fa-facebook fa-2x"></i></a>
            <a class="btn-floating btn-large waves-effect waves-light btn-instagram"><i class="fab fa-instagram fa-2x"></i></a>
            <a class="btn-floating btn-large waves-effect waves-light btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a class="btn-floating btn-large waves-effect waves-light btn-email"><i class="material-icons">email</i></a>
            <a class="btn-floating btn-large waves-effect waves-light btn-telefone"><i class="material-icons">local_phone</i></a>
          </div>


          <!-- <h5 class="white-text">Footer Content</h5> -->
          <!-- <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p> -->
        </div>
        <div class="col s12 l2 m6">
          <h5 class="white-text">Arquivos</h5>
          <select onchange="location = this.value">
            <option value="" disabled selected>Escolha um opção</option>
            @if(!empty($archives))
            @foreach ($archives as $stats)
            <option value="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}" style="color: black;">
              {{ $stats['month'] . ' ' . $stats['year']  }}
            </option>

            @endforeach
            @endif
          </select>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <p class="center">© Safe Import - 2019</p>
      </div>
    </div>
  </footer>
