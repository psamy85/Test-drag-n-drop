<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('release_date');
            $table->string('director');
            $table->integer('duration');
            $table->integer('position');
            $table->string('url_picture');
            $table->timestamps();
        });

        DB::table('movies')->insert(
            array(
                ['title' => 'Le livre de la jungle', 'release_date' => '2016-04-13', 'director' => 'Jon Favreau', 'duration' => 106, 'position' => 0, 'url_picture' => 'http://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/16/01/08/09/35/538779.jpg'],
                ['title' => 'Hardcore Henry', 'release_date' => '2016-04-13', 'director' => 'Ilya Naishuller', 'duration' => 94, 'position' => 1, 'url_picture' => 'https://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/16/02/11/15/56/262042.jpg'],
                ['title' => 'Pattaya', 'release_date' => '2016-02-24', 'director' => 'Franck Gastambide', 'duration' => 93, 'position' => 2, 'url_picture' => 'https://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/16/02/26/19/00/039546.jpg'],
                ['title' => 'Batman v Superman : L’Aube de la Justice', 'release_date' => '2016-03-23', 'director' => 'Zack Snyder', 'duration' => 183, 'position' => 3, 'url_picture' => 'https://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/16/02/03/11/17/130929.jpg'],
                ['title' => 'Les Huit salopards', 'release_date' => '2016-01-06', 'director' => 'Quentin Tarantino', 'duration' => 168, 'position' => 4, 'url_picture' => 'https://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/15/10/09/16/46/255916.jpg'],
                ['title' => 'Deadpool', 'release_date' => '2016-02-10', 'director' => 'Tim Miller', 'duration' => 108, 'position' => 5, 'url_picture' => 'https://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/16/01/19/16/49/249124.jpg'],
                ['title' => 'The Revenant', 'release_date' => '2016-02-24', 'director' => 'Alejandro Gonzalez Inarritu', 'duration' => 156, 'position' => 6, 'url_picture' => 'https://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/15/11/10/09/30/165611.jpg'],
                ['title' => 'Lucy', 'release_date' => '2014-08-06', 'director' => 'Luc Besson', 'duration' => 89, 'position' => 7, 'url_picture' => 'https://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/14/06/05/09/47/324245.jpg'],
                ['title' => '007 Spectre', 'release_date' => '2015-11-11', 'director' => 'Sam Mendes', 'duration' => 150, 'position' => 8, 'url_picture' => 'https://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/15/10/06/15/22/344427.jpg'],
                ['title' => 'Terminator Genisys', 'release_date' => '2015-07-01', 'director' => 'Alan Taylor', 'duration' => 126, 'position' => 9, 'url_picture' => 'https://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/15/06/29/10/53/495349.jpg'],
                ['title' => 'Vice Versa', 'release_date' => '2015-06-17', 'director' => 'Pete Docter', 'duration' => 95, 'position' => 10, 'url_picture' => 'https://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/15/04/16/13/58/571071.jpg'],
                ['title' => 'Mad Max: Fury Road', 'release_date' => '2015-05-14', 'director' => 'George Miller', 'duration' => 120, 'position' => 11, 'url_picture' => 'https://images.zone-telechargement.com/360/http://images.allocine.fr/pictures/15/04/14/18/30/215297.jpg']
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movies');
    }
}
