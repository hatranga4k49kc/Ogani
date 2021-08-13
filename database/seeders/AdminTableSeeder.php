<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name = 'Nguyễn Hà Trang';
        $admin->email = 'hatranga4k49kc@gmail.com';
        $admin->password = bcrypt('123456');
        $admin->save();

        $admin = new Admin();
        $admin->name = 'Nguyễn';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('123456');
        $admin->save();

        $admin = new Admin();
        $admin->name = 'Nguyễn';
        $admin->email = 'add@gmail.com';
        $admin->password = bcrypt('123456');
        $admin->save();

    }
}
