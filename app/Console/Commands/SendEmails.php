<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email {user} {--queue}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send a email to user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //获取参数
//        $userId = $this->argument('user');
//        dd($userId);

        //获取选项
//        $option = $this->option('queue');
//        dd($option);

        //获取输入
//        $name = $this->ask('What is your name?');
//        dd($name);

        //用户确认
//        if ($this->confirm('Do you wish to continue?')) {
//            dd('您同意了');
//        }else{
//            dd('您拒绝了');
//        }
        //文字输出
//        $this->info('Display this on the screen');
//        $this->error('Something went wrong');
//        $this->line('Display this on the screen');

        //表格布局
//        $headers = ['Name', 'Email'];
//
//        $users = [
//            ['丽丽','a@1232.com'],
//            ['花花','a@1232.com'],
//            ['阳阳','a@1232.com'],
//        ];
//
//        $this->table($headers, $users);

        //进度条
        $users = range(1,10);

        $bar = $this->output->createProgressBar(count($users));

        $bar->start();

        foreach ($users as $user) {
            sleep(1);

            $bar->advance();
        }

        $bar->finish();
        return 0;
    }
}
