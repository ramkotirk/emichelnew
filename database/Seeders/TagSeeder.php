<?php

namespace Database\Seeders;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many tags you need, defaulting to 10
       $count = (int)$this->command->ask('How many tags do you need ?', 10);

       $this->command->info("Creating {$count} tags.");

        // Create the Genre
        $tags = Tag::factory()->count($count)->create();        ;


        $this->command->info('tags Created!');
    }
}
