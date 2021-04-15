<?php



function getById($model,$id)
{
    $data=$model::findorfile($id);
    return $data;
}
