<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
  {
    App\User::updateOrCreate(['email' => 'admin@gmail.com'],['name' => 'admin', 'password' => bcrypt('admin')]);
    $jenises = ['Tetap','Habis Pakai'];
    $ruangs = ['Tata Usaha','Lab','Kelas A1'];
    foreach ($jenises as $key => $jenis) {
      App\Jeni::updateOrCreate(['nama' => $jenis,'kode' => strtoupper($jenis),'keterangan' => $jenis]);
    }
    foreach ($ruangs as $key => $ruang) {
      App\Ruang::updateOrCreate(['nama' => $ruang,'kode' => strtoupper($ruang),'keterangan' => $ruang]);
    }
    App\Pegawai::truncate();
    $faker = Faker\Factory::create('id_ID'); // create a ID faker
    for ($i = 0; $i < 10; $i++) {
      App\Pegawai::updateOrCreate(['nama' => $faker->name,'nip' => $faker->randomNumber(),'alamat' => $faker->address]);
    }
  }
}
