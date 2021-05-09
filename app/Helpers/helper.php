<?php



function getById($model,$id)
{
    $data=$model::find($id);
    return $data;
}

function getAll($model)
{
    $obj=$model::all();
    return $obj;
}

function Delete($model,$id)
{
    $Agence=$model::find($id);

    if($Agence->Delete())
    {
        return "OK";
    }
    else
    {
        return response()->json(['Notification not dropped'],425);
    }
}