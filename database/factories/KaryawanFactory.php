<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik'=> $this->faker->numberBetween(11111111, 99999999),
            'nama_depan'=> $this->faker->firstName(),
            'nama_belakang'=> $this->faker->lastName(),
            'tanggal_lahir'=> $this->faker->date(),
            'tempat_lahir'=> $this->faker->state(),
            'pendidikan_terakhir'=> 'S1',
            'institusi_pendidikan'=> 'UBSI',
            'jurusan'=> 'Sistem Informasi Akuntansi',
            'kewarganegaraan'=> 'WNI',
            'tanggal_masuk'=> $this->faker->date(),
            'jenis_kelamin'=> 'Laki-Laki',
            'divisi'=> 'Digital Marketing',
            'jabatan'=> 'Website Developer',
            'level'=> 'Staff',
            'no_telepon'=> $this->faker->numberBetween(11111111, 99999999),
            'status'=> 'Belum Menikah',
            'email' => $this->faker->unique()->safeEmail(),
            'agama'=> 'Islam',
            'golongan_darah'=> 'A',
            'alamat'=> $this->faker->address(),
        ];
    }
}
