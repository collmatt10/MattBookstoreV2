<?php

use Illuminate\Database\Seeder;
use App\Publisher;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Publisher::class, 15)->create();

        /*$publisher = new Publisher();
        $publisher->name = "O'Reilly Media";
        $publisher->address = "Sebastopal, CA, USA";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "Wrox Press";
        $publisher->address = "Birmingham, UK";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "New Riders";
        $publisher->address = "Berkeley, CA, USA";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "John Wiley";
        $publisher->address = "Chicester, UK";
        $publisher->save();*/
    }
}
