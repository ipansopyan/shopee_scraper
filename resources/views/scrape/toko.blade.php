<table>
    <thead>
    <tr>
        <th>Kategori</th>
        <th>Nama Produk</th>
        <th>Varian</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Deskripsi</th>
        <th>Terjual</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datas as $data)
        <tr>
            <td>
                @foreach ($data['categories'] as $categori)
                    - {{$categori['display_name']}}
                @endforeach
            </td>
            <td>{{ $data['name'] }}</td>
            <td>
                @foreach ($data['models'] as $model)
                    - {{$model['name']}}
                @endforeach
            </td>
            <td>
                @if ($data['price_max'] == $data['price_min'])
                    {{"Rp " . number_format(substr($data['price_max'], 0, -5),2,',','.')}}        
                @else
                    {{"Rp " . number_format(substr($data['price_min'], 0, -5),2,',','.')}} -
                    {{"Rp " . number_format(substr($data['price_max'], 0, -5),2,',','.')}}  
                @endif
            </td>
            <td>{{ $data['stock'] }}</td>
            <td>{{ $data['description'] }}</td>
            <td>{{ $data['historical_sold'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>