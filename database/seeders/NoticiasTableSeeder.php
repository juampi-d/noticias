<?php

namespace Database\Seeders;

use App\Models\Noticia;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $n = new Noticia();
        $n->titulo = "Titulo de prueba";
        $n->cuerpo = "Cuerpo de pruba";
        $n->autor = User::all()->random()->id;
        $n->save();

        $n = Noticia::first(); 
        $n->titulo = "Titulo de prueba editada";
        $n->save();

        $n = Noticia::firstOrNew(['titulo' => "Titulo de prueba editada"]); 
        $n->titulo = "Titulo de prueba editada nuevamente";
        $n->save();
        
        $n = Noticia::firstOrNew(['titulo' => "Titulo de prueba editada"]); 
        $n->cuerpo = "Esta es una noticia nueva";
        $n->autor = User::all()->random()->id;
        $n->save();

        $n = Noticia::find(2);
        $n->delete();
        $n = Noticia::destroy(1);

        for ($i=0; $i < 20; $i++) { 
            $n = new Noticia();
            $n->titulo = "Noticia $i";
            $n->cuerpo = file_get_contents('https://loripsum.net/api');
            $n->imagen = fake()->imageUrl();
            $n->autor = User::all()->random()->id;
            $n->save();
        }
    }
}
