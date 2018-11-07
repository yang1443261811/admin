<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip', 'article_id', 'clicks'
    ];

    /**
     * Get the article for visitor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
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
                $query->where('ip', $keyword)
                    ->orWhereHas('article', function ($query) use ($keyword) {
                        $query->where('title', 'like', "%{$keyword}%");
                    });
            })
            ->orderBy($sortColumn, $sort)->paginate($number);
    }
}
