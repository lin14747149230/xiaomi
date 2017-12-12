<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $data = [];
        for($i=0;$i<30;$i++) {
        	$tmp = [
        		'goods_tit' => str_random(20),
        		'goods_price' => rand(10,80000),
        		'goods_kucun' => rand(1,10000),
        		'goods_con' => "<p>
					<img src='{$faker->imageUrl(400,400)}' />
					<img src='{$faker->imageUrl(400,400)}' />
					<img src='{$faker->imageUrl(400,400)}' />
					<img src='{$faker->imageUrl(400,400)}' />
        		</p>"
        		'created_at' => date('Y-m-d H:i:s'),
        		'status' => 1,
        	];

        	$id = DB::table('goods')->insertGetId($tmp);
        	//空数组
        	$data = [];
        	for($j=0;$j<4;$j++) {
        		//拼接数据
        		$t = [
        			'goods_id' => $id,
        			'pic' => $faker->imageUrl(200,200);
        		];
        		//压入数据
        		$data[] = $t;
        	}
        	DB:table('goods_pic')->insert($data);
        }
    }
}
