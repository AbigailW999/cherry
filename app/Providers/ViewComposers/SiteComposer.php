<?php
namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\User;
use Auth;
class SiteComposer{
	public function compose (View $view){
		if(Auth::guest()){
			$user = new User;
		} else{
			$user = Auth::user();
		}
		$view->with('user', $user);
	}
}