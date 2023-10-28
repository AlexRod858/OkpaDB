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
            'latitud' => $this->faker->randomFloat(15, -90, 90), // Rango de -90 a 90 para latitud
            'longitud' => $this->faker->randomFloat(15, -180, 180), // Rango de -180 a 180 para longitud            
            'id_user' => $this->faker->randomElement($userIds), // Asignar aleatoriamente un ID de usuario existente
        ];
    }
}
