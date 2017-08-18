<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\MiaoRepository;
use App\Entities\Miao;
use App\Validators\MiaoValidator;

/**
 * Class MiaoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class MiaoRepositoryEloquent extends BaseRepository implements MiaoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Miao::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    // public function presenter()
    // {
    //     return "Prettus\\Repository\\Presenter\\ModelFractalPresenter";
    // }
}
