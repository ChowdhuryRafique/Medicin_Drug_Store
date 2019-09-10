 
 <!-- Shoping Card -->
 <div class="shopingCard">
                                <div class="dropdown">
                                    <button class="btn btn-secondary shopingButton" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cart-arrow-down"></i>                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <h5>Shoping Card total Itmes : {{Cart::content()->count()}}</h5>
                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th scope="col">Product</th>
                                                <th scope="col">Quantity_Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              
                                             @foreach (Cart::content() as $pdt)
                                             <tr>
                                             <th scope="row">{{$pdt->name}}</th>
                                                <td>
                                                <a href="{{route('cart.dec',['id'=>$pdt->rowId,'qty'=>$pdt->qty])}}" class="quantity-minus"><button style="display:inline">-</button></a>
                                                <input type="text" placeholder="1" value="{{$pdt->qty}}" readonly style="border:none;width:50%;">
                                                  <a href="{{route('cart.incre',['id'=>$pdt->rowId,'qty'=>$pdt->qty])}}" class="quantity-plus"><button>+</button></a>
                                                </td>
                                                <td>{{$pdt->price}}</td>
                                              <td>{{$pdt->total}}</td>
                                              <td><a class="actions" href="{{route('cart.delete',['id'=>$pdt->rowId])}}">Remove
                                                </a>
                                                </td>
                                          </tr>
                                             @endforeach
                                            </tbody>
                                          </table>
                                          <div class="amount">
                                          <h5>Total Amount:&nbsp;{{Cart::total()}}&nbsp;<STrong>Tk</STrong></h5>
                                          </div>
                                          <hr>
                                        <a href="{{route('myorder')}}" class="cardright">Check Out</a>
                                          <button class="cardright">Clear</button>
                                    </div>
                                  </div>
                            </div>
                            <!-- End shoping card -->