<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>O.B.A. ALB | Scent Atelier</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cloudflare.com">
</head>
<body>
    <?php include 'nav.php'; ?>

<section class="product-page">
    <div class="product-left">
        <img src="images/alb.png" alt="O.B.A. ALB">
    </div>

    <div class="product-right">
        <h1>O.B.A. ALB</h1>
        <p class="price">$129.99</p>
        <p class="price-note">Full size (50ml)</p>

        <!-- DESCRIPTION -->
        <p class="description">
            Alb by The O.B.A. captures a sunny spring afternoon where a gentle breeze whisks sweet geranium and spicy undertones through fields of daisies. Soft tonka bean and earthy musk mingle to create an invigorating harmony reminiscent of highland grass and mountain rivers. This symphonic arrangement of natural elements offers fleeting moments of unbothered dopamine. It is a refreshing fragrance that invites you to deeply cherish every granted second of life.
        </p>

        <!-- NOTES -->
        <div class="notes">
            <h3>Notes</h3>
            <p>Top: Pink Pepper, Lemon, Bergamot</p>
    		<p>Heart: Geranium, Lavender, Cloves</p>
    		<p>Base: Ambergris, Iso E Super, White Musk, Tonka Bean</p>
        </div>

        <button class="add-btn">Add to Bag</button>
    </div>
</section>

<footer class="footer">
</footer>

<script>
// SILENT ADD TO BAG (No Alert)
document.querySelector(".add-btn").addEventListener("click", () => {
    const product = {
        name: "O.B.A. ALB",
        size: "50",
        price: 129.99
    };

    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.push(product);
    localStorage.setItem("cart", JSON.stringify(cart));
    
    // Optional: Visual feedback without an alert
    document.querySelector(".add-btn").textContent = "Added!";
    setTimeout(() => {
        document.querySelector(".add-btn").textContent = "Add to Bag";
    }, 2000);
});
</script>

<!-- FOOTER -->
    <?php include 'footer.php'; ?>

</body>
</html>
