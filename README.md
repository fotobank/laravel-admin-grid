## laravel-admin Grid

## Screenshot

![screenshot](https://github.com/fotobank/laravel-admin-grid/blob/master/Screenshot.png)

Installation:
First, install dependencies:

    composer require fotobank/laravel-admin-grid
 
### Precautionary measures
<div>
    <table border="0">
	  <tr>
	    <th>Version</th>
	    <th>Laravel-Admin Version</th>
	  </tr>
	  <tr>
	    <td>1.1.1</td>
	    <td>< 1.7</td>
	  </tr>
	  <tr>
        <td>1.2.1</td>
        <td>>= 1.7</td>
      </tr>
	</table>
</div>    
    
User :

The controller:
       
    use Encore\Admin\Grid;
       
Replaced by:

    use Fotobank\Admin\Grid;

# Known issues

Mistake:

Fotobank\Admin\Actions::{closure}();
    
Decision:

    $grid->actions(function ($actions));
