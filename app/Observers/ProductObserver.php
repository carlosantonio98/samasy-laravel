<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ProductObserver
{

    public function created(Product $product)
    {
        $fileName = time() . '.svg';
        $qrCode = QrCode::size(100)->generate($product->id, '../public/qrcodes/' . $fileName);

        $product->update([
            'qr_code' => $fileName
        ]);
    }

    public function deleting(Product $product)
    {
        File::delete('qrcodes/' . $product->qr_code);
    }

}
