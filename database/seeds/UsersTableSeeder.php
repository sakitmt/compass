<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['over_name' => '山田',
            'under_name' => '太郎',
            'over_name_kana' => 'やまだ',
            'under_name_kana' => 'たろう',
            'mail_address' => 'yamada@google.co.jp',
            'sex' => '1',
            'birth_day' => '2000-01-01',
            'role' => '1',
            'password' => 'yamada0101'],
            ['over_name' => '佐藤',
            'under_name' => '一郎',
            'over_name_kana' => 'さとう',
            'under_name_kana' => 'いちろう',
            'mail_address' => 'sato@google.co.jp',
            'sex' => '1',
            'birth_day' => '2000-01-02',
            'role' => '2',
            'password' => 'sato0101'],
            ['over_name' => '本木',
            'under_name' => '花子',
            'over_name_kana' => 'もとき',
            'under_name_kana' => 'はなこ',
            'mail_address' => 'motoki@google.co.jp',
            'sex' => '2',
            'birth_day' => '2000-01-03',
            'role' => '3',
            'password' => 'motoki0101'],
            ['over_name' => '田中',
            'under_name' => '里美',
            'over_name_kana' => 'たなか',
            'under_name_kana' => 'さとみ',
            'mail_address' => 'tanaka@google.co.jp',
            'sex' => '2',
            'birth_day' => '2000-01-04',
            'role' => '4',
            'password' => 'tanaka0101']
        ]);

    }
}