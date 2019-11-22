## laravel-admin Grid

## Screenshot

![screenshot](https://github.com/fotobank/laravel-admin-grid/blob/master/Screenshot.png)

Installation:
First, install dependencies:

    composer require fotobank/laravel-admin-grid
 

The controller:
       
    use Encore\Admin\Grid;
       
Replaced by:

    use Fotobank\Admin\Grid;

# Known issues

Mistake:

Fotobank\Admin\Actions::{closure}();
    
Decision:

    $grid->actions(function ($actions));
