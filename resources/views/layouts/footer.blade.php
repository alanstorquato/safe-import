@if (Auth::check())
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            <p class="center">© Safe Import - 2019</p>
        </div>
    </div>
</footer>
@else
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <!-- <div class="col s12 l6 m6 ">
                <div class="rede-sociais center">
                    <h5 class="white-text">Redes sociais</h5>
                    <a class="btn-floating btn-large waves-effect waves-light btn-facebook"><i
                            class="fab fa-facebook fa-2x"></i></a>
                    <a class="btn-floating btn-large waves-effect waves-light btn-instagram"><i
                            class="fab fa-instagram fa-2x"></i></a>
                    <a class="btn-floating btn-large waves-effect waves-light btn-whatsapp"><i
                            class="fab fa-whatsapp"></i></a>
                    <a class="btn-floating btn-large waves-effect waves-light btn-email"><i
                            class="material-icons">email</i></a>
                    <a class="btn-floating btn-large waves-effect waves-light btn-telefone"><i class="material-icons">local_phone</i></a>
                </div>
            </div> -->

            <div class="col s6 l4 m6">
                <h5 class="white-text center">Arquivos</h5>
                <select onchange="location = this.value">
                    <option value="" disabled selected>Escolha um opção</option>
                    @if(!empty($archives))
                        @foreach ($archives as $stats)
                            <option value="/blog/?month={{ $stats['month'] }}&year={{ $stats['year'] }}"
                                    style="color: black;">
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
@endif
