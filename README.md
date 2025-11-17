# Stripe Payment Method Sample

A minimal PHP sample that demonstrates collecting a card payment method using Stripe Elements and confirming a setupIntent. Includes a simple checkout form and instructions to run the app locally.

## Running the sample

1. Update clientSecret in public/create.php file and publishable API key in the Stripe object at public/checkout.js file

2. Run the server

```
php -S 127.0.0.1:4000 --docroot=public
```

3. Go to [http://localhost:4000/payment-method.html](http://localhost:4000/payment-method.html)
