<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Miao extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['name', 'password', 'email'];

    // public function transform()
    // {
    //     return [
    //         'user_id' => (int) $this->id,
    //         'title'   => $this->name,
    //         'content' => $this->email,
    //         'password11' => $this->password
    //     ];
    // }
}
