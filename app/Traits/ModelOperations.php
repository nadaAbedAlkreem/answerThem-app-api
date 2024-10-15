<?php

namespace App\Traits;

use App\Traits\ResponseTrait;
use Illuminate\Http\Request;


trait ModelOperations
{

    use ResponseTrait;

    public function create($model, $request)
    {
         $create = $model::create($request->all());
         return $create ? $this->successResponse('CREATE_SUCCESS', $create, 201) : $this->errorResponse('CREATE_FAILED', 400);
    }

    public function destroy($model , $request ,  $id )
    {
        $delete =  $model::find($id)->delete();
        return  $delete ? $this->successResponse('DELETE_SUCCESS', $create, 201) : $this->errorResponse('DELETE_FAILED', 400);
    }

    public function update($model , $request )   //UPDATE_SUCCESS
    {
        $update = $model::where('id' ,$request['id'] )->update($request->getData());
        return $update? $this->successResponse('UPDATE_SUCCESS', $create, 201) : $this->errorResponse('UPDATE_SUCCESS', 400);
    }

    public function search($model , $request )   //UPDATE_SUCCESS
    {
        $update = $model::where('' ,$request[] )->first();
        return $update? $this->successResponse('UPDATE_SUCCESS', $create, 201) : $this->errorResponse('UPDATE_SUCCESS', 400);
    }






}
