<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>


<section class="orders-pg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-AllOrders-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-AllOrders" type="button" role="tab" aria-controls="pills-AllOrders"
                            aria-selected="true">AllOrders</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-unpaid-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-unpaid" type="button" role="tab" aria-controls="pills-unpaid"
                            aria-selected="false">unpaid</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-paid-tab" data-bs-toggle="pill" data-bs-target="#pills-paid"
                            type="button" role="tab" aria-controls="pills-paid" aria-selected="false">paid</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-process-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-process" type="button" role="tab" aria-controls="pills-process"
                            aria-selected="false">process</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-shipping-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-shipping" type="button" role="tab" aria-controls="pills-shipping"
                            aria-selected="false">shipping</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-canceled-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-canceled" type="button" role="tab" aria-controls="pills-canceled"
                            aria-selected="false">canceled</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-completed-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-completed" type="button" role="tab" aria-controls="pills-completed"
                            aria-selected="false">completed</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-AllOrders" role="tabpanel"
                        aria-labelledby="pills-AllOrders-tab">
                        <div class="table-responsive-lg">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Images</th>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>1</td>
                                        <td>Shirt</td>
                                        <td>3</td>
                                        <td>$567</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>2</td>
                                        <td>Footable</td>
                                        <td>5</td>
                                        <td>$1000</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>3</td>
                                        <td>shorts</td>
                                        <td>3</td>
                                        <td>$345</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-unpaid" role="tabpanel" aria-labelledby="pills-unpaid-tab">
                    <div class="table-responsive-lg">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Images</th>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>1</td>
                                        <td>Shirt</td>
                                        <td>3</td>
                                        <td>$567</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>2</td>
                                        <td>Footable</td>
                                        <td>5</td>
                                        <td>$1000</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>3</td>
                                        <td>shorts</td>
                                        <td>3</td>
                                        <td>$345</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-paid" role="tabpanel" aria-labelledby="pills-paid-tab">
                    <div class="table-responsive-lg">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Images</th>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>1</td>
                                        <td>Shirt</td>
                                        <td>3</td>
                                        <td>$567</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>2</td>
                                        <td>Footable</td>
                                        <td>5</td>
                                        <td>$1000</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>3</td>
                                        <td>shorts</td>
                                        <td>3</td>
                                        <td>$345</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-process" role="tabpanel" aria-labelledby="pills-process-tab">
                    <div class="table-responsive-lg">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Images</th>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>1</td>
                                        <td>Shirt</td>
                                        <td>3</td>
                                        <td>$567</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>2</td>
                                        <td>Footable</td>
                                        <td>5</td>
                                        <td>$1000</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>3</td>
                                        <td>shorts</td>
                                        <td>3</td>
                                        <td>$345</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-shipping" role="tabpanel" aria-labelledby="pills-shipping-tab">
                    <div class="table-responsive-lg">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Images</th>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>1</td>
                                        <td>Shirt</td>
                                        <td>3</td>
                                        <td>$567</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>2</td>
                                        <td>Footable</td>
                                        <td>5</td>
                                        <td>$1000</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>3</td>
                                        <td>shorts</td>
                                        <td>3</td>
                                        <td>$345</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-canceled" role="tabpanel" aria-labelledby="pills-canceled-tab">
                    <div class="table-responsive-lg">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Images</th>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>1</td>
                                        <td>Shirt</td>
                                        <td>3</td>
                                        <td>$567</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>2</td>
                                        <td>Footable</td>
                                        <td>5</td>
                                        <td>$1000</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>3</td>
                                        <td>shorts</td>
                                        <td>3</td>
                                        <td>$345</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-completed" role="tabpanel"
                        aria-labelledby="pills-completed-tab">
                        <div class="table-responsive-lg">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Images</th>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>1</td>
                                        <td>Shirt</td>
                                        <td>3</td>
                                        <td>$567</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>2</td>
                                        <td>Footable</td>
                                        <td>5</td>
                                        <td>$1000</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/jer2.png" alt=""></td>
                                        <td>3</td>
                                        <td>shorts</td>
                                        <td>3</td>
                                        <td>$345</td>
                                        <td>
                                            <a href="javascript:void" class="edit">edit</a>
                                            <a href="javascript:void" class="cancel">cancel</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
                            <h3>Subtotal :</h3>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <h4>$55.00</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
                            <h3>Shipping :</h3>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <h4>$12.00</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
                            <h3>Tax(GST) :</h3>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <h4>
                                $10.00</h4>
                        </div>
                    </div>
                </div>
                <div class="order-total">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
                            <h3>total price</h3>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <h4>$5885.00</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="soccer-official">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 col-sm-6 col-md-6">
                <h2>PREMIUM SOCCER OFFICiaL</h2>
            </div>
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="text-center">
                            <i class="far fa-shield-check"></i>
                            <h3>100% SECURE
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="text-center">
                            <i class="fab fa-dropbox"></i>
                            <h3>DROPSHIPPING
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="text-center">
                            <i class="fas fa-plane"></i>
                            <h3>FAST SHIPPING
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="text-center">
                            <i class="fal fa-chart-line-down"></i>
                            <h3>WHOLESALE PRICE
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
$page = 'home';
?>