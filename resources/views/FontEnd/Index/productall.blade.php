
<div class="margin"></div>
    <div class="container">
           <div class="row">
             @foreach ($medicinCreate as $item)
               <div class="col-md-3 mb-5">
                    <div class="wrappers">
                        <div class="serviceimg">
                            <img src="{{asset('/storage')}}/{{$item->imageupload}}" alt="img">
                            <div class="serviceBG"></div>
                            <div class="serviceICON">
                            <P>{{$item->medicinPrice}}&nbsp;Tk</P>
                            </div>
                        </div>
                        <div class="cartsPartS">
                                <h6>{{$item->medicinName}}</h6>
                                <form id="rating-form">
                                        <span class="rating-star">
                                        <input type="radio" name="rating" value="5"><span class="star"></span>
                                        
                                            <input type="radio" name="rating" value="4"><span class="star"></span>
                                        
                                            <input type="radio" name="rating" value="3"><span class="star"></span>
                                        
                                            <input type="radio" name="rating" value="2"><span class="star"></span>
                                        
                                            <input type="radio" name="rating" value="1"><span class="star"></span>
                                        </span>
                                        </form>
                                    <form action="{{route('cart.add')}}" method="POST">
                                        {{ csrf_field() }}
                                    <input type="hidden" name="pdt_id" value="{{$item->id}}">
                                        <input type="hidden" value="1" name="qty" class="text">
                                    <button class="napabutton"><strong>ADD TO CARD</strong></button>
                               </form>
                        </div>
                    </div>
                    
                </div> 
               @endforeach
        </div>
            </div>
<div class="margin"></div>