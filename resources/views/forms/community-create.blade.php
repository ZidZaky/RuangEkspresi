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
</style>

<!-- Modal Event -->
<div class="modal fade" id="community" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Community</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- form -->
                <form action="" method="post" class="d-flex flex-column gap-3">
                    <input type="text" name="" id="" placeholder="Community name" class="form-control" required>
                    <textarea name="" id="" placeholder="Description" rows="4" class="form-control" required></textarea>
                    <button type="submit" class="btn p-2 d-block text-white">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
