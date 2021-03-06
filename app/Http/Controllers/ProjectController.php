<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\Sprint;
use Auth;
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::orderBy('id', 'desc')->paginate(5);
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
        $request['product_owner_id'] = Auth::user()->id;
        Project::create($request->all());
        return redirect()->route('project.index')->with('message', 'Project baru berhasil direquest');
    }

    public function show($id){
        $project = Project::findOrFail($id);
        $sprints = Sprint::where('project_id', $id)->orderBy('nama')->get();
        $date = Carbon::now('Asia/Jakarta')->toDateString();

        return view('projects.show', compact('project', 'sprints', 'date'));
    }

    public function edit($id){
        $project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));
    }

    public function jumlahsprint($id){
        $project = Project::findOrFail($id);

        return view('projects.jumlahsprint', compact('project'));
    }

    public function update(Request $request, $id){
        $project = Project::findOrFail($id);
        $request->validate([
            'jumlah_sprint' => 'required',
        ],[
            'jumlah_sprint.required' => 'Field ini harus diisi',
        ]);
        $request['jumlah_sprint'] = (float) str_replace(',', '', $request['jumlah_sprint']);
        $project->update($request->all());
        return redirect()->route('project.index')->with('message', 'Jumlah sprint berhasil ditentukan');
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
