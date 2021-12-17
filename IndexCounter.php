
<h3> @foreach($viewspage as $viewspage)
  {{ $viewspage -> views }}
@endforeach</h3>  
<h3>Total Views</h3>
In index controller
$viewspage=Countpage::latest()->paginate(5);
         Countpage::increment('views');
     
       return view('index',compact('product','slider','test','viewspage'));
  // Create a modal name is Countpage and use in Index Controller
  And IndexController Looks like this
  <---->
  <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\AdminProducts;
use App\Countpage;

class IndexController extends Controller
{
    public function index()
    {
        $slider =Slider::get();
        $products=AdminProducts::get();

// 
        $viewspage=Countpage::latest()->paginate(5);
        Countpage::increment('views');
     
// 
        return view('index',compact('slider','products','viewspage'));
    }

}
<---->
  //     and after creating this things Just out a zero in database
  
