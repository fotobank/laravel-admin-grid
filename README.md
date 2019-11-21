## laravel-admin Grid

## Screenshot

![screenshot](https://github.com/xiaoxuan6/laravel-admin-sortable/blob/master/20190225154750.png)

Installation
First, install dependencies:

    composer require james.xue/laravel-admin-grid
 
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
James\Admin\Actions::{closure}()  //ошибка
    
解决方法：

    $grid->actions(function ($actions)

