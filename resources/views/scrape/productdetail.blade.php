<table>
    <thead>
    <tr>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>atribute</th>
        <th>models</th>
        <th>Link Gambar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datas as $data)
        <tr>
            <td>{{ $data["name"] }}</td>
            <td>
                @foreach ($data['categories'] as $categori)
                    - {{$categori['display_name']}} <br>
                @endforeach
            </td>
            <td>{{ $data["description"] }}</td>
            <td>
                @foreach ($data['attributes'] as $atribut)
                    - {{$atribut['name']}} = {{$atribut['value']}} <br>
                @endforeach    
            </td>
            <td>
                @foreach ($data['models'] as $model)
                    -name = {{$model['name']}} <br>
                    -harga= {{"Rp " . number_format(substr($model['price'], 0, -5),2,',','.')}} <br>
                    -stok = {{$model['stock']}} <br>
                @endforeach
            </td>
            <td>
                @foreach ($data['images'] as $image)
                    https://cf.shopee.co.id/file/{{$image}} <br>
                @endforeach
            </td>
        </tr>
    @endforeach
    </tbody>
</table>