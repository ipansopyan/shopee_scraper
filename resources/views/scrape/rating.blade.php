<table>
    <thead>
    <tr>
        <th>link pelanggan</th>
        <th>nama barang</th>
        <th>penilaian bintang</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datas as $data)
        <tr>
            <td>{{ 'https://shopee.co.id/shop/'.$data["author_shopid"] }}</td>
            <td>{{ $data['product_items'][0]['name'] }}</td>
            <td>{{ $data['rating_star'] }}</td>
            <td>{{ $data['comment'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>