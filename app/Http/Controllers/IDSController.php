<?php

class IDSController extends BaseController {

	public function showIDS()
	{
		$PageTitle = "IDS";
		$PageText = "Fort Worth ARTCC Status Information Area";
		return View::make('ids.index')->with('PageTitle', $PageTitle)->with('PageText', $PageText);
	}

	public function showDFWsouth()
	{
		return View::make('ids.dfwsouthAPCHmenu');
	}
	public function showDFWnorth()
	{
		return View::make('ids.dfwnorthAPCHmenu');
	}
	public function showD10WSAT()
	{
		return View::make('ids.d10wsat');
	}
	public function showD10ESAT()
	{
		return View::make('ids.d10esat');
	}
	public function showD10DEP()
	{
		return View::make('ids.d10dep');
	}
	public function showD10STARS()
	{
		return View::make('ids.d10stars');
	}
	public function showD10weather()
	{
		return View::make('ids.d10weather');
	}
}

