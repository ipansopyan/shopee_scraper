<table>
    <thead>
    <tr>
        <th>Nama Produk</th>
        <th>Terjual</th>
        <th>Total Riview</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datas as $data)
        <tr>
            <td>{{ $data["name"] }}</td>
            <td>{{ $data["historical_sold"] }}</td>
            <td>{{ $data["item_rating"]['rating_count'][0] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>