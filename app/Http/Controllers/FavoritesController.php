<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをお気に入りにする
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフェイバリットする
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
