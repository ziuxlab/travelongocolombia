<?php
    
    use App\Config;
    use Illuminate\Database\Seeder;

class SettingsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       Config::create([
            'tittle' => 'título de la página',
            'meta_description' => 'breve descripción del sitio web',
            'keywords' => 'palabras clave separadas por ","'
        ]);
    }
}
