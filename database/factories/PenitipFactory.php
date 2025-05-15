<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penitip>
 */
class PenitipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'kontak' => $this->faker->phoneNumber(),
            'daftar_produk' => json_encode([
                [
                    'nama' => $this->faker->word(),
                    'harga' => $this->faker->numberBetween(10000, 100000),
                    'status' => $this->faker->randomElement((['tersedia', 'habis'])),
                    'kategori' => $this->faker->randomElement((['makanan', 'minuman', 'kesehatan', 'kecantikan'])),
                ]
            ])
        ];
    }
}
