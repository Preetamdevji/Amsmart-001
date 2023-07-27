 @extends('layout.master')
@section('page-title')
        Cart
@endsection
@section('main-content')

<style>
  @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
</style>

<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="/products" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>

                <!-- <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have 4 items in your cart</p>
                  </div>
                  <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                        class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div>
                </div> -->
  @foreach($cart as $cartItem) 
  <div class="card mb-3">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="d-flex flex-row align-items-center">
          <div>
            <img src="/uploads/{{ $cartItem->linkProduct->product_img }}" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
          </div>
          <div class="ms-3">
            <h5>{{ $cartItem->linkProduct->product_name }}</h5>
            <h6 class="small mb-0">{{ $cartItem->linkProduct->description }}</h6>
          </div>
        </div>
        <div class="d-flex flex-row align-items-center">
        <div style="width: 40px;">
          <button class="btn btn-sm btn-secondary decrease-quantity" data-product="{{ $cartItem->linkProduct->id }}" data-quantity="{{ $cartItem->linkProduct->quantity }}">-</button>
          <input type="number" class="quantity-input" name="quantity[]" value="1" min="1">
          <button class="btn btn-sm btn-secondary increase-quantity" data-product="{{ $cartItem->linkProduct->id }}" data-quantity="{{ $cartItem->linkProduct->quantity }}">+</button>
          </div>

          <div style="width: 80px;">
          <h5 class="mb-0"><span class="price" data-unit-price="{{ $cartItem->linkProduct->new_price }}">${{ $cartItem->linkProduct->new_price }}</span></h5>
          </div>

          <div class="d-flex flex-row align-items-center">
         <div>
         <form action="{{ route('cart.delete', $cartItem->linkProduct->id) }}" method="POST" class="delete-form">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-secondary delete-btn" onclick="return confirm('Are you sure you want to delete this item?')">
            <i class="fas fa-trash-alt"></i>
          </button>
        </form>
       </div>
      </div>

          <!-- <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a> -->
        </div>
      </div>
    </div>
  </div>
@endforeach

              </div>
              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                    </div>

                    <p class="small mb-2">Card type</p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form class="mt-4">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>

                    </form>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2">$4798.00</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Shipping</p>
                      <p class="mb-2">$20.00</p>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total(Incl. taxes)</p>
                      <p class="mb-2">$4818.00</p>
                    </div>

                    <button class="btn btn-info btn-block btn-lg" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="d-flex justify-content-between">
                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $('.increase-quantity').click(function() {
    var quantityInput = $(this).siblings('.quantity-input');
    var currentQuantity = parseInt(quantityInput.val());
    var newQuantity = currentQuantity + 1;
    quantityInput.val(newQuantity);
    
    var priceElement = $(this).closest('.d-flex').find('.price');
    var unitPrice = parseFloat(priceElement.data('unit-price'));
    var totalPrice = unitPrice * newQuantity;
    priceElement.text('$' + totalPrice.toFixed(2));
  });
  
  $('.decrease-quantity').click(function() {
    var quantityInput = $(this).siblings('.quantity-input');
    var currentQuantity = parseInt(quantityInput.val());
    var newQuantity = currentQuantity - 1;
    if (newQuantity < 1) {
      newQuantity = 1;
    }
    quantityInput.val(newQuantity);
    
    var priceElement = $(this).closest('.d-flex').find('.price');
    var unitPrice = parseFloat(priceElement.data('unit-price'));
    var totalPrice = unitPrice * newQuantity;
    priceElement.text('$' + totalPrice.toFixed(2));
  });
});
</script>

@endsection

@push('scripts')

<script>
function confirmDelete(event) {
  if (!confirm('Are you sure you want to delete this item?')) {
    event.preventDefault(); // Cancel the form submission
    return false;
  }
}
</script>
@endpush 







