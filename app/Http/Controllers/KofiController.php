<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KofiController extends Controller
{
    public function setDonateGoal(Request $request)
    {

        $goal = $request->input("goalamount");
        $name = $request->input("goalname");

        $data = [
            'name' => $name,
            'goal' => $goal,
            'amount' => 0,
            'percentige' => 0,
        ];

        $success = Storage::disk('local')->put('donate.json', json_encode($data));

        return redirect()->back();

    }

    public function saveDonate(Request $request)
    {

        if (!Storage::exists('donate.json')) {
            return response()->json([
                'code' => 404,
                'error' => true,
                'message' => 'File not found',
            ]);
        }
        $amount = (float) $request->all()['amount'];

        $data = json_decode(Storage::disk('local')->get('donate.json'));

        $data->amount += $amount;
        $data->percentige = round(($data->amount / $data->goal) * 100);
        $success = Storage::disk('local')->put('donate.json', json_encode($data));

        return response()->json([
            'code' => 200,
            'error' => $success,
            'message' => $success ? 'Donate saved' : 'Error saving',
        ]);
    }

    public function getDonateGoal()
    {
        if (!Storage::exists('donate.json')) {
            return response()->json([
                'code' => 404,
                'error' => true,
                'message' => 'File not found',
            ]);
        }

        return Storage::disk('local')->get('donate.json');
    }

    public function donateBar()
    {
        $data = json_decode(Storage::disk('local')->get('donate.json'));
        return view('donatebar')->with(compact('data'));
    }
}
