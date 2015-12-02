<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\Budget;
use App\Http\Requests\BudgetRequest;
use Auth;

class BudgetController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * @return mixed
	 */
	public function index() {
		$userID = Auth::user()->id;
		$budgets = Budget::latest()->where('user_id','=',$userID)->get();
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
	public function show(Budget $budget) {
		$todayNice = self::niceDate($budget->today);
		//echo $budget;
		$expenses = $budget->housing + $budget->utilities + $budget->food
			+ $budget->debt + $budget->transportation + $budget->fun;
		$net = $budget->income-$expenses;
		$newBalance = $budget->balance + $net;
		return view('budgets.show',compact('budget','todayNice','expenses','net','newBalance'));
	}
	/**
	 * @param $id
	 * @return mixed
	 */
	public function graph1($budgetID) {
		//$todayNice = self::niceDate($budget->today);
		$budget = Budget::find(@$budgetID);
		$expenses = $budget->housing + $budget->utilities + $budget->food
			+ $budget->debt + $budget->transportation + $budget->fun;
		$net = $budget->income-$expenses;
		$newBalance = $budget->balance + $net;
		//echo $budget;
		return view('budgets.bar_graph',compact('budget', 'expenses','net', 'newBalance'));
	}
	public function graph2($budgetID) {
		//$todayNice = self::niceDate($budget->today);
		$budget = Budget::find(@$budgetID);
		$expenses = $budget->housing + $budget->utilities + $budget->food
			+ $budget->debt + $budget->transportation + $budget->fun;
		$net = $budget->income-$expenses;
		$newBalance = $budget->balance + $net;
		//echo $budget;
		return view('budgets.pie_graph',compact('budget', 'expenses','net', 'newBalance'));
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function destroy(Budget $budget) {
		$budget->delete();
		return redirect('budgets');
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
		Session::flash('flash_message', 'Budget has been created!');
		return redirect('budgets');
	}

	public function edit(Budget $budget) {
        $todayNice = self::niceDate($budget->today);
		return view ('budgets.edit',compact('budget','todayNice'));
	}

    public function update(Budget $budget, BudgetRequest $request) {
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
