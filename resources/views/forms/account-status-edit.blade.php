<style>
    .modal-backdrop {
        opacity: 0.1 !important;
    }

    .modal {
        .modal-dialog {
            .modal-content {
                .header-modal {
                    img {
                        height: 52px;
                    }
                }

                .modal-body {
                    form {

                        textarea,
                        input {
                            background-color: #f2f2f2;
                        }

                        button {
                            background-color: var(--accent);
                            width: 100%;
                        }
                    }
                }
            }
        }
    }


    .input-group {
        margin-bottom: 20px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .input-group input,
    .input-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .submit-btn {
        width: 100%;
        background-color: #a2b8fc;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .input-group select {
        appearance: none;
        background: url('data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns%3D%27http%3A//www.w3.org/2000/svg%27 width%3D%2716%27 height%3D%2716%27 viewBox%3D%270 0 16 16%27%3E%3Cpath fill%3D%27%23333%27 d%3D%27M4 6l4 4 4-4z%27/%3E%3C/svg%3E') no-repeat right 10px center;
        background-size: 10px;
        padding-right: 30px;
        cursor: pointer;
    }
</style>

<!-- Modal Event -->
@foreach ($penggunas as $pengguna)
    <div class="modal fade" id="editAccount-{{ $pengguna->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel-{{ $pengguna->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel-{{ $pengguna->id }}">Edit Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form -->
                    <form action="{{ route('account.update', $pengguna->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <!-- Input status -->
                            <label for="status-{{ $pengguna->id }}">Status</label>
                            <select id="status-{{ $pengguna->id }}" name="status" required>
                                <option value="Aktif" {{ $pengguna->status == 'Aktif' ? 'selected' : '' }}>Aktif
                                </option>
                                <option value="Nonaktif" {{ $pengguna->status == 'Nonaktif' ? 'selected' : '' }}>
                                    Nonaktif</option>
                            </select>
                        </div>

                        <button type="submit" class="submit-btn">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
