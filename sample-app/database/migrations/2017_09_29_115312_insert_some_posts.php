<?php

use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertSomePosts extends Migration
{
    /**
     * @var string[]
     */
    private static $messages = [
        'message' => 'Laravel je bezva! ❤️',
        'Jsme na Developer Day.',
        'Vítejte v Havlíčkově Brodě.'
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $createdAt = Carbon::today();
        $records = [];
        foreach(self::$messages as $message) {
            $records[] = ['message' => $message, 'created_at' => $createdAt];
            $createdAt = clone $createdAt;
            $createdAt->addHour();
        }
        DB::table('posts')->insert($records);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('posts')->truncate();
    }
}
