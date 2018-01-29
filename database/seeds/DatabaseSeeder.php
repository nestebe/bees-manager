<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);

     /*   DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'demo@demo.fr',
            'password' => bcrypt('demo'),
        ]);*/

        DB::table('ruchers')->insert([
            'libelle' => str_random(10),
            'description' => 'description du rucher',
            'adresse1' => 'adresse ligne 1',
            'adresse2' => 'adresse ligne 2',
            'adresse3' => 'adresse ligne 3',
            'cp' => '12000',
            'ville'=> 'rodez',
            'latitude'=> '44.352381',
            'longitude'=> '2.538413',
            'id_user' => 1

        ]);

        DB::table('colonies')->insert([
            'libelle' => str_random(10),
            'date_derniere_visite' => '2018-01-01',
            'espece' => 'rare',
            'marquage' => '',
            'agressivite' => 'forte',
            'clipage' => '',
            'activite'=> 'dense',
            'affectation1'=> 'miel',
            'affectation2'=> '',
            'reine_presente' => true,
            'commentaire'=>'mon commentaire',
            'id_user'=>1

        ]);

        DB::table('ruches')->insert([
            'libelle' => str_random(10),
            'type' => 'miel',
            'etat' => 'bon',
            'nb_corps' => 5,
            'nb_hausses' => 5,
            'nb_cadres' => '12000',
            'matiere'=> 'rodez',
            'exposition'=> 'soleil',
            'orientation'=> 'sud',
            'estVide' => true,
            'commentaire'=>'mon commentaire',
            'id_user'=>1,
            'id_colonie'=>1

        ]);





    }
}
