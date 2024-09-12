<?php
            $barang = [
                [
                    'nama_barang' => 'Pasta Gigi',
                    'harga_barang' => 18000,
                    'jumlah_beli' => 1,
                ],
                [
                    'nama_barang' => 'Sabun Mandi',
                    'harga_barang' => 5000,
                    'jumlah_beli' => 3,
                ],
                [
                    'nama_barang' => 'Aloe Vera Sheet Mask',
                    'harga_barang' => 15000,
                    'jumlah_beli' => 4,
                ],
            ];

            // Inisialisasi
            $price = 0;

            // Iterasi melalui setiap item dalam array $barang
            foreach ($barang as $item) {
                // Menghitung harga subtotal untuk item
                $subPrice = $item['harga_barang'] * $item['jumlah_beli'];
                echo"<br>";
                // Menampilkan nama barang, jumlah yang dibeli, dan harga subtotal dalam bentuk format
                echo $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : Rp. " . number_format($subPrice, 0, '.', '.');

                // Menambahkan harga subtotal ke total harga
                $price += $subPrice;
            }
            echo "<br> Total harga yang harus dibayar adalah <b> Rp. " . number_format($price, 0, '.', '.');