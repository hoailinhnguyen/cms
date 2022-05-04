<?php

namespace App\Http\Controllers\Posts;

use App\Actions\Post\CreatePostAction;
use App\Actions\Post\DeletePostAction;
use App\Actions\Post\ShowDetailPostAction;
use App\Actions\Post\ShowListPostAction;
use App\Actions\Post\UpdatePostAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use Flugg\Responder\Http\Responses\SuccessResponseBuilder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  ShowListPostAction  $action
     * @return JsonResponse
     */
    public function index(ShowListPostAction $action)
    {
        return ($action)();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatePostRequest  $request
     * @param  CreatePostAction  $action
     * @return SuccessResponseBuilder|JsonResponse
     */
    public function store(CreatePostRequest $request, CreatePostAction $action)
    {
        return ($action)($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param    $id
     * @param  ShowDetailPostAction  $action
     * @return JsonResponse
     */
    public function show($id, ShowDetailPostAction $action)
    {
        return ($action)($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePostRequest  $request
     * @param    $id
     * @param  UpdatePostAction  $action
     * @return SuccessResponseBuilder|JsonResponse
     */
    public function update(UpdatePostRequest $request, $id, UpdatePostAction $action)
    {
        return ($action)($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    $id
     * @param  DeletePostAction  $action
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy($id, DeletePostAction $action)
    {
        return ($action)($id);
    }
}
