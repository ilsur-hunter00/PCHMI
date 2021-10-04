<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experiment;
use Exception;

class ExperimentController extends Controller
{
    public function add(Request $request)
    {
        try {
            $experiment = Experiment::create([
                'name' => $request->input('name'),
                'num_count_1' => $request->input('num_count_1'),
                'num_count_2' => $request->input('num_count_2'),
                'pict_count_1' => $request->input('pict_count_1'),
                'pict_count_2' => $request->input('pict_count_2'),
                'bold_count_1' => $request->input('bold_count_1'),
                'bold_count_2' => $request->input('bold_count_2'),
                'cursive_count_1' => $request->input('cursive_count_1'),
                'cursive_count_2' => $request->input('cursive_count_2')
            ]);

            if ($experiment) return [
                'status' => 'ok'
            ];
            else return [
                'status' => false,
                'msg' => 'not added'
            ];
        } catch (Exception $e) {
            return [
                'status' => false,
                'msg' => $e->getMessage() . ' on line ' . $e->getLine()
            ];
        }
    }

    public function getAll()
    {
        try {
            $experiments = Experiment::select('*')->get()->all();
            return [
                'status' => 'ok',
                'experiments' => $experiments
            ];
        } catch (Exception $e) {
            return [
                'status' => false,
                'msg' => $e->getMessage() . ' on line ' . $e->getLine()
            ];
        }
    }
}
