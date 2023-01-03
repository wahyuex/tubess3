<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .filterDiv {
            display: none;
        }

        .show {
            display: block;
        }

        .container {
            margin-top: 20px;
            overflow: hidden;
        }

        /* Style the buttons */
        .btn {
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #ddd;
        }

        .btn.active {
            background-color: #666;
            color: white;
        }
    </style>
</head>

<body>

    <h2>Halo,Selamat Berkerja nama admin semoga lancar kerjaannya</h2>

    <div id="myBtnContainer">
        <button class="btn" onclick="filterSelection('produk')">Produk</button>
        <button class="btn" onclick="filterSelection('pelanggan')"> Pelanggan</button>
        <button class="btn" onclick="filterSelection('jaskim')"> Jasa Kirim</button>
        <button class="btn" onclick="filterSelection('hispen')"> History Pemesanan</button>
    </div>

    <div class="container">
        <div class="filterDiv produk">
            <div>
                <h4>Tambah Produk</h4>
                <div style="display: flex;">
                    <figure style="background-color: #666; width: 200px; height: auto;">
                        <img width="200px" height="200px" src="https://3.bp.blogspot.com/-YcOBKGtGh9c/WILLc7M7UAI/AAAAAAAAADg/bpdmBHiQWd4pOy0gxI1PCckJaDSkNAULwCK4B/w500/w3-schools-logo.jpg" alt=""><br>
                        <figcaption>Nama produk</figcaption>
                        <figcaption>Harga Produk</figcaption>
                        <figcaption>Stok porduk</figcaption>
                        <figcaption>
                            <a href=""><i class="fa-solid fa-pen-to-square"></i></a> 
                            <a href=""><i class="fa-solid fa-trash"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="filterDiv  pelanggan">
            <div>
                <h1>Pelanggan</h1>
                <div style="border: black solid 1px;">
                    <div style="display: flex;">
                        <p>nama pelanggan</p>
                        <p>alamat pelanggan</p>
                        <p>no telp pelanggan</p>
                        <p>status : active or not</p>
                        <div style="justify-content: space-between; text-align: end; margin: auto;">
                            <a href=""><i class="fa-solid fa-trash"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filterDiv jaskim">
            <div>
                <h1>Jasa Kirim</h1>
                <div>
                    <div style="border: black solid 1px;">
                        <div style="display: flex;">
                            <p>nama jasa kirim</p>
                            <p>ongkir per 1km</p>
                            <p>no telp jasa kirim</p>
                            <div style="justify-content: space-between; text-align: end; margin: auto;">
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                                <a href=""><i class="fa-solid fa-pen-to-square"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filterDiv hispen">
            <div>
                <div style="display: flex;">
                    <h1>History Pemesanan</h1>
                    <h1>Laporan Harian</h1>
                </div>
                <h2>date</h2>
                <div style="background-color: #666; width: 200px;">
                    <p>invoice <a href="">lihat invoice</a></p>
                    <p>nama barang</p>
                    <p>kurir</p>
                    <p>alamat</p>
                    <p>total harga</p>
                    <p>pembayaran</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/f4496ad183.js" crossorigin="anonymous"></script>
    <script>
        filterSelection("hispen")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>


</body>

</html>