<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;

class ProjectController extends Controller
{
    public function index(){ 
        $projects = Project::paginate(5);
        return view('projects.index', compact('projects'));
    }

    public function create(){
        return view('projects.create');
    }

    public function store(Request $request){    
        $this->_validation($request);
        $request['tanggal_akhir'] = str_split(str_replace(' - ', '', $request['tanggal_mulai']), 10)[1];
        $request['tanggal_mulai'] = str_split(str_replace(' - ', '', $request['tanggal_mulai']), 10)[0];
        $request['budget'] = (float) str_replace(',', '', $request['budget']);
        $request['product_owner_id'] = 7;        
        Project::create($request->all());
        return redirect()->route('project.index')->with('message', 'Project baru berhasil direquest');
    }

    public function show($id){
        $project = Project::findOrFail($id);

        return view('projects.show', compact('project'));
    }

    public function edit($id){
        $project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id){
        $this->_validation($request);
        $project = Project::findOrFail($id);
        $project->update($request->all());
        return redirect()->route('project.index')->with('message', 'Project baru berhasil diubah');
    }

    public function destroy($id){
        Project::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Project tersebut berhasil dihapus');
    }

    private function _validation(Request $request){
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required',
            // 'tanggal_akhir' => 'required',
            'budget' => 'required',
        ],[
            'nama.required' => 'Field ini harus diisi',
            'deskripsi.required' => 'Field ini harus diisi',
            'tanggal_mulai.required' => 'Field ini harus diisi',
            // 'tanggal_akhir.required' => 'Field ini harus diisi',
            'budget.required' => 'Field ini harus diisi',
        ]);
    }
}