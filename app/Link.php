<?php

namespace App;

//use App\Scopes\StatusScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'link', 'image', 'status'
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
//    public static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope(new StatusScope());
//    }

    /**
     * Get number of the records.
     *
     * @param  Request $request
     * @param  integer $number
     * @param  string  $sort
     * @param  string  $sortColumn
     * @return collection
     */
    public static function pageWithRequest($request, $number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        $keyword = $request->get('keyword');

        return static::when($keyword, function ($query) use ($keyword) {
                $query->where('name', 'like', "%{$keyword}%");
            })
            ->orderBy($sortColumn, $sort)->paginate($number);
    }
}
