<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
            // Business
            ['name' => 'Business', 'parent_id' => 0,'level'=>'level-0'],
            ['name' => 'Books and magazines', 'parent_id' => 1,'level'=>'level-1'],
            ['name' => 'Electronics', 'parent_id' => 1,'level'=>'level-1'],
        
            // Computers
            ['name' => 'Computers', 'parent_id' => 0,'level'=>'level-0'],
        
            // Health
            ['name' => 'Health', 'parent_id' => 0,'level'=>'level-0'],
            ['name' => 'Addictions', 'parent_id' => 3,'level'=>'level-1'],
            ['name' => 'Dentistry', 'parent_id' => 3,'level'=>'level-1'],
            ['name' => 'Vision Care', 'parent_id' => 3,'level'=>'level-1'],
        
            // Sports
            ['name' => 'Sports', 'parent_id' => 0,'level'=>'level-0'],
            ['name' => 'Winter Sports', 'parent_id' => 4,'level'=>'level-1'],
            ['name' => 'Ice skating', 'parent_id' => 10,'level'=>'level-2'], // level 2
            ['name' => 'Sledding', 'parent_id' => 10,'level'=>'level-2'],
        ];
    }
}
