<head>
    <title>Загрузить новый выпуск газеты</title>
    <script type="text/javascript">
        function FileSend(elm) {
            var nwp_num = elm.nwp_num.value;
            var nwp_date = elm.nwp_date.value;
            //nwp_date = nwp_date.split('-')[0];
            if(nwp_num == "" || nwp_num == " "){
                alert("Не введён номер выпуска!");
            }
            else {
                window.location = "/uploads/newspapers/upload.php?id=" + nwp_num + "&date=" + nwp_date;
            }
        }
    </script>
</head>
<body>
    <form enctype="multipart/form-data" method="post" id="frm">
        <label for="nwp_num">Номер загружаемого выпуска газеты: </label>
        <input type="text" placeholder="Номер газеты" name="nwp_num" id="nwp_num"><br><br>

        <label for="nwp_date">Дата загрузки выпуска: </label>
        <input type="date" placeholder="Дата загрузки" name="nwp_date" id="nwp_date"><br><br>

        <input type="button" onclick="FileSend(document.getElementById('frm'))" value="Отправить">
    </form>
</body>