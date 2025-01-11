<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        fetch('https://script.google.com/macros/s/AKfycbynD4_aNB1Soqgmb9Dav0DBsZADlh8kEowHvLB4G6FAQKJaNgtigG9Cp1BITIV-vKE/exec', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    range: 'B2', // 更新したいセル
                    value: 123, // 設定したい値
                }),
            })
            .then(response => response.json())
            .then(data => console.log('Success:', data))
            .catch(error => console.error('Error:', error));
    </Script>
</body>

</html>