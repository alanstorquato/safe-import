<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{

    public function comments()
    {

        return $this->hasMany(Comment::class);

    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }

    public function scopeFilter($query, $filters)
    {
        if (!empty($filters['month'])) {
            $month = $filters['month'];
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if (!empty($filters['year'])) {
            $year = $filters['year'];
            $query->whereYear('created_at', $year);
        }

    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

    }

    public static function search($criterio)
    {
        return static ::where('title','LIKE','%' . $criterio . '%')
            ->paginate(5);

    }


    public static function images()
    {
        $nameFile = null;
        // Verifica se informou o arquivo e se é válido
        if (request()->hasFile('image') && request()->file('image')->isValid()) {
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));
            // Recupera a extensão do arquivo
            $extension = request()->image->extension();
            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";
            // Faz o upload:
            $upload = request()->image->storeAs('img-posts', $nameFile);
            $image = 'storage/img-posts/'.$nameFile;
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$upload )
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }
        return $image;
    }

}
