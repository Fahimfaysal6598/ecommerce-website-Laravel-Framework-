@include('inc.head')
@include('inc.sidebar')
@section('content')
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Product</h4>              
                                </div>
                                <div class="card-body">
                           <div class="table-responsive">
                               
                                   <table class="table table-striped" border="1" width="100%">
                                        <thead >
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Category Name</th>
                                            <th>Brand Name</th>
                                            <th>Description</th>            
                                            <th>Image</th>   
                                            <th>Status</th>
                                            <th width="280px"><div align="center">Action</div></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->category_name }}</td>
                                            <td>{{ $product->brand_name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->image }}</td>            
                                            <td>{{ $product->status }}</td>          
                                            <td> 
                                                <div align="center">                      
                                                    <a class="btn btn-primary" href="{{ route('product_edit', ['id' => $product->id])}}">Edit</a>
                                                    
                                                     <a class="btn btn-primary" href="{{ route('product_del',['id' => $product->id]) }}">Delete</a>
                                                </form> 
                                                </div>                                         
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
@yield('content')
@include('inc.foot')






