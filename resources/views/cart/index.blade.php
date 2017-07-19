@extends('layout.main')

@section('content')

    <div class="row">
    <h3>Cart Item</h3>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Size</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cartitems as $cartitem)
        <tr>
            <td>{{$cartitem->name}}</td>
            <td>{{$cartitem->price}}</td>
            <td width="50">

                {!! Form::open(['route' => ['cart.update', $cartitem->rowId], 'method' => 'PUT']) !!}
                <input name="qty" type="text" value="{{$cartitem->qty}}">
                <input type="submit" class="btn btn-sm btn-default" value="ok">
                {!! Form::close() !!}
            </td>
            <td>{{$cartitem->options->has('size')?$cartitem->options->size: ''}}</td>
            <td>
                <form action="{{route('cart.destroy',$cartitem->rowId)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input class="button" type="submit" value="Delete">
                </form>
            </td>


        </tr>
            @endforeach
        <tr>
            <td></td>
            <td>
                Tax: Ksh. {{Cart::tax()}}
                <br>
                Subtotal: Ksh. {{Cart::subtotal()}}
                <br>
                Grandtotal: Ksh. {{Cart::total()}}
            </td>

            <td>{{Cart::count()}} items</td>
            <td></td>
            <td></td>

        </tr>
        </tbody>
    </table>

    <a href="#" class="button">Checkout</a>

    </div>

    @endsection