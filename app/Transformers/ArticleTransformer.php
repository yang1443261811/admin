<?php

namespace App\Transformers;

use App\Article;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
{
    protected $availableIncludes  = [
        'tags',
        'category'
    ];

    public function transform(Article $article)
    {
        return [
            'id'                => $article->id,
            'title'             => $article->title,
            'subtitle'          => $article->subtitle,
            'user'              => $article->user,
            'slug'              => $article->slug,
            'content'           => $article->content,
            'page_image'        => $article->page_image,
            'meta_description'  => $article->meta_description,
            'is_original'       => $article->is_original,
            'is_draft'          => $article->is_draft,
            'visitors'          => $article->view_count,
//            'created_at'        => $article->created_at->diffForHumans(),
//            'created_at'        => $article->created_at->toDateTimeString(),
            'created_at'        => $article->created_at,
        ];
    }

    /**
     * Include Category
     *
     * @param Article $article
     * @return \League\Fractal\Resource\Collection
     */
    public function includeCategory(Article $article)
    {
        if ($category = $article->category) {
            return $this->item($category, new CategoryTransformer);
        }
    }

    /**
     * Include Tags
     *
     * @param Article $article
     * @return \League\Fractal\Resource\Collection
     */
    public function includeTags(Article $article)
    {
        if ($tags = $article->tags) {
            return $this->collection($tags, new TagTransformer);
        }
    }
}
