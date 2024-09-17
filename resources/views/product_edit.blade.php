@include('inc.head')
@include('inc.sidebar')
@section('content')
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Product Add</h1>
                            </div>
                        </div>
                    </div>
                </div>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<br>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Product Entry Form</h4>              
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ route('product_update') }}" method="get">

                                             <input type="hidden" name="id"  value="{{ $product->id }}">


                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" name="product_name" class="form-control" placeholder="Product Name" value="{{ $product->product_name }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input type="text" name="category_name" class="form-control" placeholder="Category Name" value="{{ $product->category_name }}">
                                            </div>

                                            <div class="form-group">
                                                <label>Brand Name</label>
                                                <input type="text" name="brand_name" class="form-control" placeholder="Brand Name" value="{{ $product->brand_name }}">
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="description" class="form-control" placeholder="description" value="{{ $product->description }}">
                                            </div>

                                             <div class="form-group">
                                                <label>image</label>
                                                <input type="text" name="image" class="form-control" placeholder="image" value="{{ $product->image }}">
                                            </div>

                                            <div class="form-group">
                                                <label>status</label>
                                                <input type="text" name="status" class="form-control" placeholder="status" value="{{ $product->status }}">
                                            </div>

                                                                                     
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>
                                    </div>
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


