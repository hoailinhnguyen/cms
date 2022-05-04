<?php

namespace App\Transformers\Post;

use App\Models\Post;
use Flugg\Responder\Transformers\Transformer;

class PostTransformer extends Transformer
{
    /**
     * List of available relations.
     *
     * @var string[]
     */
    protected $relations = [];

    /**
     * List of autoloaded default relations.
     *
     * @var array
     */
    protected $load = [];

    /**
     * Transform the model.
     *
     * @param   $post
     * @return array
     */
    public function transform(Post $post)
    {
        return [
            'id' => $post->id,
            'post_name'=> $post->post_name,
            'full_name'=> $post->full_name,
            'email'=> $post->email,
            'bank_id'=> $post->bank_id,
            'post_group_id'=> $post->post_group_id,
            'limit'=> $post->limit,
            'account_number'=> $post->account_number,
            'phone'=> $post->phone,
            'active_master'=> $post->active_master,
            'active_visa'=> $post->active_visa,
            'active_jcb'=> $post->active_jcb,
            'active_napas'=> $post->active_napas,
            'master'=> $post->master,
            'visa'=> $post->visa,
            'jcb'=> $post->jcb,
            'napas'=> $post->napas,
            'description'=> $post->description,
            'created_at' => $post->created_at,
            'updated_at' => $post->updated_at
        ];
    }
}
