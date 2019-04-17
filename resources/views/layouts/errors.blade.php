@if (count($errors))
    
    <div class="card-panel card-panel-mensagem red hidden scale-transition">
        <ul>
            @foreach ($errors->all() as $error)
                <li><h5 class="center">{{ $error }}</h5></li>
            @endforeach
        </ul>
    </div>

@endif
                    
                