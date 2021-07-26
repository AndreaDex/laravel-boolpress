<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Politica', 'Economia', 'Italia', 'Estero', 'Lifestyle', 'Sport'];
        foreach ($categories as $category) {
            $el = new Category();
            $el->title = $category;
            $el->slag = Str::slug($el->name);
            $el->save();
        }
    }
}
