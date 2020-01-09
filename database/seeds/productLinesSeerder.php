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
            'textDescription' => 'Không chỉ mang lại những công dụng kỳ diệu đối với sức khỏe và tinh thần con người, thác khói trầm nụ còn mang những ý nghĩa sâu sắc về mặt phong thủy như mang lại may mắn, thịnh vượng, tài lộc cho gia chủ',
            'image' => 'tuongphat.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_lines')->insert([
            'name' => 'Vòng Đeo Tay',
            'textDescription' => 'Theo Đông y, Trầm hương là một vị thuốc mang nhiều công dụng đối với sức khỏe như: lưu thông kinh mạch, huyệt đạo, đầu óc tỉnh táo, cơ thể thư giãn, nhẹ nhõm, ngủ ngon… hỗ trợ hoạt động của tim, hệ tiêu hóa, trị các bệnh về đường hô hấp',
            'image' => 'vongdeotay.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_lines')->insert([
            'name' => 'Trầm Nụ',
            'textDescription' => 'Khi người ta đốt một vật gì đó khói sẽ bay lên cao, nhưng đối với thác khói trầm nụ thì điều kỳ lạ là khói lại chạy ngược xuống dưới. Nhờ đặc tính nặng hơn không khí nên khi đốt chúng bị chìm xuống giống như một dòng thác mây nhỏ tự nhiên.',
            'image' => 'tramnu.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_lines')->insert([
            'name' => 'Vòng Đeo Cổ',
            'textDescription' => 'thác khói trầm hương làm sạch không gian sống, văn phòng làm việc, khiến tinh thần con người trở nên minh mẫn, an vui và thư thãi, mang lại vượng khí, may mắn và tài lộc cho gia đình',
            'image' => 'vongdeoco.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_lines')->insert([
            'name' => 'Trầm Xông',
            'textDescription' => 'Mùi hương của trầm nụ giúp tẩy uế khí, hung khí trong nhà, cân bằng năng lượng phong thủy',
            'image' => 'tramxong.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_lines')->insert([
            'name' => 'Hương Trầm',
            'textDescription' => 'Mùi hương của trầm nụ giúp tẩy uế khí, hung khí trong nhà, cân bằng năng lượng phong thủy',
            'image' => 'huongtram.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_lines')->insert([
            'name' => 'Tinh Dầu',
            'textDescription' => 'Từ trầm hương, con người tạo ra rất nhiều chế phẩm khác nhau phục vụ cho cuộc sống với nhiều công dụng vượt trội, trong đó có trầm nụ.',
            'image' => 'tinhdau.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_lines')->insert([
            'name' => 'Trầm Cảnh',
            'textDescription' => '“Vua” của các loại hương thơm, chủ của sự sinh sôi và là biểu tượng thay đổi của những thời khắc mới.',
            'image' => 'tinhdau.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
