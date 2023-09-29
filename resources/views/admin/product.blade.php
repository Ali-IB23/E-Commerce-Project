<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
            .div_center {
                text-align: center;
                padding-top: 40px;
            }
            .h2_font {
                font-size: 40px;
                padding-bottom: 40px;
            }
            .input_color {
                color: black;
            }
            .center {
                margin:auto;
                width:50%;
                text-align: center;
                margin-top: 30px;
                border: 3px solid  white;
            }
            label {
                display: inline-block;
                width: 200px;
            }
        </style>
        @include('admin.css')
    </head>
    <body>
        <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
    
        @include('admin.header')

        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif
                <div class="div_center">
                    <h1 class="h2_font">Add Product</h1>
                    <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_center">
                            <label>Product Title :</label>
                            <input class="input_color" type="text" name="title" placeholder="Write a title" required="">
                        </div>
                        <div class="div_center">
                            <label>Product Description :</label>
                            <input class="input_color" type="text" name="title" placeholder="Write a description" required="">
                        </div class="div_center">
                        <div class="div_center">
                            <label>Product Price :</label>
                            <input class="input_color" type="number" name="price"placeholder="Write a Price" required="">
                        </div>
                        <div class="div_center">
                            <label>Discount Price :</label>
                            <input class="input_color" type="text" name="dis_price" placeholder="Write a Discount Price" required="">
                        </div>
                        <div class="div_center">
                            <label>Product Quantity :</label>
                            <input class="input_color" type="number" min="0" name="quantity"placeholder="Write Quantity" required="">
                        </div>
                        <div class="div_center">
                            <label>Product Category :</label>
                            <select class="ipnut_color" name="category" required="">
                                <option value="" selected="">Add a Category here</option>
                                @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="div_center">
                            <label>Product Image :</label>
                            <input type="file" name="image" >
                        </div>
                        <div class="div_center">
                            <input type="submit" class="btn btn-primary" name="submit" value="Add Product">
                        </div>
                    </form>
                </div>

                <table class="center">
                    <tr>
                        <td>Product Name</td>
                        <td>Action</td>
                    </tr>
                    {{-- @foreach ($data as $data)
                        <tr>
                            <td>{{$data->product_name}}</td>
                            <td><a onclick="return confirm('Are you sure?')" class="bten btn-danger" href="{{url('delete_product', $data->id)}}">Delete</a></td>
                        </tr>
                    @endforeach --}}
                    
                </table>
            </div>
        </div>
    
        @include('admin.script')
    
    </body>
</html>