<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MIDTRANS SCRIPT -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Quicksand', sans-serif;
        }
        .checkout-container {
            max-width: 600px;
            margin: 80px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
        .checkout-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
            color: #00695c;
            text-align: center;
        }
        .form-label {
            font-weight: 600;
        }
        .btn-pay {
            background-color: #ffeb3b;
            border: none;
            color: black;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-pay:hover {
            background-color: #fdd835;
        }
    </style>
</head>
<body>

<div class="checkout-container">
    <div class="checkout-title">Complete Your Purchase</div>

    <!-- FORM -->
    <form id="payment-form" method="POST" action="/submit_form">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name" required>
            <div class="invalid-feedback">Please enter your name.</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email (Gmail) <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@gmail\.com" title="Please enter a valid Gmail address.">
            <div class="invalid-feedback">Please enter a valid Gmail address.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
            <input type="tel" class="form-control" id="phone" name="phone" required pattern="^\+?62[0-9]{8,}$" title="Please enter a valid Indonesian phone number (e.g., 6281234567890).">
            <div class="invalid-feedback">Please enter a valid phone number.</div>
        </div>
        <div class="mb-3">
            <label for="product" class="form-label">Product*</label>
            <input type="text" id="product" name="product" class="form-control" value="{{ $products['name'] ?? '' }}" readonly />
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price*</label>
            <input type="text" id="price" name="price" class="form-control" value="{{ $products['price'] ?? '' }}" readonly />
        </div>

        <!-- Trigger Button -->
        <button type="submit" class="btn btn-pay w-100" id="pay-button">
            <img src="/article_bg/whatsapp.png" alt="WhatsApp Logo" style="width: 20px; height: 20px; margin-right: 8px;" />
            Payment via WhatsApp
        </button>
    </form>
</div>
<!-- Script trigger Snap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('payment-form');
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            e.stopPropagation();
    
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }
    
            // Get input values
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const price = document.getElementById('price').value.trim();
    
            // Encode message text with inputs
            const message = `Hello, my name is ${name}. I would like to purchase the item priced at ${price}. You can contact me via email: ${email} or phone: ${phone}.`;
    
            // WhatsApp link with your number and message
            const whatsappNumber = '6282120060090';
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
    
            // Open WhatsApp link in new tab
            window.open(whatsappURL, '_blank');
    
            // Optionally, close modal after click
            const paymentModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
            if (paymentModal) {
                paymentModal.hide();
            }
        });
    });

    document.getElementById('phone').addEventListener('blur', function () {
        let phoneInput = this.value.trim();

        // Jika input mulai dengan "0", ganti dengan "62"
        if (phoneInput.startsWith('0')) {
            this.value = '62' + phoneInput.slice(1);
        }

        // Jika input mulai dengan "+62", ganti jadi "62"
        if (phoneInput.startsWith('+62')) {
            this.value = phoneInput.replace('+62', '62');
        }
    });
</script>    
</body>
</html>
