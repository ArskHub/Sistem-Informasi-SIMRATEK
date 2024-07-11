<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Building;
use App\Models\Room;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Rent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        { {
            }
        }
        // \Ap{{ p\Mo }}dels\User::factory()->create([
        //    {{  'na }}me' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'name' => 'admin',
        ]);

        Role::create([
            'name' => 'PJ_dosen',
        ]);

        Role::create([
            'name' => 'PJ_mahasiswa',
        ]);

        Role::create([
            'name' => 'guest',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'nomor_induk' => '2001194590',
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'amsal',
            'email' => 'amsal@gmail.com',
            'password' => bcrypt('amsal'),
            'nomor_induk' => '2208561134',
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'mahen',
            'email' => 'mahen@gmail.com',
            'password' => bcrypt('mahen'),
            'nomor_induk' => '2208561054',
            'role_id' => 3,
        ]);

        User::create([
            'name' => 'dominggo',
            'email' => 'dominggo@gmail.com',
            'password' => bcrypt('dominggo'),
            'nomor_induk' => '2208561092',
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'yaya',
            'email' => 'yaya@gmail.com',
            'password' => bcrypt('yaya'),
            'nomor_induk' => '2208561199',
            'role_id' => 3,
        ]);

        User::create([
            'name' => 'ardi',
            'email' => 'ardi@gmail.com',
            'password' => bcrypt('ardi'),
            'nomor_induk' => '2208561028',
            'role_id' => 4,
        ]);
        
        User::create([
            'name' => 'wipra',
            'email' => 'wipra@gmail.com',
            'password' => bcrypt('wipra'),
            'nomor_induk' => '2208561042',
            'role_id' => 4,
        ]);

        Faculty::create([
            'code' => 'FMIPA',
            'name' => 'Fakultas Matematika dan IPA',
        ]);

        Building::create([
            'code' => 'FMIPA-A',
            'name' => 'GEDUNG FF',
            'location' => 'Jimbaran',
            'faculty_id' => 1,
        ]);

        Building::create([
            'code' => 'FMIPA-B',
            'name' => 'GEDUNG FG',
            'location' => 'Jimbaran',
            'faculty_id' => 1,
        ]);

        Building::create([
            'code' => 'FMIPA-C',
            'name' => 'GEDUNG FE',
            'location' => 'Jimbaran',
            'faculty_id' => 1,
        ]);

        Room::create([
            'code' => 'A201',
            'name' => 'Lab Komputer',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 30,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3),
        ]);

        Room::create([
            'code' => 'A302',
            'name' => 'Ruang Kelas C',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 40,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C202',
            'name' => 'Lab Umum',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 25,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C203',
            'name' => 'Lab AI',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 15,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C204',
            'name' => 'Lab Computer Network',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 10,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C205',
            'name' => 'Lab Multimedia',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 15,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C206',
            'name' => 'Lab Microteaching',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 30,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C207',
            'name' => 'Lab RPL',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 10,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C208',
            'name' => 'Lab Sistem Informasi',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 20,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C209',
            'name' => 'Lab Big Data',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 15,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C301',
            'name' => 'Ruang Kelas 1.2',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 40,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C307',
            'name' => 'Ruang Kelas 2.1',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 40,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C303',
            'name' => 'Ruang Kelas 3.2',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 40,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C304',
            'name' => 'Ruang Kelas 4.2',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 40,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C305',
            'name' => 'Ruang Kelas 1.7',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 40,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C306',
            'name' => 'Ruang Kelas 2.6',
            'img' => 'room-image/roomdefault.jpg',
            'facility' => '-',
            'status' => false,
            'capacity' => 40,
            'description' => 'Gedung yang cocok untuk rapat, event dan keperluan lainnya',
            'building_id' => mt_rand(1, 3)
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2024-05-11 08:00:00',
            'time_end_use' => '2024-05-11 12:00:00',
            'purpose' => 'PKKMB',
            'status' => 'dipinjam',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => now(),
            'time_start_use' => '2024-05-20 09:00:00',
            'time_end_use' => '2024-05-20 12:00:00',
            'purpose' => 'SNATIA',
            'status' => 'selesai',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => now(),
            'time_start_use' => '2024-05-11 08:00:00',
            'time_end_use' => '2024-05-11 15:00:00',
            'purpose' => 'INVASI',
            'status' => 'selesai',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2024-05-19 10:00:00',
            'time_end_use' => '2024-05-19 12:00:00',
            'purpose' => 'INVENTION',
            'status' => 'pending',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2024-05-15 13:30:00',
            'time_end_use' => '2024-05-15 17:00:00',
            'purpose' => 'SYNERGY',
            'status' => 'pending',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2024-05-15 13:30:00',
            'time_end_use' => '2024-05-15 17:00:00',
            'purpose' => 'rapat',
            'status' => 'dipinjam',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2024-05-15 13:30:00',
            'time_end_use' => '2024-05-15 17:00:00',
            'purpose' => 'rapat',
            'status' => 'pending',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2024-05-15 13:30:00',
            'time_end_use' => '2024-05-15 17:00:00',
            'purpose' => 'rapat',
            'status' => 'dipinjam',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2024-05-15 13:30:00',
            'time_end_use' => '2024-05-15 17:00:00',
            'purpose' => 'rapat',
            'status' => 'pending',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2024-05-15 13:30:00',
            'time_end_use' => '2024-05-15 17:00:00',
            'purpose' => 'presentasi',
            'status' => 'pending',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2024-05-15 13:30:00',
            'time_end_use' => '2024-05-15 17:00:00',
            'purpose' => 'LOMBA',
            'status' => 'dipinjam',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => now(),
            'time_start_use' => '2024-05-15 13:30:00',
            'time_end_use' => '2024-05-15 17:00:00',
            'purpose' => 'LOMBA',
            'status' => 'selesai',
        ]);
    }
}
