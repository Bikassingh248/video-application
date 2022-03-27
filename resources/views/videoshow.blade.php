
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="content-grids">
        <h4 style="color: blue">List of the  Video</h4>
        <div class="section group">
        @if(isset($data))
            @foreach($data as $dt)

                <div class="grid_1_of_4 images_1_of_4 products-info">
                 <h4 style="color: blue">{{$dt->name ?? ''}}</h4>
                 <p>{{$dt->description ?? ''}}</p>
                 <h4 style="color: red">{{$dt->status ?? ''}}</h4>

                     @foreach ($dt->getdata as $sub)
                        <div class="section group">
                            <li><video width="280 " height="320" controls autoplay><source src="{{$sub->link ?? ''}}" type="video/mp4"></video></li>
                                <h1>{{$sub->name ?? ''}}</h1>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @endif

    </div>
    </div>
</body>
</html>

