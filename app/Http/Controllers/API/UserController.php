<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @SWG\Get(
     *     path="/api/users",
     *     summary="Get all users",
     *     description="",
     *     operationId="",
     *     produces={"application/json"},
     *     tags={"User"},
     *     @SWG\Response(
     *         response=200,
     *         description="Success action."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     *  * @SWG\post(
     *     path="/api/users{id}",
     *     summary="Create User",
     *     description="",
     *     operationId="",
     *     produces={"application/json"},
     *     tags={"User"},
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         required=true,
     *         description="",
     *         @SWG\Schema(
     *            type="object",
     *            @SWG\Property(
     *              property="name",
     *              type="object",
     *              description="",
     *              @SWG\Property(
     *                  property="first name",
     *                  type="string",
     *                  description=""
     *              ),
     *              @SWG\Property(
     *                  property="last name",
     *                  type="string",
     *                  description=""
     *              ),
     *              @SWG\Property(
     *                  property="middle name",
     *                  type="string",
     *                  description=""
     *              )
     *            ),
     *            @SWG\Property(
     *              property="address",
     *              description="",
     *              type="string"
     *            ),
     *            @SWG\Property(
     *              property="contact number",
     *              description="",
     *              type="integer"
     *            )
     *         )
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Success action."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @SWG\Get(
     *     path="/api/users{id}",
     *     summary="Get user by id",
     *     description="",
     *     operationId="",
     *     produces={"application/json"},
     *     tags={"User"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         type="integer",
     *         required=true,
     *         description=""
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Success action."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @SWG\put(
     *     path="/api/users{id}",
     *     summary="Update user by id",
     *     description="",
     *     operationId="",
     *     produces={"application/json"},
     *     tags={"User"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         type="integer",
     *         required=true,
     *         description=""
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Success action."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * * @SWG\delete(
     *     path="/api/users{id}",
     *     summary="Update user by id",
     *     description="",
     *     operationId="",
     *     produces={"application/json"},
     *     tags={"User"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         type="integer",
     *         required=true,
     *         description=""
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Success action."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
