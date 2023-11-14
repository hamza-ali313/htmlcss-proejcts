<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>


<section class="ship-address">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h2>shipping Address</h2>
                <a href="javascirpt:void()" class="theme-btn2 " type="button" class="btn btn-primary"
                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i>add new
                    address</a>
            </div>
        </div>
    </div>
</section>

<!-- addresses Display section start  -->
<section>
    <div class="container">
        <div id="displayValues" class="row">

        </div>
    </div>
</section>

<!-- addresses Display section end  -->

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
<!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade shipping-addresss-form" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="myForm">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First name</label>
                                <input type="text" class="form-control" id="first_name"
                                    placeholder="Enter your first name">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="last_name"
                                    placeholder="Enter your last name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="mb-3">
                                <label for="address" class="form-label">Delivery Address</label>
                                <input type="text" class="form-control" id="address"
                                    placeholder="Enter your first address">
                            </div>
                        </div>
                        <div class="col-12 col-lg-12">
                            <div class="mb-3">
                                <label for="country" class="form-label">Country / Region *</label>
                                <select id="country" class="form-select">
                                    <option>select country</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12">
                            <div class="mb-3">
                                <label for="state" class="form-label">State</label>
                                <select id="state" class="form-select">
                                    <option>_</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" id="city" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="zip" class="form-label">Zip Code</label>
                                <input type="text" id="zip" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="number" id="phone" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn-close theme-btn2" data-bs-dismiss="modal"
                        aria-label="Close">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const form = document.getElementById('myForm');
    const addressesStorage = JSON.parse(localStorage.getItem("addresses")) || [];

    const displayDiv = document.getElementById('displayValues');

    function renderAddresses() {
        displayDiv.innerHTML = ''; // Clear the previous entries

        for (const item of addressesStorage) {
            // Create a new div element to display the address
            const addressDiv = document.createElement('div');
            addressDiv.classList.add('address-item', 'col-12', 'col-lg-4', 'col-md-6', 'col-sm-6'); // You can add a class for styling

            // Create HTML content for the address object
            const addressHTML = `
         <table class="table table-borderless">
                <button class="edit-btn" onclick="editForm(event)"><i class="fa-regular fa-pen-to-square"></i>Edit</button>
                <tbody>
                    <tr>
                        <td>First Name:</td>
                        <td>${item.first_name}</td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td>${item.last_name}</td>
                    </tr>
                    <tr>
                        <td>Delivery Address:</td>
                        <td>${item.address}</td>
                    </tr>
                    <tr>
                        <td>Country:</td>
                        <td>${item.country}</td>
                    </tr>
                    <tr>
                        <td>State:</td>
                        <td>${item.state}</td>
                    </tr>
                    <tr>
                        <td>City:</td>
                        <td>${item.city}</td>
                    </tr>
                    <tr>
                        <td>Zip Code:</td>
                        <td>${item.zipCode}</td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td>${item.phone}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>${item.email}</td>
                    </tr>
                </tbody>
            </table>
            `;

            // Set the HTML content for the address div
            addressDiv.innerHTML = addressHTML;

            // Append the address div to the displayDiv
            displayDiv.appendChild(addressDiv);
        }
    }
    renderAddresses();
    let editMode = false;
    let editedAddressIndex;

    form.addEventListener('submit', (e) => {
        e.preventDefault(); // Prevent the form from submitting and page reloading

        // Retrieve data from the form fields
        const firstName = form.querySelector("#first_name").value;
        const lastName = form.querySelector("#last_name").value;
        const address = form.querySelector("#address").value;
        const country = form.querySelector("#country").value;
        const state = form.querySelector("#state").value;
        const city = form.querySelector("#city").value;
        const zipCode = form.querySelector("#zip").value;
        const phone = form.querySelector("#phone").value;
        const email = form.querySelector("#email").value;

        if (
            !firstName ||
            !lastName ||
            !address ||
            !country ||
            state === '_' || // You can adjust this condition based on your select options
            !city ||
            !zipCode ||
            !phone ||
            !email
        ) {
            // Display an alert if any field is empty
            alert('Please fill in all fields before submitting the form.');
            return; // Do not proceed with the submission
        }
        // Create an address object with the form data
        const addressObject = {
            first_name: firstName,
            last_name: lastName,
            address: address,
            country: country,
            state: state,
            city: city,
            zipCode: zipCode,
            phone: phone,
            email: email,
        };

        // Check if we are editing an existing address or adding a new one
        if (editMode) {
            addressesStorage[editedAddressIndex] = addressObject;
            editMode = false; // Exit edit mode
        } else {
            addressesStorage.push(addressObject);
        }
        localStorage.setItem("addresses", JSON.stringify(addressesStorage));
        form.reset();
        renderAddresses();
    });




    function editForm(event) {
        editMode = true
        const editbtn = event.target;
        const parentAddressItem = editbtn.closest('.address-item'); // Find the parent address item
        console.log(parentAddressItem);
        const addressIndex = Array.from(parentAddressItem.parentNode.children).indexOf(parentAddressItem);
        editedAddressIndex = Array.from(parentAddressItem.parentNode.children).indexOf(parentAddressItem)
        console.log(addressIndex);

        // Get the address data from the addressesStorage array
        const addressData = addressesStorage[addressIndex];

        // Populate the modal form with the address data
        const form = document.getElementById('myForm');
        form.querySelector("#first_name").value = addressData.first_name;
        form.querySelector("#last_name").value = addressData.last_name;
        form.querySelector("#address").value = addressData.address;
        form.querySelector("#country").value = addressData.country;
        form.querySelector("#state").value = addressData.state;
        form.querySelector("#city").value = addressData.city;
        form.querySelector("#zip").value = addressData.zipCode;
        form.querySelector("#phone").value = addressData.phone;
        form.querySelector("#email").value = addressData.email;

        // Display the modal form for editing
        const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
        modal.show();
    }

</script>
<?php
include 'includes/footer.php';
$page = 'home';
?>