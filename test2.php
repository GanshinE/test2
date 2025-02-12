<?php
// Партнёрская ссылка, которую ты вставишь позже
$affiliate_link = ""; // вставь свою ссылку сюда
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лендинг T-Mobile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .hero {
            background: linear-gradient(to bottom right, #9b4dca, #e2007a);
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 3em;
            margin: 0;
        }

        .hero p {
            font-size: 1.5em;
            margin-top: 10px;
        }

        .cta-button {
            background-color: #f06eaa;
            padding: 15px 40px;
            color: white;
            text-transform: uppercase;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
        }

        .cta-button:hover {
            background-color: #d15794;
        }

        .features {
            display: flex;
            justify-content: space-around;
            padding: 50px 20px;
            background-color: #fff;
        }

        .features .feature {
            text-align: center;
            width: 30%;
        }

        .features .feature img {
            width: 50px;
        }

        .products {
            text-align: center;
            padding: 50px 20px;
            background-color: #f9f9f9;
        }

        .products h2 {
            font-size: 2em;
        }

        .product-grid {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .product-item {
            background-color: #fff;
            padding: 20px;
            width: 30%;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .product-item img {
            width: 100%;
        }

        .reviews {
            text-align: center;
            padding: 50px 20px;
            background-color: #fff;
        }

        .reviews h2 {
            font-size: 2em;
        }

        .cta-final {
            background-color: #f06eaa;
            padding: 15px 40px;
            color: white;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
        }

        .cta-final:hover {
            background-color: #d15794;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Покупай аксессуары и электронику с T-Mobile!</h1>
        <p>Лучшие предложения только для тебя!</p>
        <a href="<?php echo $affiliate_link; ?>" class="cta-button">Посмотреть предложения</a>
    </div>

    <!-- Why Choose T-Mobile -->
    <div class="features">
        <div class="feature">
            <img src="https://via.placeholder.com/50" alt="Icon">
            <h3>Высокое качество</h3>
            <p>Мы предлагаем только лучшие товары!</p>
        </div>
        <div class="feature">
            <img src="https://via.placeholder.com/50" alt="Icon">
            <h3>Скидки</h3>
            <p>Постоянные акции и скидки для наших клиентов.</p>
        </div>
        <div class="feature">
            <img src="https://via.placeholder.com/50" alt="Icon">
            <h3>Удобная доставка</h3>
            <p>Быстрая доставка по всей стране.</p>
        </div>
    </div>

    <!-- Featured Products Section -->
    <div class="products">
        <h2>Лучшие предложения месяца!</h2>
        <div class="product-grid">
            <div class="product-item">
                <img src="https://via.placeholder.com/300" alt="Product 1">
                <h3>iPhone 14 Pro</h3>
                <p>Скидка 10%</p>
                <a href="<?php echo $affiliate_link; ?>" class="cta-button">Купить</a>
            </div>
            <div class="product-item">
                <img src="https://via.placeholder.com/300" alt="Product 2">
                <h3>Наушники</h3>
                <p>Скидка 15%</p>
                <a href="<?php echo $affiliate_link; ?>" class="cta-button">Купить</a>
            </div>
            <div class="product-item">
                <img src="https://via.placeholder.com/300" alt="Product 3">
                <h3>Чехол для телефона</h3>
                <p>Скидка 20%</p>
                <a href="<?php echo $affiliate_link; ?>" class="cta-button">Купить</a>
            </div>
        </div>
    </div>

    <!-- Customer Reviews -->
    <div class="reviews">
        <h2>Что говорят наши клиенты?</h2>
        <p>"Отличные предложения и быстрая доставка!" - Иван</p>
        <p>"Я всегда выбираю T-Mobile для покупки аксессуаров." - Ольга</p>
    </div>

    <!-- Final CTA -->
    <div class="reviews">
        <h2>Не упусти шанс на выгодные предложения!</h2>
        <p>Покупай прямо сейчас и получи скидку до 20% на следующий товар.</p>
        <a href="<?php echo $affiliate_link; ?>" class="cta-final">Начать покупки</a>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 T-Mobile. Все права защищены.</p>
        <p><a href="#">Политика конфиденциальности</a> | <a href="#">Условия использования</a></p>
    </footer>

</body>
</html>
