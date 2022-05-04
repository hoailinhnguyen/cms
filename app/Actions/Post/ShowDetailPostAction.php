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
class ShowDetailPostAction
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
    public function __invoke($id): JsonResponse
    {
        $customer = $this->postRepository->find($id);
        return $this->httpOK($customer, PostTransformer::class);
    }
}
