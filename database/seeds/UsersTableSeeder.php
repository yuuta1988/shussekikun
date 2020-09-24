<?php

use Illuminate\Database\Seeder;

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
            [
                'id' => 1,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 1,
                'sei' => '澤村',
                'mei' => '勇太',
                'sei_kana' => 'サワムラ',
                'mei_kana' => 'ユウタ',
                'img' => 'avatar/RRzmkoHET3MMFKwWwzBVFP4nw4BrV1f1RrRxeUFn.jpeg',
                'gender' => 1,
                'email' => env('SYSTEM_MAIL'),
                'birth' => '1988-10-09',
                'role' => 1,
                'password' => Hash::make(env('SYSTEM_PASSWORD')),
                'status' => 1,
                'created_at' => '2020-02-01 21:07:31',
                'updated_at' => '2020-02-01 21:07:31',
            ],
            [
                'id' => 2,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => null,
                'sei' => '桜木',
                'mei' => 'くるみ',
                'sei_kana' => 'サクラギ',
                'mei_kana' => 'クルミ',
                'img' => 'avatar/RRzmkoHET3MMFKwWwzBVFP4nw4BrV1f1RrRxeUFn.jpeg',
                'gender' => 2,
                'email' => env('ORGANIZATION_ADMIN_MAIL'),
                'birth' => '1988-10-09',
                'role' => 3,
                'password' => Hash::make(env('ORGANIZATION_ADMIN_PASSWORD')),
                'status' => 1,
                'created_at' => '2020-02-01 21:07:31',
                'updated_at' => '2020-02-01 21:07:31',
            ],
            [
                'id' => 3,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => null,
                'sei' => '山田',
                'mei' => '道正',
                'sei_kana' => 'ヤマダ',
                'mei_kana' => 'ミチマサ',
                'img' => 'avatar/RRzmkoHET3MMFKwWwzBVFP4nw4BrV1f1RrRxeUFn.jpeg',
                'gender' => 1,
                'email' => env('STORE_SHARE_MAIL'),
                'birth' => '1988-10-09',
                'role' => 5,
                'password' => Hash::make(env('STORE_SHARE_PASSWORD')),
                'status' => 1,
                'created_at' => '2020-02-01 21:07:31',
                'updated_at' => '2020-02-01 21:07:31',
            ],
            [
                'id' => 4,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 1,
                'sei' => '佐々木',
                'mei' => '剛',
                'sei_kana' => 'ササキ',
                'mei_kana' => 'ツヨシ',
                'img' => 'avatar/Xlr8ZPelrIzCIoBWoyD4VJdBvYnpdCV8rlE8XMeC.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2000-10-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-01-01 21:07:31',
                'updated_at' => '2019-01-01 21:07:31',
            ],
            [
                'id' => 5,
                'organization_id' => 1,
                'store_id' => 2,
                'category_id' => 1,
                'sei' => '田中',
                'mei' => '一郎',
                'sei_kana' => 'タナカ',
                'mei_kana' => 'イチロウ',
                'img' => 'avatar/sdC6bjxXWkw2gteQoXGf3gpRf9Z5YDQ4So875DVR.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2000-10-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-01-10 21:07:31',
                'updated_at' => '2019-01-10 21:07:31',
            ],
            [
                'id' => 6,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 1,
                'sei' => '大林',
                'mei' => '和正',
                'sei_kana' => 'オオバヤシ',
                'mei_kana' => 'カズマサ',
                'img' => 'avatar/mHOdZVE0QSkpfKkJYZNCkL2hCqCmezswjMwSyCTm.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2000-10-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-02-10 21:07:31',
                'updated_at' => '2019-02-10 21:07:31',
            ],
            [
                'id' => 7,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 1,
                'sei' => '小林',
                'mei' => '智',
                'sei_kana' => 'コバヤシ',
                'mei_kana' => 'サトシ',
                'img' => 'avatar/3wsZzfTC1i7DeWv2U1RMTAsxezlztLZ4qq5LeqxJ.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2000-10-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-03-01 21:07:31',
                'updated_at' => '2019-03-01 21:07:31',
            ],
            [
                'id' => 8,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 1,
                'sei' => '木村',
                'mei' => '美代子',
                'sei_kana' => 'キムラ',
                'mei_kana' => 'ミヨコ',
                'img' => 'avatar/jqmkdW6nm6G9RyqCYLOAwyY4sjryZK3EvnddjHYK.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '2000-10-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-03-01 21:07:31',
                'updated_at' => '2019-03-01 21:07:31',
            ],
            [
                'id' => 9,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 1,
                'sei' => '佐藤',
                'mei' => 'くるみ',
                'sei_kana' => 'サトウ',
                'mei_kana' => 'クルミ',
                'img' => 'avatar/diwYHdCRfT8YJtZXshSQrFcsWi9kxoT097tV9H5C.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '2000-10-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-04-01 21:07:31',
                'updated_at' => '2019-04-01 21:07:31',
            ],
            [
                'id' => 10,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 2,
                'sei' => '小島',
                'mei' => '要',
                'sei_kana' => 'コジマ',
                'mei_kana' => 'カナメ',
                'img' => 'avatar/GVnCB6ZmFJtr1WVg197uWIMtXd8jVGmgrLB1S5SE.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2012-01-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-05-01 21:07:31',
                'updated_at' => '2019-05-01 21:07:31',
            ],
            [
                'id' => 11,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 2,
                'sei' => '花井',
                'mei' => '陽介',
                'sei_kana' => 'ハナイ',
                'mei_kana' => 'ヨウスケ',
                'img' => 'avatar/wW9q2wRkdefwCZPhkIrQtOSPVhCQSjfCzoHVkOOQ.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2012-01-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-06-10 21:07:31',
                'updated_at' => '2019-06-10 21:07:31',
            ],
            [
                'id' => 12,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 2,
                'sei' => '坂田',
                'mei' => '圭介',
                'sei_kana' => 'サカタ',
                'mei_kana' => 'ケイスケ',
                'img' => 'avatar/bocKFSlCM7daEC2OHkq5pF09CGbOTaPGe9Zco4rT.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2012-01-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-07-01 21:07:31',
                'updated_at' => '2019-07-01 21:07:31',
            ],
            [
                'id' => 13,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 2,
                'sei' => '窪田',
                'mei' => 'ゆり',
                'sei_kana' => 'クボタ',
                'mei_kana' => 'ユリ',
                'img' => 'avatar/q4cWU6K1ecUZkvGXUtTrTTGhW9nTl9bna7pGGykH.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '2012-01-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-08-01 21:07:31',
                'updated_at' => '2019-08-01 21:07:31',
            ],
            [
                'id' => 14,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 2,
                'sei' => '米田',
                'mei' => '美紅',
                'sei_kana' => 'ヨネダ',
                'mei_kana' => 'ミク',
                'img' => 'avatar/bhTMs6qzw6DlMxrxUpIGDUHugyQBxaet5yHgYWf3.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '2012-01-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-09-01 21:07:31',
                'updated_at' => '2019-09-01 21:07:31',
            ],
            [
                'id' => 15,
                'organization_id' => 1,
                'store_id' => 2,
                'category_id' => 1,
                'sei' => '本田',
                'mei' => '永吉',
                'sei_kana' => 'ホンダ',
                'mei_kana' => 'エイキチ',
                'img' => 'avatar/wdOMZF4EqtdEFjw0LJWQiZG1Ey3aHTeGej6biDyc.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '1989-02-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-10-01 21:07:31',
                'updated_at' => '2019-10-01 21:07:31',
            ],
            [
                'id' => 16,
                'organization_id' => 1,
                'store_id' => 2,
                'category_id' => 1,
                'sei' => '成海',
                'mei' => '太一',
                'sei_kana' => 'ナルミ',
                'mei_kana' => 'タイチ',
                'img' => 'avatar/o03gEDnCQBcqihHRNdFVyFFcM2NEL63ebjJKfyXe.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '1989-02-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-11-01 21:07:31',
                'updated_at' => '2019-11-01 21:07:31',
            ],
            [
                'id' => 17,
                'organization_id' => 1,
                'store_id' => 2,
                'category_id' => 1,
                'sei' => '松本',
                'mei' => '智則',
                'sei_kana' => 'マツモト',
                'mei_kana' => 'トモノリ',
                'img' => 'avatar/mZndndCqylNHawK3Vv9JP84cGRsRwsjxwqgiTCgj.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '1989-02-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2019-12-01 21:07:31',
                'updated_at' => '2019-12-01 21:07:31',
            ],
            [
                'id' => 18,
                'organization_id' => 1,
                'store_id' => 2,
                'category_id' => 1,
                'sei' => '立花',
                'mei' => '美子',
                'sei_kana' => 'タチバナ',
                'mei_kana' => 'ヨシコ',
                'img' => 'avatar/XVYNjdFnMAwnfDFbvzlVrqhSHxmnhm4ApNG9ASHp.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '2012-01-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-01-10 21:07:31',
                'updated_at' => '2020-01-10 21:07:31',
            ],
            [
                'id' => 19,
                'organization_id' => 1,
                'store_id' => 2,
                'category_id' => 1,
                'sei' => '杉山',
                'mei' => '綾子',
                'sei_kana' => 'スギヤマ',
                'mei_kana' => 'アヤコ',
                'img' => 'avatar/EGHBu49MXDAAom3XZwXGUePh8KlXidU2zxOIwxPv.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '2012-01-01',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-02-01 21:07:31',
                'updated_at' => '2020-02-01 21:07:31',
            ],
            [
                'id' => 20,
                'organization_id' => 1,
                'store_id' => 2,
                'category_id' => 2,
                'sei' => '佐々木',
                'mei' => '貴教',
                'sei_kana' => 'ササキ',
                'mei_kana' => 'タカノリ',
                'img' => 'avatar/Hlb2GbqH9jls62gRm6y9q10wabFjKJQHpmEVzsSg.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2016-03-10',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-02-01 21:07:31',
                'updated_at' => '2020-02-01 21:07:31',
            ],            [
                'id' => 21,
                'organization_id' => 1,
                'store_id' => 2,
                'category_id' => 2,
                'sei' => '三宅',
                'mei' => '一成',
                'sei_kana' => 'ミヤケ',
                'mei_kana' => 'イッセイ',
                'img' => 'avatar/FdvkdAK0zPkzvcS3d5XMc4USuSszBAWlPcdGy3F8.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2016-03-10',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-02-01 21:07:31',
                'updated_at' => '2020-02-01 21:07:31',
            ],
            [
                'id' => 22,
                'organization_id' => 1,
                'store_id' => 2,
                'category_id' => 2,
                'sei' => '宮澤',
                'mei' => '洋一',
                'sei_kana' => 'ミヤザワ',
                'mei_kana' => 'ヨウイチ',
                'img' => 'avatar/im7t89l8fFTksglcZ7Bd7piR49paH4kNUDNKDiQo.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2016-03-10',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-03-01 21:07:31',
                'updated_at' => '2020-03-01 21:07:31',
            ],
            [
                'id' => 23,
                'organization_id' => 1,
                'store_id' => 2,
                'category_id' => 2,
                'sei' => '江古田',
                'mei' => '愛',
                'sei_kana' => 'エコタ',
                'mei_kana' => 'アイ',
                'img' => 'avatar/o3o4cED7N4SOOlOpyHThuWLAhLrpKmNhmcIueWuv.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '2016-03-10',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-04-10 21:07:31',
                'updated_at' => '2020-04-10 21:07:31',
            ],
            [
                'id' => 24,
                'organization_id' => 1,
                'store_id' => 2,
                'category_id' => 2,
                'sei' => '浜田',
                'mei' => 'えみ',
                'sei_kana' => 'ハマダ',
                'mei_kana' => 'エミ',
                'img' => 'avatar/t81twRx07O4Vt1C3oo7OqwOK0WIuVYFaH8A6PUw8.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '2016-03-10',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-05-01 21:07:31',
                'updated_at' => '2020-05-01 21:07:31',
            ],
            [
                'id' => 25,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 1,
                'sei' => '中津川',
                'mei' => '淳',
                'sei_kana' => 'ナツカワ',
                'mei_kana' => 'アツシ',
                'img' => 'avatar/cYcDotoeMfXtIZh0VEguhqKBP27zYjAzvnXBnAiJ.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '1978-08-24',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-06-01 21:07:31',
                'updated_at' => '2020-06-01 21:07:31',
            ],
            [
                'id' => 26,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 1,
                'sei' => '宇野',
                'mei' => '裕太',
                'sei_kana' => 'ウノ',
                'mei_kana' => 'ユウタ',
                'img' => 'avatar/pXkUFdfRprDueTO0RNWAJZnrGKUAdWQImqtFriHL.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '1978-08-24',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-06-01 21:07:31',
                'updated_at' => '2020-06-01 21:07:31',
            ],
            [
                'id' => 27,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 1,
                'sei' => '井上',
                'mei' => '輝',
                'sei_kana' => 'イノウエ',
                'mei_kana' => 'アキラ',
                'img' => 'avatar/fsz8fdsD70INSeCVhY6CxSyshkgX5OOpDao4snC1.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '1978-08-24',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-07-01 21:07:31',
                'updated_at' => '2020-07-01 21:07:31',
            ],
            [
                'id' => 28,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 1,
                'sei' => '伊藤',
                'mei' => '陽子',
                'sei_kana' => 'イトウ',
                'mei_kana' => 'ヨウコ',
                'img' => 'avatar/Yes5uCPGJlQKjgrxjqLjnh2SyWBKQ4tFhhSkYX5r.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '1978-08-24',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-07-01 21:07:31',
                'updated_at' => '2020-07-01 21:07:31',
            ],
            [
                'id' => 29,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 1,
                'sei' => '青木',
                'mei' => 'さや',
                'sei_kana' => 'アオキ',
                'mei_kana' => 'サヤ',
                'img' => 'avatar/ab54EajQZpWIwfuAww45maRjkijahTUkyv4qw92C.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '1978-08-24',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-08-10 21:07:31',
                'updated_at' => '2020-08-10 21:07:31',
            ],
            [
                'id' => 30,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 2,
                'sei' => '藤本',
                'mei' => '順',
                'sei_kana' => 'フジモト',
                'mei_kana' => 'ジュン',
                'img' => 'avatar/rmHVbfMaC2jxbRnokr8qnGPI98EKfxYqa7D1jczd.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2012-06-22',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-09-01 21:07:31',
                'updated_at' => '2020-09-01 21:07:31',
            ],
            [
                'id' => 31,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 2,
                'sei' => '原西',
                'mei' => '三郎',
                'sei_kana' => 'ハラニシ',
                'mei_kana' => 'サブロウ',
                'img' => 'avatar/mHZW7mQtXjtqGKUbzJdz2srr9ziyws6xgzQxI0Yt.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2012-06-22',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-09-10 21:07:31',
                'updated_at' => '2020-09-10 21:07:31',
            ],
            [
                'id' => 32,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 2,
                'sei' => '山岸',
                'mei' => '太郎',
                'sei_kana' => 'ヤマギシ',
                'mei_kana' => 'タロウ',
                'img' => 'avatar/RkoXxvHPIJ8wT1K4xBVZhv1jWAYBkHP2axO00zwz.jpeg',
                'gender' => 1,
                'email' => null,
                'birth' => '2012-06-22',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-09-01 21:07:31',
                'updated_at' => '2020-09-01 21:07:31',
            ],
            [
                'id' => 33,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 2,
                'sei' => '佐藤',
                'mei' => '奈々',
                'sei_kana' => 'サトウ',
                'mei_kana' => 'ナナ',
                'img' => 'avatar/p1zl78Y1Q7thCoiWURzUrXKIVrLp9cVgY9MsYSRw.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '2012-06-22',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-09-01 21:07:31',
                'updated_at' => '2020-09-01 21:07:31',
            ],
            [
                'id' => 34,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 2,
                'sei' => '市村',
                'mei' => '沙耶',
                'sei_kana' => 'イチムラ',
                'mei_kana' => 'サヤ',
                'img' => 'avatar/aDnqZbwincaYSJjioF89sWpglUsh4tTVf1gi6fzi.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '2012-06-22',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-09-01 21:07:31',
                'updated_at' => '2020-09-01 21:07:31',
            ],
            [
                'id' => 35,
                'organization_id' => 1,
                'store_id' => 1,
                'category_id' => 2,
                'sei' => '萩原',
                'mei' => '沙耶',
                'sei_kana' => 'ハギワラ',
                'mei_kana' => 'サヤ',
                'img' => 'avatar/rMMZDGZETIk2NV75YTIdHQeqB9ZbsBLWqhOfBSsI.jpeg',
                'gender' => 2,
                'email' => null,
                'birth' => '2012-06-22',
                'role' => 9,
                'password' => null,
                'status' => 2,
                'created_at' => '2020-02-01 21:07:31',
                'updated_at' => '2020-02-01 21:07:31',
            ],
            [
                'id' => 36,
                'organization_id' => 2,
                'store_id' => 3,
                'category_id' => 3,
                'sei' => '萩原',
                'mei' => '淳一',
                'sei_kana' => 'ハギワラ',
                'mei_kana' => 'ジュンイチ',
                'img' => null,
                'gender' => 1,
                'email' => null,
                'birth' => '2012-06-22',
                'role' => 9,
                'password' => null,
                'status' => 1,
                'created_at' => '2020-06-10 21:07:31',
                'updated_at' => '2020-02-01 21:07:31',
            ],
        ]);
    }
}
