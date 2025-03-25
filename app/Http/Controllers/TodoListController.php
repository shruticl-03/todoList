<?php

namespace App\Http\Controllers;

use App\Models\listItem;
use Illuminate\Http\Request;


class TodoListController extends Controller
{
    public function index()
    {
        return view('welcome', ['listItems' => ListItem::all()]);
    }
    public function markcomplete($id)
    {
        $listItem = ListItem::find($id);
        \Log::info($listItem);
        return redirect('/');
    }
    public function saveItem(Request $request)
    {
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();
        return redirect('/');
    }
}
