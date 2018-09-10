<?php

namespace App\Http\Controllers;

use \App\Ban;
use Request;
use App\Http\Requests\BanRequest;
use Illuminate\Support\Facades\Auth;

class BansController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin' or 'role:gm')->only('store','add','edit','update');
    }
    /*
    Show all bans
    */
    public function index(){
        $title = "Страница банов";
        $bans = Ban::orderby('id','desc')->paginate(15); //пагинация
        return view('ban.index', compact('bans', 'title'));
    }
    /*
    The page where we add new notes to Banes tables
    */
    public function add(){
        $title = "Добавление записей";
        return view('ban.add', compact('title'));
    }
    //Запись данных с add в бд
    public function store(BanRequest $request){
        $username = Auth::user()->name;
        $newData = $request->all();
        $newData['created_by'] = $username ;
        Ban::create($newData);//заполняем бд
        return redirect('ban');  
    }

    public function show($id){
        $title = 'Просмотр';
        $ban = Ban::findOrFail($id);
        return redirect('ban');
    }

    public function edit($id){
        $title = "Edit #$id";
        $ban = Ban::findOrFail($id);
        return view('ban.edit', compact('ban', 'title'));
    }

    
    public function update($id, BanRequest $request){
        $ban = Ban::findOrFail($id);
        $ban->update(Request::all());
        return redirect('ban');
    }

    public function destroy($id)
    {
        $ban = Ban::find($id);
        $ban->delete();
        return redirect('ban');
    }
}
