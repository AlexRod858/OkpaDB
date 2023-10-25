<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class OkupacionFactory extends Factory
{

    public function definition(): array
    {
        $userIds = User::pluck('id'); // Obtener los IDs de usuarios existentes

        return [
            'calle' => $this->faker->streetName,
            'cp' => $this->faker->postcode,
            'numero' => $this->faker->buildingNumber,
            'localidad' => $this->faker->city,
            'fecha_okupacion' => $this->faker->date,
            'id_user' => $this->faker->randomElement($userIds), // Asignar aleatoriamente un ID de usuario existente
        ];
    }
}
