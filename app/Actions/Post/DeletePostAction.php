<?php

namespace App\Actions\Post;


use App\Repositories\Posts\PostRepository;
use App\Supports\Traits\HasTransformer;
use Illuminate\Http\JsonResponse;
use League\Flysystem\Exception;

/**
 * Class
 * @package App\Actions\User
 */
class DeletePostAction
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
     * @throws \Exception
     */
    public function __invoke($id): JsonResponse
    {
        try {
            $this->postRepository->delete($id);
            return $this->httpNoContent();
        } catch (Exception $e) {
            throw $e;
        }
    }
}
