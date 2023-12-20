@extends('layout.index')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @for ($i = 1; $i <= 1; $i++)
                    <h2 class="mb-4"> <?php echo $title ?? ''; ?></h2>
                @endfor
                <form id="orderForm" action="{{ route('product.calculate') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" name="txtPname" class="form-control" id="productName" required
                            value="{{ isset($p_name) ? $p_name : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="txtQty" class="form-control" id="quantity" min="1" required
                            value="{{ isset($p_qty) ? $p_qty : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="unitPrice" class="form-label">Unit Price</label>
                        <input type="number" name="txtPrice"class="form-control" id="unitPrice" min="0"
                            step="0.01" required value="{{ isset($p_price) ? $p_price : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="discount" class="form-label">Discount (%)</label>
                        <input type="number" name="txtDisc" class="form-control" id="discount" min="0"
                            max="100" step="1" value="{{ isset($p_disc) ? $p_disc : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="total" class="form-label">Total</label>
                        <input type="text" name="txtTotal" class="form-control" id="total" readonly
                            value="$ {{ isset($total) ? number_format($total, 2) : '' }}">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="reset" class="btn btn-danger me-5"
                            style="width: 150px; border-radius:15px">Reset</button>
                        <button type="submit" class="btn btn-success"
                            style="width: 150px;  border-radius:15px">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
