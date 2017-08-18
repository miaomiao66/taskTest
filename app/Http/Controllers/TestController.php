<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\MiaoRepository;
use App\Repositories\TaskRepository;
use Input;
use App\Jobs\SendTest;
use Validator;
use Carbon\Carbon;
use App\Entities\Miao;
use Mail;
use Datatables;
use App\Entities\Task;
use ArnisLielturks\FayeClient\FayeServiceInterface;


class TestController extends Controller
{
    protected $miaoRepository;
    protected $taskRepository;

    public function __construct(MiaoRepository $miaoRepository, TaskRepository $taskRepository){
        $this->miaoRepository = $miaoRepository;
        $this->taskRepository = $taskRepository;
    }

    public function test1(){
        // $post = $this->miaoRepository->all(['name'])->toArray();
        // $post = $this->miaoRepository->first(['name', 'password'])->toArray();
        // $post = $this->miaoRepository->paginate('5',['name', 'password']);
        // $post = $this->miaoRepository->orderBy('id')->all()->toArray();
        // $post = $this->miaoRepository->findByField('name', '小红6')->toArray();
        // $post = $this->miaoRepository->findWhere(['name'=>'小红6', 'id'=>11])->toArray();
        // $post = $this->miaoRepository->findWhereIn('id', [1,3,4,6])->toArray();
        // $post = $this->miaoRepository->findWhereNotIn('id', [1,3,4,6])->toArray();
        // $post = $this->miaoRepository->create(['name'=>'qq', 'password'=>'11111', 'email'=>'qwq@163.com'])->toArray();
        // $post = $this->miaoRepository->update(['name'=>'qq', 'password'=>'11111', 'email'=>'mmmmm@163.com'], 19)->toArray();
        // $post = $this->miaoRepository->updateOrCreate(['name'=>'qq', 'password'=>'121211', 'email'=>'mmmmm@163.com'], ['name'=>'qq', 'password'=>'121212', 'email'=>'mmmmm@163.com'])->toArray();
        //如果有前面的那个数组就在那个数组上面修改，如果没有就添加新数据
        $post = $this->miaoRepository->updateOrCreate(['name'=>'qq', 'password'=>'121211', 'email'=>'mmmmm@163.com'], ['name'=>'qq', 'password'=>'121212', 'email'=>'mmmmm@163.com'])->toArray();
        dd($post);
    }

    public function aa()
    {
        echo 'job_test';
        $this->dispatch(new SendTest());
    }

    public function fayeTest(){

    }
}



























