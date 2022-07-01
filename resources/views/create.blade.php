<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style>
    #newImage {
        display: none;
    }
    </style>
    <div class="container mt-5" style="background-color:black">
        <button><a class="btn btn-primary" href="{{route('cars.index')}}">View All </a></button><a
            class="btn btn-success" href="{{route('cars.create')}}">Create New car</a>
        <!-- @if ($errors->any()) <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error) <li> {
                    {
                    $error
                    }
                    }

                </li>@endforeach </ul>
        </div>
        @endif -->
        <form action="{{route('cars.store')}}" method="POST" enctype="multipart/form-data">@csrf <div class="row">
                <div class="form-group col-6"><label style="color:wheat" for="exampleInputEmail1">Name</label><input
                        type="text" class="form-control" id="exampleInputEmail1" name="name"
                        aria-describedby="emailHelp" placeholder="Enter name car">
                    <span style="background-color: wheat; color:red"> {{$errors->first('name')}}</span>

                    </span>
                </div>
                <div class="form-group col-6"><label style="color:wheat" for="exampleInputPassword1">Image</label><input
                        type="file" name="image" class="form-control" onchange="changeImage(event)"
                        id="exampleInputPassword1" placeholder="Enter image">
                    <img style="width:200px;height: 200px;" id="newImage" src="" />
                    <span style="background-color: wheat; color:red"> {{$errors->first('image')}}</span>
                </div>
            </div>
            <div class="form-group"><label style="color:wheat" for="exampleInputPassword1">Make</label><input
                    type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="make"
                    placeholder="Enter Make ">
                <span style="background-color: wheat; color:red"> {{$errors->first('make')}}</span>
            </div>
            <div class="form-group">
                <select name="pro_id" class="custom-select" aria-label="Default select example">
                    @foreach ($producers as $pro)
                    <option value="{{$pro->id}}">
                        {{$pro->pro_name}}</option>
                    @endforeach

                </select>
            </div>


            <button type=" submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
    const changeImage = (e) => {
        console.log('change');
        document.getElementById('newImage').style.display = 'block';
        var imgEle = document.getElementById('newImage');
        imgEle.src = URL.createObjectURL(e.target.files[0]);

        imgEle.onload = () => {
            URL.revokeObjectURL(output.src)
        }
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>