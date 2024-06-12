@foreach ($posting as $item)
<div class="modal fade" id="posting_{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="header-modal d-flex justify-content-between align-items-start">
                <div class="profile d-flex gap-3 mb-3 align-items-center">
                    <img src="/assets/images/profile.png" alt="">
                    <p>Kevin Aluminium</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <!-- form -->
                <form action="/posting/{{$item->id}}" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-2">
                    @csrf
                    @method('PUT')
                    <input type="text" name="komunitas_id" value="{{$item->komunitas_id}}" hidden>
                    <input type="text" name="title" id="" placeholder="title" class="form-control" value="{{$item->title}}">
                    <input type="text" name="deskripsi" id="" placeholder="Deskripsi" class="form-control" value="{{$item->deskripsi}}">
                    {{-- <input type="file" name="foto" id="" class="form-control"> --}}
                    {{-- <button type="submit" class="btn p-2 d-block text-black outlon">Posting</button> --}}
                    <button type="submit" class="btn btn-danger p-2 text-black">Posting</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endforeach
