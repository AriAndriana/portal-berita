<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Hobi;
use App\Mahasiswa;
use App\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        // Membuat data dosen
        $dosen = Dosen::create(array(
            'nipd' => '1234567898',
            'nama' => 'Abdul Musthafa'
        ));
        $this->command->info('Data Dosen Telah Diisi');

        // Membuat data Mahasiswa
        $ari = Mahasiswa::create(array(
            'nama' => 'Ari',
            'nim' => '1010102',
            'id_dosen' => $dosen->id
        ));

        $ntut = Mahasiswa::create(array(
            'nama' => 'Entut Marsinah',
            'nim' => '10110129',
            'id_dosen' => $dosen->id
        ));

        $icih = Mahasiswa::create(array(
            'nama' => 'Icih Singkong',
            'nim' => '102938',
            'id_dosen' => $dosen->id
        ));
        $this->command->info('Data Mahasiswa berhasil Di isi');

        // Membuat Data Wali
        $dadang = Wali::create(array(
            'nama' => 'Dadang Peloy',
            'id_mahasiswa' => $ari->id
        ));
        
        $ucup = Wali::create(array(
            'nama' => 'Ucup Mambo',
            'id_mahasiswa' => $ntut->id
        ));

        $agus = Wali::create(array(
            'nama' => 'Agus Pepsoden',
            'id_mahasiswa' => $icih->id
        ));
        $this->command->info('Data Wali Berhasil Ditambahkan');

        // Membuat data Hobi
        $melukis_langit = Hobi::create(array('hobi' => 'Melukis Langit'));
        $mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
        $ambyar = Hobi::create(array('hobi' => 'Stalking Mantan'));

        $ari->hobi()->attach($melukis_langit->id);
        $ntut->hobi()->attach($mandi_hujan->id);
        $icih->hobi()->attach($ambyar->id);

        $this->command->info('Mahasiswa Beserta Hobi telah diisi');
    }
}
