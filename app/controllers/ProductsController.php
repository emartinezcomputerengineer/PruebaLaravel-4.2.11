<?php 
 
class ProductsController extends BaseController {
    
    public function listProduct()
    {
        $products = Product::all();
        $counter  = Product::count();
        
        return View::make('products.list', array('products' => $products, 'counter' => $counter));
    }

    public function newProduct()
    {
        return View::make('products.create');
    }
 
 
    /**
     * 
     */
    public function createProduct()
    {   
        $reglas = array(
                    'name'=>array('required'),
                    'description'=>array('required')
                    );

        $validator = Validator::make(Input::all(), $reglas);

        if ($validator->fails())
        {
            return Redirect::to('products/new')
            
                ->withErrors($validator)
                ->withInput();
            
        }else{
            
            Product::create(Input::all());
            
            return Redirect::to('products/list');
            
        }
        
 
    }
    
    public function updateProduct($id)
    {  
        $product = Product::find($id);
        $product -> update(Input::all());
 
        return Redirect::to('products/list');
 
    }
    
    public function deleteProduct($id)
    {  
        $client = Product::find($id);
        $client -> delete();

        return Redirect::to('products/list');
 
    }
   
 
     /**
     * 
     */
    public function seeProduct($id)
    {
    
        $product = Product::find($id);
    
        return View::make('products.show', array('product' => $product));
    }
    

    

 
}
