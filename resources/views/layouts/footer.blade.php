@if (Auth::check())
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <p class="center">© Safe Import - 2019</p>
        </div>
    </div>
</footer>
@else
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <h5 class="white-text center">Arquivos</h5>
                <select onchange="location = this.value">
                    <option value="" disabled selected>Escolha um opção</option>
                    @if(!empty($archives))
                    @foreach ($archives as $stats)
                    <option value="/blog/?month={{ $stats['month'] }}&year={{ $stats['year'] }}"
                    style="color: black;">
                    {{ $stats['month'] . ' ' . $stats['year']  }}</option>
                            
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