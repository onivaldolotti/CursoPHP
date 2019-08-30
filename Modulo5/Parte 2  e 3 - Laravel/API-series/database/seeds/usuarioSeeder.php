<?php

use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'email'=>'Teste@email',
            'password'=>\Illuminate\Support\Facades\Hash::make('password')
        ]);
    }
}
