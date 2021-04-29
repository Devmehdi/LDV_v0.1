<?php



function getById($model,$id)
{
    $data=$model::find($id);
    return $data;
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
        return response()->json(['Product not dropped'],425);
    }
}