<?php

namespace App\Actions\Post;

use App\Repositories\Posts\PostRepository;
use App\Repositories\Users\UserRepository;
use App\Supports\Traits\HasTransformer;
use App\Transformers\Customer\CustomerTransformer;
use App\Transformers\Post\PostTransformer;
use App\Transformers\Users\UserTransformer;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;

/**
 * Class
 * @package App\Actions\User
 */
class CreatePostAction
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
     * @param array $data
     * @return SuccessResponseBuilder|JsonResponse
     */
    public function __invoke(array $data): JsonResponse
    {
        $response = $this->postRepository->create($data);

        return $this->httpCreated($response, PostTransformer::class);
    }
}
