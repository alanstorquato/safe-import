@if (count($errors))

    <div class="fixed-card-mensagem scale-transition">
        <div class="card-panel card-panel-mensagem red">
            @foreach ($errors->all() as $error)
                <p class="center">{{ $error }}</p>
            @endforeach
        </div>
    </div>

@endif
