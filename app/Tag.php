<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
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
        'tag', 'title', 'subtitle', 'meta_description'
    ];

    /**
     * Get all of the articles that are assigned this tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorpheByMany
     */
    public function articles()
    {
        return $this->morphedByMany(Article::class, 'taggable');
    }

    /**
     * Get all of the discussions that are assigned this tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorpheBymany
     */
    public function discussions()
    {
        return $this->morphedByMany(Discussion::class, 'taggable');
    }

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
            $query->where('tag', 'like', "%{$keyword}%")
                ->orWhere('title', 'like', "%{$keyword}%");
        })
            ->orderBy($sortColumn, $sort)->paginate($number);
    }
}
