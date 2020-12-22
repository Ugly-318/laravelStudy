@extends('layout.app')

@section('title', '博客详情')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/markdown.css') }}">
    <style>
        .replay:last-child {
            border-bottom: none !important;
        }
    </style>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <h3 class="font-weight-light text-center mb-3">Linux计划任务</h3>
                        <div class="text-center fs-14 text-muted">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                                <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            <span class="mr-2">5个月前</span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                            <span class="mr-2">416</span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                            <span></span>2
                        </div>
                        <hr>
                        <div class="markdown" id="content">

                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header bg-white fs-14">
                        回复数量
                    </div>
                    <div class="card-body">
                        <div class="media mb-3 border-bottom pb-3 replay">
                            <img width="50" height="50" src="https://cdn.learnku.com/uploads/avatars/14265_1490928350.jpeg!/both/100x100" class="mr-3 rounded-pill" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0">Media heading</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body pb-2">
                        <div class="alert alert-warning" role="alert">
                            您还有没有登录, 请登录!
                            <a href="#" class="btn btn-primary btn-sm py-1 px-4 ml-3">马上登录</a>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body pb-2">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-sm px-5">回复</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-0">
                @include('common.right-card', [
                      'imgUrl' => 'https://cdn2.lmonkey.com/Fl5bGoCQYm7i0G7yk3vatG5sok7K',
                      'title' => 'PHP',
                      'content' => '收录了PHP相关的文章',
                      'count' => '12',
                  ])
            </div>
        </div>
    </div>

    <div id="markdown" style="display: none">{{"## 什么是计划任务

计划任务是帮助我们在特定的时间执行命令用的服务，可以达到及时备份数据的目的。

## 计划任务常用命令

查看 `cron` 服务是否处于运行状态:

```
[test@ubuntu: ~]$ service cron status
```

编辑计划任务:

```
[test@ubuntu: ~]$ crontab -e
```

查看系统计划任务:

```
[test@ubuntu: ~]$ crontab -l
```

删除定时任务, `-r` 全部删除, `-i` 交互式删除:

```
[test@ubuntu: ~]$ crontab -ri
```

>注意: `crontab -r` 命令会删除所有的计划任务, 如果只是要删除一个计划任务的话, 可以使用 `crontab -e` 编辑计划删除, 删除指定的计划任务即可

## 用户和计划任务

因为 `Linux` 是多用户操作系统, 而每个用户都可以有自己计划任务

`crontab [-u user]` 可以操作指定用户的计划任务, 只有具备了 `-u` 权限的用户才能使用 `-u` 命令, 比如 `root` 用户:

```
[test@ubuntu: ~]# crontab -u test -e
```

> 不指定 `-u` 参数, 操作的是当前用户的计划任务

其他的操作也是一样的

在设置计划任务的时候, 一定要注意用户, 比如你用 `root` 用户创建了一个计划任务, 生成了日志文件`a.log`,
因为这个文件是 `root` 用户创建的, 所以文件的所有者和所属组都是`root`, 而别的用户, 比如 `www` 用户就不能操作这个文件, `Web服务` 就可能会出错

## 编写计划任务

先写一个最简单的计划任务, 每分钟输入 `hello world` 到 `hello` 文件中:

```
[test@ubuntu: ~]$ crontab -e
```

写入内容:

```
* * * * * /usr/bin/echo 'hello world' >> /home/test/a.log
```

保存退出之后, 等待1分钟之后, 查看 `/home/test/a.log` 文件, 可以看到有内容写入了

## 计划任务详解

计划任务的编写格式是:

```
minute hour day month week command
```

> 各个参数中间用空格隔开，`command` 是要执行的命令（注意：命令要写完整的路径命令）

> 使用 `whereis` 或者 `which` 加命令的方式查找命令的完整路径，如果你不知道命令的完整路径，就使用这个命令，查找命令路径在哪

**时间介绍**

- `minute`: 一个小时中的第几分钟 `0-59`

- `hour`: 一天中第几个小时 `0-23`

- `day`: 一个月中的第几天 `1-31`

- `month`: 一年中的第几个月 `1-12`

- `week`: 一周中的星期几 `1-7`

**符号介绍**

- 星号 `*`：代表所有可能的值，例如 `month` 字段如果是星号，则表示在满足其它字段的制约条件后每月都执行该命令操作。

- 逗号 `,`：可以用逗号隔开的值指定一个列表范围，例如 `1,2,5,7,8,9`

- 中杠 `-`：可以用整数之间的中杠表示一个整数范围，例如“2-6”表示 `2,3,4,5,6`

- 正斜线 `/`：可以用正斜线指定时间的间隔频率，例如 `0-23/2` 表示每两小时执行一次。同时正斜线可以和星号一起使用，例如 `*/10`，如果用在 `minute` 字段，表示每十分钟执行一次

**一些例子**

`31号5点10分` 来执行一条命令:

```
10 5 31 * * command
```

一年中 `3,5,6,10` 这四个月份 `3点5分` 执行命令:

```
5 3 * 3,5,6,10 * command
```

每 `2分钟` 执行命令:

```
*/2 * * * * command
```

每 `周三到周五3点10分` 执行命令:

```
10 3 * * 3-5 command
```

每 `星期五5点5分` 执行命令:

```
5 5 * * 5 command
```

**小试一下**

每2分钟执行一个文件信息的写入:

`crontab -e` 进入计划任务编辑, 写入:

```
*/2 * * * * /bin/echo 'aaa' >> /tmp/aaa.log
```

查看计划任务:

```
[test@ubuntu: ~]$ crontab -l
```

删除计划任务:

```
[test@ubuntu: ~]$ crontab -r
```

> 删除计划任务，但注意，是全部删除了，如果想删除一条，vim进去，dd删除你想删除的即可。

## 一些注意

- 选项不能为空，必须填写，不知道的内容用*代表，表示任意时间
- 每个时间字段都是可以指定多个值，不连续的用(,)隔开，连续的值(-)减号隔开
- 间隔固定的时间执行书写格式`*/n` 格式`n`代表要间隔多少分钟，多少小时，多少天等
- 星期几和第几天不能同时出现
- 最小的时间范围是分钟，最大的时间范围是月

## 如何每秒执行一次

思路是, 可以让计划任务每分钟执行一个脚本文件, 在这个脚本文件中每秒循环一次, 循环60秒

编写脚本:

```
[test@ubuntu: ~]$ vim crontab.sh
```

写入内容:

```
#!/bin/bash

for ((i = 0; i < 60; i++)); do
    $(/bin/echo 'aaa' >> /tmp/aaa.log)
    sleep 1
done

exit 0
```

给脚本文件可执行权限:

```
[test@ubuntu: ~]$ chmod u+x crontab.sh
```

编写计划任务:

```
[test@ubuntu: ~]$ crontab -e
```

写入:

```
* * * * * /home/test/crontab.sh
```

这样就可以每秒执行一次了

最后, 别忘了删除计划任务:

```
[test@ubuntu: ~]$ crontab -r
```"}}</div>
@endsection

@section('script')
    <script src="{{ asset('js/showdown.min.js') }}"></script>
    <script src="{{ asset('js/showdown-table.min.js') }}"></script>
    <script>
        function convert(){
            var text = $('#markdown').html();
            var converter = new showdown.Converter({extensions: ['table'] });
            var html = converter.makeHtml(text);
            $('#content').html(html)
            $('#content > table').addClass('table table-bordered');
        }
        convert();
    </script>
@endsection

