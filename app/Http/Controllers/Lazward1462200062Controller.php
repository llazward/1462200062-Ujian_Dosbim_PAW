<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\lazward1462200062;
use Illuminate\Support\Facades\DB;


class Lazward1462200062Controller extends Controller
{
    public function adminIndex(Request $request) {
        $query = lazward1462200062::query();
    
        if($request->has('search')) {
            $search = $request->search;
            $query->where('nama', 'LIKE', "%$search%")
                  ->orWhere('gender', 'LIKE', "%$search%")
                  ->orWhere('umur', 'LIKE', "%$search%");
        }
    
        $allData = $query->paginate(5);
    
        return view('index', ['data' => $allData]);
    }
    

    public function adminAdd() {
        $allData = lazward1462200062::all();
        return view('add', ['data'=>$allData]);
    }

    public function adminEdit($id) {
        $dataEdit = lazward1462200062::find($id);
        return view('edit', ['data'=>$dataEdit]);
    }


    public function AddAdmin(Request $request) {
        $newData = new lazward1462200062();
        $newData->nama = $request->nama;
        $newData->gender = $request->gender;
        $newData->umur = $request->umur;
        $newData->save();
        $this->resetIds();
        return redirect('/adminIndex');
    }


    public function EditAdmin(Request $request) {
        lazward1462200062::where('id', $request->id)->update([
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'umur'=>$request->umur,
        ]);
        return redirect('/adminIndex');
    }

    // delete data
    public function DeleteAdmin($id) {
        $dataDelete = lazward1462200062::find($id);
        if ($dataDelete) {
            $dataDelete->delete();
            $this->resetIds();
        }
        return redirect('/adminIndex');
    }

    private function resetIds() {
        $data = lazward1462200062::all();
        $count = 1;
        foreach ($data as $item) {
            $item->id = $count;
            $item->save();
            $count++;
        }
        $maxId = lazward1462200062::max('id') + 1;
        DB::statement("ALTER TABLE lazward1462200062s AUTO_INCREMENT = $maxId");
    }
}
