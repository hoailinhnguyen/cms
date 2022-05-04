<?php

namespace App\Actions\Post;

use App\Repositories\Posts\PostRepository;
use App\Supports\Traits\HasTransformer;
use App\Transformers\Post\PostTransformer;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @package App\Actions\User
 */
class UpdatePostAction
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
     * @param $id
     * @return SuccessResponseBuilder|JsonResponse
     */
    public function __invoke(array $data, $id): JsonResponse
    {
        $response = $this->postRepository->update($data, $id);
        return $this->httpOk($response, PostTransformer::class);
    }
}
