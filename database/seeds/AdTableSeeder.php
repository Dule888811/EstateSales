<?php
use Illuminate\Database\Seeder;

class AdTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Ad::class, 44)->create();
    }
}
