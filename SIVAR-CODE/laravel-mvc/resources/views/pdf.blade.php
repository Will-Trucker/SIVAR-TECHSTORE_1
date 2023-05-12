<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo</title>
    <link rel="icon" href="{{asset('img/Gonly-bolsa.png')}}">
</head>
<body>
    Hola soy tu pdf
    <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th scope="col"><p class="text-center m-0" style="text-align:center;">PRODUCTOS</p></td>
            <th scope="col"><p class="text-center m-0" style="text-align:center;">NOMBRE</p></td>
            <th scope="col"><p class="text-center m-0" style="text-align:center;">CANTIDAD</p></td>
            <th scope="col"><p class="text-center m-0" style="text-align:center;">PRECIO</p></td>
            <th scope="col"><p class="text-center m-0" style="text-align:center;">TOTAL</p></td>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach(Cart::getContent() as $p)
          <tr>
          <td>
          
          <img src="/productos/{{$p->attributes->image}}" width="200px"  class="img-thumbnail mx-auto d-block rounded-lg">
          </td> 
          <td style="text-align:center;">
          {{$p->name}}
          </td>
          <td style="text-align:center;">
         
          </td>
          <td style="text-align:center;">
            ${{$p->price}}
          </td>
          <td style="text-align:center;">
            ${{$p->price * $p->quantity}}
          </td>
          <td>
         
          <div class="d-flex justify-content-center mb-2 ">
        </div>
          </td>
          <td></td>
          
          </tr>
        
          @endforeach
          <tr>
            <td colspan="3"></td>
            <td class="font-weight-bolder">SUBTOTAL</td>
            <td class="font-weight-bolder">USD {{number_format(Cart::getSubTotal(),2)}}</td>
            <td></td>
        </tr>
          <tr>
            <td colspan="3"></td>
            <td class="font-weight-bolder">TOTAL</td>
            <td class="font-weight-bolder">USD {{number_format(Cart::getTotal(),2)}}</td>
            <td></td>
        </tr>
           
          </tbody>
            
        </table> 
</body>
</html>