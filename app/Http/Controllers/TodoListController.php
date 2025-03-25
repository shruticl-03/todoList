<?php

namespace App\Http\Controllers;

use App\Models\listItem;
use Illuminate\Http\Request;


class TodoListController extends Controller
{
    public function saveItem(Request $request)
    {
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();
        return view('welcome');
    }
}
