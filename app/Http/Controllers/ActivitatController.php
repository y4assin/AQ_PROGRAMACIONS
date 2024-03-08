<?php

namespace App\Http\Controllers;

use App\Models\Activitat;
use Illuminate\Http\Request;
use App\Models\UF;
use App\Models\RA;
use App\Models\Criteri;
use App\Models\Contingut;
use App\Models\Programacion;


/**
 * Class ActivitatController
 * @package App\Http\Controllers
 */
class ActivitatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activitats = Activitat::paginate();

        return view('activitat.index', compact('activitats'))
            ->with('i', (request()->input('page', 1) - 1) * $activitats->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activitat = new Activitat();
        $ufs = UF::all();
        $ras = RA::all();
        $criteris = Criteri::all();
        $continguts = Contingut::all();
        $programacion = Programacion::all();

        return view('activitat.create', compact('activitat', 'ufs', 'ras', 'criteris', 'continguts', 'programacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Activitat::$rules);

        $activitat = Activitat::create($request->all());

        return redirect()->route('activitats.index')
            ->with('success', 'Activitat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activitat = Activitat::find($id);

        return view('activitat.show', compact('activitat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activitat = Activitat::find($id);
        $ufs = UF::all();
        $ras = RA::all();
        $criteris = Criteri::all();
        $continguts = Contingut::all();
        $programacion = Programacion::all();

        return view('activitat.edit', compact('activitat', 'ufs', 'ras', 'criteris', 'continguts', 'programacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Activitat $activitat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activitat $activitat)
    {
        request()->validate(Activitat::$rules);

        $activitat->update($request->all());

        return redirect()->route('activitats.index')
            ->with('success', 'Activitat updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $activitat = Activitat::find($id)->delete();

        return redirect()->route('activitats.index')
            ->with('success', 'Activitat deleted successfully');
    }
}
