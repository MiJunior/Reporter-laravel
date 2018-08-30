<?php

namespace App\Http\Controllers;

use \App\Ban;
use Request;
use App\Http\Requests\AddingBanRequest;
use Illuminate\Support\Facades\Auth;

class BansController extends Controller
{
    /*
    Show all bans
    */
    public function index(){
        $title = "Страница банов";
        $bans = Ban::latest('time_created')->paginate(5); //пагинация
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
    public function store(AddingBanRequest $request){
        $username = Auth::user()->name;
        $newData = $request->all();
        $newData['created_by'] = $username ;
        Ban::create($newData);//заполняем бд
        return redirect('ban');  
    }
    /*public function delete($id){
        $table->delete('$id');
    }*/ 
}
