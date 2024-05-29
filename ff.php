<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up Free Fire</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #2c003e;
    color: white;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

header {
    text-align: center;
    margin-bottom: 20px;
}

.topup-form, .topup-options {
    background-color: #4b0082;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
}

.topup-form h2, .topup-options h2 {
    margin-top: 0;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
}

input {
    padding: 10px;
    margin-top: 5px;
    border: none;
    border-radius: 5px;
}

button {
    margin-top: 20px;
    padding: 10px;
    background-color: #800080;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #9b30ff;
}

.category {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
}

.category button {
    padding: 10px;
    background-color: #800080;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

.category button:hover {
    background-color: #9b30ff;
}

.items {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.item {
    background-color: #551a8b;
    padding: 20px;
    margin: 10px;
    border-radius: 10px;
    width: 150px;
    text-align: center;
}
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>TOP UP FREE FIRE</h1>
        </header>
        <section class="topup-form">
            <h2>Masukkan User ID</h2>
            <form id="topup-form">
                <label for="user-id">User ID:</label>
                <input type="text" id="user-id" name="user-id" required>
                <label for="zone-id">ID Zona:</label>
                <input type="text" id="zone-id" name="zone-id" required>
                <button type="submit">Submit</button>
            </form>
        </section>
        <section class="topup-options">
            <h2>Pilih Nominal Top Up</h2>
            <div class="category">
                <button>Intan</button>
                <button>Diamond Pass</button>
                <button>Tiket Senja</button>
            </div>
            <div class="items">
                <div class="item">
                    <p>3 Berlian</p>
                    <p>Dari Rp. 1.171</p>
                </div>
                <div class="item">
                    <p>5 Berlian</p>
                    <p>Dari Rp. 1.423</p>
                </div>
                <div class="item">
                    <p>12 Berlian</p>
                    <p>Dari Rp. 3.223</p>
                </div>
                <div class="item">
                    <p>19 Berlian</p>
                    <p>Dari Rp. 5.223</p>
                </div>
                <div class="item">
                    <p>28 Berlian</p>
                    <p>Dari Rp. 7.600</p>
                </div>
            </div>
        </section>
    </div>
    <script>
        
    </script>
</body>
</html>