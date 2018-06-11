<?php

use Illuminate\Database\Seeder;
use App\Models\Reply;
use App\Models\Thread;
class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        static $threads;
        $threads = $threads ?: $threads = Thread::all();
        //each 相当于遍历 一个 Eloquent 模型
        $threads->each(function ($thread){
           factory(Reply::class,10)->create(['thread_id'=>$thread->id]);
        });

    }
}
