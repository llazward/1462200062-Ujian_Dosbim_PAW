<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lazward1462200062;
use App\Models\HistoryPenyakit;
use Illuminate\Support\Facades\DB;

class HistoryPenyakitController extends Controller
{
    public function historyIndex(Request $request) {
        $query = HistoryPenyakit::query();
    
        if($request->has('search')) {
            $search = $request->search;
            $query->where('nama', 'LIKE', "%$search%")
                  ->orWhere('penyakit', 'LIKE', "%$search%")
                  ->orWhere('tanggal', 'LIKE', "%$search%");
        }
    
        $allData = $query->paginate(5);
    
        return view('history', ['data2' => $allData]);
    }

    public function historyAdd()
    {
        $allData = lazward1462200062::all();
        return view('addHistory', ['data2' => $allData]);
    }

    public function historyEdit($id)
    {
        $dataEdit = HistoryPenyakit::find($id);
        return view('editHistory', ['data2' => $dataEdit]);
    }

    public function AddHistory(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'umur' => 'required|string|max:255',
            'penyakit' => 'required|string|max:255',
            'diagnosis' => 'required|string|max:255',
            'catatan' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);
    
        $newData = new HistoryPenyakit();
        $newData->nama = $validatedData['nama'];
        $newData->gender = $validatedData['gender'];
        $newData->umur = $validatedData['umur'];
        $newData->penyakit = $validatedData['penyakit'];
        $newData->diagnosis = $validatedData['diagnosis'];
        $newData->catatan = $validatedData['catatan'];
        $newData->tanggal = $validatedData['tanggal'];
        $newData->save();
        $this->resetIds();
        return redirect('/historyIndex');
    }

    public function EditHistory(Request $request) {
        HistoryPenyakit::where('id', $request->id)->update([
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'umur'=>$request->umur,
            'penyakit'=>$request->penyakit,
            'diagnosis'=>$request->diagnosis,
            'catatan'=>$request->catatan,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect('/historyIndex');
    }

    public function DeleteHistory($id)
    {
        $dataDelete = HistoryPenyakit::find($id);
        if ($dataDelete) {
            $dataDelete->delete();
            $this->resetIds();
        }

        return redirect('/historyIndex');
    }

    private function resetIds() {
        $data2 = HistoryPenyakit::all();
        $count = 1;
        foreach ($data2 as $item) {
            $item->id = $count;
            $item->save();
            $count++;
        }
        $maxId = HistoryPenyakit::max('id') + 1;
        DB::statement("ALTER TABLE history_penyakits AUTO_INCREMENT = $maxId");
    }
}
