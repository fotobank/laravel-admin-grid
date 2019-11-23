<?php

namespace Fotobank\Admin;

use Closure;
use Encore\Admin\Grid as Grids;
use Illuminate\Database\Eloquent\Model as Eloquent;


class Grid extends Grids
{


	public function __construct (Eloquent $model, Closure $builder = null)
	{
		parent::__construct($model, $builder);

		// добавляем класc для вывода кнопок - "Fotobank\Admin\Actions"
		$this->actionsClass = Actions::class;

	}

}
