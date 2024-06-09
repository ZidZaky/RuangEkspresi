<!-- Modal Event -->
<div class="modal fade" id="editKarya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center gap-3  pb-1 justify-content-start">
                <img src="/assets/images/profile.png" alt="" style="height:36px;">
                <p class="m-0">{{ session('account')['username'] }}</p>
            </div>
            <div class="modal-body">
                <form method="POST" action="/karya/{{$karya->id_karya}}" class="d-flex flex-column gap-2">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <input type="text" name="judulKarya" id="judulKarya" value="{{ old('judulKarya', $karya->judulKarya) }}" class="form-control" placeholder="Tittle">
                        @error('judulKarya')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" name="deskripsi" id="tema" value="{{ old('tema', $karya->jenisKarya) }}" class="form-control" placeholder="Type">
                        @error('tema')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <textarea name="deskripsi" id="jenisKarya" id="deskripsi" class="form-control mb-2" rows="8" placeholder="Description">{{ old('deskripsi', $karya->deskripsi) }}</textarea>
                        @error('deskripsi')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn text-secondary btn-secondary text-white" data-bs-toggle="modal" data-bs-target="#detailKarya">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>

            </div>
            </form>
        </div>
    </div>
</div>