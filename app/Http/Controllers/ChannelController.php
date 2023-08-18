<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelController extends Controller
{
    public function index()
    {
        $channels = Channel::all();
        return view('channels.index', compact('channels'));
    }

    public function create()
    {
        return view('channels.create');
    }

    public function store(Request $request)
    {
        // Xử lý lưu thông tin kênh vào CSDL
    }

    public function edit($id)
    {
        // Lấy thông tin kênh theo ID và trả về view để chỉnh sửa
    }

    public function update(Request $request, $id)
    {
        // Xử lý cập nhật thông tin kênh
    }

    public function destroy($id)
    {
        // Xử lý xóa kênh khỏi CSDL
    }
}
