<x-app-layout>

    <x-slot name="title">add product

    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif


                        <h4>Add
                            <a href="{{url('productmanagements')}}"class="btn btn-primary float-end">back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url ('productmanagements/create')}}" method = "POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>photo</label>
                                <input type="file" name="photo" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label>price</label>
                                <input type="text" name="price" class="form-control" value="{{old('price')}}"/>
                                @error('price') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>details</label>
                                <input type="text" name="details" class="form-control" value="{{old('details')}}"/>
                                @error('details') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>category</label>
                                <input type="text" name="category" class="form-control" value="{{old('category')}}"/>
                                @error('category') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class ="mb-3">
                                <button type ="submit" class = "btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
    </x-slot>

</x-app-layout>