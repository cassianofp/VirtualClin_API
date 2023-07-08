<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use App\Http\Resources\PacienteResource;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        $paciente = Paciente::paginate();
        return PacienteResource::collection($paciente);
    }

    public function store(Request $request){
        $data = $request->all();
        $paciente = Paciente::create($data);
        return new PacienteResource($paciente);
    }

    public function show(string $id){
        $paciente = Paciente::findOrFail($id);
        return new PacienteResource($paciente);
    }

    public function update(Request $request, string $id){
        $paciente = Paciente::findOrFail($id);
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $paciente->update($data);

        return new PacienteResource($paciente);
    }

    public function destroy(string $id){
        $paciente = paciente::findOrFail($id);
        $paciente->delete;
        return response()->json([], 204);
    }
}
