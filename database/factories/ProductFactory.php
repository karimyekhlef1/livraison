<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'simple title',
            'created_by' => '2',
            'state' => 'normal',
            'category_id' => 8,
            'price' => 1500,
            'type_transaction' => 'sale',
            'address' => 'mila',
            'marque' => 'new marque',
            'method_payer' => 'baridimob',
            'photo' => '1_2.jpg',
            'description' => 'simple description for our product',
            'is_valid' => 0,
        ];
    }
}
