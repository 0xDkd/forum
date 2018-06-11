<?php

use Illuminate\Database\Seeder;
use App\Models\Thread;
use App\Models\Reply;
class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //完整的 Thread 模型 相当于 Thread::all()
        $threads = factory('App\Models\Thread',50)->create();
    }
}
