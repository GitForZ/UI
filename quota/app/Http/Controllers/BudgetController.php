<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;
use App\Budget;
use App\Http\Requests\BudgetRequest;
use Auth;

class BudgetController extends Controller {

	/**
	 * @return mixed
	 */
	public function index() {
		$budgets = Budget::latest('today')->get();
		$array = array();
		foreach ($budgets as $budget) {
			$todayNice = self::niceDate($budget->today);
			array_push($array,$todayNice);
		}

		return view('budgets.index',compact('budgets','array'));
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function show($id) {
		$budget = Budget::findOrFail($id);
		$todayNice = self::niceDate($budget->today);
		return view('budgets.show',compact('budget','todayNice'));
	}

	/**
	 * @return mixed
	 */
	public function create() {
		return view('budgets.create'); 
	}

	/**
	 * @return mixed
	 */
	public function store(BudgetRequest $request) {
        $budget = new Budget($request->all());
        Auth::user()->budgets()->save($budget);
		return redirect('budgets');
	}

	public function edit($id) {
		$budget = Budget::findOrFail($id);
        $todayNice = self::niceDate($budget->today);
		return view ('budgets.edit',compact('budget','todayNice'));
	}

    public function update($id, BudgetRequest $request) {
        $budget = Budget::findOrFail($id);
        $budget->update($request->all());
        return redirect('budgets');
    }

	public function niceDate($theDate) {
		$pieces = explode("-",$theDate);
		$year = $pieces[0];
		$month = $pieces[1];
		$final = $month . '/' . $year;
		return $final;
	}

}
