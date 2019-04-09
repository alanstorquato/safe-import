    <!-- <aside class="col s12 m3 ">

      <ul class="collection with-header">
        <li class="collection-header center"><h4>Arquivos</h4></li>

        @if(!empty($archives))
          @foreach ($archives as $stats)
          <li class="collection-item">
              <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                {{ $stats['month'] . ' ' . $stats['year']  }}
              </a>
          </li>
          @endforeach
        @endif
      </ul>

        <ul class="collection with-header">
          <li class="collection-header center"><h4>Fale conosco</h4></li>
          <li class="collection-item center">
            <a href="#" class="rede-social rede-social-facebook"><i class="fab fa-facebook fa-2x icone-rede-social"></i> Facebook</a>
          </li>
          <li class="collection-item center">
            <a href="#" class="rede-social rede-social-instagram"><i class="fab fa-instagram fa-2x icone-rede-social"></i> Instagram</a>
          </li>
        </ul>

    </aside> -->
