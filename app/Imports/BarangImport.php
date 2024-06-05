<?php

namespace App\Imports;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use App\Models\Barang;
use Illuminate\Support\Facades\Session;
class BarangImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        //
        $indexKe = 1;
        $skippedItems = [];

        foreach ($collection as $row) {
            if ($indexKe > 1) {
                $data['Kode_Barang'] = !empty($row[0]) ? $row[0] : '';
                $data['Nama_Barang'] = !empty($row[1]) ? $row[1] : '';
                $data['Kategori'] = !empty($row[2]) ? $row[2] : '';
                $data['Unit'] = !empty($row[3]) ? $row[3] : '';
                $data['Harga_Satuan'] = !empty($row[4]) ? $row[4] : '';
                $data['Stok'] = !empty($row[5]) ? $row[5] : '';

                // Use validation to check for duplicate key
                $validator = \Validator::make($data, [
                    'Kode_Barang' => Rule::unique('barangs', 'Kode_Barang'),
                ]);

                if ($validator->fails()) {
                    $skippedItems[] = $data;
                } else {
                    Barang::create($data);
                }
            }

            $indexKe++;
        }
        if (!empty($skippedItems)) {
            session()->flash('skippedItems', $skippedItems);
        }
        // You can handle skipped items as needed, for example, show them in a modal
        // or pass them to the view for further processing
        return view('admins.stocks.stok-barang', compact('skippedItems'));
    }
}
