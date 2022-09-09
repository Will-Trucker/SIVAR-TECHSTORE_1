<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $prod = New Product;
        $prod->nombre = "MSI AfterClutch";
        $prod->slug = "after-clutch";
        $prod->categoria = "Monitores";
        $prod->proveedor = "MSI";
        $prod->precio = "38.25";
        $prod->image_path = "mouse.png";
        $prod->save();


        $prod2 = New Product;
        $prod2->nombre = "GIGABYTE Technology Z590 AORUS";
        $prod2->slug = "z-590";
        $prod2->categoria = "Motherboard";
        $prod2->proveedor = "GYGABYTE";
        $prod2->precio = "189.99";
        $prod2->image_path = "89147569_1971926474-600x600.png";
        $prod2->save();

        $prod3 = New Product;
        $prod3->nombre = "MSI MAG B550M MORTAR";
        $prod3->slug = "mortar-b550";
        $prod3->categoria = "Motherboard";
        $prod3->proveedor = "MSI";
        $prod3->precio = "223.50";
        $prod3->image_path = "910TjjxzPaL._AC_SL1500_.png";
        $prod3->save();

        $prod4 = New Product;
        $prod4->nombre = "ASUS ROG Crosshair VII Hero";
        $prod4->slug = "rog-9";
        $prod4->categoria = "Motherboard";
        $prod4->proveedor = "ASUS";
        $prod4->precio = "340.00";
        $prod4->image_path = "ASUS ROG Crosshair VIII Hero - Placa base de gaming ATX AMD X570 con PCIe 4.0, LAN a 2,5 Gbps integrado, USB 3.2, SATA, M.2, ASUS NODE e iluminación Aura Sync RGB.jpg";
        $prod4->save();

        $prod5 = New Product;
        $prod5->nombre = "ASUS ROG STRIX Z490-I Gaming";
        $prod5->slug = "strix-z4";
        $prod5->categoria = "Motherboard";
        $prod5->proveedor = "ASUS";
        $prod5->precio = "240.74";
        $prod5->image_path = "81RNBTfLaWL._AC_SS450_.jpg";
        $prod5->save();

        $prod6 = New Product;
        $prod6->nombre = "ASUS Prime H-510M-D";
        $prod6->slug = "prime-h51";
        $prod6->categoria = "Motherboard";
        $prod6->proveedor = "ASUS";
        $prod6->precio = "100.00";
        $prod6->image_path = "H510M-D.jpg";
        $prod6->save();
        
        $prod7 = New Product;
        $prod7->nombre = "ASROCK B550 PRO4";
        $prod7->slug = "b550-pro";
        $prod7->categoria = "Motherboard";
        $prod7->proveedor = "ASROCK";
        $prod7->precio = "111.46";
        $prod7->image_path = "B560 Pro4(M1).png";
        $prod7->save();


        $prod8 = New Product;
        $prod8->nombre = "Intel Core I5-12600K";
        $prod8->slug = "i5-126";
        $prod8->categoria = "Microprocesadores";
        $prod8->proveedor = "Intel";
        $prod8->precio = "215.74";
        $prod8->image_path = "CORE I5 12-600.jpg";
        $prod8->save();

        $prod9 = New Product;
        $prod9->nombre = "AMD RYZEN 5 1600 M4";
        $prod9->slug = "ryzen-160";
        $prod9->categoria = "Microprocesadores";
        $prod9->proveedor = "AMD";
        $prod9->precio = "210.21";
        $prod9->image_path = "61YyzKD24dL._AC_SX679_.jpg";
        $prod9->save();
    }
}
