<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Harga UC PUBG</title>
    <link rel="stylesheet" href="styleListGame.css">
</head>
<body>
    <h1>Daftar Harga UC PUBG </h1>
    <form id="orderForm">
        <label for="userId">ID:</label>
        <input type="text" id="userId" name="userId" required />
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />

        <table>
            <thead>
                <tr>
                    <th>Jumlah Diamond</th>
                    <th>Harga (IDR)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>60</td>
                    <td>15,000</td>
                </tr>
                <tr>
                    <td>325</td>
                    <td>75,000</td>
                </tr>
                <tr>
                    <td>560</td>
                    <td>125,000</td>
                </tr>
                <tr>
                    <td>1,100</td>
                    <td>250,000</td>
                </tr>
                <tr>
                    <td>2,200</td>
                    <td>500,000</td>
                </tr>
                <tr>
                    <td>5,500</td>
                    <td>1,250,000</td>
                </tr>
            </tbody>
        </table>

        <label for="diamondAmount">Pilih jumlah diamond:</label>
        <select id="diamondAmount" name="diamondAmount" class="dropdown">
            <option value="60">60 Diamonds - 15,000 IDR</option>
            <option value="325">325 Diamonds - 75,000 IDR</option>
            <option value="560">560 Diamonds - 125,000 IDR</option>
            <option value="1100">1,100 Diamonds - 250,000 IDR</option>
            <option value="2200">2,200 Diamonds - 500,000 IDR</option>
            <option value="5500">5,500 Diamonds - 1,250,000 IDR</option>
        </select>

        <label for="paymentMethod">Pilih metode pembayaran:</label>
        <select id="paymentMethod" name="paymentMethod" class="dropdown">
            <optgroup label="Retail (Indomaret, Alfamart)">
                <option value="indomaret">Indomaret</option>
                <option value="alfamart">Alfamart</option>
            </optgroup>
            <optgroup label="Digital Wallet">
                <option value="dana">DANA</option>
                <option value="gopay">GoPay</option>
                <option value="ovo">OVO</option>
            </optgroup>
            <optgroup label="Bank Transfer">
                <option value="bri">BRI</option>
                <option value="bni">BNI</option>
                <option value="mandiri">Mandiri</option>
            </optgroup>
            <optgroup label="Other">
                <option value="shopeepay">ShopeePay</option>
            </optgroup>
        </select>

        <button type="submit" class="checkout-button">Checkout</button>
    </form>

    <div id="transactionDetails" class="transaction-details" style="display: none">
        <h2>Detail Transaksi:</h2>
        <p><strong>ID:</strong> <span id="detailUserId"></span></p>
        <p><strong>Username:</strong> <span id="detailUsername"></span></p>
        <p><strong>Jumlah Diamond:</strong> <span id="detailDiamondAmount"></span></p>
        <p><strong>Total Harga:</strong> <span id="detailTotalPrice"></span> IDR</p>
        <p><strong>Metode Pembayaran:</strong> <span id="detailPaymentMethod"></span></p>
    </div>

    <div id="transactionHistory">
        <h2>Riwayat Transaksi:</h2>
        <ul id="historyList"></ul>
        <button id="clearHistoryButton" class="clear-history-button">Clear History</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            updateTransactionHistory();
        });

        document.getElementById("orderForm").addEventListener("submit", function (event) {
            event.preventDefault();
            const userId = document.getElementById("userId").value;
            const username = document.getElementById("username").value;
            const diamondAmount = document.getElementById("diamondAmount").value;
            const paymentMethod = document.getElementById("paymentMethod").value;

            const diamondPrices = {
                60: 15000,
                325: 75000,
                560: 125000,
                1100: 250000,
                2200: 500000,
                5500: 1250000,
            };

            const totalPrice = diamondPrices[diamondAmount];

            document.getElementById("detailUserId").textContent = userId;
            document.getElementById("detailUsername").textContent = username;
            document.getElementById("detailDiamondAmount").textContent = diamondAmount;
            document.getElementById("detailTotalPrice").textContent = totalPrice;
            document.getElementById("detailPaymentMethod").textContent = paymentMethod;

            const transactionDetails = {
                userId: userId,
                username: username,
                diamondAmount: diamondAmount,
                totalPrice: totalPrice,
                paymentMethod: paymentMethod,
            };

            const transactionHistory = JSON.parse(localStorage.getItem("transactionHistory")) || [];
            transactionHistory.push(transactionDetails);
            localStorage.setItem("transactionHistory", JSON.stringify(transactionHistory));

            document.getElementById("transactionDetails").style.display = "block";

            updateTransactionHistory();
        });

        document.getElementById("clearHistoryButton").addEventListener("click", function () {
            localStorage.removeItem("transactionHistory");
            updateTransactionHistory();
        });

        function updateTransactionHistory() {
            const transactionHistory = JSON.parse(localStorage.getItem("transactionHistory")) || [];
            const historyList = document.getElementById("historyList");
            historyList.innerHTML = "";

            transactionHistory.forEach((transaction) => {
                const listItem = document.createElement("li");
                listItem.innerHTML = `
                <p><strong>ID:</strong> ${transaction.userId}</p>
                <p><strong>Username:</strong> ${transaction.username}</p>
                <p><strong>Jumlah Diamond:</strong> ${transaction.diamondAmount}</p>
                <p><strong>Total Harga:</strong> ${transaction.totalPrice} IDR</p>
                <p><strong>Metode Pembayaran:</strong> ${transaction.paymentMethod}</p>
                `;
                historyList.appendChild(listItem);
            });
        }
    </script>
</body>
</html>
        