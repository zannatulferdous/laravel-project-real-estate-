<?php

namespace App\Http\Controllers;

use App\Category;
use App\Property;
use Image;
use DB;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function addProperty(){

        $categories=Category::where('publication_status',1)->get();


        return view('admin.property.add-property',[
            'categories'=>$categories,
            ]);

    }

    protected function PropertyInfoValidate($request){
        $this->validate($request,[
            'category_id'=>'required',
            'property_name'=>'required',
            'property_type'=>'required',
            'property_price'=>'required',
            'property_city'=>'required',
            'property_area'=>'required',
            'property_bedroom'=>'required',
            'property_bathroom'=>'required',
            'property_balcony'=>'required',
            'square_feet'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'property_image'=>'required',
            'publication_status'=>'required',
        ]);
    }
    protected function PropertyImageUpload($request){
        $propertyImage=$request->file('property_image');
        $imageName=$propertyImage->getClientOriginalName();
        $directory='admin/property-images/';
        $imageUrl=$directory.$imageName;
        //$propertyImage->move($directory,$imageName);
        Image::make($propertyImage)->resize(200,200)->save($imageUrl);
        return $imageUrl;
    }
protected function PropertysaveInfo($request,$imageUrl){
    $property =new Property();
    $property->category_id=$request->category_id;
    $property->property_name=$request->property_name;
    $property->property_type=$request->property_type;
    $property->property_price=$request->property_price;
    $property->property_city=$request->property_city;
    $property->property_area=$request->property_area;
    $property->property_bedroom=$request->property_bedroom;
    $property->property_bathroom=$request->property_bathroom;
    $property->property_balcony=$request->property_balcony;
    $property->square_feet=$request->square_feet;
    $property->short_description=$request->short_description;
    $property->long_description=$request->long_description;
    $property->property_image=$imageUrl;
    $property->publication_status=$request->publication_status;
    $property->save();
}
    public function saveProperty(Request $request){
       $this->propertyInfoValidate($request);
       $imageUrl=$this->propertyImageUpload($request);
       $this->propertysaveInfo($request,$imageUrl);


       return redirect('/add/property')->with('message','Property info save Successfully');
    }

    public function manageProperty(){
        $properties=DB::table('properties')
                     ->join('categories','properties.category_id','=','categories.id')
                     ->select('properties.*','categories.category_name')
                     ->get();

        return view('admin.property.manage-property',
            ['properties'=>$properties]);

    }
    public function unpublishedProperty($id){
        $property = Property::find($id);
        $property->publication_status=0;
        $property->save();
        return redirect('/manage/property');


    }

    public function publishedProperty($id){
        $property = Property::find($id);
        $property->publication_status=1;
        $property->save();
        return redirect('/manage/property');


    }
    public function editProperty($id){
        $property=Property::find($id);
        $categories=Category::where('publication_status',1)->get();


        return view('admin.property.edit-property',[
            'property'=>$property,
            'categories'=>$categories,

        ]);

    }
    protected function updatePropertyInfo($property,$request,$imageUrl){
        $property->category_id=$request->category_id;
        $property->property_name=$request->property_name;
        $property->property_type=$request->property_type;
        $property->property_price=$request->property_price;
        $property->property_city=$request->property_city;
        $property->property_area=$request->property_area;
        $property->property_bedroom=$request->property_bedroom;
        $property->property_bathroom=$request->property_bathroom;
        $property->property_balcony=$request->property_balcony;
        $property->square_feet=$request->square_feet;
        $property->short_description=$request->short_description;
        $property->long_description=$request->long_description;
        $property->property_image=$imageUrl;
        $property->publication_status=$request->publication_status;
        $property->save();
    }
    protected function updatePropertyInfoWithoutImage($property,$request){
        $property->category_id=$request->category_id;
        $property->property_name=$request->property_name;
        $property->property_type=$request->property_type;
        $property->property_price=$request->property_price;
        $property->property_city=$request->property_city;
        $property->property_area=$request->property_area;
        $property->property_bedroom=$request->property_bedroom;
        $property->property_bathroom=$request->property_bathroom;
        $property->property_balcony=$request->property_balcony;
        $property->square_feet=$request->square_feet;
        $property->short_description=$request->short_description;
        $property->long_description=$request->long_description;
        $property->publication_status=$request->publication_status;
        $property->save();
    }
    public function updateProperty(Request $request){
        $property=Property::find($request->id);
        $propertyImage=$request->file('property_image');
        if($propertyImage)
        {
            unlink($property->property_image);
            $this->PropertyInfoValidate($request);
            $imageUrl=$this->PropertyImageUpload($request);
            $this->updatePropertyInfo($property,$request,$imageUrl);
        }
        else{
            $this->updatePropertyInfoWithoutImage($property,$request);
        }

       return redirect('/manage/property')->with('message','Property updated Successfully');

}

    public function deleteProperty($id){
        $property=Property::find($id);
        $property->delete();
        return redirect('/manage/property')->with('message','Property  Deleted Successfully');


    }
}
