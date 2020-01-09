<?php

use Illuminate\Database\Seeder;

class productLinesSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_lines')->insert([
            'name' => 'Tượng Phật',
            'textDescription' => 'chưa nghỉ ra',
            'image' => 'tuongphat.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
