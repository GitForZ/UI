<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about() {
		#Passing variable to a view using compact
		/*
		$first = 'Marcus';
		$last = 'Lorenzana'; 
		return view('pages.about',compact('first','last')); 
		*/
		
		$features = [
			'feature1','feature2','feature3'
		];
		
		return view('pages.about',compact('features')); 
		
		#Passing variable to a view using associative array
		/*
		$data = [];
		$data['first']='Marcus';
		$data['last']='Lorenzana';
		return view('pages.about',$data);
		*/
	}
	
	public function contact() {
		
		return view('pages.contact'); 
		
	}

	public function home() {
		return view('pages.home');
	}

	public function help() {
		return view('pages.help');
	}

}
