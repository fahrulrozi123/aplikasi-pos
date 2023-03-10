<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@foreach($products as $product)
<tr>
  <td>
    <span class="kd-barang-field">{{ $product->kode_barang }}</span><br><br>
    <span class="nama-barang-field">{{ $product->nama_barang }}</span>
  </td>
  <td>{{ $product->jenis_barang }}</td>
  <td>{{ $product->berat_barang }}</td>
  <td>{{ $product->merek }}</td>
  @if($supply_system->status == true)
  <td><span class="ammount-box bg-secondary"><i class="mdi mdi-cube-outline"></i></span>{{ $product->stok }}</td>
  @endif
  <td><span class="ammount-box bg-green"><i class="mdi mdi-coin"></i></span>Rp. {{ number_format($product->harga,2,',','.') }}</td>
  @if($supply_system->status == true)
  <td>
    @if($product->keterangan == 'Tersedia')
    <span class="btn tersedia-span">{{ $product->keterangan }}</span>
    @else
    <span class="btn habis-span">{{ $product->keterangan }}</span>
    @endif
  </td>
  @endif
  <td>
    <button type="button" class="btn btn-edit btn-icons btn-rounded btn-secondary" data-toggle="modal" data-target="#editModal" data-edit="{{ $product->id }}">
        {{-- <i class="mdi mdi-pencil"></i> --}}
        <i class="fa-solid fa-pen-nib"></i>
    </button>
    <button type="button" class="btn btn-icons btn-rounded btn-secondary ml-1 btn-delete" data-delete="{{ $product->id }}">
        {{-- <i class="mdi mdi-close"></i> --}}
        <i class="fa-solid fa-trash"></i>
    </button>
  </td>
</tr>
@endforeach