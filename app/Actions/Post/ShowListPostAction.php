<?php

namespace App\Actions\Post;

use App\Repositories\Posts\PostRepository;
use App\Supports\Traits\HasTransformer;
use App\Transformers\Post\PostTransformer;
use Illuminate\Http\JsonResponse;

/**
 * Class
 * @package App\Actions\User
 */
class ShowListPostAction
{
    use HasTransformer;

    /**
     * @var PostRepository
     */
    protected PostRepository $postRepository;

    /**
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }


    /**
     * @param $id
     * @return JsonResponse
     */
    public function __invoke()
    {
        $response = $this->postRepository->paginate();

        return $this->httpOK($response, PostTransformer::class);
    }
}
