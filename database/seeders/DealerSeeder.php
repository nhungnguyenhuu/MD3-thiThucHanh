<?php

namespace Database\Seeders;

use App\Models\Dealer;
use Illuminate\Database\Seeder;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dealer = new Dealer();
        $dealer->code = "101";
        $dealer->name = "Hoa Hồng";
        $dealer->phone = "0987654321";
        $dealer->email = "nhung@gmail.com";
        $dealer->address = "Hà Nội";
        $dealer->manager_name = "Nhung";
        $dealer->status_id = 1;
        $dealer->save();

        $dealer = new Dealer();
        $dealer->code = "102";
        $dealer->name = "Hoa NHài";
        $dealer->phone = "0987654321";
        $dealer->email = "hung@gmail.com";
        $dealer->address = "Hà Nội";
        $dealer->manager_name = "Hung";
        $dealer->status_id = 1;
        $dealer->save();

        $dealer = new Dealer();
        $dealer->code = "103";
        $dealer->name = "Hoa Cúc";
        $dealer->phone = "0987654321";
        $dealer->email = "nhun@gmail.com";
        $dealer->address = "Hà Nội";
        $dealer->manager_name = "Nhun";
        $dealer->status_id = 1;
        $dealer->save();
    }
}
