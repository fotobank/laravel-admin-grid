## laravel-admin Grid

## Screenshot

![screenshot](https://github.com/fotobank/laravel-admin-grid/blob/master/Screenshot.png)

Installation
First, install dependencies:

    composer require fotobank/laravel-admin-grid
 
### Меры предосторожности
<div>
    <table border="0">
	  <tr>
	    <th>Version</th>
	    <th>Laravel-Admin Version</th>
	  </tr>
	  <tr>
	    <td>1.1.0</td>
	    <td>< 1.7</td>
	  </tr>
	  <tr>
        <td>1.2.0</td>
        <td>>= 1.7</td>
      </tr>
	</table>
</div>    
    
User 

В контроллере:
       
    use Encore\Admin\Grid;
       
Заменить на:

    use James\Admin\Grid;

# Известные проблемы

Ошибка:

James\Admin\Actions::{closure}()  
    
Решение：

    $grid->actions(function ($actions)

